#!/bin/bash

# Charger les variables d'environnement à partir du fichier .env
if [ -f .env ]; then
    export $(cat .env | grep -v '#' | awk '/=/ {print $1}')
else
    echo "Fichier .env introuvable. Veuillez en créer un avec les variables d'environnement nécessaires."
    exit 1
fi

# Attendre que le conteneur MySQL soit prêt
echo "En attente de la disponibilité de MySQL..."
until docker-compose exec mysql mysqladmin ping -h "mysql" --silent; do
    echo -n "."; sleep 1
done
echo "MySQL est prêt !"

# Initialiser la base de données
echo "Initialisation de la base de données..."
docker-compose exec mysql mysql -u root -p${MYSQL_ROOT_PASSWORD} <<-EOSQL
    CREATE DATABASE IF NOT EXISTS ${WORDPRESS_DB_NAME};
    CREATE USER IF NOT EXISTS '${WORDPRESS_DB_USER}'@'%' IDENTIFIED BY '${WORDPRESS_DB_PASSWORD}';
    GRANT ALL PRIVILEGES ON ${WORDPRESS_DB_NAME}.* TO '${WORDPRESS_DB_USER}'@'%';
    FLUSH PRIVILEGES;
EOSQL

# Fournir un retour à l'utilisateur
if [ $? -eq 0 ]; then
    echo "Initialisation de la base de données réussie !"
else
    echo "Échec de l'initialisation de la base de données. Veuillez vérifier les journaux Docker pour plus d'informations."
    exit 1
fi