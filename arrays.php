define('MAX',20);

for($i=0;$i<=MAX;$i++){
$valores[] =rand(0,10);
}
for($i=0;$i<=MAX;$i++){
    echo "Posicion: " . $i;
    echo $valores[$i];
    echo "<br>";
}
echo "<br>";
