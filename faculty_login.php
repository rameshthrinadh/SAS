<?php
session_start();
$_SESSION;
  include('pages/connection.php');
  $error="";
  if($_SERVER['REQUEST_METHOD']=='POST')
  {
      $id=$_POST['id'];
      $password=$_POST['password'];
      if(!empty($id) && !empty($password))
      {
        $query="select * from faculty where f_id='$id' limit 1";
        $result=mysqli_query($conn,$query);
        if($result)
        {
            if($result && mysqli_num_rows($result)>0)
            {
                $data=mysqli_fetch_assoc($result);
                if($password==$data['f_pass'])
                {
                  $_SESSION['f_id']=$data['f_id'];
                  header("Location: faculty/faculty_index.php");
                  die;
                }
            }
        }
        else
        {
          $error= "Wrong Id or Password";
        }

      }
      else
      {
        $error= "Wrong Id or Password";
      }
  }
?>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="Student Assessment System">
    <meta name="keywords" content="StudentAssessmentSystem,SAS,rgukt,sasrgukt,iiit,iiitsklm">
    <meta name="author" content="KumarReddi">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/rgukt.png">
    <title>SAS||LOGIN</title>
    <!--BootStrap Links-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <!-- custom css -->
    <link rel="stylesheet" href="css/login.css"/>
  </head>
  <body>
    <input type="checkbox" id="check">
    <!--header area start-->
    <header>
      <label for="check" class="d-none">
        <i class="fa fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <img src="images/rgukt.png" alt="" class="main-logo">
        <h3><span>S</span>tudent <span>A</span>ssessment <span>S</span>ystem</h3>
      </div>
      <div class="right_area">
        <a href="pages/content.html" class="content_btn">Content</a>
      </div>
    </header>
    <div class="content">
      <div class="container-fluid d-flex flex-row justify-content-center">
        <div class="row shadow bg-dark text-white rounded" style="height:360px; width:380px;">
          <div class="col-12 d-flex flex-column text-center mt-5 justify-content-center">
            <h1 class='text-center' style="color:#ffff; font-size:20px" >Faculty Login<br></h1>
            <form class="login-form mt-4" method="post">
                
              <h5 class="mb-1 text-left ml-5 pl-4">&nbsp;username</h5>
              <input type="text" name="id" value="" required class="rounded p-1"><br>
              <h5 class="mb-1 mt-3 text-left ml-5 pl-4">&nbsp;password</h5>
               <input type="password" name="password" value="" required class="rounded p-1"><br>
              <center><button type="submit" name="button" class="btn btn-primary mt-4 mb-2">Login</button>
              <br><a href="#" class="text-white">forgot password</a>
              <br>
              <p style="color:white;">
                <?php
                  echo $error;
                ?>
              </p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
