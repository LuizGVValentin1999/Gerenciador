<?php
session_start();
$url = (isset($_GET['url'])) ? $_GET['url']:'home';
$url = str_replace(".php", "", $url);
$contb = array_filter(explode('/',$url));
$file = $url =='admin'?'admin.php':"System/View/" .$url .".php";
$checkurl ="";
$checklink ="";
for ($i = 2; $i <= count($contb) ; $i++) { $checkurl = $checkurl."../"; }
for ($i = 3; $i <= count($contb) ; $i++) { $checklink = $checklink."../"; }


?>
<!DOCTYPE HTML>

<html>
	<head>
        <title>Gerenciador</title>
		<meta charset="utf-8" />
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?=$checkurl?>System/Style/css/main.css" />
		<link rel="stylesheet" href="<?=$checkurl?>System/Style/css/style.css" />
		<noscript><link rel="stylesheet" href="<?=$checkurl?>System/Style/css/noscript.css" /></noscript>
    
	</head>
<body class="is-preload">
<!-- Wrapper -->
<<<<<<< 95f4c03aa7e808dd755f62d1b5a93775d0d08cd1
=======
<div class="alert">
	<div>
		<div class="alert-close" onclick="$(this).parent().remove();" aria-hidden="true">X</div>
		<div class="alert-text"><strong class="alert-erro">Oloco, meu!</strong> Olha esse alerta animado, como é chique! </div>
	</div>
	<div>
		<div class="alert-close" onclick="$(this).parent().remove();" aria-hidden="true">X</div>
		<div class="alert-text"><strong class="alert-success">Oloco, meu!</strong> Olha esse alerta animado, como é chique! </div>
		
	</div>
>>>>>>> atualizao final alerta front

<?php
if( $url == "home"){
//  include('System/View/navbar.php');
}
else if(@$_SESSION['adm']){
	include('System/View/sistema/navbar.php');
}

?>
<div id="wrapper">
<?php

if(is_file($file)){
	if($url != "home"){
		include('System/Checker/chekerlogin.php');
	}
    include $file;
}else{
    include '404.php';
}

   
?>


</div>

 <!-- Footer -->
 <footer id="footer" class="wrapper style1-alt" >
        <div class="inner">
            <ul class="menu">
                <li>&copy; Sistema blue.</li>
                <li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
            </ul>
        </div>
    </footer>
 

 <!-- Scripts -->
 			<script src="<?=$checkurl?>System/Style/js/jquery.min.js"></script>
    		<script src="<?=$checkurl?>System/Style/js/jquery.scrollex.min.js"></script>
    		<script src="<?=$checkurl?>System/Style/js/jquery.scrolly.min.js"></script>
    		<script src="<?=$checkurl?>System/Style/js/browser.min.js"></script>
    		<script src="<?=$checkurl?>System/Style/js/breakpoints.min.js"></script>
    		<script src="<?=$checkurl?>System/Style/js/util.js"></script>
			<script src="<?=$checkurl?>System/Style/js/main.js"></script>
			<script src="<?=$checkurl?>System/Style/js/function.js"></script>
	
			<script src='https://s3.amazonaws.com/popmotion.io/static/dist/popmotion.min.js'></script>
	</body>
</html>
