pipeline{
    agent any 
  
    stages
    {
        stage("build a docker image"){
        steps{
            docker build -t mohamedfadhel404/dockerimage:1.0
            docker login 
            docker push mohamedfadhel404/dockerimage:1.0
            
        }
        }
      

        
    }
}

