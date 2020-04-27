<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css_style.css" type="text/css">
  <title>main</title>
</head>


<body>
<header>
	<div class="headerleft">
		<a> Simple webpage</a>
	</div>
	<div class="headerright">
		<a> login </a>
	</div>
</header>
<?php $page = isset($_GET['page']) ? $_GET['page'] : '1';?>
  <div class='menu'>
		<a class="<?php if ($page==1) {echo "active"; } else  {echo "noactive";}?>" href="wp_main.php?page=1"><i class="fa fa-fw fa-home"></i><i class="fas fa-home"></i>Home</a>
		<a class="<?php if ($page==2) {echo "active"; } else  {echo "noactive";}?>" href="wp_main.php?page=2">HTML basic</a>
		<a class="<?php if ($page==3) {echo "active"; } else  {echo "noactive";}?>" href="wp_main.php?page=3">CSS basic</a>
		<a class="<?php if ($page==4) {echo "active"; } else  {echo "noactive";}?>" href="wp_main.php?page=4">PHP basic</a></li>	
  </div>
  <div class="tartalom">
	<?php
		if($page==1)     include("wp_home.php");
		elseif($page==2) include("wp_html_basic.php");
		elseif($page==3) include("wp_css_basic.php");
		elseif($page==4) include("wp_php_basic.php");
     ?>
  </div>
</body>
</html>