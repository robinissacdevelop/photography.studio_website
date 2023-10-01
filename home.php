<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])){
    ?>

<!DOCTYPE html>
<html>

<head>
    <title>reg</title>
    <link rel="stylesheet" type="text/css" href="regist.css">
    </link>
</head>

<body>
   <h1>hello, <?php echo $_SESSION['name']; ?></h1>
   <a class="out" href=" logout.php">SUBMISSION IS SUCCESSFUL CLICK HERE TO GO BACK TO SITE</a>
   
</body>

</html>

<?php
} else{
    header("Location: index.php");
    exit();
}
?>