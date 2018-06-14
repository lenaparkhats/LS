<?php
$dsn = "mysql:host=localhost;dbname=LF;charset=utf8";
$pdo = new PDO($dsn, 'root', '');
//$stmt = $pdo ->query('SELECT * FROM user');
//$result = $stmt ->fetchAll(PDO::FETCH_ASSOC);

//print_r($result);
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$street = $_POST['street'];
$home = $_POST['home'];
$part = $_POST['part'];
$appt = $_POST['appt'];
$floor = $_POST['floor'];
$comment = $_POST['comment'];

echo $_POST['name'] . " ". $_POST['phone']. " ". $_POST['email']. " ". $_POST['street']. " ". $_POST['home']. " ". $_POST['part']. " ". $_POST['appt']. " ". $_POST['floor']. " ". $_POST['comment'];

$quer = "INSERT INTO user (Name, email, tel, street, home, part, appt, floor, comment) VALUES ($name, $phone, $email, $street, $home, $part, $appt, $floor, $comment)";

echo $quer;

$stmt = $pdo ->query($quer);
