<?php



include "curl.php";

$akun=array("89302024057","10018272780846");


$data = array("imsi"=>"$akun[0]%40spin2","password"=>"$akun[1]","tsel"=>"8");

a:


   // It didn't work 
   $heder2= cURL("http://google.com",$data);


if ($heder2['redirect_url']!= NULL){
  

   $heder= cURL("http://halo.wifi.id/wifi/login/index.php?action=auth",$data);
$urlnew =str_replace("http://:/","http://10.26.172.1:3767/",$heder['redirect_url']);

system( "wget $urlnew");


//
}
goto a;
?> 