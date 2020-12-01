
<?php 

if($_GET["josagmero"] < 4){
$besorolas="Angyali gyermek";

}else if($_GET["josagmero"] < 8){
    $besorolas="Átlagos gyermek";
}else{
    $besorolas="Vásott kölök";
}

if ($_GET["kivansagok"]=="") {
    $kivansag ="Nincs kivansag.";
}else{
    $kivansag= $_GET["kivansagok"];
}

$fok = $_GET["tetoSzoge"];
if ($fok >= 30) {
    if ($_GET["tetoVazlatrajz"]=="") {
        $fokfajl="nem toltotedd fel a vazlatot";
    }else{
        $fokfajl = "Feltoltott fajl: $_GET[tetoVazlatrajz]";
    }
}else{
    $fokfajl="";

}

if ($_GET["teherbiras"]=="talan") {
    if ($_GET["tetoNyilatkozat"]=="") {
        $tetofajl="nem toltotedd fel a nyilatkozatot";
    }else{
        $tetofajl = "Feltoltott fajl: $_GET[tetoNyilatkozat]";
    }
}else{
    $tetofajl = "";
}

if ($_GET["kemeny"]=="True") {
    $kemeny = "van";
    if ($_GET["sopresDatuma"]=="") {
        $sopres="nem toltotedd ki a sopres datumat";
    }else{
        $sopres = "A sopres datuma: $_GET[sopresDatuma]";
    }

    if ($_GET["lejaratAtmero"]=="") {
        $lejarat="nem toltotedd ki a lejarat atmerojet";
    }else{
        $lejarat = "A lejarat atmeroje: $_GET[lejaratAtmero]";
    }

}else{
    $kemeny = "nincs";
    $sopres = "";
    $lejarat = "";
}

switch ($_GET["ajandekHelye"]) {
    case "labbeli":
        $ahely = "Lábbeli";
        if ($_GET["labbeliMeret"]="") {
           $megj = "nem adtad meg a labmereted";
        }else {
            $megj = "Mereted: $_GET[labbeliMeret]";
        }
        break;
    case "agy":
        $ahely = "Ágy végében";
        break;
    case "karacsonyfa":
        $ahely = "Karácsonyfa alatt";
        break;

    case "elrjetve":
        $ahely = "Elrejtve";
        $megj = "$_GET[nehezseg] oraig kell keresned";
        break;
    

}

$italok = "";
$megital = $_GET["egyebFrissito"];

foreach ($_GET["frissito"] as $ital) {

    $italok = $italok."$ital ";

}

if ($megital != "") {
    $italok = $italok." meg egy kis $megital";
}

$italMegjegyzes = "";

if ($_GET["frissitokHelye"] == "szekreny") {
    if ($_GET["szekrenyTerkep"] == "") {
        $italMegjegyzes = "nem toltotted fel a szobak vazlatat";
    }else{
        $italMegjegyzes = $_GET["szekrenyTerkep"];
    }
}



include("header.php") ?> 


<h2>Adategyeztetes</h2>

<?php 

echo "Nev: $_GET[nev]<br>
Lakhely: $_GET[cim]<br>
Magaviseleti besorolas: $besorolas<br>
Teto lejtesszoge: $fok fok $fokfajl<br>
A teto $_GET[teherbiras] birja a gyurodest $tetofajl<br>
Kemeny: $kemeny $sopres $lejarat<br>
Ajandek elhelyezese: $ahely $megj<br>
$italok ki lesz keszitve<br>
Frissito megtalalasi helye: $_GET[frissitokHelye] $italMegjegyzes<br>";
?>
<button onclick="document.location='./'">Oke minden</button>
<button onclick="document.location='kerelem.php'">Újra kitöltöm</button>





<?php include("footer.php") ?> 