<h1 style="font-size:50;">Tároló elemek</h1><br>
<p>
A <span class="bold_italic">body</span>, mint fő tároló elem tipikusan <span class="bold_italic">header, wrapper, footer</span> tároló elemkre tagolódik. 
A <span class="bold_italic">wrapper</span> tartalmazza továbbá a <span class="bold_italic">nav</span> (navigáció, menü) és a <span class="bold_italic">content</span> (tényleges tartalom) tárolóelemeket. 
A <span class="bold_italic">content</span> további tárolóelemkre tagolható: <span class="bold_italic">main</span> (fő rész), <span class="bold_italic">section</span> (szakasz), <span class="bold_italic">article</span> (cikk) és <span class="bold_italic">aside</span> (oldalsó információs sáv).
Nem feltétlenül kell megjelenjen minden elem egy weblapon és az egyes tárolóelemek tetszőleges számú további tárolóelemkre bonthatók.  
</p>


<p>
Általános esetben a tárolóelemk megadása az általános <span class="bold_italic">div</span> tárolóelemmel történik. 
A formázás miatt a tároló elemeket egyedi <span class="bold_italic">id</span> vagy pedig több tárolóelemre alkalmazható <span class="bold_italic">class</span> címkével láthatjuk el.
</p>



<table class="code_style">
		<tbody>	
				<tr><td>&ltdiv id="header"&gt...&lt/div&gt</td>																		<td><span class="comment"> &nbsp&nbsp --&gt általánosan definiált header</span></td></tr>
				<tr><td>&ltdiv class="nav"&gt...&lt/div&gt</td>																		<td><span class="comment"> &nbsp&nbsp --&gt általánosan definiált nav</span></td></tr>
				<tr><td>&ltdiv id="footer"&gt...&lt/div&gt</td>																		<td><span class="comment"> &nbsp&nbsp --&gt általánosan definiált footer</span></td></tr>
		</tbody>
</table>
<br>



<p>
A HTML5-ben beépített tárolóelemk állnak rendelkezésre. Ilyen pl.: <span class="bold_italic">header, nav, footer, section, article, aside</span>.  
A beépített tárolóelemek formázása részben eltér az általásnosan definiált tárolóelemk formázásától. 
A beépített tárolóelemkből is helyezhető el több darab (pl.: két <span class="bold_italic">nav</span>), de természetesen ilyenkor célszerű ezeket egyedi <span class="bold_italic">id</span>-val vagy nem egyedi <span class="bold_italic">class</span> címkével ellátni.
A beépített HTML5 tárolóelemek a következőképpen definiálhatók:
</p>

<table class="code_style">
		<tbody>	
				<tr><td>&ltheader&gt...&lt/header&gt</td>																<td><span class="comment"> &nbsp&nbsp --&gt HTML5 beépített header</span></td></tr>
				<tr><td>&ltnav&gt...&lt/nav&gt</td>																		<td><span class="comment"> &nbsp&nbsp --&gt HTML5 beépített nav</span></td></tr>
				<tr><td>&ltfooter&gt...&lt/footer&gt</td>																<td><span class="comment"> &nbsp&nbsp --&gt HTML5 beépített footer</span></td></tr>
		</tbody>
</table>
<br>



<span class="bold_italic">Fontos!</span>
<ul>
	<li>A tároló elemek blokkszintű elemek, amiket a HTML alapértelmezés szerint egymás alatt helyez el a megadás sorrendjében. Az elhelyezés irányát a <span class="bold_italic">float</span> formázással változtathatjuk meg. .</li>
	<li>A tároló elemek között tartalmazástól függően "szülő-gyerek", illetve "testvér" kapcsolat alakul ki, ami a formázás során felhasználható.</li>
	<li>A tároló elemek pozícióját a weblapon belül a <span class="bold_italic">position</span> formázással adhatjuk meg.</li>
	<li>Egy általános tároló elem sorai szintén blokkszintű elemek, amelyekben elhelyezett karakterek, képek, stb... inline elemek.
</ul>

