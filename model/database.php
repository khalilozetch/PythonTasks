<?php

class database
{
 private $host ;
 private $user ;
 private $password ;
 private $database ;
    function __construct($filename)
    {
        if (is_file($filename)) include $filename ;
       // else throw new Exception('Errorjjj');

         //$this->host=$host;
         //$this->user=$user;
         //$this->password=$password;
         //$this->database=$database;
         //
         //this->connect();
            
            

    }
    private function connect()
    {
        //connect to the server 
        $connect=mysqli_connect($this->host,$this->user,$this->password,$this->database);
       if(!$connect){
          throw new Exception('Error');
       }
       echo 'sdlmsdlsdl';
    
       
        
    }
    function close(){
        mysqli_close();
    }



    
}

?>