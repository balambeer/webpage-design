<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" href="css_style.css" type="text/css">
  <title>main</title>
</head>

<?php $activePage = basename($_SERVER['PHP_SELF'], ".php");?>
<?php 
	$directoryURI = $_SERVER['REQUEST_URI'];
	$path = parse_url($directoryURI, PHP_URL_QUERY);
?>
<body>
  <div class="header">
    <br>
	Simple webpage
  </div>
  <div class='menu'>
	<ul>
		<li class="<?php if ($path == "page=1") {echo "active"; } else  {echo "noactive";}?>"><a href="wp_main.php?page=1">Home</a></li>
		<li class="<?php if ($path == "page=2") {echo "active"; } else  {echo "noactive";}?>"><a href="wp_main.php?page=1"><a href="wp_main.php?page=2">HTML basic</a></li>
		<li class="<?php if ($path == "page=3") {echo "active"; } else  {echo "noactive";}?>"><a href="wp_main.php?page=1"><a href="wp_main.php?page=3">CSS basic</a></li>
		<li><a href="wp_main.php?page=1"><a href="wp_main.php?page=4">PHP basic</a></li>
	</ul>
  </div>
  <div class="tartalom">
	<?php
	header("Content-type: text/html;charset='UTF-8'");
    $page = $_GET["page"];
    if($page==1)     include("wp_home.php");
    elseif($page==2) include("wp_html_basic.php");
    elseif($page==3) include("wp_css_basic.php");
    elseif($page==4) include("wp_php_basic.php");
	print($path);
     ?>
  </div>
</body>
</html>