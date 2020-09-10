<?php

require 'app/core/function.php';?>
<!DOCTYPE html>
<html lang="en">
	<head>
	<style>
            header{
                background-color: #F8F8FF;
            }
            main{background-image: url("<?= BASEURL;?>/img/bg.gif ");
  background-repeat: no-repeat;
    background-size: cover;

              }
            footer{
                background-color: #FAEBD7;
            }
        </style>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		 <link rel="icon" href="https://data.tasikmalayakota.go.id/wp-content/uploads/2018/05/Logo_Kota_Tasikmalaya.png" type="image/icon type">
		<title>Dinas Sosial Kota Tasikmalaya</title>

		<!-- Google font -->
		<link href="<?= BASEURL;?>/webmag/https://fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600" rel="stylesheet"> 

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="<?= BASEURL;?>/webmag/css/bootstrap.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="<?= BASEURL;?>/webmag/css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="<?= BASEURL;?>/webmag/css/style.css"/>
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
   integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
   crossorigin=""/>
   <style type="text/css">
   #mapid { height: 550px;
            width: 550px; }
   </style>
    </head>
	<body>

		<!-- Header -->
	
		<header id="header">
			<!-- Nav -->
			<header>
			<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#top-menu" aria-expanded="true">
					<span class="sr-only">Menu</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="/webdinsos/home" class="logo"><img src="public/LOGO.png" alt="" ></a>		
				</div>

			<div class="navbar-collapse collapse in" id="top-menu" aria-expanded="true" style="">
				<ul class="nav navbar-nav" id="menu-utama">

				
					<div class="navbar-form navbar-right">
					<form action="" role="search" method="post" accept-charset="utf-8">                                                                                 
					<input type="hidden" name="bb580c19bd647b265232ce1a9de71edd" value="e87db609b0c6699706443ad84a805e38">
		<ul class="nav-menu nav navbar-nav">
							<li><a href="/webdinsos/home">Home</a></li>
							<li><a href="/webdinsos/profile">Profile</a></li>
							<li class="cat-1"><a href="/webdinsos/layanan">Layanan</a></li>
							<li class="cat-2"><a href="/webdinsos/galery">Galery</a></li>
							<li class="cat-3"><a href="http://pkh.dinsos.tasikmalayakota.go.id">Mitra</a></li>
							<li class="cat-4"><a href="/webdinsos/visualisasi">Visualisasi</a></li>
						</ul>
						<form action="/webdinsos/home/cari" method="post">
						<div class="input-group">
						<br>
						<input type="text" class="form-control" style=" width:150px;"placeholder="cari" name="keyword" id="keyword" autocomplete="off">
						<button class="btn btn-second" type="submit" id="tombolcari">Cari</button>
						</div>
						</div>
						</form>
		</form>				</div>
							</div>
		</div>
	</nav>
	</header>
				<!-- /Main Nav -->

				<!-- Aside Nav -->
					<!-- /nav -->

					<!-- widget posts -->
					
				
			
			<!-- /Nav -->
		</header>
		<!-- /Header -->

		<!-- section -->

		<!-- /section -->
		<!-- section -->
		<div class="section">
			<h2>.</h2>
		</div>
		<main>