<?php
if (eregi("sidemenu.php",$PHP_SELF)) {
  Header("Location: index.php");
  die();
}

  $title = "JDBC type 4 driver";
  $content = "Sub-project specific material is not yet available.
  <br>";

  sidebox($title,$content);

?>