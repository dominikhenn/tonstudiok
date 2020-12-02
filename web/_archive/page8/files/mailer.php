<?php
session_start();
$_SESSION['form_element0'] = $_POST['form_element0'];
$_SESSION['form_element1'] = $_POST['form_element1'];
$_SESSION['form_element2'] = $_POST['form_element2'];
$_SESSION['form_element3'] = $_POST['form_element3'];
$form_element0 = $_SESSION['form_element0'];
$form_element1 = preg_replace("/
/", "", $_SESSION['form_element1']);
$form_element1 = preg_replace("/
/", "", $_SESSION['form_element1']);
$form_element2 = preg_replace("/
/", "", $_SESSION['form_element2']);
$form_element2 = preg_replace("/
/", "", $_SESSION['form_element2']);
$form_element3 = $_SESSION['form_element3'];
if(!$_SESSION['form_element0'] || !$_SESSION['form_element1'] || !$_SESSION['form_element2'] || !$_SESSION['form_element3']) {
$_SESSION['formMessage'] = "		Please fill out all the required fields. <br />Felder mit einem * sind erforderlich.\n";
Header("Location:../page8.php");
exit();
} else {
$email="info@musikproduktion-kern.de";

$from = stripslashes($form_element1)."<".stripslashes($form_element1).">";$subject= $form_element2;$message = "\nMein Name/ Firma: $form_element0\n\nMeine Emailadresse: $form_element1\n\nBetreff: $form_element2\n\nNachricht: $form_element3\n";if (file_exists($tmp_name)){
if(is_uploaded_file($tmp_name)){
$file = fopen($tmp_name,'rb');
$data = fread($file,filesize($tmp_name));
fclose($file);
$data = chunk_split(base64_encode($data));

}

$headers="From: %from\r\n" .
"MIME-Version: 1.0\r\n" .
"Content-Type: multipart/mixed;\r\n" .
"boundary=\"{$mime_boundary}\"";

$message = "This is a multi-part message in MIME format.\n\n" .
"--{$mime_boundary}\n" .
"Content-Type: text/plain; charset=\"iso-8859-1\"\n" .
"Content-Transfer-Encoding: 7bit\n\n" .
$message . "\n\n"; 

$message .= "--{$mime_boundary}\n" .
"Content-Type: {$type};\n" .
" name=\"{$name}\"\n" .
"Content-Transfer-Encoding: base64\n\n" .
$data . "\n\n" .
"--{$mime_boundary}--\n"; 
}

SESSION_UNREGISTER('form_element23662');
SESSION_UNREGISTER('form_element23662');
SESSION_UNREGISTER('form_element23662');
SESSION_UNREGISTER('form_element23662');
if (@mail($email, $subject, $message, $headers)) {$_SESSION["formMessage"] = "		Danke, Ihre E-Mail wurde versendet.
";
header("Location: ../page8.php");
} else {
$_SESSION["formMessage"] = "Im sorry, there seems to have been an error trying to send your email. Please try again.";
header("Location: ../page8.php");
}
}
?>
