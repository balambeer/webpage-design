<h1>A CSS nyelvtana</h1>

<h2>Rövid kitérő: kód megjelenitése weblapon</h2>

<p>Mivel a html kód megjelenitésekor a böngésző figyelmen kivül hagyja az üres helyeket, felmerül a kérdés, hogy hogyan ir ki az ember kódot weblapra kinlódás nélkül.</p>

<p>Előszór is a egy halom karakter foglalt a html kód számára, mint a kacsacsőrök, idézójelek, stb... ezek megjelenitéséhez kódot kell használni.
Ha ráguglizol azonnal megtalálod a kódokat, de a leggyakoribbak: '&lt;' = &amp;lt; (less than), '&gt;' = &amp;gt; (greater than), '&quot;' = &amp;quot;.
Betűkód helyett számkóddal is meg lehet ezeket adni, pl '&lt;' = &amp;#60; stb...</p>

<p>Másodszor, ahhoz, hogy a kód normálisan nézzen ki, nem árt behúzásokat használni stb. Ezt űgy a legkönnyebb elérni, hogy a kódot a &lt;pre&gt; páros cimkével látjuk el.
Ez azt mondja a böngészőnek, hogy ez a szövegrész előre formázott (pre-formatted), úgyhogy megtartja a szóközöket, sortöréseket, tabokat benne.
Ezen kivül még a &lt;code&gt; páros cimkét is használtam, ami lehetőséget ad további formázásra (pl hogy saját karaktertipust adjak meg a kódnak, stb...).
Amúgy lehet, hogy simán a pre cimkének adhatunk code class-t és úgy is működne a dolog - majd kipróbálhatjuk.</p>

<p>Végül PHP-val azt is el tudjuk érni, hogy ne kelljen kézzel beirkálni a spec karaktereket, hanem automatikusan átkonvertáltatjuk őket a géppel:
<pre><code>
&lt;? $str = &lt;&lt;&lt;'EOD'
  *write code here*
EOD;
  $str = htmlspecialchars($str, ENT_HTML5, ENT_NOQUOTES);
  $str = str_replace("&amp;amp;hellip;", "&amp;hellip;", $str);
  echo($str);
?&gt;
</code></pre>
 Ez lényegében annyit csinál, hogy a megjelenitendő kódot hozzárendeli egy változóhoz, és bepasszolja azt egy függvénybe ami megcsinálja a konvertálást.
 Egy dolgot aztán visszakonvertál, a 'hellpip'-et, ami a három pont (...). Nem tudom miért, de most le is szarom.
</p>

<h2>CSS stilusfájl csatolása html oldalhoz</h2>
<p>
Külső stilusfájl csatolása - ez a leggyakoribb mód:
<pre><code>
&lt;link rel=&quot;stylesheet&quot; href=$quot;szar.css&quot;&gt;
</code></pre>
Mi mindig ezt fogjuk használni, úh most nem is irok mást ide, csak annyit, hogy lehet netről is importálni, illetve a html fáljba direkt beleirni is.
</p>

<h2>CSS nyelvtan</h2>

<p>A CSS fájl egy lista, amiben minden elem az alábbi módon néz ki:
<pre><code>
kijelölő { tulajdonságok }
</code></pre>
A kijelölő megmondja, hogy a html fájl mely tag-jeit formázzuk épp, a tulajdonságok meg felsorolják hogy az adott elemek hogy nézzenek ki.
</p>

