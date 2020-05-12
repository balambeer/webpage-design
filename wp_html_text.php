<h1 style="font-size:50;">Szöveg elemek</h1><br>
<p>
A legalapvetőbb szöveg elemek a <span class="bold_italic">&lth&gt...&lt/h&gt</span> (címsor), a <span class="bold_italic">&ltp&gt...&lt/p&gt</span> (bekezdés) és a <span class="bold_italic">&ltbr&gt</span> (sortörés) elemek. 
</p>


<h2 style="font-size:50;">címsor <span class="bold_italic">(&lth&gt...&lt/h&gt)</span></h2>
<p>
A címsornak a HTML-ben 6 szintje került beébítésre <span class="bold_italic">&lth1&gt...&lt/h1&gt </span>-től kezdődően <span class="bold_italic">&lth6&gt...&lt/h6&gt </span>-ig a hierarchiának megfelelő sorrendben. 
A címsorok blokkszintű elemek, ennek megfelelően minden címsor új sorban kezdődik. 
A címsorok alapértelmezés szerint félkövér betűtipussal vannak szedve, a betűméret bedig a h1-től a h6-ig a hierarchiát követve csökken.
</p>


<h2 style="font-size:50;">bekezdés <span class="bold_italic">(&ltp&gt...&lt/p&gt)</span></h2>
<p>
A bekezdés <span class="bold_italic">&ltp&gt...&lt/p&gt </span> a címsorhoz hasonlóan blokkszintű elem, ennek megfelelően minden bekezdés új sorban kezdődik. 
Alapértelmezés szerint két bekezdés között a böngészők egy üres sort jelenítenek meg, szövegbehúzás nincs. 
</p>


<h2 style="font-size:50;">sortörés <span class="bold_italic">(&ltbr&gt)</span></h2>
<p>
A sortörés <span class="bold_italic">&ltbr&gt</span> áratlan elem. 
A böngészők a HTML kódban alkalmazott "ENTER"-es sortöréseket figyelmen kívül hagyja, ezért van szükség külön elem a sortörés megadásához. 
</p>


<span class="bold_italic">Fontos!</span>
<ul>
	<li>A címsor és bekezdés elemek alapértelmezet formázásától a CSS segítségével ellehet térni.</li>
	<li>A címsor és a bekezdés elemek a blokk tároló elemkhez hasonlóan elláthatók egyei <span class="bold_italic">id</span>, illetfe osztály szintű <span class="bold_italic">class</span> azonosítóval a CSS-ben történő formázáshoz. </li>
</ul>
<br>


<h2 style="font-size:50;">listák </h2>
<p>
A HTML három listatípust különböztet meg: számozott, számozatlan és definíciós listát.
</p>
számozott (rendezett) lista:
	<table class="code_style">
		<tbody>	
				<tr><td>&ltol&gt</td>																					<td><span class="comment"> &nbsp;&nbsp; --&gt számozott lista kezdő tag</span></td></tr>
				<tr><td>&nbsp;&nbsp; &ltli&gt ... &lt/li&gt</td>														<td><span class="comment"> &nbsp;&nbsp; --&gt első listaelem</span></td></tr>
				<tr><td>&nbsp;&nbsp; &ltli&gt ... &lt/li&gt</td>														<td><span class="comment"> &nbsp;&nbsp; --&gt második listaelem</span></td></tr>
				<tr><td>&nbsp;&nbsp; &ltli&gt ... &lt/li&gt</td>														<td><span class="comment"> &nbsp;&nbsp; --&gt harmadik listaelem</span></td></tr>
				<tr><td>&nbsp;&nbsp; ...</td>																			<td><span class="comment"> &nbsp;&nbsp; --&gt ...</span></td></tr>
				<tr><td>&lt/ol&gt</td>																					<td><span class="comment"> &nbsp;&nbsp; --&gt számozott lista záró tag</span></td></tr>
		</tbody>
	</table>
	<br>

