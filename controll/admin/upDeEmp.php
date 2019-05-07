<?php

    

  //$hashpass=  sha1($password);
   
       include '../../model/admin/UDModel.php';
       
      $row= new UDModel();
      //`employee_id`, `e_name`, `password`, `e_email`, `e_address`, `e_phone`, `account_permission`
      $arrData=$row->selectData();
      
      
    
      
      
     
      
   

?> 