<?php
$submitted =  1;
if(isset($_POST['password']) && isset($_POST['username'])) {

    $password = $_POST['password'];
    $username = $_POST['username'];
    if($password == "pass" && $username == "host"){
        $submitted = 2;
    }else{
        $submitted = 3;
    }
}
?>

<!DOCTYPE>
<html lang="en">
<head>
    <title>User Authentication</title>
</head>
<body>
<h1>Weak Password</h1>
<form method="post">
    <label for="username">Username</label>
    <input type="text" id="username" name="username">
    <label for="password">Password</label>
    <input id="password" type="password" name="password">
    <br/>
    <input type="submit">
</form>

<?php if ($submitted == 2): ?>
    <div>Welcome <?php echo($_POST['username'])?> to Your Portal</div>
<?php endif; ?>
<?php if ($submitted == 3): ?>
    <div>Error you did not put in the right input</div>
<?php endif; ?>
</body>
</html>





