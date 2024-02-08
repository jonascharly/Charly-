<?php

$servername="localhost";
$username="root";
$password="";
$dbname="data";
$name = $_POST["name"];
$sujet = $_POST["sujet"];
$email = $_POST["email"];
$message = $_POST["message"];
$ville = $_POST["ville"];
$téléphone = $_POST["téléphone"];
// creer une connexion
$conn=new mysqli("$servername","$username","$password","$dbname");
// verifier la connexion
if($conn->connect_error){
    die( 'erreur'  ('.$conn->connect_error') .mysqli_connect_error());
}

$sql = "INSERT INTO base (name, sujet, email, message,téléphone,ville) value ('$name','$sujet','$email','$message','$téléphone','$ville')";
$query = mysqli_query($conn,$sql);
// verifie qu'il provient d'un formulaire
    $name = filter_input(INPUT_POST,'name');
    $sujet= filter_input(INPUT_POST,'sujet');
    $email= filter_input(INPUT_POST,'email');
    $message= filter_input(INPUT_POST,'message');
    $ville= filter_input(INPUT_POST,'ville');
    $téléphone= filter_input(INPUT_POST,'téléphone');

?>
