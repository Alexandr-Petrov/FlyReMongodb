<?php
    session_start();
if (isset($_POST['ChLogin'])) { $login = $_POST['ChLogin']; if ($login == '') { unset($login);} }
    if (isset($_POST['Chpass'])) { $password=$_POST['Chpass']; if ($password =='') { unset($password);} }
if (empty($login) or empty($password))
    {
    exit ("Fullen Sie bitte alles!");
    }
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
    $password = stripslashes($password);
    $password = htmlspecialchars($password);

    $login = trim($login);
    $password = trim($password);

     $db = mysqli_connect ("localhost","root","");
     mysqli_select_db ($db,"project1");
 
    $result = mysqli_query($db,"SELECT * FROM users WHERE login='$login'");
    $myrow = mysqli_fetch_array($result);
    if (empty($myrow['password']))
    {
    exit ("Извините, введённый вами login или пароль неверный.");
    }
    else {

    if ($myrow['password']==$password) {
    $_SESSION['login']=$myrow['login']; 
    $_SESSION['id']=$myrow['id'];
    $_SESSION['name']=$myrow['name'];
   
    header ('Location: page1.php');  
    exit();
    }
 else {
    echo "Es gibt Fehler!";
    }
    }
    ?>