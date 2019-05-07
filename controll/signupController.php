<?php

if (isset($_POST['submit'])and $_POST['submit']=='signup' )
{
       $data['name']=$_POST['name'];
       $data['email']=$_POST['email'];
        $data['password']=$_POST['password'];
        $data['psw-repeat']=$_POST['psw-repeat'];
        $data['address']=$_POST['address'];
        $data['phone']=$_POST['phone'];
        print_r($data);
        if($data['password']!=$data['psw-repeat'])
        {
          //echo "<script type='text/javascript'>alert('yourpasswords must be the same');</script>";

            header("location:signup.php");          

        }
        try {
            include '../model/signup.php';
            new signup($data);
            header("location:../views/login.php");  
            

        } catch (Exception $exc) {
            echo $exc->getMessage();
        }

        

    
    
}
    







?>