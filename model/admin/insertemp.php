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
class insertemop {
    //put your code here
   // `customer_id`, `c_name`, `password`, `c_email`, `c_address`, `c_phone`
    private $name;
    private $password;
    private $email;
    private $address;
    private $phone;
    private $hashpass;
    private $cxn;   
    private $conn;
            
    
    function __construct($data) 
    
    {
       if (is_array($data))
       {
           //set data in this variable
           $this->setData($data);
           //insert data to datbase after connect
           $this->RegisterEmp($data);
           
       }
    else
        {
           throw new Exception("Error DAta not be in array");
         }

       
    }
    private function setData ($data)
            
    {
        $this->name=$data['name'];
        echo "  ". $this->name;
        $this->email=$data['email'];
        echo "  ". $this->email ;
        $this->password=$data['password'];
        $this->phone=$data['phone'];
        echo "  ". $this->phone;
        $this->hashpass=  sha1($data['password']);
        echo "  ". $this->hashpass;
        $this->address=$data['address'];
        
        
    }
     private function connectToDb ()
    {

         $this->conn=  mysqli_connect('localhost', 'root', '', 'cinemadb');

   // include 'model/database.php';
    //$vars='include/vars.php';
    //$this->cxn=new database(($vars));
    
    }
    
    function RegisterEmp($data)
    {
        
       // `customer_id`, `c_name`, `password`, `c_email`, `c_address`, `c_phone`
        $conn=  mysqli_connect('localhost', 'root', '', 'cinemadb');
        if($conn)            echo 'sdss';
        //$qurey="INSRT INTO customer ( c_name, password, c_email, c_address, c_phone) VALUES ('$this->name','$this->password','$this->email','$this->address','$this->phone') ";
//        $query="INSERT INTO `employee`( `e_name`, `password`, `e_email`, `e_address`, `e_phone`) VALUES ('$this->name','$this->hashpass','$this->email','$this->address',$this->phone)";          
        $query="INSERT INTO `employee` (`e_name`, `password`, `e_email`, `e_address`, `e_phone`) VALUES ('$this->name','$this->hashpass','$this->email','$this->address',$this->phone)";
        $sql = mysqli_query($conn, $query);
         if ($sql)
         {
             echo 'registered successfully';
             
         }
        else
            {
            
             throw new Exception("not regisre");
            }
    }
    function close()
    {
        $this->cxn->close;
    }
}
?>