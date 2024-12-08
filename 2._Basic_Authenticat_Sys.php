<?php

// My Basic Authentication System

define ("USERNAME", "admin");
define ("PASSWORD", "12345");

echo "Please Enter your User name: ";
$username = readline();
echo "And Your Password: ";
$password = readline();

if ($username===USERNAME && $password === PASSWORD){
    echo "You are Successfully Logged In";
}else{
    echo "Invalid Username or Password";
}