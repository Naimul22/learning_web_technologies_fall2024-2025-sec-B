<?php
session_start();
if(!isset($_SESSION['xyz'])){
    header('location:login.html')

}
?>
<html>
    <head>
        <title>Home</title>
</head>
<body>
    <h1>Welcome!</h1>
</body>
</html>