<p>A kijelölés az alábbi módokon történhet (az itt felsoroltak kombinálhatók):
<ul>
	<li>Elem kijelölők (type selector): ezek a weblap összes adott tipusú elemét kijelölik. Pl
	<pre><code>p { ... }</code></pre> 
	kijelöl minden p elemet a weblapon.
	</li>
	<li>Csoportos kijelölés (group of selectors): Egyszerre több elemet is kijelölhetek, vesszővel elválasztva a kijelölüket. Pl
	<pre><code>h1, h2 { ... }</code></pre> 
	kijelöl minden h1 és h2 elemet a weblapon.
	Ezzel óvatosnak kell lenni, mert ha a csoporton belül 1 kijelölő érvénytelen, akkor az egész kijelölés figyelmen kivül lesz hagyva.
	</li>
	<li>Azonositó kijelölő (ID selector): az 'id'-vel ellátott tag-eket tudod kijelölni. Az id egyedi kell legyen a weblapon. Pl
	<pre><code>#szar { ... }</code></pre> 
	kijelöli azt az elemet aminek 'id=&quot;szar&quot;'-t adtál meg.
	</li>
	<li>Származtatott kijelölő (descendant selector): egy id-val ellátott elem leszármazottjait jelölöd ki vele. Pl
	<pre><code>#szar p { ... }</code></pre>
	kijelöli az összes p elemet ami az 'id=&quot;szar&quot;' elemednek a leszármazottja.
	</li>
	<li>Oszt'j kijelölők (class selector): az összes adott tipusú, és adott osztályba sorolt elemet kijelöli. Pl
	<pre><code>p.fos { ... }</code></pre>
	kijelöli az összes olyan p elemet, amit a 'fos' osztályba soroltál.
	Ha nem adsz meg a pont előtt semmit, akkor az összes adott osztályba sorolt elem kijelölődik, függetlenül attól, hogy milyen tipusú.
	</li>
	<li>Ál-osztály kijelölő (pseudo-class selector): ezekkel tudod megadni, hogy hogy nézzenek ki linkek amik főlé viszed a kurzort, stb. Pl
	<pre><code>a:hover { ... }</code></pre>
	kijelöli azokat az 'a' (anchor) elemeket, amik felett van az egér-kurzor.
	További lehetőségek: <span style="font-family: monospace, monospace;">:link, :visited, :active, :focus, :target, :checked</span>, melyek sorrendben:
	még meg nem látogatott hivatkozás, meglátogatott hivatkozás, elem amire épp rákattintanak, egy elem fókuszba kerül user-input következtében (ezt nem igazán tudom mi),
	hivatkozásnál ugrási célpont megjelenitése, űrlapnál bejelölt választógomb vagy jelölőnégyzet.
	</li>
	<li>Pszeudo-elemek (preudo elements): blokkszintű elemek első sorai/betűi:
	<pre><code>p::first-line { ... }, p::first-letter { ... },</code></pre>
	vagy a html kódban nem szereplő tartalom beillesztése:
	<pre><code>p::before { ... }, p::after { ... }.</code></pre>
	</li>
	<li>'Logikai' kijelölők (universal, negation): a * kijelöl mindent, a tagadás
	<pre><code>:not()</code></pre>
	perdig letiltja a zárójelben levő elem kijelölését.
	</li>
	<li>Jellemző kijelölő (attribute selector): azokat az elemeket jelöli ki, melyeknek van egy adott jellemzője, ill annak egy adott értéke. Pl
	<pre><code>h1[title] { ... }</code></pre>
	azokat a h1-eket jelöli ki, melyeknek van 'title' jellemzője. A
	<pre><code>h1[title="szar"] { ... }</code></pre>
	pedig azokat, melyeknek a tile jellemzője 'szar'. Ezt lehet még tovább cifrázni, pl hogy a jellemző kezdődjön valahogy, vagy tartalmazzon valamilyen betőkombinációt, stb...
	</li>
	<li>Strukturális ál-osztályok: ez egy büdös nagy kategória, amivel ki leet jelölni specifikusan elemek leszármazottjait. Egy páldát már láttunk fentebb: a
	<pre><code>#szar p { ... }</code></pre>
	kijelöli a 'szar' id-val rendelkező elem p utódait. De sokkal-sokkal több lehetőség van. Csak egy kis izelitő:
	<pre><code>.szar > p { ... }</code></pre>
	kijelöli az összes 'szar' osztályba tartozó elem p gyerekeit. A
	<pre><code>div.szar > p:nth-child(2n+1) { ... }</code></pre>
	kijelöli az összes 'szar' osztályba tartozó div elem páratlanadik p gyerekeit. A
	<pre><code>div.szar > h2+p { ... }</code></pre>
	kijelöli az összes 'szar' osztályba tartozó div elem olyan p gyerekeit, amik egy h2 elem után vannak.
	Szerintem ennyi példa elég is, a lényeg hogy nagyon flexibilisen lehet elemeket kijelölni. A könyvben van több példa.
	</li>
</ul>
</p>

<h2>CSS hierarchia</h2>

<p>A CSS azt röviditi, hogy 'cascading stzle sheet'. A cascading kb azt jelenti, hogy rangsorolt, lépcsőzetes. Ez arra utal, hogy egy elem formázása mi alapján dől el.
A szabály egyszerű: az általános felől megyünk a specifikus felé. Azaz, alapértelmezett &rarr; külső stilusok &rarr; head-be ágyazott stilusok &rarr; szövegközi stilusok.</p>

<p>A másik szint ami mentén megy a formázás az pedig az öröklés. Ez annyit tesz, hogy egy elem összes leszáarmazottja megkapja az (értelmes) stilusjegyeket a szölőtől,
hacsak a leszáarmazottnál nincs más megadva. Pl ha a html body-jára megadsz egy betűtipust, akkor az összes body-ban levő elem megkapja azt (de az egyes elemekben persze át tudod irni).</p>

<h2>A weblap rendezési elve</h2>

<h3>Alapértelmezett elrendezés</h3>

