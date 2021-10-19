<?php 
   $firstName = $_POST["firstName"];
   $lastName = $_POST['lastName'];
   $email = $_POST['email'];
   $phoneNumber = $_POST['phoneNumber'];
   $supervisor = $_POST['supervisor'];

    if(isset($firstName)){
        echo "<script> console.log( '{$firstName}' );</script>";
    }
    if(isset($lastName)){
        echo "<script> console.log('{$lastName}');</script>";
    }
    if(isset($_POST['emailCheck'])){
        if(isset($email)){
            echo "<script> console.log('{$email}');</script>";
        }
    }
   if(isset($_POST['phoneCheck'])){
        if(isset($phoneNumber)){
            echo "<script> console.log( '{$phoneNumber}'); </script>";
        }
   }
    
    if(isset($supervisor)){
        echo "<script> console.log( '{$supervisor}' ); </script>";
    }
    
?>