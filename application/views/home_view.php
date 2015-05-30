<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Home</title>

    <?php include("imports.php"); ?>

</head>

<body>
<?php
if ($role == "ADMIN") {
    include("nav_admin.php");
}else{
    include("nav_employee.php");
}
?>


<div class="jumbotron">
    <div class="container">
        <h1>Hello, <?php echo $username; ?>!</h1>
        <p>Welcome to your dashboard.</p>
    </div>
</div>

</body>

</html>


