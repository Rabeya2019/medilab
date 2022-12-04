<?php
// include_once 'connect.blade.php';
// include 'myFunctions.blade.php';

if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $confirmpassword=$_POST['confirmpassword'];
    $phone=$_POST['phone'];

    $pass=password_hash($password,PASSWORD_BCRYPT);
    $confirmPass=password_hash($confirmpassword,PASSWORD_BCRYPT);


    $check_email_query = "SELECT email FROM user WHERE email='$email'";
    $check_email_query_run = mysqli_query($conn,$check_email_query);

    if(mysqli_num_rows($check_email_query_run)>0)
    {
        $_SESSION['message']="Email already registered";
        header('Location: signup.blade.php');
    }
    else

    {

    if($password === $confirmpassword)
    {

    $sql= "insert into user(username,email,password,phone)
    values('$username','$email','$pass','$phone')";

    $sql_run = mysqli_query($conn,$sql);

        if($sql_run){
            $_SESSION['message']="Registered Successfully";
            header('Location: index.blade.php');
        }
        else{
            $_SESSION['message']="Something went wrong!";
            header('Location: index.blade.php');
        }

   }
   else{
    $_SESSION['message']="Password Doesn't Match";
    header('Location:signup.blade.php');

}
}
}

?>
