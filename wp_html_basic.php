<h1 style="font-size:50;">HTML alapok</h1><br>
Egy HTML kód három fő egységből áll: <span class="bold_italic">!doctype</span>, <span class="bold_italic">head</span> és <span class="bold_italic">body</span>. 
A <span class="bold_italic">!doctype</span> arra szolgál, hogy megadjuk a weboldal nyelvtanát a böngésző számára. 
A <span class="bold_italic">head</span> az oldal fejrésze és a weboldalra vonatkozó meta adatokat tartalmazza. A <span class="bold_italic">body</span> pedig az oldal törzs része, amit a böngésző megjelenít, azaz az oldal tartalma.
<br><br>


<table class="code_style">
		<tbody>	<tr><td>&lt!doctype html></td>															<td><span class="comment"> &nbsp&nbsp --&gt a dokumentum típusa (nincs záró eleme)</span></td></tr>
				<tr><td>&lthtml&gt</td>																	<td><span class="comment"> &nbsp&nbsp --&gt html kezdő tag, itt kezdődik a html dokumentum</span></td></tr>
				<tr><td>&nbsp&nbsp&nbsp&nbsp&lthead&gt...&lt/head&gt </td>								<td><span class="comment"> &nbsp&nbsp --&gt fejrész, itt adhatóak meg a weboldal metaadatai</span></td></tr>
				<tr><td>&nbsp&nbsp&nbsp&nbsp&ltbody&gt</td>												<td><span class="comment"> &nbsp&nbsp --&gt törzsrész kezdő tag, itt kezdődik a html által megjelenített tartalmi rész</span></td></tr>
				<tr><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&ltheader&gt ... &lt/header&gt </td>	<td><span class="comment"> &nbsp&nbsp --&gt fejléc, a html beépített blokkja</span></td></tr>
				<tr><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&ltdiv&gt ... &lt/div&gt </td>			<td><span class="comment"> &nbsp&nbsp --&gt általános blokk </span></td></tr>
				<tr><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&ltfooter&gt ... &lt/footer&gt </td>	<td><span class="comment"> &nbsp&nbsp --&gt lábléc, a html beépített blokkja</span></td></tr>
				<tr><td>&nbsp&nbsp&nbsp&nbsp&lt/body&gt</td>											<td><span class="comment"> &nbsp&nbsp --&gt törzsrész záró tag, itt fejeződik be a html által megjelenített tartalmi rész </span></td></tr>
				<tr><td>&lt/html&gt</td>																<td><span class="comment"> &nbsp&nbsp --&gt html záró tag, itt záródik a html dokumentum</span></td></tr>
		</tbody>
</table>
<br>


A <span class="bold_italic">body</span> tartalmazhat (nem kötelező!) további blokkokat, melyek tovább tagolják a weblapot. Például a <span class="bold_italic">header</span> (fejléc), <span class="bold_italic">nav</span> (menü), 
<span class="bold_italic">footer</span> (lábléc) a html beépített blokkjai. Ezen felül definiálhatók általános blokkok is (<span class="bold_italic">div</span>-ek).<br><br><br>



<span class="bold_italic">Fontos!</span>
<ul>
	<li>A HTML elemek két csoportba sorolhatók, vannak <span class="bold_italic">inline</span> elemek (például a szöveg) és <span class="bold_italic">block</span> elemek.</li>
	<li>A <span class="bold_italic">block</span> elemeket a HTML alapértelmezés szerint egymás alá, az <span class="bold_italic">inline</span> elemeket pedig balról jobbra egymás mellé helyezi el.</li>
	<li>A két elemtípus közötti átválthatóságot a <span class="bold_italic">display</span> formázás biztosítja. Azaz egy <span class="bold_italic">inline</span> elem átalakítható <span class="bold_italic">block</span> elemmé és fordítva.</li>
	<li>A HTML alapértelmezés szerinti sorrendjén (egymás alá vagy egymás mellé rendezés) a <span class="bold_italic">float</span> formázással lehet változtatni.
	<li>A <span class="bold_italic">block</span> elemek tartalmazhatnak további <span class="bold_italic">block</span> elemeket. Így jön létre "szűlő-gyerek", illetve "testvér" kapcsolat a blokkok között. 
	A <span class="bold_italic">body</span> is egy blokk következésképpen ő minden más blokknak a szülője.</li>
	<li>A blokkok a weboldalon a <span class="bold_italic">position</span> formázással pozícionálhatóak.</li>
	<li>A weboldal formázása történhet a beépített HTML formázási parancsokkal (már nem szokás, mert átláthatatlanná teszi a kódot), illetve ún. beágyazott vagy külső stíluslapok (<span class="bold_italic">CSS</span>) alkalmazásával. 
	A beágyazott stíluslap kisebb módosításokra alkalmazható. A beágyaztás a <span class="bold_italic">&ltstyle&gt...&lt/style&gt</span> paranccsal történik. A külső stíluslap esetén a <span class="bold_italic">head</span>-ben hivtkoznunk kell a külső stíluslapra, hogy a HTML tudja, hogy onnan vesszük a formázást.</li>
</ul>