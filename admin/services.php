<?php
session_start();
include("connection.php");
include("function.php");
$user_data=check_login();
if(!$user_data){
header("Location:index.php");
}
include("./php/Image-uploading.php");
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_FILES['Image']) &&$_POST['name']){
  $services_name=$_POST['name'];
  $services_description=$_POST['description'];
  $image_name=$_FILES['Image']['name'];
  $image_size=$_FILES['Image']['size'];
  $temp_name=$_FILES['Image']['tmp_name'];
  $error=$_FILES['Image']['error'];
  if($error===0){
    if($image_size>50000000){
      $em="sorry your file is too large";
      header("Location:project.php?error:$em");
    }else{
      $image_exc=pathinfo($image_name,PATHINFO_EXTENSION);
      $image_exc_lc=strtolower($image_exc);
      $allowed_exc=array("jpg","jpeg","png","webp");
      if(in_array($image_exc_lc,$allowed_exc)){
        $new_img_name=uniqid("IMG-",true).'.'.$image_exc_lc;
        $img_upload_path='services-images/'.$new_img_name;
        move_uploaded_file($temp_name,$img_upload_path);
        $query="insert into services (Name,Description,Image) values('$services_name','$services_description','$img_upload_path')";
        mysqli_query($connect,$query);
        header("Location:services.php");
      }else{
        $em="you can't upload files of this type";
        header("Location:services.php?error:$em");
      }
    }
  }else{
    $em="Unknown Error Occurred";
    header("Location:services.php?error:$em");
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
    </ul>
  </nav>
  
  <main role="main">
    
    <section class="panel important">
      <h2>Services Page</h2>
    </section>
    
    <section class="panel important" style="height: 450px; padding: 20px;">
      <h2>Services Adding Section</h2>
        <form  method="post" enctype="multipart/form-data">
          <div class="twothirds" >
           <label for="name">Name</label>
            <input type="text" name="name" /><br/><br/>
            <label for="description">Description</label>
            <input type="text" name="description" /><br/><br/>
            <label for="Image">Image (780X668)</label>
            <input type="file" name="Image"/><br/><br/>
            <button type="submit">Submit</button>
          </div>
          </div>
        </form>
    </section>
    <section class="panel important" >
      <h2>All Services</h2>
      <table id="customers">
      <tr>
          <th>S/O</th>
          <th>Name</th>
          <th>Description</th>
          <th>Image</th>
          <th>Action</th>
        </tr>
        <?php
        $project_view_query="Select * from services";
        $result=mysqli_query($connect,$project_view_query);
        if($result){
          while($data=mysqli_fetch_assoc($result)){
          $id=$data['id'];
          $name=$data['Name'];
          $description=$data['Description'];
          $image=$data['Image'];
          echo "
          <tr>
          <td>$id</td>
          <td>$name</td>
          <td>$description</td>
          <td><img style='width:6rem;height:6rem' src=$image /></td>
          <td><a onClick=\"javascript: return confirm('Please confirm deletion');\" href='delete-services.php?deleteId=$id'><button style='background-color:red;color:white;padding:10px 12px;border:none;border-radius: 20px'>Delete</button></a></td>
        </tr>
          ";
          }
        }
        ?>
   
   
      </table>
    </section>
  
  </main>
  
</html>