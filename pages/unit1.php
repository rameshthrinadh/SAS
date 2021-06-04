<?php
  $name ="content/PUC1/SEM1/CHEMISTRY/UNIT1/";

  if(is_dir($name))
  {
    if($dh=opendir($name))
    {
      while (($file = readdir($dh))!==false)
      {
        echo $file."<br>";
        $path="content/PUC1/SEM1/CHEMISTRY/UNIT1/".$file;
        $info = pathinfo($file);
        if($info['filename']=="" || $info['filename']==".")
        {
          continue;
        }
        echo '<li><a href='.$path.'>'.$info['filename'].'</a></li>';
        echo "<br>";
      }
    }
  }
 ?>
