pipeline {
        agent any
        environment{
                scannerHome = tool 'SonarScanner';
        }
        stages {
          
          stage("Quality Gate") {
            steps {
              timeout(time: 1, unit: 'HOURS') {
                waitForQualityGate abortPipeline: true
              }
            }
          }
        }
      }
      
