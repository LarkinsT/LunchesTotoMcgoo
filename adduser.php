<?php
print_r($_POST);
include_once("connection.php");
$stmt = $conn->prepare("INSERT INTO TBLusers
(Forename, Surname, House, Year, Balance, Password, Role, Username)
VALUES
(NULL, :Forename, :Surname, :House, :Balance, :Password, :Role, :Username)");
$stmt->bindParam(':Forename', $_POST['forename'])
$stmt->bindParam(':Forename', $_POST['forename'])
$stmt->bindParam(':Forename', $_POST['forename'])
$stmt->bindParam(':Forename', $_POST['forename'])
$stmt->bindParam(':Forename', $_POST['forename'])
$stmt->bindParam(':Password', $_POST['password'])
?>
