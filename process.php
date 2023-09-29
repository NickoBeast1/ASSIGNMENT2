<?php
require_once 'databaseClass.php';


if($_SERVER["REQUEST_METHOD"] == "POST"){
    $id = $_POST["id_number"];
    $firstname = $_POST["Fname"];
    $lastname = $_POST["Lname"];
    $email = $_POST["email_address"];
    $phone = $_POST["phone_number"];
    $username = $_POST["username"];
    $create_password = $_POST["create_password"];
    $confirm_password = $_POST["confirm_password"];
    if($create_password !== $confirm_password){
        die("PASSWORDS DON'T MATCH");
    }
    $hashed_password = password_hash($create_password, PASSWORD_DEFAULT);
}


try{
$dbConnect = new databaseConnect();
$pdo = $dbConnect->getConnection();

$stmt = $pdo->prepare("INSERT INTO usertable(id, firstname, lastname, email, phone, username, create_password, confirm_password) VALUES (:id, :firstname, :lastname, :email, :phone, :username, :create_password, :confirm_password)");
$stmt->bindParam(':id', $id);
$stmt->bindParam(':firstname', $firstname);
$stmt->bindParam(':lastname', $lastname);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':phone', $phone);
$stmt->bindParam(':username', $username);
$stmt->bindParam('create_password', $hashed_password);
$stmt->bindParam('confirm_password', $hashed_password);
 
$stmt->execute();

header("Location: viewUsers.php");
exit();
}catch(PDOException $e){
    echo"Try Again Buddy" . $e->getMessage();
}
?>