pipeline {
    agent { docker { image 'composer:latest' } }
    stages {
        stage('Build') { 
            steps {
                echo 'Building..'
                sh 'composer install'
                // composer install
            }
        }
        stage('Test') {
            steps {
                echo 'Testing..'
                // phpunit test
            }
        }
        stage('Deploy') {
            steps {
                echo 'Deploying....'
            }
        }
    }
}