<?php 
require_once("AttachMailer.php");

if(isset( $_POST['email'])){

//email to jobs@lacasadelospixeles.com
$from = $_POST['email'];  
$to= "jobs@lacasadelospixeles.com"; //jobs@lacasadelospixeles.com
$vacant = $_POST['vacant'];
$subject = "Candidato para la vacante de ".$vacant;

//upload CV
$uploadOk = 1;
$target_file = "upload_cv/" . basename($_FILES["upload-cv"]["name"]);
$FileType = pathinfo($target_file,PATHINFO_EXTENSION);

// Check file size
if ($_FILES["upload-cv"]["size"] > 2097152) {
    $answer = "wrong size";
    $uploadOk = 0;
}
// Allow certain file formats
if($FileType != "pdf" && $FileType != "doc" && $FileType != "docx" ) {
     $answer = "wrong format";
     $uploadOk = 0;
}

if ($uploadOk == 1) {
// if everything is ok, try to upload file
if (move_uploaded_file($_FILES["upload-cv"]["tmp_name"], $target_file)) { 

   //candidate data
    $name= $_POST['name'];
    $site1 = $_POST['site1'];
    $site2 = $_POST['site2'];
    $site3 = $_POST['site3'];
    $website = $_POST['website'];
    $linkedin = $_POST['linkedin'];
    $behance = $_POST['behance'];
    $others = $_POST['others'];

    $email_message ="<html style=\"width:100%; padding:0px;\">";
    $email_message .="<head><meta charset=\"utf-8\"></head>";
    $email_message .="<body style=\"width:100%; padding:15px;  font-family: 'Helvetica Neue', Helvetica, sans-serif;\">";
    $email_message .= "<h3>Vacante</h3>";
    $email_message .= "<p>".$vacant."</p>";
    $email_message .= "<h3>Datos del Candidato</h3>";
    $email_message .= "<p><strong>Nombre: </strong>".$name."</p>";
    $email_message .= "<p><strong>Email: </strong>".$from."</p>";
    $email_message .= "<h3><strong>Sitios personales</strong></h3>";
    $email_message .= "<p><strong>Portafolio: </strong>".$website."</p>";
    $email_message .= "<p><strong>Linkedid: </strong>".$linkedin."</p>";
    $email_message .= "<p><strong>Behance: </strong>".$behance."</p>";
    $email_message .= "<h3><strong>Sitios que visita</strong> </h3>";
    $email_message .= "<p>".$site1."</p>";
    $email_message .= "<p>".$site2."</p>";
    $email_message .= "<p>".$site3."</p>";
    $email_message .= "<h3><strong>Comentarios adicionales</strong></h3>";
    $email_message .= "<p>".$others."</p>";
    $email_message .= "</body>";
    $email_message .= "</html>";
 
    //send mail
    $mailer = new AttachMailer($from, $to, $subject, $email_message);
    $mailer->attachFile($target_file);
    $mailer->send() ? "Enviado": "Problema al enviar";
    $answer = "success"; 

//autoresponse from jobs@lacasadelospixeles.com

    $response_message ="<html style=\"width:100%; padding:0px;\">";
    $response_message .="<head><meta charset=\"utf-8\"></head>";
    $response_message .="<body style=\" padding: 60px 60px 5px 60px; background-color: #EEE; font-family: 'Helvetica Neue', Helvetica, sans-serif;\">";
    $response_message .= "<div style=\"height: 100%; position: relative; padding:10px; background-color: #FFF; \" >";
    $response_message .="<div style=\" margin: 0px auto; padding:15px 15px; text-align: center;\">";
    $response_message .="<img src=\"http://developmentlcp.com/lacasadelospixeles/img/logo.jpg\" style=\" margin: auto; max-width: 80%;\" >";
    $response_message .="</div>";
    $response_message .= "<h3>Título</h3>";
    $response_message .= "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sed justo ac risus volutpat pellentesque nec ut massa. Quisque gravida euismod lobortis. Praesent pretium pretium sem eu volutpat. Proin nec vestibulum lectus, a ornare lorem. Sed eu velit efficitur eros posuere luctus. Donec quis fringilla tellus. Pellentesque sit amet nisl placerat, hendrerit augue eget, tincidunt turpis.</p>";
    $response_message .= "</div>";
    $response_message .="<div style=\" margin: 15px auto; padding:3px 3px; text-align: center;\">";
    $response_message .=" Privada 39 Oriente 2018-A, Col. El Mirador, Puebla, Puebla";
    $response_message .="<p>©2016 La Casa de los Pixeles.</p>";
    $response_message .="<p>Todos los derechos reservados.</p>";
    $response_message .="<p><a href=\"http://lacasadelospixeles.com/politicas-de-privacidad\" >Políticas de Privacidad</a></p>";
    $response_message .="</div>";
    $response_message .= "</body>";
    $response_message .= "</html>";

$headers = 'From: '.$to . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

echo $response_message;
mail($from, "La Casa de los Pixeles", $response_message, $headers);


 } else { //error uploading the file
         $answer = "problems copying";
    }
}

}
else{
 $answer = "Please check the email addrees";
} 

    $json = json_encode( array( 'response' => $answer ) );
    echo $json;

?>