<h1>A CSS nyelvtana</h1>

<p>kakukk</p>

<p><span style="color:red">Megj: Manuálisan kell sortüréseket hozzáadnom a szöveghez, különben a tartalom becsúszik a sidenav alá.
Majd később rendezem/rendezzük ezt.</span></p>

<h2>Rövid kitérő: kód megjelenitése weblapon</h2>

<p>Mivel a html kód megjelenitésekor a böngésző figyelmen kivül hagyja az üres helyeket, felmerül a kérdés, hogy hogyan ir ki az ember kódot weblapra kinlódás nélkül.</p>

<p>Előszór is a egy halom karakter foglalt a html kód számára, mint a kacsacsőrök, idézójelek, stb... ezek megjelenitéséhez kódot kell használni.<br>
Ha ráguglizol azonnal megtalálod a kódokat, de a leggyakoribbak: '&lt;' = &amp;lt; (less than), '&gt;' = &amp;gt; (greater than), '&quot;' = &amp;quot;.<br>
Betűkód helyett számkóddal is meg lehet ezeket adni, pl '&lt;' = &amp;#60; stb...</p>

<p>Másodszor, ahhoz, hogy a kód normálisan nézzen ki, nem árt behúzásokat használni stb. Ezt űgy a legkönnyebb elérni, hogy a kódot a &lt;pre&gt; páros cimkével látjuk el.<br>
Ez azt mondja a böngészőnek, hogy ez a szövegrész előre formázott (pre-formatted), úgyhogy megtartja a szóközöket, sortöréseket, tabokat benne.<br>
Ezen kivül még a &lt;code&gt; páros cimkét is használtam, ami lehetőséget ad további formázásra (pl hogy saját karaktertipust adjak meg a kódnak, stb...).<br>
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
 Ez lényegében annyit csinál, hogy a megjelenitendő kódot hozzárendeli egy változóhoz, és bepasszolja azt egy függvénybe ami megcsinálja a konvertálást.<br>
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
	kijelöl minden h1 és h2 elemet a weblapon.<br>
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
	kijelöli az összes olyan p elemet, amit a 'fos' osztályba soroltál.<br>
	Ha nem adsz meg a pont előtt semmit, akkor az összes adott osztályba sorolt elem kijelölődik, függetlenül attól, hogy milyen tipusú.
	</li>
	<li>Ál-osztály kijelölő (pseudo-class selector): ezekkel tudod megadni, hogy hogy nézzenek ki linkek amik főlé viszed a kurzort, stb. Pl
	<pre><code>a:hover { ... }</code></pre>
	kijelöli azokat az 'a' (anchor) elemeket, amik felett van az egér-kurzor.<br>
	További lehetőségek: <span style="font-family: monospace, monospace;">:link, :visited, :active, :focus, :target, :checked</span>, melyek sorrendben:
	még meg nem látogatott hivatkozás, meglátogatott hivatkozás, elem amire épp rákattintanak, egy elem fókuszba kerül user-input következtében (ezt nem igazán tudom mi),<br>
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
	kijelöli az összes 'szar' osztályba tartozó div elem olyan p gyerekeit, amik egy h2 elem után vannak.<br>
	Szerintem ennyi példa elég is, a lényeg hogy nagyon flexibilisen lehet elemeket kijelölni. A könyvben van több példa.
	</li>
</ul>
</p>

<h2>CSS hierarchia</h2>

<p>A CSS azt röviditi, hogy 'cascading stzle sheet'. A cascading kb azt jelenti, hogy rangsorolt, lépcsőzetes. Ez arra utal, hogy egy elem formázása mi alapján dől el.<br>
A szabály egyszerű: az általános felől megyünk a specifikus felé. Azaz, alapértelmezett &rarr; külső stilusok &rarr; head-be ágyazott stilusok &rarr; szövegközi stilusok.</p>

<p>A másik szint ami mentén megy a formázás az pedig az öröklés. Ez annyit tesz, hogy egy elem összes leszáarmazottja megkapja az (értelmes) stilusjegyeket a szölőtől,<br>
hacsak a leszáarmazottnál nincs más megadva. Pl ha a html body-jára megadsz egy betűtipust, akkor az összes body-ban levő elem megkapja azt (de az egyes elemekben persze át tudod irni).</p>

<h2>Néhány CSS meghatározás:</h2><br>
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

  
