<?php

    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit']))
    {
        $conn = mysqli_connect('localhost','root','','it') or die("Connection Failed");

        if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['pspd']) && isset($_POST['conpspd']))
        {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $pspd = $_POST['pspd'];
            $conpspd = $_POST['conpspd'];

            $sql = "INSERT INTO `signin` (`name`, `email`, `pspd`, `conpspd`)  VALUES ('$name','$email','$pspd','$conpspd')";

          

            if(mysqli_query($conn,$sql))
            {
                echo "Entry Successfull";
            }
            else
            {
                echo "Error Occured";
            }

        }
    }



?>