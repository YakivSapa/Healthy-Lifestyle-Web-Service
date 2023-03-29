<?php
session_start();

include "db_connection.php";
if (isset($_POST['submit'])) {
    echo $_POST['email'];
    if (!$_POST['email'] OR !$_POST['hasło']){
        echo "You have to enter your email and password";
    } else {
    
        $email = mysqli_real_escape_string($connection, $_POST['email']);
        $hasło = mysqli_real_escape_string($connection, $_POST['hasło']);
        $hasło = password_hash($hasło, PASSWORD_DEFAULT);
        $nazwa = mysqli_real_escape_string($connection, $_POST['nazwa']);

        $select_query = "SELECT * FROM użytkownicy WHERE email = '$email';";
        $select_query_result = mysqli_query($connection, $select_query);
    
    if(mysqli_num_rows($select_query_result) > 0){
        echo "This email already exists, please enter another email";
    } else {
        $query = "INSERT INTO użytkownicy (użytkownik_id, kalorie_id, nazwa, email, hasło) VALUES (null, 0, '$nazwa', '$email', '$hasło');";
        $query_result = mysqli_query($connection, $query);
  
        if(!$query_result){
          die("Query failed ".mysqli_error());
        } else {
            
          $_SESSION['email'] = $email;
          header("Location: registration-success.php");
            echo "You are signed up.";
            }
        }
    }
}
?>
