<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Grupo02
                                - BAQUE REYES CRISTI SELENE
                                - CORNEJO BAQUERO OSCAR LEONARDO
                                - VARGAS MENDEZ KIMBERLY SUGEY" />
    <meta name="copyright" content="Desarrollo Web - Software UG" />
    <meta name="keywords" content="Desarrollo Web, Reposteria, Pasteleria"/>
    <meta name="description" content="Sistema de Gestión para mejorar la venta de pasteleria y reposteria "/>

    <title><?= $data['tag_page']?></title>
    <link rel="stylesheet" type="text/css" href="<?= media();?>css/main.css">
    <link rel="stylesheet" type="text/css" href="<?= media();?>css/style.css">
    <link rel="stylesheet" type="text/css" href="<?= media();?>css/estilosIndex.css">
    <link rel="stylesheet" type="text/css" href="<?= media();?>css/estilosNosotros.css">
    <link data-require="sweet-alert@*" data-semver="0.4.2" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style type="text/css">
        .imagen-contacto {
            background-image:url("<?=media()?>/img/fondo2.jpg");
        }
    </style>
</head>
<body>
<div class="headerContenido">
<header class="site-navbar js-sticky-header site-navbar-target bg-light" role="banner">
<?php
require_once ("nav.php");?>
</header>
