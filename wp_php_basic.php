<h1 style="font-size:50;">Basic PHP code:</h1><br>
		
		<span>
			&lt;!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"&gt;<br>
			&lt;html&gt;<br>
			&lt;head&gt;<br>
			&nbsp;&nbsp;&lt;meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-2"&gt;<br>
			&nbsp;&nbsp;&lt;link rel="stylesheet" href="valami.css" type="text/css"&gt;<br>
			&nbsp;&nbsp;&lt;title&gt;Oldal címe&lt;/title&gt;<br>
			&lt;/head&gt;<br>
			&lt;body&gt;<br>
			&nbsp;&nbsp;&lt;div class="menu"&gt;<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;a href="<span style="color:red;">keret.php</span>"&gt;Főoldal&lt;/a&gt;&lt;br&gt;<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;a href="<span style="color:red;">keret.php?oldal=1</span>"&gt;1. aloldal&lt;/a&gt;&lt;br&gt;<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;a href="<span style="color:red;">keret.php?oldal=2</span>"&gt;2. aloldal&lt;/a&gt;&lt;br&gt;<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;a href="<span style="color:red;">keret.php?oldal=3</span>"&gt;3. aloldal&lt;/a&gt;&lt;br&gt;<br>
			&nbsp;&nbsp;&lt;/div&gt;<br>
			&nbsp;&nbsp;&lt;div class="tartalom"&gt;<br><span style="color:red;">
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;?php<br>
			&nbsp;&nbsp;&nbsp;&nbsp;$oldal = $_GET["oldal"];<br>
			&nbsp;&nbsp;&nbsp;&nbsp;if($oldal==1)&nbsp;&nbsp;&nbsp;&nbsp; include("elso.php");<br>
			&nbsp;&nbsp;&nbsp;&nbsp;elseif($oldal==2) include("masodik.php");<br>
			&nbsp;&nbsp;&nbsp;&nbsp;elseif($oldal==3) include("harmadik.php");<br>
			&nbsp;&nbsp;&nbsp;&nbsp;else&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; include("fooldal.php");<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;?&gt;<br></span>
			&nbsp;&nbsp;&lt;/div&gt;<br>
			&lt;/body&gt;<br>
			&lt;/html&gt;<br><br><br>
		</span>
		
		
<h2 style="font-size:50;">Basic CSS syntax:</h2><br>
	<span> Értékadás:<br><br>
			&lt;?php<br>
			&nbsp;$a = 1.3;<br>
			&nbsp;$b = 321;<br>
			&nbsp;$valami = "hello";<br>
			?&gt;<br><br><br>
		</span>
		<span> Print:<br><br>
			&lt;?php<br>
			&nbsp;&nbsp;$a=5;<br>
			&nbsp;&nbsp;$b=6.5;<br>
			&nbsp;&nbsp;$c = $a + $b;<br>
			&nbsp;&nbsp;print($c);<br>
			?&gt;<br><br><br>
			
			FOR, WHICH, IF
		</span>
		<ul>
			<li>IF:<br>
				<span>
					if($x&gt;10)<br>
					{<br>
					&nbsp;&nbsp;print("Nagyobb");<br>
					}<br>
					else<br>
					{<br>
					&nbsp;&nbsp;print("Kisebb");<br>
					}<br>
				</span>VAGY<br>
				<span>if($oldal=="elso") { include("elso.php"); }<br>
					elseif($oldal =="masodik") { include("masodik.php"); }<br>
					elseif($oldal =="harmadik") { include("harmadik.php"); }<br>
					else { include("fooldal.php"); }<br><br>
				</span>
			</li>
			<li>FOR:<br>
				<span>for($i=0;$i&lt;10;$i=$i+1)<br>
					{<br>
					&nbsp;&nbsp;$j= $i*$i*$i; <br>
					&nbsp;&nbsp;print("$j&lt;br&gt;"); <br>
					}<br><br>
				</span>
			</li>
			<li>WHILE:<br>
				<span>
						$i=0;<br>
						while($i&lt;10)<br>
						{<br>
						&nbsp;&nbsp;$j= $i*$i*$i; <br>
						&nbsp;&nbsp;print("$j&lt;br&gt;"); <br>
						&nbsp;&nbsp;$i = $i+1;<br>
						}<br>
				</span>
			</li>
		</ul>
