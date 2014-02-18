<a href="index.php">go home</a>

<?php
$connect = mysql_connect('localhost', 'root','') or die(mysql_error());
mysql_select_db('local');

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $login = $_POST['login'];
    $password = $_POST['password'];
    $r_password = $_POST['r_password'];
    if($password == $r_password){
        $password = md5($password);
        $query = mysql_query("INSERT INTO users VALUES ('', '$username', '$login', '$password')") or die(mysql_error());
    }
    else{
        die('Password must match!');
    }
}

if(isset($_POST['enter'])) {
    $e_login = $_POST['e_login'];
    $e_password = md5($_POST['e_password']);
    $query = mysql_query("SELECT * FROM users WHERE login = '$e_login'");
    $user_data = mysql_fetch_array($query);

    if($user_data['password'] == $e_password){
        session_start();
        $_SESSION['name'] = $e_login;
    }
    else{
        echo "Wrong login or password";
    }
}

if(isset($_POST['logout'])) {
    unset($_SESSION['name']);
}

?>

<form method="post" action="register.php">
    <input type="text" name="username" placeholder="username" required><br>
    <input type="text" name="login" placeholder="login" required><br>
    <input type="password" name="password" placeholder="password" required><br>
    <input type="password" name="r_password" placeholder="password" required><br>
    <input type="submit" name="submit" value="Register"><br>
</form>

<?php
if(isset($_SESSION['name'])){
    echo "U're already logged in, ".$_SESSION['name'];
}
else{
    echo '
        <form method="post" action="register.php">
            <input type="text" name="e_login" placeholder="login" required><br>
            <input type="password" name="e_password" placeholder="password" required><br>
            <input type="submit" name="enter" value="login">
        </form>
    ';
}
?>

<a href="test.php">test.php</a><br><br>

<form action="register.php" method="post">
    <input type="submit" name="logout" value="logout"/>
</form>