<html>
<body>

<?php 
$mail = $_POST["email"];
$psw = $_POST["psw"];
$xmlstr = file_get_contents("db.xml");
$users = new SimpleXMLElement($xmlstr);
$user = $users->addChild('user');
$user->addChild('email', $mail);
$user->addChild('password', $psw);
echo "Dodali ste korisnika s mailom $mail";
$users->asXML("db.xml");

?>

</body>
</html>