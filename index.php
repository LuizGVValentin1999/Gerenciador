<?php
@session_start();
$url = (isset($_GET['url'])) ? $_GET['url']:'home';
$url = str_replace(".php", "", $url);
$contb = array_filter(explode('/',$url));
$file = $url =='admin'?'admin.php':"System/View/" .$url .".php";
$checklink ="";
for ($i = 2; $i <= count($contb) ; $i++) { $checklink = $checklink."../"; }

?>
<!DOCTYPE HTML>

<html>
	<head>
        <title>Teste</title>
		<meta charset="utf-8" />
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?=$checklink?>System/Style/css/main.css" />
		<noscript><link rel="stylesheet" href="<?=$checklink?>System/Style/css/noscript.css" /></noscript>
    
	</head>
<body class="is-preload">
<!-- Wrapper -->

<?php
 include('System/View/navbar.php');
?>
<div id="wrapper">
<?php

if(is_file($file)){
    include $file;
}else{
    include '404.php';
}

   
?>


</div>

 <!-- Footer -->
 <footer id="footer" class="wrapper style1-alt">
        <div class="inner">
            <ul class="menu">
                <li>&copy; Untitled. All rights reserved.</li>
                <li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
            </ul>
        </div>
    </footer>
 

 <!-- Scripts -->
 			<script src="<?=$checklink?>System/Style/js/jquery.min.js"></script>
    		<script src="<?=$checklink?>System/Style/js/jquery.scrollex.min.js"></script>
    		<script src="<?=$checklink?>System/Style/js/jquery.scrolly.min.js"></script>
    		<script src="<?=$checklink?>System/Style/js/browser.min.js"></script>
    		<script src="<?=$checklink?>System/Style/js/breakpoints.min.js"></script>
    		<script src="<?=$checklink?>System/Style/js/util.js"></script>
			<script src="<?=$checklink?>System/Style/js/main.js"></script>
	

	</body>
</html>






