<?php
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg"))
&& ($_FILES["file"]["size"] < 200000))
  {
  if ($_FILES["file"]["error"] > 0)//If error
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
    //echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    //echo "Type: " . $_FILES["file"]["type"] . "<br />";
    //echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    //echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";
    if (file_exists("storyimg/" . $_FILES["file"]["name"]))//If same file
      {
      echo "<script>alert('This img already exists!');</script>";
      }
    else//If success
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "storyimg/" . $_FILES["file"]["name"]);
      session_start();
      $_SESSION['imgurl'] = "storyimg/". $_FILES["file"]["name"];
      echo "<script>alert('Upload success!');history.go(-1);</script>";
      }
    }
  }
else
  {
  echo "Invalid file";
  }
?>