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

<h2 style="font-size:50;">Speciális karakterek </h2>
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
	
<h2 style="font-size:50;">Egyéb szöveg elemek </h2>
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