<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Side Accordion Navigation Bar</title>
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<link rel="stylesheet" href="units.css">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script>
		$(document).ready(function(){
			$(".siderbar_menu li").click(function(){
			  $(".siderbar_menu li").removeClass("active");
			  $(this).addClass("active");
			});

			$(".hamburger").click(function(){
			  $(".wrapper").addClass("active");
			});

			$(".close, .bg_shadow").click(function(){
			  $(".wrapper").removeClass("active");
			});
		});
	</script>
</head>
<body>

<div class="wrapper">
  <div class="sidebar">
    <div class="bg_shadow"></div>
    <div class="sidebar_inner" style="background-color:#000000;">
        <div class="close">
          <i class="fas fa-times"></i>
        </div>
        <div class="profile_info">
            <div class="profile_data">
                <p class="name">Student Assesment System</p>
            </div>
        </div>

        <ul class="siderbar_menu" style="background-color:#000000;">
          <li><a href="#">
              <div class="icon"><i class="fas fa-folder"></i></div>
              <div class="title">Unit 1</div>
              <div class="arrow"><i class="fas fa-chevron-down"></i></div>
              </a>
            <ul class="accordion" style="background-color:#2f3330;">
							<?php
								$name ="content/PUC1/SEM1/CHEMISTRY/UNIT1";

								if(is_dir($name))
								{
									if($dh=opendir($name))
									{
										while (($file = readdir($dh))!==false) {
											$path="content/PUC1/SEM1/CHEMISTRY/UNIT1/".$file;
										 $info = pathinfo($file);
										 if($info['filename']=="" || $info['filename']==".")
										 {
											 continue;
										 }
											echo '<li><a href='."$path".' target="content_frame">'.$info['filename'].'</a></li>';
											echo "<br>";
										}
									}
								}
							 ?>
              </ul>
          </li>
          <li><a href="#">
              <div class="icon"><i class="fas fa-folder"></i></div>
              <div class="title">Unit 2</div>
              <div class="arrow"><i class="fas fa-chevron-down"></i></div>
              </a>
            <ul class="accordion" style="background-color:#2f3330;">
							<?php
							 $name ="content/PUC1/SEM1/CHEMISTRY/UNIT1";

							 if(is_dir($name))
							 {
								 if($dh=opendir($name))
								 {
									 while (($file = readdir($dh))!==false) {
										 $path="content/PUC1/SEM1/CHEMISTRY/UNIT1/".$file;
										$info = pathinfo($file);
										if($info['filename']=="" || $info['filename']==".")
										{
											continue;
										}
										 echo '<li><a href='."$path".' target="content_frame">'.$info['filename'].'</a></li>';
										 echo "<br>";
									 }
								 }
							 }
							?>
              </ul>
          </li>
          <li><a href="#">
              <div class="icon"><i class="fas fa-folder"></i></div>
              <div class="title">Unit 3</div>
              <div class="arrow"><i class="fas fa-chevron-down"></i></div>
              </a>
              <ul class="accordion" style="background-color:#2f3330;">
								<?php
									$name ="content/PUC1/SEM1/CHEMISTRY/UNIT1";

									if(is_dir($name))
									{
										if($dh=opendir($name))
										{
											while (($file = readdir($dh))!==false) {
												$path="content/PUC1/SEM1/CHEMISTRY/UNIT1/".$file;
											 $info = pathinfo($file);
											 if($info['filename']=="" || $info['filename']==".")
											 {
												 continue;
											 }
												echo '<li><a href='."$path".' target="content_frame">'.$info['filename'].'</a></li>';
												echo "<br>";
											}
										}
									}
								 ?>
              </ul>

          </li>
          <li><a href="#">
              <div class="icon"><i class="fas fa-folder"></i></div>
              <div class="title">Unit 4</div>
              <div class="arrow"><i class="fas fa-chevron-down"></i></div>
              </a>
              <ul class="accordion" style="background-color:#2f3330;">
								<?php
								 $name ="content/PUC1/SEM1/CHEMISTRY/UNIT1";

								 if(is_dir($name))
								 {
									 if($dh=opendir($name))
									 {
										 while (($file = readdir($dh))!==false) {
											 $path="content/PUC1/SEM1/CHEMISTRY/UNIT1/".$file;
											$info = pathinfo($file);
											if($info['filename']=="" || $info['filename']==".")
											{
												continue;
											}
											 echo '<li><a href='."$path".' target="content_frame">'.$info['filename'].'</a></li>';
											 echo "<br>";
										 }
									 }
								 }
								?>
              </ul>

          </li>
          <li><a href="#">
              <div class="icon"><i class="fas fa-folder"></i></div>
              <div class="title">Unit 5</div>
              <div class="arrow"><i class="fas fa-chevron-down"></i></div>
              </a>
              <ul class="accordion" style="background-color:#2f3330;">
								<?php
								 $name ="content/PUC1/SEM1/CHEMISTRY/UNIT1";

								 if(is_dir($name))
								 {
									 if($dh=opendir($name))
									 {
										 while (($file = readdir($dh))!==false) {
											 $path="content/PUC1/SEM1/CHEMISTRY/UNIT1/".$file;
											$info = pathinfo($file);
											if($info['filename']=="" || $info['filename']==".")
											{
												continue;
											}
											 echo '<li><a href='."$path".' target="content_frame">'.$info['filename'].'</a></li>';
											 echo "<br>";
										 }
									 }
								 }
								?>
              </ul>

          </li>
          <li><a href="#">
              <div class="icon"><i class="fas fa-folder"></i></div>
              <div class="title">Unit 6</div>
              <div class="arrow"><i class="fas fa-chevron-down"></i></div>
              </a>
              <ul class="accordion" style="background-color:#2f3330;">
								<?php
								 $name ="content/PUC1/SEM1/CHEMISTRY/UNIT1";

								 if(is_dir($name))
								 {
									 if($dh=opendir($name))
									 {
										 while (($file = readdir($dh))!==false) {
											 $path="content/PUC1/SEM1/CHEMISTRY/UNIT1/".$file;
											$info = pathinfo($file);
											if($info['filename']=="" || $info['filename']==".")
											{
												continue;
											}
											 echo '<li><a href='."$path".' target="content_frame">'.$info['filename'].'</a></li>';
											 echo "<br>";
										 }
									 }
								 }
								?>
              </ul>

          </li>
        </ul>
       <div class="logout_btn">
            <a href="#">HOME</a>
        </div>

    </div>
  </div>
  <div class="main_container">
    <div class="navbar" style="background-color:#000000 !important" >
       <div class="hamburger" style="color:#fff !important" >
         <i class="fas fa-bars"></i>
       </div>
       <div class="logo" >
         <a href="#" style="color:#fff !important">Student Assesment System</a>
       </div>
    </div>
    <div class="content">
      <iframe src="" frameborder="0" name='content_frame' width="100%" height="1080"></iframe>
    </div>
  </div>
</div>

</body>
</html>