<p>Alapbvetően 2 fajta elem lehet egy weblapon: blokk és inline. Az inline elemek gyakorlatilag úgy viselkednek, mint a karakterek, szóval azzal most nem foglalkozunk.
Csak annyit jegyzek meg, hogy minden egy doboz-modell alapján van felépitve, igy az inline elemek is kvázi hasonlóan épülnek fel, mint a nagyobb struktúrák, amikről itt szó lesz.</p>

<p>A lenti példák mindegyike 'div' elemekből épül fel. Egy 'example' osztályú befogalaló elem van egy szegéllyel, amibe szines hátterű 'div'-ek vannak bedobálva.
Ezen kivül semmilyen tulajdonság nincs megadva nekik, kivéve amit a példa szövege ir.</p>

<div class="example">
	<div class="ex11">Egy</div>
	<div class="ex12">Kettő</div>
	<div class="ex13">Három<br>Ide irok még egy sort</div>
</div>

<p>A dobozoknak persze meg tudsz aldni fix magasságot és szélességet 'px'-ben, valamint százalékban (a befoglaló bodoz méretének százalékában).
Margin-al és padding-el tudod igazitani a helykihagyást az elemek között, illetve a dobozon belül a tartalom elhelyezését. Ezekröl ennél többet nem is kell tudni szerintem.</p>

<h3>Úsztatás</h3>

<p>Az alapértelmezett 'egymás alá' elrendezést az úsztatás paranccsal lehet megváltoztatni 'egymás mellé'-re.
Ezt a 'float:left' és 'float:right' parancsok csinálják, és a 'clear:left' és 'clear:right' parancsok szűntetik meg (a 'clear:both' az mindkettő egyben).
A float parancs hatására az elem 'block' elemmé válik (tehát inline elemből nem kell külön blokkot csinálni ha úsztatod).</p>

<p>A könyv azt irja, hogy ha úsztatsz egy elemet, akkor az azt követő elemek is úszni fognak. Na én ezt nem igy tapasztalom.
Az alábbi példában a 2. elem kapott egy 'float:left'-et, a többi semmit.
A baltra úsztatás azt eredményezte, hogy a 2. doboznak már szélessége is a tartalomhoz igazodik.</p>

<div class="example">
	<div class="ex21">Egy</div>
	<div class="ex22">Kettő</div>
	<div class="ex23">Három</div>
	<div class="ex24">Négy</div>
	<div class="ex25">Öt</div>
</div>

<p>Ha a 2. és 3. elemnek adok 'float:left'-et, a többinek semmit, akkor igz fog kinézni az elrendezés:</p>

<div class="example">
	<div class="ex31">Egy</div>
	<div class="ex32">Kettő</div>
	<div class="ex33">Három</div>
	<div class="ex34">Négy</div>
	<div class="ex35">Öt</div>
</div>

<p>Sőt, úgy tűnik, hoy a float nem is öröklődik. Az alábbi példában pedig a 3. és 4. elem a 2. elem gyereke. A 2. kap egy 'float:left'-et.
Érdekes módon, a befoglaló dobozból kinyólik lefelé a 4. doboz. Olyan hangulata van a dolognak, mintha nem látná, hogy a 2. elemen belülre majd 2 dobozt kell rakni egymás alá.
Ez engem kurvára meglep...</p>

<div class="example">
	<div class="ex41">Egy</div>
	<div class="ex42">
		<div class="ex43">Három</div>
		<div class="ex44">Négy</div>
	</div>
	<div class="ex45">Öt</div>
</div>

<p>Ha már ez itt felmerült, akkor megjegyzem, hogy a túlnyúlás kezelése az 'overflow' tulajdonsággal megy.</p>

<p>Ha adok az 5.-nek egy 'clear:left'-et, akkor meg igy néz ki a dolog:</p>

<div class="example">
	<div class="ex51">Egy</div>
	<div class="ex52">
		<div class="ex53">Három</div>
		<div class="ex54">Négy</div>
	</div>
	<div class="ex55">Öt</div>
</div>

<h4>Úsztatás és tartalom</h4>

<p>Viszont simán balra úsztatgatni nem feltétlen a legjobb ötlet, ugyanis a tartalomtól függően érdekes elrendezéseket kaphatunk.
Ha a 2. blokkba irok még egy sort, és a CSS változatlan, akkor a 4. elem a 3. után balra jön, de nincs kihúzva balra a 2. elem alá.</p>

<div class="example">
	<div class="ex21">Egy</div>
	<div class="ex22">Kettő<br>Ide irok még egy sort.</div>
	<div class="ex23">Három</div>
	<div class="ex24">Négy</div>
	<div class="ex25">Öt</div>
</div>

<p>Ha a még a 4. blokkot is két sorosra csinálom, akkor a 4. blokk egészen érdekes alakot ölt (a CSS továbbra is változatlan).</p>

