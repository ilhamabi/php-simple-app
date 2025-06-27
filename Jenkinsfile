pipeline {
    agent any

    stages {
        stage('Clone Repo') {
            steps {
                git 'https://github.com/ilhamabi/php-simple-app.git'
            }
        }

        stage('Install Dependencies') {
            steps {
                sh 'apt-get update && apt-get install -y unzip git php-xml php-curl php-mbstring'
                sh 'curl -sS https://getcomposer.org/installer | php'
                sh 'mv composer.phar /usr/local/bin/composer'
                sh 'composer install'
            }
        }

        stage('Run Unit Tests') {
            steps {
                sh './vendor/bin/phpunit tests'
            }
        }

        stage('Build & Deploy Docker Image') {
            steps {
                sh 'docker build -t php-simple-app .'
                sh 'docker run -d -p 8080:80 php-simple-app'
            }
        }
    }
}

