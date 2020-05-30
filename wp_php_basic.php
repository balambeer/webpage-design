<h1>Változók</h1>
		
<p>A php kódot
<pre>
&lt;?php ?&gt;
</pre>
tag-be kell irni. A php kódban a változókat dollárjel jelöli (pl '$variable' egy változó). A kódban minden utasitást pontosvesszővel (';') kell zärni.</p>

<p>A változók alaptipusai a szokásos, int, double, string, boole. A deklarálásnál a tipus automatikusan hozzárendelődik a változóhoz, nem kell explicit deklarálni azt. Pl.
<pre>
&lt;?php
$number = 1;
$text = "szar";
?&gt;
</pre>
érvényes értékadások. Továbbá, a változók tipusa nem kötött, tehát a
<pre>
&lt;?php
$number = 1;
$number = "szar";
?&gt;
</pre>
kód hiba nélkül lefut. Listákat az array 'paranccsal' definiálhatsz.
<pre>
&lt;?php
$arrayExample = array(1, 2, "szar", "fos");
$arrayExample[4] = 5;
echo $arrayExample;
echo $arrayExample[4];
?&gt;
</pre>
A fenti kódból a tanulságok:
<ol>
<li>A lista nem tipus-kötött, vegyesen lehetnek benne különböző adattipusok.</li>
<li>A lista elemeket a '[]' operátorral tudod elérni, a lista 0-indexelt (az első elem indexe 0).</li>
<li>A lista nem fix méretű, azaz a php nem csinál ügyet abból, hogy a második sorban a lista 5ik elemét definiálom, holott olyan még nincs is.</li>
<li>A listára hivatkozva az echo parancsban az 'Array' kulcsszó jön válaszul.
Sok általános függvény meg van irva Array-ekre, de az array-re sztem nem érdemes az R-beli vektorként gondolni.</li>
</ol>
A másik király dolog a listákkal kapcsolatban, hogy hozzárendeléseket is meg tudunk adni a listában. Pl:
<pre>
&lt;?php
$assocativeArray = array("name"=>"Jani", "age"=>30, "height"=176);
echo $associativeArray["name"];
echo $associativeArray["age"];
?&gt;
</pre>
</p>

<h1>Függvények és control flow</h1>

<p>Az előző bekezdésben már volt szó röviden az 'echo' függvényről. Ez annyit csinál, hogy az argumentumát beszúrja a html oldalba az adott ponton.
Ergo, ezzel a paranccsal ki tudsz iratni a képernyőre változókat, de akár konkrét html kódot is be tudsz szúrni:
<pre>
&lt;?php
$number = 12;
echo $number;
echo "&lt;b&gt;Hello!&lt;/b&gt;&lt;br&gt;";
?&gt;
</pre>
Hasonló parancs az 'include' ami külső fájlok tartalmát szúrja be a html fájlba.
Nem tudom pontosan mi alapján találja meg a fájlnevet, sztem abban a könyvtárban keres ahol az adott lap van.
</p>

<p>Függvényeket természetesen definiálni is könnyen tudunk:
<pre>
&lt;?php
function printAge ($age) {
	echo "You are $age old.&lt;br&gt";
}
printAge (23);
?&gt;
</pre>
Normál esetben zárójelek között kell lennie a függvény argumentumainak a hiváskor, de pl az 'echo' úgy fest nem követeli meg a dolgot (de akkor se panaszkodik ha raksz zárójelet).
</p>

<p>Ha a függvényeddel vissza akarsz adatni valamit, azt a 'return' paranccsal tudod megtenni:
<pre>
&lt;?php
function computeArea ($height, $width) {
	return $height * $width;
	echo "Ezt a sort már nem hajtjuk végre";
}
$area = computeArea (5, 4);
echo $area;
?&gt;
</pre>
Itt annyit érdemes megjegyezni, hogy (mint általában), a return parancs egyben break-el a függvényből (amit adott esetben fel tudsz hasnálni).
</p>

<p>A szokásos control flow statement-ek a php-ban a szokásos formában vannak jelen:
<pre>
&lt;?php
if (condition1) {
	doStuff1();
} elseif (condition2) {
	diStuff2();
} else {
	doStuffElse();
}

