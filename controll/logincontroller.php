<?php

if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    //$hashpass=  sha1($password);
    try {
        include '../model/login.php';
        $ob = new login($username, $password);
        $arrData = $ob->getData();
        foreach ($arrData as $arr) {
            $name = $arrData['c_name'];
            $password = $arrData['password'];
            if ($name == 'admin'and $password == sha1('admin')) {
                echo 'ahmwsw    deknw';
                session_start();
                $_SESSION['username'] = $username;
                header("location:../views/admin/admin.php");
            } else {

                session_start();
                $_SESSION['username'] = $username;
                header("location:../homepage.php");
            }
        }
    } catch (Exception $ex) {
        echo $ex->getMessage();
    }
}
?> 