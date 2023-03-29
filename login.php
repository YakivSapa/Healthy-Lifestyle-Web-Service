<?php
include "db_connection.php";

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $hasło = mysqli_real_escape_string($connection, $_POST['hasło']);

    $select_query = "SELECT * FROM użytkownicy WHERE email = '$email';";
    $select_query_result = mysqli_query($connection, $select_query);
    $user_data = mysqli_fetch_assoc($select_query_result);
    
            if (password_verify($hasło, $user_data['hasło'])) {
                $id = $user_data['użytkownik_id'];
                $nazwa = $user_data['nazwa'];
                session_start();
                $_SESSION['id'] = 'nazwa';
                setcookie("user_id", $id, time() + (86400 * 30), "/");
                setcookie("user_name", $nazwa, time() + (86400 * 30), "/");
                header("Location:account-page.php");
                return;
            } else {
                echo "<script type='text/javascript'>alert('Wrong password.');</script>";
                // return;
            }
    }
?>