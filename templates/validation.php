<?php
session_start ();
//if (isset ($_SESSION['user '])!="")
//{
//header("location:#");
//}
//if (isset($_POST['btn-signup'])) 
//{

$username=mysql_real_escape_string($_POST['Username']);
$password=mysql_real_escape_string($_POST['Password']);
$email=mysql_real_escape_string($_POST['E-mail']);
$address=mysql_real_escape_string($_POST['Address']);
$confirm=mysql_real_escape_string($_POST['ConfirmPassword']);
$contact=mysql_real_escape_string($_POST['Contact']);

$emailErr=$usernameErr=$passwordErr=$confirmErr=$addressErr=$confirmErr="";

                             if(empty($_POST["E-mail"])){
                             emailErr="email is required";
                             }else{
                             if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
                             $emailErr="invalid email format";
                             }
                             }

                             if(empty($_POST["Username"]))
                             {
                             $usernameErr="Name is required";
                             }elseif(!preg_match("/^[a-zA-Z]*$/@#%\", $username)){
                             $usernameErr="only letters and white spaces allowed ";
                             }
                             

                            if (empty($_POST["Password"])){
                            $passwordErr="password field empty"
                            }


                            if (empty($_POST["ConfirmPassword"])){
                            $confirmErr="field empty"
                            }else if($password!=$confirm)
                            {
                            $confirmErr="password doesnt match";
                            }
                            


                            if (empty($_POST["Address"])){
                            $addressErr="address required "
                            }


                            if (empty($_POST["Contact"])){
                            $contactErr="contact field empty"
                            }else{
                            if(!preg_match("/^[a-zA-Z]*$/@", $contact)){
                            $contactErr="only letters allowed ";
                            }
                            }

//}