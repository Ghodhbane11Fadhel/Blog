pipeline {
  agent any 
   
    stages
  {
  stage('SonarQube Analysis') {
    steps{
    def scannerHome = tool 'SonarScanner';
    withSonarQubeEnv() {
      sh "${scannerHome}/bin/sonar-scanner"
    }}
  }
  }
}
