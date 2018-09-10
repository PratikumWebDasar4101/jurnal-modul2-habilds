<?php 
function rekursif($kolom){
  global $i;
    rekursif2($i, $kolom);
    echo "<br>";
    if (--$kolom > $i){
        rekursif($kolom);
    }
}
function rekursif2($j, $kolom) {
	global $i;
    if ($j > $i - $kolom) {
        echo "*";
        rekursif2($j - 1, $kolom);
    }
}

$inputan = $_GET["input"];
$i = 0;
rekursif($inputan);

for ($i=1; $i<=$inputan; $i++) {
   if ($i % 2 == 0){
    $genap[]=$i;
  } else {
    $ganjil[]=$i;
  }
}
echo "genap = ";
foreach ($genap as $bil_genap){
	echo $bil_genap . ',';
}
echo "<br>";
echo "ganjil = ";
foreach ($ganjil as $bil_ganjil){
	echo $bil_ganjil .',';
}

echo "<br><br>Jumlah deret Genap = ". count($genap) . "<br>";
echo "Jumlah deret Ganjil = ". count($ganjil);

?>
