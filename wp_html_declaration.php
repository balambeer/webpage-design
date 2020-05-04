<h1 style="font-size:50;">doctype</h1><br>
A <span class="bold_italic">!doctype</span> a HTML kód kötelező eleme, ami jelzi a webböngészőnek, hogy milyen típusú dokumentummal van doolga. 
Nem érzékeny a kis és nagy betűkre, azaz bárhogyan írható. 
A HTML5 bevezetésével a <span class="bold_italic">!doctype</span> deklarációja jelentősen leegyszerűsödött:
<br><br>
 

<table class="code_style">
		<tbody>	<tr><td>&lt!doctype html></td>					<td><span class="comment"> &nbsp&nbsp --&gt a dokumentum típusa (nincs záró eleme)</span></td></tr>
		</tbody>
</table>
<br>


A korábbi HTML4 verzióban a deklaráció a következőképpen nézett ki:
<br><br>

<table class="code_style">
		<tbody>	<tr><td>&lt!DOCTYPE HTML PUBLIC </td></tr>
				<tr><td>"-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"&gt </td></tr>
		</tbody>
</table>
<br><br>





<h1 style="font-size:50;">head</h1><br>
A <span class="bold_italic">head</span> a HTML kód azon része, ahol az ún. metaadatokat adhatjuk meg. ilyen metaadat pl. a külső stíluslap, a weboldal címe, a weboldal kulcsszavai, stb... 
A  <span class="bold_italic">head</span> a következő elemekből áll:
<br><br>


<table class="code_style">
		<tbody>	
				<tr><td>&lthead&gt</td>																		<td><span class="comment"> &nbsp&nbsp --&gt head kezdő tag</span></td></tr>
				<tr><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&lttitle&gt...&lt/title&gt </td>			<td><span class="comment"> &nbsp&nbsp --&gt a weboldal címe </span></td></tr>
				<tr><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&ltstyle&gt...&lt/style&gt</td>				<td><span class="comment"> &nbsp&nbsp --&gt formázás megadása</span></td></tr>
				<tr><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&ltmeta&gt </td>							<td><span class="comment"> &nbsp&nbsp --&gt meta adatok megadása</span></td></tr>
				<tr><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&ltlink&gt </td>							<td><span class="comment"> &nbsp&nbsp --&gt külső források megadása </span></td></tr>
				<tr><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&ltscript&gt </td>							<td><span class="comment"> &nbsp&nbsp --&gt script definiálása</span></td></tr>
				<tr><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&ltbase&gt </td>							<td><span class="comment"> &nbsp&nbsp --&gt default link megadása </span></td></tr>
				<tr><td>&lt/head&gt</td>																	<td><span class="comment"> &nbsp&nbsp --&gt head záró tag</span></td></tr>
		</tbody>
</table>
<br>





A <span class="bold_italic">title</span> páros tag között adhatjuk meg a weboldal címét. Ez többnyire nem látható, azonban így szerepelni fog a keresőmotorok eredményében és a kedvencek közé mentés során ezt a címet fogják felajánlani a böngészők a felhasználónak. 
<br><br>

<table class="code_style">
		<tbody>	
				<tr><td>&lthead&gt</td>																						<td><span class="comment"> &nbsp&nbsp --&gt head kezdő tag</span></td></tr>
				<tr><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&lttitle&gt [Az oldal címe] &lt/title&gt </td>				<td><span class="comment"> &nbsp&nbsp --&gt a weboldal címe </span></td></tr>
				<tr><td>&lt/head&gt</td>																					<td><span class="comment"> &nbsp&nbsp --&gt head záró tag</span></td></tr>
		</tbody>
</table>
<br>





A <span class="bold_italic">style</span> páros tag között definiálhajuk a HTML elemek formázását. Ez nem ajánlott, helyette külső stíluslap hsználata javasolt. 
<br><br> 

