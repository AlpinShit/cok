<?php
error_reporting(0);
function http_request($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}
$web = http_request("https://api.kawalcorona.com/indonesia");
$web = json_decode($web, TRUE);

$negara = $web['0']['name'];
$positif = $web['0']['positif'];
$sembuh = $web['0']['sembuh'];
$mati = $web['0']['meninggal'];

echo "Data Perkembangan Corona Virus ".$negara."\n";
echo "Negara          : ".$negara."\n";
echo "Positif         : ".positif."\n";
echo "Sembuh          : ".$sembuh."\n";
echo "Meninggal       : ".$mati."\n";

?>
