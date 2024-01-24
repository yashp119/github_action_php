pipeline {sdffg
    agent anyyyyyyy
    
    environment {
        BuildName = "version-${BUILD_NUMBER}"
        BucketName = "yashbucketdhhffh"
        BucketKey = "S3-builds-Storage"
        ApplicationName = "practice"
        EnvironmentName = "Practice-env"
        Region = "ap-south-1"
    }

    stages {
        stage('Build') {
            steps {
                script {
                    // Assuming the 'index.php' directory is in the workspace
                    sh "cd yash.php && zip -r ${BuildName}.zip *"
                }
            }
        }

        stage('Upload to S3') {
            steps {
                script {
                    sh "aws s3 cp ${BuildName}.zip s3://${BucketName} --region ${Region}"
                }
            }
        }

        stage('Cleanup') {
            steps {
                script {
                    sh "rm -f ${BuildName}.zip"
                }
            }
        }

        stage('Create Beanstalk Application Version') {
            steps {
                script {
                    sh "aws elasticbeanstalk create-application-version --application-name '${ApplicationName}' --version-label '${BuildName}' --description 'Build created from JENKINS. Job:${JOB_NAME}, BuildId:${BUILD_DISPLAY_NAME}, GitCommit:${GIT_COMMIT}, GitBranch:${GIT_BRANCH}' --source-bundle S3Bucket=${BucketName},S3Key=${BuildName}.zip --region ${Region}"
                }
            }
        }

        stage('Update Beanstalk Environment') {
            steps {
                script {
                    sh "aws elasticbeanstalk update-environment --environment-name '${EnvironmentName}' --version-label '${BuildName}' --region ${Region}"
                }
            }
        }
    }
}