<div class="example">
	<div class="ex21">Egy</div>
	<div class="ex22">Kettő<br>Ide irok még egy sort.</div>
	<div class="ex23">Három</div>
	<div class="ex24">Négy<br>Ide is irok még egy sort.</div>
	<div class="ex25">Öt</div>
</div>

<p>Magyarul, ha értelmesen kinéző balra úsztatott szekciót akarok, akkor a legjobb ha azt csinálom, hogy egy befoglaló konténert adok a balra úsztatandó elemeknek, ami egy sort alakit ki.
Szóval pl a 2. elem lesz a befoglaló konténer, ez nem kap semmit. A 3. és a 4. elem lesz a konténeren belül, a 3. kap egy 'float:left'-et.</p>

<div class="example">
	<div class="ex71">Egy</div>
	<div class="ex72">
		<div class="ex73">Három</div>
		<div class="ex74">Négy</div>
	</div>
	<div class="ex75">Öt</div>
</div>

<p>Hasonló elrendezéseket még a flexbox-al lehet elérni. A flexbox egy konténer, ami a benne levő elemeket rugalmasan rendezi.
Meg lehet benne adni az elrendezés irányát a 'flex-direciton' tulajdonsággal (row, column, row-reverse, column-reverse), az elemek közti helyet a pedig 'justify-content' tulajdonsággal tudod állitani.
Pl egy vizszintes menüt jelképez a 2. konténer, benne a 3. és a 4. pedig egy-egy gombot. Annyi a dolgom, hogy a 2. kap egy 'display:flex; justify-content:space-around;'-t.</p>

<div class="example">
	<div class="ex61">Egy</div>
	<div class="ex62">
		<div class="ex63">Három</div>
		<div class="ex64">Négy</div>
	</div>
	<div class="ex65">Öt</div>
</div>

<h3>Dobozok viszonyitott pozicionálása</h3>

<p>Vélgül, a dobozok pozicionálása megadható a 'position' tulajdonsággal is, egy másik elemhez képest.
Ez úgy néz ki, hogy a position tulajdonságnál megadjuk a viszonyitási pontot, amihez képest akarjuk annak a helyzetét definiálni. Lehetséges értékei:
<ul>
<li>Static: ez az alapértelmezett, ez konkrétan nem csinál semmit,</li>
<li>Relative: az alapértelezett helye a viszonyitási pont,</li>
<li>Absolute: az elemet tároló tömb helye a viszonyitási pont,</li>
<li>Fixed: a képernyő a viszonyitási pont.</li>
</ul>
Ezt követően pedig a 'top, bottom, left, right' tulajdonságokkal, 'px'-ben megadjuk az eltolás mértékét.
Erre nem is adok példát, annyira adja magát - próbálgasd :)</p>

<p>Ha egymás tetejére tolunk elemeket, akkor a 'z-index' tulajdonsággal adhatunk meg, hogy melyik elemek legyenek felül ill. alul.</p>

<h3>A megjelenités módja</h3>

<p>A 'display' tulajdonsággal meg tudod adni hogy az adott elemet blokk-ként vagy inline elemként akarod kezelni. Emlékezz, úsztatott elemekből automatikusan blokkot csinál a böngésző.
Emellett megadható a 'none' érték is, ekkor az adott elem teljesen eltűnik (azaz nem csak üres hely lesz, hanem konkrétan mintha egyáltalán nem létezne.
Ha olyat akarsz, hogy a helye megmaradjon, azt a 'visibility:hidden' csinálja.</p>



<h2>Néhány CSS meghatározás:</h2>
	<table>
		<tbody>	<tr><td>Szín</td><td><span>color: red;</span> vagy <span>color: #ff00ff;</span></td></tr>
				<tr><td>Háttérszín</td><td><span>background: blue;</span> vagy <span>background: #00ff00;</span></td></tr>
				<tr><td>Háttérkép</td><td><span>background-image: url('kepfajl.png');</span></td></tr>
				<tr><td>Keret</td><td><span>border-style:solid/dashed/dotted;<br>border-width:5px;<br>border-color:black;</span></td></tr>
				<tr><td>Méret</td><td><span>width: 10px;<br>height: 100px;</span></td></tr>
				<tr><td>Betűtípus</td><td><span>font-family: Arial/Courier/Times<br>font-size: 12px;<br>font-style: italic;<br>font-weight: bold;</span></td></tr>
				<tr><td>Margó/behúzás</td><td><span>margin: 10px;<br>padding: 20px;</span></td></tr>
				<tr><td>Szöveg igazítása</td><td><span>text-align: center/right/justify;</span></td></tr>
				<tr><td>Kép középre igazítása</td><td><span>display: block;<br>margin-left: auto;<br>margin-right: auto;<br></span></td></tr>
				<tr><td>Úsztatás</td><td><span>float: right/left;</span></td></tr>
		</tbody>
	</table>

  
