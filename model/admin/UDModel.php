<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UDModel
 *
 * @author Ahmed Khalil
 */
class UDModel {

    //put your code here
    function __construct() {
        //select datat after connect
    }

    function selectData() {
        //connect to database 
        $conn = mysqli_connect('localhost', 'root', '', 'cinemadb');
        $query = "SELECT * FROM `employee`";
        $sql = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($sql)) {

            $arry[] = $row;
        }
        return $arry;
    }

}
class editCustomer 
{
  //put your code here
    function __construct() {
        //select datat after connect
    }

    function selectData() {
        //connect to database 
        $conn = mysqli_connect('localhost', 'root', '', 'cinemadb');
        $query = "SELECT * FROM `customer`";
        $sql = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($sql)) {

            $arry[] = $row;
        }
        return $arry;
    }   
}

?>