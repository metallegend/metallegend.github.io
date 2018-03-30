<?php
  $jmeno=$_POST['jmeno'];
  $hodnoceni=$_POST['hodnoceni'];
  $email=$_POST['email'];
  $zanr=$_POST['zanr'];
  $pohlavi=$_POST['pohlavi'];
  $spam=$_POST['spam'];
  $f=fopen("teikste.txt","a");
  fwrite($f,"$jmeno | $hodnoceni | $email |$zanr | $pohlavi | $spam \n");
  fclose($f);
  header("location:form.php");
  
  $subject="PRG Koďousek zkouška mailu";
  $message="$jmeno | $hodnoceni | $email |$zanr | $pohlavi | $spam";
  mail($email, $subject, $message);
?>
