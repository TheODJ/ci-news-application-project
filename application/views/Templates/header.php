<!DOCTYPE html>
<html>
<head>
	<title>ODJ Tech News</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://use.fontawesome.com/9ea539dd10.js"></script>
	<style>
		.scroll-container{
			height:100%;
			background-color:#212121;
		}
		.scroll-text1{
			padding:5px;
			color:white;
			animation:rightToLeft 24s linear infinite;	
		}
		input:submit{
		}
		input:submit:hover{
			background:black;
			color:white;
		}
		@keyframes rightToLeft{
			0%
			{
				transform:translateX(120%);
			}
			100%
			{
				transform:translateX(-100%);
			}
		}
	</style>
</head>
<body>
	<div class="text-center"><h2><?php #echo $title; ?></h2></div>
