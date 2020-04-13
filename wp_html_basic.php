<h1 style="font-size:50;">Basic HTML code:</h1><br>
	&lt!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><br> 
	&lthtml&gt<br>
		&nbsp &nbsp&nbsp&nbsp&lthead&gt <br> 
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&ltmeta http-equiv="Content-Type" content="text/html; charset=ISO-8859-2"&gt <br> 
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&ltlink rel="stylesheet" href="valami.css" type="text/css"@gt <br> 
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&lttitle&gtOldal címe&lt/title&gt<br> 
		&nbsp&nbsp&nbsp&nbsp&lt/head&gt <br> 
		&nbsp&nbsp&nbsp&nbsp&ltbody&gt <br> 
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&ltdiv class="menu"&gt <br> 
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&lta href="fooldal.html">Főoldal&lt/a&gt&ltbr&gt <br> 
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&lta href="elso.html">1. aloldal&lt/a&gt&ltbr&gt <br> 
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&lta href="masodik.html">2. aloldal&lt/a&gt&ltbr&gt <br> 
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&lta href="harmadik.html">3. aloldal&lt/a&gt&ltbr&gt <br> 
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&lt/div&gt <br> 
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&ltdiv class="tartalom"&gt <br> 
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp[Ide kerüljön a tartalom - ez mind a négy <br> 
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspHTML fájlban más legyen, a többi azonos.] <br> 
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&lt/div&gt <br> 
		&nbsp&nbsp&nbsp&nbsp&lt/body&gt <br> 
	&lt/html&gt <br> <br><br><br>
<h2 style="font-size:50;">Basic HTML syntax:</h2><br>
  <table>
	<tbody><tr><td>Főcím</td><td><span>&lt;h1&gt;&lt;/h1&gt;</span></td></tr>
		<tr><td>Alcím</td><td><span>&lt;h2&gt;&lt;/h2&gt;</span></td></tr>
		<tr><td>Bekezdés</td><td><span>&lt;p&gt;&lt;/p&gt;</span> vagy <span>&lt;div&gt;&lt;/div&gt;</span></td></tr>
		<tr><td>Sortörés</td><td><span>&lt;br&gt;</span> (nincs záró címke!)</td></tr>
		<tr><td>Vastag/dőlt/aláhúzott</td><td><span>&lt;b&gt;&lt;/b&gt;, &lt;i&gt;&lt;/i&gt;, &lt;u&gt;&lt;/u&gt;</span></td></tr>
		<tr><td>Beillesztett kép</td><td><span>&lt;img src="kep.png" alt="leírás"&gt;</span> (1: Nincs záró címke! 2: A képet ugyanabban a könyvtárban kell elhelyezni.)</td></tr>
		<tr><td>Külső/belső link</td><td><span>&lt;a href="http://elte.hu"&gt;szöveg&lt;/a&gt;</span>, <span>&lt;a href="fajl.html"&gt;szó&lt;/a&gt;</span></td></tr>
		<tr><td>Hivatkozási pont</td><td><span>&lt;a name="pont"&gt;&lt;/a&gt;</span></td></tr>
		<tr><td>Számozott lista</td><td><span>&lt;ol&gt;<br>
		&nbsp;&nbsp;&lt;li&gt;Valami&lt;/li&gt;<br>
		&nbsp;&nbsp;&lt;li&gt;Valami2&lt;/li&gt;<br>
		&lt;/ol&gt;</span></td></tr>
		<tr><td>Számozatlan lista</td><td><span>
		&lt;ul&gt;<br>
		&nbsp;&nbsp;&lt;li&gt;Valami&lt;/li&gt;<br>
		&nbsp;&nbsp;&lt;li&gt;Valami2&lt;/li&gt;<br>
		&lt;/ul&gt;</span></td></tr>
		<tr><td>Táblázat</td><td><span>&lt;table&gt;<br>
		&nbsp;&nbsp;&lt;tr&gt;&lt;td&gt;Bal fent&lt;/td&gt;&lt;td&gt;Jobb fent&lt;/td&gt;&lt;/tr&gt;<br>
		&nbsp;&nbsp;&lt;tr&gt;&lt;td&gt;Bal lent&lt;/td&gt;&lt;td&gt;Jobb lent&lt;/td&gt;&lt;/tr&gt;<br>
		&lt;/table&gt;</span></td></tr>
		<tr><td>Űrlap</td><td><span>
		&lt;form name="input" action="oldal.html" method="get"&gt;<br>
		&nbsp;&nbsp;&lt;label&gt;Vezetéknév&lt;/label&gt;<br>
		&nbsp;&nbsp;&lt;input type="text" name="vnev"&gt;<br>
		&nbsp;&nbsp;&lt;label&gt;Keresztnév&lt;/label&gt;<br>
		&nbsp;&nbsp;&lt;input type="text" name="knev"&gt;<br>
		&nbsp;&nbsp;&lt;input type="submit" value="Mehet"&gt;<br>
		&lt;/form&gt;
		</span></td></tr>
	</tbody>
  </table>
