
pipeline{
    agent none
    stages{
        stage ('Build'){
            agent {label 'nodes'}
            steps{
                echo 'This is the build stage';
                sh 'hostname > hostname.txt' ;
                sh 'uptime >> hostname.txt' ;
                archiveArtifacts 'hostname.txt' ;
            }
        }
        stage ('RUN'){  
            agent {label 'k8s-control'}      
            steps{
                echo 'This is the Run stage';
                sh 'kubectl get nodes' ;
            }
        }
    } 
}
