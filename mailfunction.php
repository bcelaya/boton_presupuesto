<?php

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$tlf = $_POST['tlf'];
$presupuesto = $_POST['presupuesto'];

$prodnomf = $_POST['prodnomf'];
$varnomf = $_POST['varnomf'];
$produrlf = $_POST['produrlf'];
$prodpvpf = $_POST['prodpvpf'];
$varpvpf = $_POST['varpvpf'];
$prodreff = $_POST['prodreff'];
$mail = '
<!DOCTYPE html>
<html lang="es">
<head>
  <title>Petición presupuesto personalizado</title>
  <meta charset="utf-8>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
  <h2 class="text-center">Petición de presupuesto personalizado</h2>        
  <table class="table table-bordered table-hover">
    <tbody>
    <tr>
      <td class="text-center" colspan="2"><h4>Datos productos</h4></td>
      </tr>
      <tr>
      <td colspan="2">'.$prodnomf.'</td>
      </tr>
      <tr>
      <td colspan="2">'.$prodreff.'</td>
      <tr>
      <td colspan="2">'.$varnomf.'</td>
      </tr>
      <tr>
      <td colspan="2">'.$produrlf.'</td>
      </tr>
      <tr>
      <td colspan="2">'.$prodpvpf.'</td>
      </tr>
      <tr>
      <td colspan="2">'.$varpvpf.'</td>
      </tr>
      <tr>
      <td class="text-center" colspan="2"><h4>Datos personales</h4></td>
      </tr>
      <tr>
      <th>Nombre:</th>
      <td>'.$nombre.'</td>
      </tr>
      <tr>
      <th>Correo electrónico:</th>
      <td>'.$email.'</td>
      </tr>
      <tr>
      <th>Teléfono:</th>
      <td>'.$tlf.'</td>
      </tr>
      <tr>
      <th>Presupuesto propuesto:</th>
      <td>'.$presupuesto.'</td>
      </tr>
    </tbody>
  </table>
</div>
</body>
</html>
';
$mail = utf8_decode($mail);   

/*
$mail = $nombre."<br>".$email."<br>".$tlf."<br>".$prodnomf."<br>".$produrlf."<br>".$prodpvpf."<br>".$prodreff."<br>".$varnomf."<br>".$varpvpf."<br>".$presupuesto;*/
/*$nombre = 'Bruno';
$email = 'bruno@bruno4reel.com';
$tlf = '640588392';
$presupuesto = 'mail() en estado puro';
$mail = $nombre."<br>".$email."<br>".$tlf."<br>".$presupuesto;*/

//Titulo
$titulo = "Petición presupuesto personalizado";
//cabecera
 $headers  = "From: contacto@intermaquinas.online < petición presupuesto >\n";
 $headers .= "Cc: intermaquinas < contacto@intermaquinas.online >\n"; 
 $headers .= "X-Sender: intermaquinas < contacto@intermaquinas.online >\n";
 $headers .= 'X-Mailer: PHP/' . phpversion();
 $headers .= "X-Priority: 1\n"; // Urgent message!
 $headers .= "Return-Path: intermaquinas@intermaquinas.online\n"; // Return path for errors
 $headers .= "MIME-Version: 1.0\r\n";
 $headers .= "Content-Type: text/html; charset=utf-8\n";

/*
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
//dirección del remitente 
$headers .= "From: Intermaquinas.online < petición presupuesto >\r\n";*/
//Enviamos el mensaje a tu_dirección_email 
$bool = mail($email,$titulo,$mail,$headers);
if($bool){
    echo "Mensaje enviado";
}else{
    echo "Mensaje no enviado";
}
?>
