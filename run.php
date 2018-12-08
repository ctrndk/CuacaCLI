<?php


function cuaca($q){
$url = 'https://api.openweathermap.org/data/2.5/weather?q='.$q.'&APPID=7d8d01d4bfa29829d6bda8459d1e8a64';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);
$json = json_decode($result, true);

$temp = $json['main']['temp'];
$kota = $json['name'];
$kid = $kota = $json['id'];
$celcius = $temp;
$aw=$celcius-273.15;
echo "\nKOTA : ".$q." => KOTA ID: ".$kid;
print_r("\n       SEGINI : => ".$aw."° Celcius");
return $aw;
}


echo "===============================================\n";
echo "      Prakiraan Cuaca [openweathermap.org]     \n";
echo "      Coded by @ctrndk (github.com/ctrndk)     \n";
echo "===============================================\n";
echo "Masukkan Nama Kota : ";
$q = trim(fgets(STDIN));

cuaca($q);


?>
