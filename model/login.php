<?php


class login
{
    private $username;
    private $password;
    private $hashpass;
    private $cxn ;   //database object
    public $arrry;
            
            
    
    function __construct($username, $password) {
        //set data
        $this->setData($username, $password);
        
        //connect database
        $this->connectToDb();
        //get data
        
    }
    private function setData($username,$password)
    {
        $this->username=$username;
        $this->password=$password;
        $this->hashpass=  sha1($password);
        
    }
    private function connectToDb ()
    {
        
    include '../model/database.php';
    $vars='include/vars.php';
    $this->cxn=new database(($vars));
    
    }
     function getData()
    {
            $conn=  mysqli_connect('localhost', 'root', '', 'cinemadb');
            $query="SELECT  `c_name`, `password` FROM `customer` WHERE `c_name`='$this->username' AND `password`='$this->hashpass'";
             //"SELECT 'c_email' FROM 'customer' WHERE 'c_name'='$this->username' "  ;
            $sql=mysqli_query($conn,$query);
            $this->arrry=array();
             while ($row = mysqli_fetch_assoc($sql)) {

            $arrry = $row;
        }
        

            if(mysqli_num_rows($sql)>0)
            {
                echo 'nu_row >0';
                print_r($arrry);
                return $arrry;
            } 
            else {
                throw new Exception("user name or passwoed is invalid please try again ");
            }

           }
           function close(){
               $this->cxn->close();
        
    }
    
    
}
?>