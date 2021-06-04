<?php


if (isset($_POST['upload']) && isset($_FILES['myfile'])) {
  include '../pages/connection.php';
  $branch=strtoupper($_POST['branch']);
  $sem=strtoupper($_POST['sem']);
  $subject=$_POST['subject'];
  $unit=strtoupper($_POST['unit']);
  $year=$_POST['year'];
  $content_name=$_POST["content_name"];

  $file_name=$_FILES['myfile']['name'];
  $file_size=$_FILES['myfile']['size'];
  $tmp_name=$_FILES['myfile']['tmp_name'];
  $error=$_FILES['myfile']['error'];
  if($error===0)
  {
    $file_exten=pathinfo($file_name,PATHINFO_EXTENSION);
    $file_exten_lc=strtolower($file_exten);
    if($file_exten_lc=='pdf')
    {
      $new_file=$content_name.'.'.$file_exten_lc;
      if($year=="PUC1" || $year=="PUC2")
      {
          $path="../pages/content/".$year."/".$sem."/".$subject."/".$unit."/".$new_file;
      }
      else
      {
          $path="../pages/content/".$year."/".$branch."/".$sem."/".$subject."/".$unit."/".$new_file;
      }

      move_uploaded_file($tmp_name,$path);
      $em='Uploaded sucessfully';
      header("Location: faculty_upload.php?erro=$em");
    }
    else {
      $em="You should only upload pdf file";
			header("Location: faculty_upload.php?error=$em");
    }
  }
}
