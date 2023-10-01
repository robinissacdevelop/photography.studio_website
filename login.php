<?php
session_start();
include "db_conn.php";
if(isset($_POST['unname']) && isset($_POST['password'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        return $data;
    }
    $unname= validate($_POST['unname']);
    $pass= validate($_POST['password']);

    if (empty($unname)){
        header("Location: index.php?error=User Name is required");
        exit();
    }else if (empty($pass)){
        header("Location: index.php?error=password is required");
        exit();
    }else{
        $sql = "SELECT * FROM users WHERE user_name='$unname' AND password='$pass'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            if($row['user_name'] == $unname && $row['password'] === $pass){
             $_SESSION['user_name'] = $row['user_name'];
             $_SESSION['name'] = $row['name'];
             $_SESSION['id'] = $row['id'];
             $_SESSION['email'] = $row['email'];
             $_SESSION['function'] = $row['function'];
             header("Location: home.php");
             exit();
            }else{
                header("Location: index.php?error= incorect user name or password");
                exit();
            }
        }else{
            header("Location: index.php?error= incorect user name or password");
            exit();
        }
    }

}else{
    header("Location: index.php?error");
    exit();
}
?>