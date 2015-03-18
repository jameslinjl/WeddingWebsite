<?php
http_response_code(204);
$sender = "[Wedding Website] " . $_POST["name"] . " - " . $_POST["email"];
$msg = $_POST["message"];
$result = mail("james.lin.jl@gmail.com", $sender, $msg);
$result = mail("tatianna.kufferath@gmail.com", $sender, $msg);
?>