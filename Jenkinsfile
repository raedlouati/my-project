
pipeline{
    agent any
    stages{
        stage ('Build'){
            steps{
                echo 'This is the build stage';
                sh 'hostname > hostname.txt' ;
                archiveArtifacts 'hostname.txt' ;
            }
        }
    } 
}