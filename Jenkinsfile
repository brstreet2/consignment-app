pipeline {
    agent any

    stages {
        stage('Install Dependencies') {
            steps {
                // Run composer install to install PHP dependencies
                sh 'composer install --no-interaction --no-progress'
            }
        }
        stage('Restart Docker Containers') {
            steps {
                // Restart Docker containers
                script {
                    def composeFilePath = '/var/www/raghil-consignment/docker-compose.yml'
                    sh "docker-compose -f ${composeFilePath} down"
                    sh "docker-compose -f ${composeFilePath} up -d --build"
                }
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
