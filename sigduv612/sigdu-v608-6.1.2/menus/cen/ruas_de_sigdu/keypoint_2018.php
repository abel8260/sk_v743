<?php 
session_start();
include('../../../login-cadastro/db/conexao.html');
 $local = "ruas, coord  (22,4)  " ; 
 $name_1=$_SESSION["char"];


 $sql90=$pdo->prepare("INSERT INTO  localidads  (   char_localidad  ,  localidad_local  ,  localidads_html  ,  localidads_src  ) VALUES( '$name_1','$local', '../cen/hotel_boa_vista/andar1.html','../../../LAPIDE-SEMINOVA-D.png')");
 $sql90-> execute();



 ?>
 <!DOCTYPE html> <html> <head> <meta charset='utf-8'/> <title> PoRTAO v1.2 </title> <style> a{ text-decoration: none; color:black; } .cen_box{ border: 3px solid black; margin-bottom:2%; cursor:pointer; background-color:#666666; } .text_cen_box{ padding-left:1%; } .cen_box_title{ border: 3px solid black; margin-bottom:2%; background-color: #333333; font-weight:bold; } .cen_box:hover { background-color: #555555; color:white; } a.confirm:link, a.confirm:visited,a.menu:link, a.menu:visited, a.voltar:link, a.voltar:visited { background-color: #000; border: 1px solid #000; color: white; display: inline-block; padding: 14px 25px; text-align: center; text-decoration: none; width:100%; } a.confirm:hover, a.confirm:active ,a.menu:hover, a.menu:active , a.voltar:hover, a.voltar:active { background-color: #e0e0d1; color: #000; } .links{ width:120px; margin-bottom:2%; } vermelho{ color:red; } input{ background-color: #ccc; color:black ; font-style: italic; } </style> <script type='text/javascript' src='script.js'></script> </head> <body style= 'background-color:black');> <div class='links'> <a class= 'menu' href='../exportar/cen_add.html'>exportar</a> <br> <a class= 'voltar' href='cen_add.html'>voltar</a> <br> <a class= 'voltar' href='tela_01_cen_map.html'>Mapa</a> <br> </div> <div class='cen_box_title' > </div>
andar 1---
<div class='cen_box' style='padding : 9px'>Sigdu > Rua eskive > (22,4)  <br></div>


<form action='./keypoint_2011.html' method='POST'><div class='cen_box' style='padding : 9px' >---<br/>Norte---<br/>normal---<br/>rua-eskive---<br/><br/><button class='cen_box' type="submit">escolher</button></div></form>

<form action='./keypoint_2017.html' method='POST'><div class='cen_box' style='padding : 9px' >---<br/>Oeste---<br/>normal---<br/>rua-eskive---<br/><br/><button class='cen_box' type="submit">escolher</button></div></form>

<form action='./keypoint_2019.html' method='POST'><div class='cen_box' style='padding : 9px' >---<br/>Leste---<br/>normal---<br/>rua-eskive---<br/><br/><button class='cen_box' type="submit">escolher</button></div></form>

<form action='./keypoint_2025.html' method='POST'><div class='cen_box' style='padding : 9px' >---<br/>Sul---<br/>normal---<br/>rua-eskive---<br/><br/><button class='cen_box' type="submit">escolher</button></div></form>
