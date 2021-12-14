pipeline {
    agent any

    stages {
        stage('Build') { 
            steps {
                echo 'Building..'
                echo "sh 'php --version'"
                echo "sh 'composer install'"
                echo "sh 'composer --version'"
                echo "git branch: 'dev', credentialsId: '', url: 'https://github.com/edsola/app.git'"
            }
        }
        stage('PHPUnit Test') {
            steps {
                echo 'Testing..'
                echo "sh './vendor/bin/phpunit tests'"
            }
        }
        stage('Delivery') {
            steps {
                echo 'Delivering....'
                echo "sh 'git commit -am 'Deploy master branch''"
                echo "sh 'git push origin master'"
                echo "sh 'docker login -u edsola'"
                echo "sh 'docker build -t edsola/php:\${GIT_COMMIT[0..7]} .'"
                echo "sh 'docker push edsola/php:\${GIT_COMMIT[0..7]} .'"
            }
        }
        stage('Deploy to K8s') {
            steps {
                echo 'Deploying....'
                echo "sh 'kubectl apply -f deployment.yml'"
            }
        }
    }
}
