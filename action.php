<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $b = "<br/>";

    $data = array("username" =>"Asahel","email"=>"kk@gmail.com","password"=>"12345");

    if($username == $data["username"]) 
    {
        if($email == $data["email"])
        {
            if($password == $data["password"])
            {
                echo "Login success", $b;

                foreach ($data as $key => $value)
                {
                    echo $key = $value, $b; 
                }
            }
            else
            {
                echo "PLease Confirm your password";
            } 
        }         
    }
    else{
        echo "Validation error";
    }   
}
