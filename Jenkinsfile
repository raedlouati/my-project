pipeline{
    agent any
    stages{
        stage ('Build'){
            echo 'This is the build stage';
            ssh 'hostname > hostname.txt' ;
            archiveArtifact 'hostname.txt' ;
        }
    } 



}
