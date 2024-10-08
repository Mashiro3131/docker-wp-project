# Projet Docker WordPress

## Introduction
Ce projet a pour objectif de mettre en place un environnement automatisé de développement et de production pour une application web simple, en utilisant Docker et des pratiques d'Infrastructure as Code (IaC).

Pour ce faire, les étudiants doivent créer un environnement Docker
composé de trois services :

1. L’application Wordpress
2. Une base de données MySQL
3. Un serveur web Nginx comme reverse proxy


## Objectifs du projet
Configurer une plateforme d'exécution containerisée
Automatiser le déploiement de l'infrastructure et des services
Installer et configurer les services requis de manière sécurisée
Mettre en production l'application web et sa base de données


## Étapes du projet
1. Configuration de l'environnement Docker
Créer un fichier `docker-compose.yml` pour définir les services
Utiliser des images officielles pour Wordpress, MySQL et Nginx
Créer un Dockerfile personnalisé pour l'application web

2. Automatisation avec Infrastructure as Code
Écrire un script Bash pour automatiser le déploiement
Utiliser Docker Compose pour orchestrer les conteneurs
Implémenter des variables d'environnement pour la configuration

3. Configuration sécurisée des services
Configurer Nginx comme reverse proxy avec HTTPS
Mettre en place des règles de sécurité pour la base de données
Implémenter des bonnes pratiques de sécurité Docker


## Structure du projet

```sh
C:.
│   .env
│   .gitignore
│   docker-compose.prod.yml
│   docker-compose.yml
│   README.md
│
├───app
│   └───wordpress
│       └───wp-content
│           ├───plugins
│           └───themes
├───config
│   ├───mysql
│   │       my.cnf
│   │
│   └───wordpress
│           wp-config.php
│
├───docker
│   ├───mysql
│   │       Dockerfile.mysql
│   │
│   ├───ngnix
│   │       Dockerfile.ngnix
│   │
│   └───wordpress
│           Dockerfile.wordpress
│
├───docs
│       infrastructure-diagram.png
│
├───grapfana
│   ├───dashboards
│   │       wordpress-dashboard.json
│   │
│   └───datasources
│           prometheus.yml
│
├───prometheus
│       prometheus.yml
│
└───scripts
        deploy.sh
        init-db.sh
```

### Dossiers

