<?php

// Iniciar sessão
session_start();
// Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-register'])){

  $name = mysqli_escape_string($connect, $_POST['name']);
  $lastname = mysqli_escape_string($connect, $_POST['lastname']);
  $email = mysqli_escape_string($connect, $_POST['email']);
  $age = mysqli_escape_string($connect, $_POST['age']);

  $sql = "INSERT INTO clients (name, lastname, email, age) VALUES ('$name', '$lastname', '$email', '$age')"; 

  if(mysqli_query($connect, $sql)){
    
    $_SESSION['mensagem'] = "Cadastrado com sucesso!";
    header('Location: ../index.php');
  
  }else{

    $_SESSION['mensagem']  = "Erro ao cadastrar";
    header('Location: ../index.php');

  }

}