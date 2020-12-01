<?php include("header.php") ?> 



<h1>Mikulás látogatási kérelem</h1>
<h3>Bevezető</h3>
<p>Nagy pelyhekben hull a hó, mindjárt itt a Mikulás. Persze rengeteg dolga van és minden gyerek egyformán fontos neki, ezért segítségre van szüksége. Az ajándékigények feldolgozásának elősegítésére kérlek, teljesen őszintén töltsd ki az alábbi űrlapot! Ne feledd! A Mikuás előtt nincs titok.</p>

<form action="feldolgoz.php" method="GET">
<h3>A jelentkező adatai</h3>
*Milyen nevet adtak neked a szüleid?<br>   
 <input type="text" name="nev" required=""><br>   
*Hol élsz?<br>
<input type="text" name="cim" required=""><br>
<h3>Jó voltál?</h3>
<p>Kérlek, az alábbi skálán jelöld be az elmúlt 12 havi magaviseletednek megfelelő értéket! (Ne feledd! A Mikulás előtt nincs titok.)</p>
1 Angyali - Vásott 10<br>
<input type="range" name="josagmero" min="1" max="10" value="10"><br>
Mit szeretnél karácsonyra?<br>
<textarea name="kivansagok" rows="10" cols="50"></textarea>
<h3>Hozzáférési adatok</h3>
<p>*Mi a tetőtök lejtésszöge? <input type="number" name="tetoSzoge" min="0" max="90" required="">fok <br>Ha a tető lejtése eléri/meghaladja a 30 fokot, akkor kérlek, csatolj egy vázlatrajzot a tetőről, feltüntetve legalább kettő (2) rögzítési pontot (pl. TV antenna, szellőző, kémény, stb.)  <input type="file" name="tetoVazlatrajz"></p>
A tetőtök képes elviselni legalább 1 tonna tömeget négyzetméterenként?
(9 rénszarvas, komplett szán, meg egy túlméretes pali furi ruhában)<br>
<input type="radio" name="teherbiras" value="igen" checked="">
<label>Igen</label><br>
<input type="radio" name="teherbiras" value="nem">
<label>Nem / Ebben az esetben az autóbehajtón egyetlen macskánál nagyobb tárgy sem maradhat.</label><br>
<input type="radio" name="teherbiras" value="talan">
<label>Talán / Ebben az esetben kérlek, csatolj egy regisztrált tervező által kiállított nyilatkozatot a tető átlagos teherbírásáról.<input type="file" name="tetoNyilatkozat"></label><br>
Van kéményetek?<br>
<input type="radio" name="kemeny" value="True" checked="">
<label>Igen / Ebben az esetben mindenképpen ellenőrizd, hogy a tűztér mentes minden parázsló és éles tárgytól. Mikor volt sepertetve?<input type="date" name="sopresDatuma"><br> A légjárat becsült átlagos átmérője <input type="number" name="lejaratAtmero" min="0"> centiméter</label><br>
<input type="radio" name="kemeny" value="False">
<label>Nincs / Ebben az esetben kérlek, aznap este hagyd a hátsó ajtót résnyire nyitva.</label><br>
<h3>Ajándék-elhelyezés részletei</h3>
Hol szeretnéd megtalálni a meglepetést?<br>
<input type="radio" name="ajandekHelye" value="labbeli" checked="">
<label>Lábbeliben (Kérlek, add meg a méretét)<input type="number" name="labbeliMeret" min="0" max="100"></label><br>
<input type="radio" name="ajandekHelye" value="agy">
<label>Ágy végében</label><br>
<input type="radio" name="ajandekHelye" value="karacsonyfa">
<label>Karácsonyfa alatt</label><br>
<input type="radio" name="ajandekHelye" value="elrjetve">
<label>Elrejtve / Ebben az esetben állítsd be a megtalálási nehézséget
Azonnal legyen meg - Rámehet az egész nap<input type="range" name="nehezseg" min="0" max="24" value="5"></label>
<h3>Frissítőkről szóló rész</h3>
Ki lesz készítve némi frissítő?<br>
<input type="radio" name="leszFrissito" value="true" checked="">
<label>Igen</label><br>
Milyen típusú frissítők lesznek kikészítve? (Kérlek, egynél mindenképpen többet jelölj be!)<br>

<?php   

$frissito = array("Brandy","Rum" ,"Gin", "Scotch", "Whisky", "Vodka" ,"Pálinka", "Sör", "Bor");

foreach ($frissito as $ital) {
    echo "<input type='checkbox' name='frissito[]' value='$ital'>";
    echo "<label>$ital</label>";


}

?>

És még?
<input type="text" name="egyebFrissito"><br>
Hová lesznek kikészítve a frissítők?<br>
<input type="radio" name="frissitokHelye" value="konyha" checked="">
<label>Konyhaasztal (előnyben részesített lehetőség)</label><br>
<input type="radio" name="frissitokHelye" value="italosszekreny">
<label>Italosszekrény (Kérlek, hagyd nyitva vagy a kulcs legyen nyilvánvaló helyen)</label><br>
<input type="radio" name="frissitokHelye" value="barpult">
<label>Bárpult</label><br>
<input type="radio" name="frissitokHelye" value="hutuszekreny">
<label>Hűtőszekrény</label><br>
<input type="radio" name="frissitokHelye" value="szekreny">
<label>Szekrény (Kérlek, csatolj egy vázlatrajzot arról, hogy a ház mely szobáinak mely szekrényei)<input type="file" name="szekrenyTerkep"></label><br>
<h3>Nyilatkozat</h3>
<p>Én, a fentiekben megadott nevű és a fentebb jelzett címen lako gyermek ezennel kijelentem, hogy az itt megadott adatok minden részletükben igazak. Ezen túlmenően felhatalmazom a Mikulást, hogy az adatok igazolása érdekében felvegye a kapcsolatot a szüleimmel. Kinyilvánítom annak megértését, hogy az általuk és az általam közöltek esetleges eltérése esetén (főleg magaviselet témájában), ez egy sovány Karácsony lesz... Ígérem, hogy a Mikulás megérkezésekor aludni fogok, mert előtte nincs titok.</p>

<input type="submit" value="Elküldöm">


</form>


<?php include("footer.php") ?> 