switch ($variable) {
	case value1:
		doStuff1();
		break;
	case value2:
		doStuff2();
		break;
	default:
		doDefault();
?&gt;
</pre>
A switch az argumetumában megadott változó értéke szerint hajtja végre a parancsokat (tehát igazából csak egy speciális ifelse blokk.
A break parancsok azért vannak benne, mert alapból végignézi az összes esetet, ami felesleges ha már megvan a változó értéke (de a kód helyesen lefut a break-ek nélkük is).
</p>

<p>Ciklusok szintén a szokott formájúak:
<pre>
&lt;?php
for (i=1; i<=5; i++) {
	doStuff();
}

while (condition) {
	doStuff();
}

do {
	doStuff();
} while (condition);
?&gt;
</pre>
A while és a do-while között a különbség, hogy a while a ciklus elején tesztel, mig a do-while a végén (és igy legalább egyszer belelépsz a ciklus magjába).
</p>

<h1>Objektum oriantált cuccok</h1>

<p>A php objektum orientált struktúrákat is tud kezelni. Az alapok:
<pre>
&lt;?php
class Book {
	public $title;
	public $author;
	private $pages;
}

$book1 = new Book();
$book1->title = "Harry Potter";
$book1->author = "JK Rowling";

echo $book1->title;
?&gt;	
</pre>
Az osztály változóit simán felsorolod, a szokásos hozzáférési kulcsszavak itt is jelen vannak (meg gondolom még mások is).
Új objektumot a 'new' kulcsszó hoz létre, az oszály változóira a '->'  hivatkozik.
</p>

<p>Az osztály konstruktorját az alábbi módon adod meg:
<pre>
&lt;?php
class Book {
	public $title;
	public $author;
	private $pages;
	
	function __construct($theTitle, $theAuthor, $thePages) {
		$this->title = $theTitle;
		$this->author = $theAuthor;
		$this->pages = $thePages;
	}
}

$book1 = new Book("Harry Potter", "JK Rowling", 325);
echo $book1->title;
?&gt;	
</pre>
</p>

<p>A többi innen már kb kitalálható. Amit tudok tipp szinten, hogy hacsak nincs az embernek különösebb oka hogy publikussá tegye az osztály változóit és függvényeit, akkor ne tegye.
A publikus változók elönye a könnyű elérhetőség, és az ezzel járó kicsivel jobban olvasható kód.
A privát változók és függvények előnye pedig, hogy a kódodat különálló blokkokra tudod izolálni, ami megkönnyiti az áltáthatóségot és a debug-olást.
Ez különösen nagy projektek esetében hasznos tud lenni.
Csak hogy világos legyen ez mivel jár: privát változókat csak az osztály függvényei számára hozzáférhetők, tehát a mi példánkban:
<pre>
&lt;?php
class Book {
	public $title;
	public $author;
	private $pages;
	
	function __construct($theTitle, $theAuthor, $thePages) {
		$this->title = $theTitle;
		$this->author = $theAuthor;
		$this->pages = $thePages;
	}
	
	function setPages ($thePages) {
		$this->pages = $thePages;
	}
	
	function getPages () {
		return $this->pages;
	}
}

$book1 = new Book("Harry Potter", "JK Rowling", 325);
echo $book1->getPages();
$book1->setPages(400);
echo $book1->getPages();
?&gt;	
</pre>
Ezekre a függvényekre amúgy getter és setter néven szokás hivatkozni.
Amúgy a változók priváttá tevésének még egy előnye tud lenni: mivel te definiálod a setter-t, ezért tudod garantálni, hogy a változóid csak a megfelelő tipusúak lehetnek.
Ez kiváltképp előnyös lehet ha a változóidat az oldal felhasználói definiálják pl form-okon keresztül.
</p>

<p>Az utolsó dolog itt az alapoknál az öröklés. Az osztályod megörökölheti egy másik osztály változóit és függvényeit:
<pre>
&lt;?php
class Chef {
	function makeSteak () {
		echo "The chef makes steak.&lt;br&gt;";
	}
	
	function makeSpecialDish () {
		echo "The chef makes gordon bleu.&lt;br&gt;";
	}
}

class ItalianChef extends Chef {
	function makeSpecialDish () {
		echo "The chef makes pizza.&lt;br&gt;";
	}
}

$defaultChef = new Chef();
$italianChef = new ItalianChef();
$defaultChef->makeSpecialDish();
$italianChef->makeSteak();
$italianChef->makeSpecialDish();
?&gt;	
</pre>
A fenti példából annyi a lényeg, 1) hogy az olasz szakács is tud steak-et csinálni, mert azt megörökölte a sima szakácstól,
2) az olasz szakácsnál felül tudtuk irni a specialitását gordon bleu-ről pizzára.
</p>

<h1>Formok</h1>

<p>Ezt majd te megirod bővebben és szebben, de azért leirom mit tanultam. Szóval a form a legalapabb formában igy fest:
<pre>
&lt;form action="wp_php_basic.php" method="post"&gt;
	Szar: &lt;input type="text" name="szar">&lt;br&gt;
	Fos: &lt;input type="radio" name="fos" value="1"&gt;egy&lt;br&gt;
	Fos: &lt;input type="radio" name="fos" value="2"&gt;kettő&lt;br&gt;
	Fika: &lt;input type="checkbox" name="fika[]" value="3"&gt;három&lt;br&gt;
	Fika: &lt;input type="checkbox" name="fika[]" value="4"&gt;négy&lt;br&gt;
	&lt;input type="submit"&gt;
&lt;/form&gt;

&lt;?php
echo $_POST["szar"];
echo $_POST["fos"];
$fika =  $_POST["fika"];
echo $fika;
?&gt;	
</pre>
Namost, az én igencsak hiányos tudásom ez: a form 'action'-je a form-ot feldolgozó weblap cime.
Mivel most a 'wp_php_basic' php van megadva, ezért amikor kitöltöd a form-ot, erre az oldalra fog dobni, és lefuttatja a php kódot (kiirja a változókat).
Viszont ez az oldal NEM a 'wp_main.php'-n belül fog megjelenni, hanem önmagában. Jó lenne megérteni pontosan mi történik itt.
A másik érdekes dolog meg az, hogy a 'method' is többféle lehet. Én kétfélét tudok, 'post' és 'get', és annyit tudok, hogy a 'get' az kibassza az URL-be a változókat.
</p>


<form action="wp_php_basic.php" method="post">
	Szar: <input type="text" name="szar"><br>
	Fos: <input type="radio" name="fos" value="1">egy<br>
	Fos: <input type="radio" name="fos" value="2">kettő<br>
	Fika: <input type="checkbox" name="fika[]" value="3">három<br>
	Fika: <input type="checkbox" name="fika[]" value="4">négy<br>
	<input type="submit">
</form>


<?php
echo $_POST["szar"];
echo $_POST["fos"];
$fika =  $_POST["fika"];
echo $fika;
?>