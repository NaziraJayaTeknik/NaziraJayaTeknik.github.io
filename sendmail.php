<?php
$msg = "Hay apa kabar";

$msg = wordwrap($msg,70);

// send email
mail("muhmukti9@gmail.com","judul",$msg);
?>