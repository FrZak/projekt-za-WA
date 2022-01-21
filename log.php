<html>
<body>

<?php
$mail = $_POST["email2"];
$psw = $_POST["psw2"];
$xmlstr = file_get_contents("db.xml");
$users = new SimpleXMLElement($xmlstr);
$found = False;

foreach ($users as $user) {
    if (strcmp($user->email, $mail) == 0 && strcmp($user->password, $psw) == 0) {
        echo "Uspjesno logiranje";
        $found = True;

      }
  }
if ($found == False) {
    echo "Neuspjesno logiranje";
}

?>

</body>
</html>