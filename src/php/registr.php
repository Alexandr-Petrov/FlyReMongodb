<?php
session_start();
    if (isset($_POST['InpName'])) { $name = $_POST['InpName']; if ($name == '') { unset($name);} }
    if (isset($_POST['InpEmail'])) { $email = $_POST['InpEmail']; if ($email == '') { unset($email);} }
    if (isset($_POST['InpLogin'])) { $login = $_POST['InpLogin']; if ($login == '') { unset($login);} } 
    if (isset($_POST['InpPass'])) { $password=$_POST['InpPass']; if ($password =='') { unset($password);} }
  
 if (empty($login) or empty($password) or empty($email) or empty ($name))
    {
    exit ("Schreiben Sie bitte alle Datei!");
    }
  
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
    $password = stripslashes($password);
    $password = htmlspecialchars($password);
    $email = stripslashes($email);
    $email = htmlspecialchars($email);
    $name = stripslashes($name);
    $name = htmlspecialchars($name);

    $login = trim($login);
    $password = trim($password);
    $email = trim($email);
    $name = trim($name);

    
    $db = mysqli_connect ("localhost","root","");
    mysqli_select_db ($db,"project1");

    $result = mysqli_query($db,"SELECT id FROM users WHERE login='$login'");
    $myrow = mysqli_fetch_array($result);

    if (!empty($myrow['id'])) {
    exit ("Shreiben Sie bitte einen anderen Login");
    }

    $result2 = mysqli_query ($db,"INSERT INTO users (name,email,login,password) VALUES('$name','$email','$login','$password')");
    $check=mysqli_query($db,"SELECT * FROM users WHERE login='$login'");
    $myrow2=mysqli_fetch_array($check);
        $_SESSION['login']=$myrow2['login']; 
        $_SESSION['id']=$myrow2['id'];
        $_SESSION['name']=$myrow2['name'];
    header ('Location: page1.php');
    exit();

    ?>
