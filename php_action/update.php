<?php

// Iniciar sessão
session_start();
// Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-edit'])){

  $name = mysqli_escape_string($connect, $_POST['name']);
  $lastname = mysqli_escape_string($connect, $_POST['lastname']);
  $email = mysqli_escape_string($connect, $_POST['email']);
  $age = mysqli_escape_string($connect, $_POST['age']);
  $id = mysqli_escape_string($connect, $_POST['id']);

  $sql = "UPDATE clients SET name = '$name', lastname = '$lastname', email = '$email', age = '$age' WHERE id = '$id'"; 

  if(mysqli_query($connect, $sql)){
    
    $_SESSION['mensagem'] = "Atualizado com sucesso!";
    header('Location: ../index.php');
  
  }else{

    $_SESSION['mensagem']  = "Erro ao atualizar";
    header('Location: ../index.php');

  }

}