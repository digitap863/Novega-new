<?php
session_start();
include("connection.php");
include("function.php");
$user_data=check_login();
if(!$user_data){
header("Location:index.php");
}
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_FILES['Image'])){
  $image_name=$_FILES['Image']['name'];
  $image_size=$_FILES['Image']['size'];
  $temp_name=$_FILES['Image']['tmp_name'];
  $error=$_FILES['Image']['error'];
  if($error===0){
    if($image_size>5000000){
      $em="sorry your file is too large";
      header("Location:clients.php?error:$em");
    }else{
      $image_exc=pathinfo($image_name,PATHINFO_EXTENSION);
      $image_exc_lc=strtolower($image_exc);
      $allowed_exc=array("jpg","jpeg","png","webp");
      if(in_array($image_exc_lc,$allowed_exc)){
        $new_img_name=uniqid("IMG-",true).'.'.$image_exc_lc;
        $img_upload_path='clients/'.$new_img_name;
        move_uploaded_file($temp_name,$img_upload_path);
        $query="insert into clients (Image) values('$img_upload_path')";
        mysqli_query($connect,$query);
        header("Location:clients.php");
      }else{
        $em="you can't upload files of this type";
        header("Location:clients.php?error:$em");
      }
    }
  }else{
    $em="Unknown Error Occurred";
    header("Location:clients.php?error:$em");
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/admin-home.css"/>
    <title>Admin-Home</title>
 
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
      <li class="write"><a href="blog.php">Blogs</a></li>
      <li class="write"><a href="clients.php">Clients</a></li>
    </ul>
  </nav>
  
  <main role="main">
    
    <section class="panel important">
      <h2>Clients Page</h2>
    </section>
    
    <section class="panel important" style="height: 350px; padding: 20px;">
      <h2>Clients Adding Section</h2>
        <form  method="post" enctype="multipart/form-data">
          <div class="twothirds" >
    
           <label for="Image">Image</label>
            <input type="file" name="Image"/><br/><br/>
            <button type="submit">Submit</button>
          </div>
          
          </div>
        </form>
    </section>
    <section class="panel important" >
      <h2>All Clients</h2>
      <table id="customers">
      <tr>
      <th>No</th>
          <th>Image</th>
          <th>Action</th>
        </tr>
        <?php
        $project_view_query="Select * from clients";
        $result=mysqli_query($connect,$project_view_query);
        if($result){
          while($data=mysqli_fetch_assoc($result)){
          $id=$data['No'];
    
          $image=$data['Image'];
          echo "
          <tr style='background-color:black'>
          <td>$id</td>
    
          <td><img style='width:6rem;height:6rem' src=$image></td>
          <td><a onClick=\"javascript: return confirm('Please confirm deletion');\" href='delete-clients.php?deleteId=$id'><button style='background-color:red;color:white;padding:10px 12px;border:none;border-radius: 20px'>Delete</button></a></td>
        </tr>
          ";
          }
        }
        ?>
   
   
      </table>
    </section>
  
  </main>
  
</html>