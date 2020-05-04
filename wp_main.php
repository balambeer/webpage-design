<!doctype html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css_style.css" type="text/css">
  <title>Simple Webpage</title>
</head>


<body>
<header>
	<div class="headerleft">
		<a> &nbsp;&nbsp;Simple webpage</a>
	</div>
	<div class="headerright">
		<a> login </a>
	</div>
</header>

<?php $page = isset($_GET['page']) ? $_GET['page'] : '1';?>
  <nav>
		<a class="<?php if (floor($page/10)==1) {echo "active"; } else  {echo "noactive";}?>" href="wp_main.php?page=11">HTML</a>
		<a class="<?php if (floor($page/10)==2) {echo "active"; } else  {echo "noactive";}?>" href="wp_main.php?page=21">CSS</a>
		<a class="<?php if (floor($page/10)==3) {echo "active"; } else  {echo "noactive";}?>" href="wp_main.php?page=31">PHP</a>	
  </nav>
  
   <div class="sidenav">
	<?php
		if(floor($page/10)==1)     include("sidenav_html.php");
		elseif(floor($page/10)==2) include("sidenav_css.php");
		elseif(floor($page/10)==3) include("sidenav_html.php");
		elseif(floor($page/10)==4) include("sidenav_html.php");
     ?>
  </div>
  
  <div class="tartalom">
	<?php
		if($page==11)     include("wp_html_basic.php");
		elseif($page==12) include("wp_html_declaration.php");
		elseif($page==13) include("wp_html_container.php");
		elseif($page==14) include("wp_html_text.php");
		elseif($page==21) include("wp_css_basic.php");
		elseif($page==31) include("wp_php_basic.php");
     ?>
  </div>
</body>
</html>