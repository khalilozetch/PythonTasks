<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of signup
 *
 * @author Ahmed Khalil
 */
class signup {
    //put your code here
   // `customer_id`, `c_name`, `password`, `c_email`, `c_address`, `c_phone`
    private $name;
    private $password;
    private $re_password;
    private $email;
    private $address;
    private $phone;
    private $hashpass;
    private $cxn;   
    
    
    function __construct($data) 
    
    {
       if (is_array($data))
       {
           //set data in this variable
           $this->setData($data);
           //insert data to datbase after connect
           $this->RegisterUser($data);
           
       }
    else
        {
           throw new Exception("Error DAta not be in array");
         }

       
    }
    private function setData ($data)
            
    {
        $this->name=$data['name'];
        $this->email=$data['email'];
        $this->password=$data['password'];
        $this->phone=$data['phone'];
        $this->hashpass=  sha1($data['password']);
        
        $this->address=$data['address'];
        
        
    }
     private function connectToDb ()
    {
        
    include 'model/database.php';
    $vars='include/vars.php';
    $this->cxn=new database(($vars));
    
    }
    
    function RegisterUser($data)
    {
        
       // `customer_id`, `c_name`, `password`, `c_email`, `c_address`, `c_phone`
        $conn=  mysqli_connect('localhost', 'root', '', 'cinemadb');
        if($conn)
        //$qurey="INSRT INTO customer ( c_name, password, c_email, c_address, c_phone) VALUES ('$this->name','$this->password','$this->email','$this->address','$this->phone') ";
        $query="INSERT INTO `customer`( `c_name`, `password`, `c_email`, `c_address`, `c_phone`) VALUES ('$this->name','$this->hashpass','$this->email','$this->address',$this->phone)";           $sql =  mysqli_query($conn, $query)  ;
         if ($sql)
         {
             echo 'registered successfully';
             
         }
        else
            {
            
             throw new Exception("not register");
            }
    }
    function close()
    {
        $this->cxn->close;
    }
}
?>