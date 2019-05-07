
<?php

if (isset($_POST['insertemp'])and $_POST['insertemp']=='insertemp' )
{
       $data['name']=$_POST['name'];
       $data['email']=$_POST['email'];
        $data['password']=$_POST['password'];
        $data['address']=$_POST['address'];
        $data['phone']=$_POST['phone'];
        print_r($data);
       
        try {
            include '../../model/admin/insertemp.php';
            new insertemop ($data);
            header("location:../../views/admin/admin.php");          

        } catch (Exception $exc) {
            echo $exc->getMessage();
        }

        

    
    
}
 else {
    
    echo 'lkre';}
    







?>
