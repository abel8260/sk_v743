<?php 
session_start();
include('../../../login-cadastro/db/conexao.php');
 $local = "ruas, coord  (23,32)  " ; 
 $name_1=$_SESSION["char"];


 $sql90=$pdo->prepare("INSERT INTO  localidads  (   char_localidad  ,  localidad_local  ,  localidads_html  ,  localidads_src  ) VALUES( '$name_1','$local', '../cen/maps/keypoint_2032.php','../../../LAPIDE-SEMINOVA-D.png')");
 $sql90-> execute();
$keypoint = 2000;


 ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8' />
    <title> PoRTAO v1.2 </title>
    <style>
        a {
            text-decoration: none;
            color: black;
        }

        .cen_box {
            border: 3px solid black;
            margin-bottom: 2%;
            cursor: pointer;
            background-color: #666666;
        }

        .text_cen_box {
            padding-left: 1%;
        }

        .cen_box_title {
            border: 3px solid black;
            margin-bottom: 2%;
            background-color: #333333;
            font-weight: bold;
        }

        .cen_box:hover {
            background-color: #555555;
            color: white;
        }

        a.confirm:link,
        a.confirm:visited,
        a.menu:link,
        a.menu:visited,
        a.voltar:link,
        a.voltar:visited {
            background-color: #000;
            border: 1px solid #000;
            color: white;
            display: inline-block;
            padding: 14px 25px;
            text-align: center;
            text-decoration: none;
            width: 100%;
        }

        a.confirm:hover,
        a.confirm:active,
        a.menu:hover,
        a.menu:active,
        a.voltar:hover,
        a.voltar:active {
            background-color: #e0e0d1;
            color: #000;
        }

        .links {
            width: 120px;
            margin-bottom: 2%;
        }

        vermelho {
            color: red;
        }

        input {
            background-color: #ccc;
            color: black;
            font-style: italic;
        }
    </style>
    <script type='text/javascript' src='script.js'></script>
</head>

<body style='background-image:url(https://i.ibb.co/dm1Rdq7/fundo.png' );>
    <div class='links'>

        <br> <a class='voltar' href='cen_add.html'>voltar</a> <br> <a class='voltar'
            href='./cruzamento-IV.php'>Mapa</a> <br>
    </div>
    <div class='cen_box_title'> cruzamento VI - (20,32)---</div>



    <form action='keypoint_2036.php' method='POST'>
        <div class='cen_box' style='padding : 9px'><br />cruzamento VI - (20,32) -
            Norte---<br />normal---<br />ruas_de_sigdu---<br /><br /><button class='cen_box'
                type="submit">escolher</button></div>
    </form>

    <form action='keypoint_2031.html' method='POST'>
        <div class='cen_box' style='padding : 9px'><br />cruzamento VI - (20,32) -
            Leste---<br />normal---<br />ruas_de_sigdu---<br /><br /><button class='cen_box'
                type="submit">escolher</button></div>
    </form>



    <form action='#' method='POST'>
        <div class='cen_box' style='padding : 9px'><br />cruzamento VI - (20,32) - km
            4---<br />normal---<br />ruas_de_sigdu---<br /><br /><button class='cen_box' type="submit">escolher</button>
        </div>
    </form>

</body>

</html>