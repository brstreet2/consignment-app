pipeline {
    agent any

    stages {
        stage('Checkout') {
            steps {
                // Checkout the code from the Git repository
                git branch: 'main', url: 'https://github.com/brstreet2/consignment-app.git'
            }
        }
        stage('Install Dependencies') {
            steps {
                // Run composer install to install PHP dependencies
                sh 'composer install --no-interaction --no-progress'
            }
        }
        stage('Restart Docker Containers') {
            steps {
                // Restart Docker containers
                sh 'docker-compose down'
                sh 'docker-compose up -d --build'
            }
        }
    }

    post {
        success {
            echo 'Deployment successful!'
        }
        failure {
            echo 'Deployment failed!'
        }
    }
}
