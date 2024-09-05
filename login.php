<?php

    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit']))
    {
        $conn = mysqli_connect('localhost','root','','it') or die("Connection Failed");

        if(isset($_POST['name']) && isset($_POST['pspd']))
        {
            $name = $_POST['name'];
            $pspd = $_POST['pspd'];

            $sql = "INSERT INTO `login` (`name`, `pspd`)  VALUES ('$name','$pspd')";

          

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