pipeline{
    agent any
    stages{
        stage ('Build'){
            steps{
                echo 'This is the build stage';
                ssh 'hostname > hostname.txt' ;
                archiveArtifact 'hostname.txt' ;
            }
        }
    } 



}
