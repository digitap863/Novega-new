<?php
session_start();
include("connection.php");
include("function.php");
$user_data=check_login(); 
if(!$user_data){
header("Location:index.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/admin-home.css"/>
    <title>Novega-Admin-page</title>
 
</head>
<header role="banner">
    <h1>Novega Admin Panel</h1>
    <ul class="utilities">
      <br>
    
      <li class="logout warn"><a href="logout.php">Log Out</a></li>
    </ul>
  </header>

  
  <nav role='navigation'>
    <ul class="main">
      <li class="dashboard"><a href="admin-home.php">Dashboard</a></li>
      <li class="edit"><a href="services.php">Services</a></li>
      <li class="write"><a href="projects.php">Project</a></li>
    </ul>
  </nav>
  
  <main role="main">
    
    <section class="panel important">
      <h2>Admin Dashboard</h2>
    </section>
    
    <!-- <section class="panel important">
      <h2>Write a post</h2>
        <form action="" method="post">
          <div class="twothirds">
            Blog title:<br/>
            <input type="text" name="title" size="40"/><br/><br/>
            Content:<br/>    
            <textarea name="newstext" rows="15" cols="67"></textarea><br/>  
          </div>
          <div>
            <input type="submit" name="submit" value="Save" />
          </div>
          </div>
        </form>
    </section> -->
  
  </main>
  
</html>