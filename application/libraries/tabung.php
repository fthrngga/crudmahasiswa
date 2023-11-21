<?php 
class Tabung{
    function hitung_tabung($jari, $tinggi){
        $volume = 3.14 * $jari * $jari * $tinggi;
        $luasP = 2 * 3.14 * $jari * ($jari+$tinggi);
        $luasS = 2 * 3.14 * $jari * $tinggi;

        echo "Phi : 3.14<br>";
        echo "Jari-jari " . $jari;
        echo "<br>Tinggi" . $tinggi;
        echo "<br>Valume tabung adalah :".$volume;
        echo "<br>Luas Permukaan Tabung adalah :".$luasP;
        echo "<br>Luas Selimut Tabung adalah :".$luasS;
    }
}
?>