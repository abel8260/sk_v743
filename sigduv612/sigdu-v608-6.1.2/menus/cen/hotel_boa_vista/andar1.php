<?php 
session_start();
include('../../../login-cadastro/db/conexao.php');
 $local = "andar 1, boa vista hotels" ; 
 $name_1=$_SESSION["char"];


 $sql90=$pdo->prepare("INSERT INTO  localidads  (   char_localidad  ,  localidad_local  ,  localidads_html  ,  localidads_src  ) VALUES( '$name_1','$local', '../cen/hotel_boa_vista/andar1.php','../../../LAPIDE-SEMINOVA-D.png')");
 $sql90-> execute();



 ?>
 <!DOCTYPE html> <html> <head> <meta charset='utf-8'/> <title> PoRTAO v1.2 </title> <style> a{ text-decoration: none; color:black; } .cen_box{ border: 3px solid black; margin-bottom:2%; cursor:pointer; background-color:#666666; } .text_cen_box{ padding-left:1%; } .cen_box_title{ border: 3px solid black; margin-bottom:2%; background-color: #333333; font-weight:bold; } .cen_box:hover { background-color: #555555; color:white; } a.confirm:link, a.confirm:visited,a.menu:link, a.menu:visited, a.voltar:link, a.voltar:visited { background-color: #000; border: 1px solid #000; color: white; display: inline-block; padding: 14px 25px; text-align: center; text-decoration: none; width:100%; } a.confirm:hover, a.confirm:active ,a.menu:hover, a.menu:active , a.voltar:hover, a.voltar:active { background-color: #e0e0d1; color: #000; } .links{ width:120px; margin-bottom:2%; } vermelho{ color:red; } input{ background-color: #ccc; color:black ; font-style: italic; } </style> <script type='text/javascript' src='script.js'></script> </head> <body style= 'background-color:black');>   <div class='links'> 
     <a class= 'voltar' href='../../../menus/cen/maps/keypoint_2024.php'>voltar</a> <br> </div> <div class='cen_box_title' > </div>

andar 1---
<div class='cen_box' style='padding : 9px' >andar 1---<br></div>
<form action='../../../menus/cen/hotel_boa_vista/andar10.html' method='POST'><div class='cen_box' style='padding : 9px' >---<br/>ver sala 1---<br/>normal---<br/>hotel_boa_vista---<br/><br/><button class='cen_box' type="submit">escolher</button></div></form>

<form action='../../../menus/static/key_473.php' method='POST'><div class='cen_box' style='padding : 9px' >---<br/>ver shop free 1---<br/>normal---<br/>hotel_boa_vista---<br/><br/><button class='cen_box' type="submit">escolher</button></div></form>
<form action='../../../menus/static/key_12initial.php' method='POST'><div class='cen_box' style='padding : 9px' >---<br/>ver shop inicial---<br/>normal---<br/>hotel_boa_vista---<br/><br/><button class='cen_box' type="submit">escolher</button></div></form>
<form action='../../../menus/static/key_12enemy1.php' method='POST'><div class='cen_box' style='padding : 9px' >---<br/>ver red 1---<br/>normal---<br/>hotel_boa_vista---<br/><br/><button class='cen_box' type="submit">escolher</button></div></form>
<form action='../../../menus/static/key_12enemy2.php' method='POST'><div class='cen_box' style='padding : 9px' >---<br/>ver redo 1---<br/>normal---<br/>hotel_boa_vista---<br/><br/><button class='cen_box' type="submit">escolher</button></div></form>
<form action='../../../menus/cen/hotel_boa_vista/andar10.html' method='POST'><div class='cen_box' style='padding : 9px' >---<br/>ver sala 1---<br/>normal---<br/>hotel_boa_vista---<br/><br/><button class='cen_box' type="submit">escolher</button></div></form>

<form action='../../../menus/static/key_12fusionboss.php' method='POST'><div class='cen_box' style='padding : 9px' >19---<br/>ver boss finale---<br/>normal---<br/>hotel_boa_vista---<br/><br/><button class='cen_box' type="submit">escolher</button></div></form>