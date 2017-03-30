<?php
  require "database_connection.php";

  $firstname = trim($_REQUEST['firstname']);
  $lastname = trim($_REQUEST['lastname']);
  $email = trim($_REQUEST['email']);
  $password = trim($_REQUEST['password']);
  $phone = trim($_REQUEST['phone']);

  $insert_sql = "INSERT INTO users (user_firstname, user_lastname, user_email, user_password, user_phone) " . "VALUES ('{$firstname}', '{$lastname}', '{$email}', '{$password}', '{$phone}')";

  $mysqli->query($insert_sql);
