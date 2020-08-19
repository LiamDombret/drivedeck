<?php
require_once("config.php");
if((isset($_POST['mail']) && $_POST['mail'] !=''))
{
$mail = $conn->real_escape_string($_POST['mail']);
$sql="INSERT INTO mailinglist (email) VALUES ('".$mail."')";
}
$conn->query($sql);
  $conn->close();
  header("Location: index.html");
?>
