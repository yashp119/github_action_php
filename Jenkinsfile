pipeline {

    agent any
 
    environment {

        AWS_REGION = 'us-east-1'

        ELASTIC_BEANSTALK_ENV_NAME = 'Practice-env'

        ELASTIC_BEANSTALK_APP_NAME = 'practice'

        IAM_ROLE_NAME = 'jenkins-practice-role'

    }
 
    stages {

        stage('Checkout') {

            steps {

                script {

                    checkout scm

                }

            }

        }
 
        stage('Deploy to Elastic Beanstalk') {

            steps {

                script {

                    withAWS(region: AWS_REGION, credentials: 'jenkins-practice-role') {

                        sh "eb use $ELASTIC_BEANSTALK_ENV_NAME"

                        sh "eb deploy --verbose"

                    }

                }

            }

        }

    }

}
