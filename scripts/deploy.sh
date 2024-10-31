#!/bin/bash

# Load environment variables from .env file
if [ -f .env ]; then
  export $(cat .env | grep -v '#' | awk '/=/ {print $1}')
else
  echo ".env file not found. Please create one with the necessary environment variables."
  exit 1
fi

# Build and start the Docker containers
echo "Building and starting Docker containers..."
docker-compose down
docker-compose up -d --build

# Check the status of the containers
echo "Checking the status of the containers..."
docker-compose ps

# Provide feedback to the user
if [ $? -eq 0 ]; then
  echo "Deployment successful! Your WordPress site should be accessible at http://localhost:8080"
else
  echo "Deployment failed. Please check the Docker logs for more information."
  exit 1
fi