számozatlan (rendezetlen) lista:
	<table class="code_style">
		<tbody>	
				<tr><td>&ltul&gt</td>																					<td><span class="comment"> &nbsp;&nbsp; --&gt számozatlan lista kezdő tag</span></td></tr>
				<tr><td>&nbsp;&nbsp; &ltli&gt ... &lt/li&gt</td>														<td><span class="comment"> &nbsp;&nbsp; --&gt első listaelem</span></td></tr>
				<tr><td>&nbsp;&nbsp; &ltli&gt ... &lt/li&gt</td>														<td><span class="comment"> &nbsp;&nbsp; --&gt második listaelem</span></td></tr>
				<tr><td>&nbsp;&nbsp; &ltli&gt ... &lt/li&gt</td>														<td><span class="comment"> &nbsp;&nbsp; --&gt harmadik listaelem</span></td></tr>
				<tr><td>&nbsp;&nbsp; ...</td>																			<td><span class="comment"> &nbsp;&nbsp; --&gt ...</span></td></tr>
				<tr><td>&lt/ul&gt</td>																					<td><span class="comment"> &nbsp;&nbsp; --&gt számozatlan lista záró tag</span></td></tr>
		</tbody>
	</table>
	<br>

definíciós lista:
	<table class="code_style">
		<tbody>	
				<tr><td>&ltdl&gt</td>																					<td><span class="comment"> &nbsp;&nbsp; --&gt definíciós lista kezdő tag</span></td></tr>
				<tr><td>&nbsp;&nbsp; &ltdt&gt</td>																		<td><span class="comment"> &nbsp;&nbsp; --&gt első meghatározandó kifejezés kezdő tag</span></td></tr>
				<tr><td>&nbsp;&nbsp; &nbsp;&nbsp; &ltdd&gt...&lt/dd&gt</td>															<td><span class="comment"> &nbsp;&nbsp; --&gt első meghatározás</span></td></tr>
				<tr><td>&nbsp;&nbsp; &lt/dt&gt</td>																		<td><span class="comment"> &nbsp;&nbsp; --&gt első meghatározandó kifejezés záró tag</span></td></tr>
				<tr><td>&nbsp;&nbsp; &ltdt&gt</td>																		<td><span class="comment"> &nbsp;&nbsp; --&gt második meghatározandó kifejezés kezdő tag</span></td></tr>
				<tr><td>&nbsp;&nbsp; &nbsp;&nbsp; &ltdd&gt...&lt/dd&gt</td>															<td><span class="comment"> &nbsp;&nbsp; --&gt második meghatározás</span></td></tr>
				<tr><td>&nbsp;&nbsp; &lt/dt&gt</td>																		<td><span class="comment"> &nbsp;&nbsp; --&gt második meghatározandó kifejezés záró tag</span></td></tr>
				<tr><td>&nbsp;&nbsp; ...</td>																			<td><span class="comment"> &nbsp;&nbsp; --&gt ...</span></td></tr>
				<tr><td>&lt/dl&gt</td>																					<td><span class="comment"> &nbsp;&nbsp; --&gt definíciós lista záró tag</span></td></tr>
		</tbody>
	</table>
	<br>

<span class="bold_italic">Fontos!</span>
<ul>
	<li>A listák és a lista elemek is alapértelmezés szerint blokkszintű elemek. </li>
	<li>A számozott listák kezdőértéke 1-től eltérő is lehet, amit a <span class="bold_italic">start</span> paraméterrel állíthatunk be. </li>
	<li>A számozott listák elemeihez tetszőleges értékek rendelhetőek, amit a  <span class="bold_italic">value</span> paraméterrel állíthatunk be. </li>
	<li>A számozott listák visszafelé is számozhatóak, amit a  <span class="bold_italic">reversed</span> paraméterrel állíthatunk be. </li>
</ul>
<br>


