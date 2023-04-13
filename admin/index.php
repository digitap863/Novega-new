
<?php
session_start();
include("connection.php");
include ("function.php");
$check=check_Login();
 if(!empty($check)){
    header("Location:admin-home.php");
 }
$error=null;
if($_SERVER['REQUEST_METHOD']=="POST"){
    $name=$_POST['name'];
    $password=$_POST['password'];
    if(!empty($name)&&!empty($password)){
        if($admin_name==$name&&$admin_password==$password){
           $_SESSION['admin']=$password;
           header("Location:admin-home.php");
        }else{
           $error=true;
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css" />
    <title> Admin-Login</title>
</head>

<body>
    <div class="containter">
        <div class="box-1">
            <h2>
                Admin Login
            </h2>
            <form method="post">
                <div class="input-group">
                    <input type="text" name="name" required />
                    <label for="name">Name</label>
                </div>
                <div class="input-group">
                    <input type="password" name="password" required />
                    <label for="password">Passowrd</label>
                </div>
                <?php
                if($error){
                    echo "<p class='danger'>Invalid Credentials</p>";
                }
                ?>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>

