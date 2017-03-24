<?php
function getReferer()
{
  if(isset($_SESSION["HTTP_REFERER"]))
  {
    return addslashes($_SESSION['HTTP_REFERER']);
  }
  else
  {
    return "Not found";
  }
}

function getSub()
{
  if(isset($_GET["about"]))
  {
  return addslashes($_GET["about"]);
  }
  else
  {
    return time();
  }
}

session_start();
header("Content-Type: image/png");
if(strpos($_SERVER["REMOTE_ADDR"])!==false)
{
  $img = imagecreate(155, 20);
  $background_color = imagecolorallocate($img, 0, 0, 0);
  imagefill($img, 0, 0, $background_color);
  $text_color = imagecolorallocate($img, 0, 255, 0);
  imagestring($img, 5, 0, 0, 'Tracking Disabled', $text_color);
  imagepng($img);
  imagedestroy($img);
}
else
{
  $img=imagecreate(1, 1);
  imagesetpixel($img, 1, 1, imagecolorallocatealpha($img, 0, 0, 0, 127));
  imagepng($img);
  imagedestroy($img);
  $username = "u608031215_auto";
  $password = "listemips";
  try
  {
    $conn = new PDO("mysql:host=mysql.hostinger.co.uk;dbname=u608031215_ips", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    $sql="INSERT INTO ips (IP_ADDR, REFERER, USER_AGENT, ABOUT) VALUES ('" . addslashes($_SERVER['REMOTE_ADDR']) . "', '" . getReferer() . "', '" . addslashes($_SERVER['HTTP_USER_AGENT']) . "', '". getSub(). "')";
    $conn->exec($sql);
  }
  catch(PDOException $e)
  {
      echo "Failed: " . $e->getMessage();
  }

  /*file_put_contents("logged.txt", file_get_contents("logged.txt"). "\n". $_SERVER["REMOTE_ADDR"]. ",". $_SERVER["HTTP_USER_AGENT"]. ",". $_SESSION["HTTP_REFERER"]);
  $_SESSION["lastsite"]=$_SERVER['HTTP_REFERER']+$_SESSION["lastsite"];*/
}
$conn = null;
//use cookies to make this magical
// HTTO X-FORWARDED-FOR as well
 ?>