<h2 style="font-size:50;">táblázatok </h2>
<p>
A HTML-ben egy egyszerű tábla szerkezete a következő:
</p>
	<table class="code_style">
		<tbody>	
				<tr><td>&lttable&gt</td>																										<td><span class="comment"> &nbsp;&nbsp; --&gt; táblázat kezdő tag</span></td></tr>
				<tr><td>&nbsp;&nbsp; &ltcaption&gt[táblázat címe]&ltcaption&gt</td>																<td><span class="comment"> &nbsp;&nbsp; --&gt; táblázat címe</span></td></tr>
				<tr><td>&nbsp;&nbsp; &lttr&gt</td>																								<td><span class="comment"> &nbsp;&nbsp; --&gt; első sor kezdő tag</span></td></tr>
				<tr><td>&nbsp;&nbsp; &nbsp;&nbsp; &ltth&gt[1.oszlop]&lt/th&gt &ltth&gt[2.oszlop]&lt/th&gt &ltth&gt[3.oszlop]&lt/th&gt... </td>	<td><span class="comment"> &nbsp;&nbsp; --&gt; első sor elemei, az oszlopcímek</span></td></tr>
				<tr><td>&nbsp;&nbsp; &lt/tr&gt </td>																							<td><span class="comment"> &nbsp;&nbsp; --&gt; első sor záró tag</span></td></tr>
				<tr><td>&nbsp;&nbsp; &lttr&gt</td>																								<td><span class="comment"> &nbsp;&nbsp; --&gt; második sor kezdő tag</span></td></tr>
				<tr><td>&nbsp;&nbsp; &nbsp;&nbsp; &ltth&gt[1.sor]&lt/th&gt &lttd&gt[1,1]&lt/td&gt &lttd&gt[1,2]&lt/td&gt... </td>				<td><span class="comment"> &nbsp;&nbsp; --&gt; második sor elemei, címmel kezdődően</span></td></tr>
				<tr><td>&nbsp;&nbsp; &lt/tr&gt </td>																							<td><span class="comment"> &nbsp;&nbsp; --&gt; második sor záró tag</span></td></tr>
				<tr><td>&nbsp;&nbsp; &lttr&gt</td>																								<td><span class="comment"> &nbsp;&nbsp; --&gt; harmadik sor kezdő tag</span></td></tr>
				<tr><td>&nbsp;&nbsp; &nbsp;&nbsp; &ltth&gt[2.sor]&lt/th&gt &lttd&gt[2,1]&lt/td&gt &lttd&gt[2,2]&lt/td&gt... </td>				<td><span class="comment"> &nbsp;&nbsp; --&gt; harmadik sor elemei, címmel kezdődően</span></td></tr>
				<tr><td>&nbsp;&nbsp; &lt/tr&gt </td>																							<td><span class="comment"> &nbsp;&nbsp; --&gt; harmadik sor záró tag</span></td></tr>
				<tr><td>&nbsp;&nbsp; ...</td>																									<td><span class="comment"> &nbsp;&nbsp; --&gt; ...</span></td></tr>
				<tr><td>&lt/table&gt</td>																										<td><span class="comment"> &nbsp;&nbsp; --&gt; táblázat záró tag</span></td></tr>
		</tbody>
	</table>
	<br>

<span class="bold_italic">Fontos!</span>
<ul>
	<li>A táblázatok és azok cellái is blokkszintű elemek. </li>
	<li>A táblázat elemei lehetnek táblázatok, listák (egymásba ágyazható). </li>
	<li>A táblázatok esetén van lehetőség cella egyesítésre: sor átfogás --> <span class="bold_italic">rowspan</span>, illetve oszlop átfogás --> <span class="bold_italic">colspan</span>. </li>
	<li>A táblázat tovább bontható <span class="bold_italic">thead, tbody, tfoot</span> egységekre. </li>
	<li>A formázáshoz kialakíthatóak oszlopcsoportok, de ez nem annyira van használatban, mert a böngészők korlátozottan tudják értelmezni. </li>
</ul>
<br>



<h2 style="font-size:50;">képek </h2>
<p>
Kép beillesztése HTML-be: 
</p>

	<table class="code_style">
		<tbody>	
				<tr><td>&ltimg</td>																						<td><span class="comment"> &nbsp;&nbsp; --&gt; kép páratlan címke</span></td></tr>
				<tr><td>&nbsp;&nbsp; src="..." </td>																	<td><span class="comment"> &nbsp;&nbsp; --&gt; elérési út megadása (kötelező paraméter!!!)</span></td></tr>
				<tr><td>&nbsp;&nbsp; width="..." </td>																	<td><span class="comment"> &nbsp;&nbsp; --&gt; kép szélessége</span></td></tr>
				<tr><td>&nbsp;&nbsp; height="..." </td>																	<td><span class="comment"> &nbsp;&nbsp; --&gt; kép magassága</span></td></tr>
				<tr><td>&nbsp;&nbsp; alt="..." </td>																	<td><span class="comment"> &nbsp;&nbsp; --&gt; kép helyettesítő szövege, ha nem töltődik le a kép</span></td></tr>
				<tr><td>&nbsp;&nbsp; title="..." </td>																	<td><span class="comment"> &nbsp;&nbsp; --&gt; szöveges infó, ami csak az egér hatására jelenik meg</span></td></tr>
				<tr><td>&gt</td>																						<td><span class="comment"> &nbsp;&nbsp; --&gt; páratlan cimke zárása</span></td></tr>
		</tbody>
	</table>
	<br>