<table class="code_style">
		<tbody>	
				<tr><td>&lthead&gt</td>																									<td><span class="comment"> &nbsp&nbsp --&gt head kezdő tag</span></td></tr>
				<tr><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&ltstyle&gt </td>														<td><span class="comment"> &nbsp&nbsp --&gt style kezdő tag </span></td></tr>
				<tr><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp body {background-color: black;}</td>				<td><span class="comment"> &nbsp&nbsp --&gt formázás megadása</span></td></tr>
				<tr><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp h1 {color: red;} </td>								<td><span class="comment"> &nbsp&nbsp --&gt formázás megadása</span></td></tr>
				<tr><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&lt/style&gt </td>														<td><span class="comment"> &nbsp&nbsp --&gt style záró tag </span></td></tr>
				<tr><td>&lt/head&gt</td>																								<td><span class="comment"> &nbsp&nbsp --&gt head záró tag</span></td></tr>
		</tbody>
</table>
<br>





A <span class="bold_italic">meta</span> páratlan tag belsejében definiálhajuk a weboldal karakterkészletét, megadhatjuk az oldal rövid leírását,  a kulcsszavait, az oldal szerzőjének a nevét, illetve az oldal frissítésének gyakoriságát is beállíthatjuk. 
<br><br> 

<table class="code_style">
		<tbody>	
				<tr><td>&lthead&gt</td>																									<td><span class="comment"> &nbsp&nbsp --&gt head kezdő tag</span></td></tr>
				<tr><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&ltmeta charset="utf-8"&gt </td>										<td><span class="comment"> &nbsp&nbsp --&gt karakterkészlet definiálása </span></td></tr>
				<tr><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&ltmeta name="description" content= "..."&gt </td>						<td><span class="comment"> &nbsp&nbsp --&gt weboldal összefoglaló leírása</span></td></tr>
				<tr><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&ltmeta name="keywords" content= "...,..."&gt </td>						<td><span class="comment"> &nbsp&nbsp --&gt weboldal kulcsszavainak megadása</span></td></tr>
				<tr><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&ltmeta name="author" content= "..."&gt </td>						  	<td><span class="comment"> &nbsp&nbsp --&gt weboldal szerzőjének megadása </span></td></tr>
				<tr><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&ltmeta name="viewport" content= "..."&gt </td>							<td><span class="comment"> &nbsp&nbsp --&gt megjelenítési beállítások, képernyőméretekhez igazítás </span></td></tr>
				<tr><td>&lt/head&gt</td>																								<td><span class="comment"> &nbsp&nbsp --&gt head záró tag</span></td></tr>
		</tbody>
</table>
<br>




A <span class="bold_italic">link</span> páratlan tag belsejében definiálhajuk a weboldalhoz tartozó külső forrásokat. 
Amennyiben ezek nem a weboldal mappájában találhatók, akkor teljes elérési útvonal megadása szükséges. 
Itt hivatkozhatunk külső stíluslapra, azaz a weboldalunk formázását tartalmazó fájlra is. Több külső stíluslapot is használhatunk a formázás átláthatósága érdekében. 
Ugyanazon elemre definiált formázások közül több stíluslap esetében a később behivatkozott stíluslap felülírja a korábbit.
<br><br> 

<table class="code_style">
		<tbody>	
				<tr><td>&lthead&gt</td>																									<td><span class="comment"> &nbsp&nbsp --&gt head kezdő tag</span></td></tr>
				<tr><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&ltlink rel="stylesheet" href= "stíluslap1.css"&gt </td>				<td><span class="comment"> &nbsp&nbsp --&gt hivatkozás az első stíluslapra</span></td></tr>
				<tr><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&ltlink rel="stylesheet" href= "stíluslap2.css"&gt </td>				<td><span class="comment"> &nbsp&nbsp --&gt hivatkozás az második stíluslapra</span></td></tr>
				<tr><td>&lt/head&gt</td>																								<td><span class="comment"> &nbsp&nbsp --&gt head záró tag</span></td></tr>
		</tbody>
</table>
<br>


A <span class="bold_italic">script</span> tag esetén java script definiálható a head részben. A <span class="bold_italic">base</span> tag esetén pedig egy default link adható meg a weboldalhoz.
<br><br><br>

