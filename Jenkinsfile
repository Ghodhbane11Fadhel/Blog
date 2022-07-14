
      
pipeline {
    agent any
  environment{
  scannerHome = tool 'SonarScanner'
  }
    stages {
        
        stage('build && SonarQube analysis') {
            steps {
                 withSonarQubeEnv() {
      sh "${scannerHome}/bin/sonar-scanner"
    }
            }
        }
        
    }
}
