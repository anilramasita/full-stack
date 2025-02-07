<?php
// includes/db.php

$host = 'sql12.freesqldatabase.com';
$db = 'sql12761570';
$user = 'sql12761570';
$password = '43EAQTB7xX';

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
