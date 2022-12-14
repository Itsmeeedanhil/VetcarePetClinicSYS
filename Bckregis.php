<?php

    require_once("connection.php");

    if(isset($_POST['submit']))
    {
        if(empty($_POST['name']) || empty($_POST['username']) || empty($_POST['password']) || empty($_POST['type_of_user']))
        {
            echo "<script>alert('Invalid Password. Please try Again!'); window.location='register.php'</script>";
        }
        else
        {
            $name = $_POST['name'];
            $username = $_POST['username'];
            $type_of_user = $_POST['type_of_user'];
            $password = $_POST['password'];

            $query = " insert into users (name, username, type_of_user, password) values('$name','$username', '$type_of_user', '$password')";
            $result = mysqli_query($con,$query);

            if($result)
            {
                echo "<script>alert('You have Succesfully Created an Account!'); window.location='login.php'</script>";
            }
            else
            {
                echo "<script>alert('An Error occured. Please try Again!'); window.location='login.php'</script>";
            }
        }
    }
    else
    {
        header("location:login.php");
    }



?>