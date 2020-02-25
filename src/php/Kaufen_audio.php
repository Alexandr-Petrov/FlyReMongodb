<?php
    if (isset($_POST['BuchID'])) { $id = $_POST['BuchID']; if ($id == '') { unset($id);} }
    if (isset($_POST['MengeBuch'])) { $menge = $_POST['MengeBuch']; if ($menge == '') { unset($menge);} }
 if (empty($id) or empty($menge))
    {
    exit ("Schreiben Sie bitte alle Datei!");
    }

    $id = stripslashes($id);
    $id = htmlspecialchars($id);
    $menge = stripslashes($menge);
    $menge = htmlspecialchars($menge);
    

    $id = trim($id);
    $menge = trim($menge);
    
    $db = mysqli_connect ("localhost","root","");
    mysqli_select_db ($db,"project1");
    $result=mysqli_query ($db,"SELECT name,price FROM audiobooks WHERE id=$id");
    $myrow = mysqli_fetch_array($result);
    $name=$myrow['name'];
    $price=$myrow['price'];
    session_start();
    $userID=$_SESSION['id'];
    mysqli_query ($db,"INSERT INTO purchase (id,quantity,name,price,id_user) VALUES('$id','$menge',' $name','$price','$userID')");
    
   
    mysqli_close($db);
echo 'Ihrer Auftrag wurde geschikt';
header("refresh: 2; url=page1.php");
    ?>