<span class="bold_italic">Fontos!</span>
<ul>
	<li>A képek alapértelmezés szerint inline elemek és nincs keretük. </li>
	<li>A kép szélességének és magasságának megadása ajánlott, mert a böngészők letöltődés előtt tudják pozícionálni a képet és így nem változik meg a honlap szerkezete. 
	Ha a kép fizikai méretétől eltérő méretet adunk meg, akkor kicsinyítünk, illetve nagyítunk, amivel a kép torzulhat.</li>
	<li>A képhez hasonlóan lehet videót és hangfájlt is elhelyezni a honlapon. </li>
</ul>
<br>


<h2 style="font-size:50;">hivatkozások </h2>
<p>
Hivatkozások beillesztése HTML-be: 
</p>

	<table class="code_style">
		<tbody>	
				<tr><td>&lt;a href="..."&gt; &lt;/a&gt; ; </td>															<td><span class="comment"> &nbsp;&nbsp; --&gt; külső hivatkozás</span></td></tr>
				<tr><td>&lt;a id="..."&gt; &lt;/a&gt; </td>																<td><span class="comment"> &nbsp;&nbsp; --&gt; belső hivatkozás</span></td></tr>
				<tr><td>&lt;a href="..." download&gt; &lt;/a&gt; </td>													<td><span class="comment"> &nbsp;&nbsp; --&gt; külső hivatkozás letöltéssel</span></td></tr>
		</tbody>
	</table>
	<br>

<span class="bold_italic">Fontos!</span>
<ul>
	<li>A hivatkozások alapértelmezés szerint blokkszintű elemek. </li>
</ul>
<br>


<h2 style="font-size:50;">speciális karakterek </h2>
<p>
A HTML kódban bizonyos karakterek foglaltak, ezért ezeket speciális változóneveken keresztül érhetjük el. 
A teljesség igénye nélkül a legfontosabb speciális karakterek:
</p>

	<table class="table">
		<tbody>	<tr><td><span class="bold_italic">Speciális karakter</span></td>											<td><span class="bold_italic">Kód</span></td></tr>
				<tr><td>&amp;</td>																							<td>&amp;amp;</td></tr>
				<tr><td>&lt;</td>  																							<td>&amp;lt;</td></tr>
				<tr><td>&gt;</td>  																							<td>&amp;gt;</td></tr>
				<tr><td>&quot;</td>  																						<td>&amp;quot;</td></tr>
				<tr><td>"szóköz"</td>  																						<td>&amp;nbps;</td></tr>
		</tbody>
	</table>
	<br>
	
<h2 style="font-size:50;">egyéb szöveg elemek </h2>
<p>
A HTML kódban vannak további szöveg elemek, melyek stílusra elérhetőek CSS formázáson keresztül is azonban ezen elem használata sok esetben tartalmi megkülönböztetést is jelent. 
A teljesség igénye nélkül a legfontosabb egyéb szövegelemek:
</p>

	<table class="code_style">
		<tbody>	
				<tr><td>&ltq&gt ... &ltq&gt</td>																						<td><span class="comment"> &nbsp&nbsp --&gt idézet, soron belül</span></td></tr>
				<tr><td>&ltblockquote&gt ... &ltblockquot&gt</td>																		<td><span class="comment"> &nbsp&nbsp --&gt idézet, tömbre (pl.: bekezdésre)</span></td></tr>
				<tr><td>&ltabbr title="..."&gt ... &ltabbr&gt</td>																		<td><span class="comment"> &nbsp&nbsp --&gt rövidítés, "title" megjelenik, ha a kurzor a szó fölé kerül</span></td></tr>
				<tr><td>&ltdfn title="..."&gt ... &ltdfn&gt</td>																		<td><span class="comment"> &nbsp&nbsp --&gt definíció, "title" megjelenik, ha a kurzor a szó fölé kerül</span></td></tr>
				<tr><td>&lti&gt ... &lti&gt</td>																						<td><span class="comment"> &nbsp&nbsp --&gt dőltbetű</span></td></tr>
				<tr><td>&ltb&gt ... &ltb&gt</td>																						<td><span class="comment"> &nbsp&nbsp --&gt félkövér kiemelés</span></td></tr>
				<tr><td>&ltu&gt ... &ltu&gt</td>																						<td><span class="comment"> &nbsp&nbsp --&gt aláhúzás</span></td></tr>
				<tr><td>&ltsub&gt ... &ltsub&gt</td>																					<td><span class="comment"> &nbsp&nbsp --&gt alsó index</span></td></tr>
				<tr><td>&ltsup&gt ... &ltsup&gt</td>																					<td><span class="comment"> &nbsp&nbsp --&gt felső index</span></td></tr>
		</tbody>
	</table>
	<br>