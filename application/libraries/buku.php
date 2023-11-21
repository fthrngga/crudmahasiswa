<?php 
class Buku{
    function hitung_buku(){
        $dipinjam = 150;
        $tersedia = 300;
        $rusak = 100;
        $tidakKembali = 200;
        
        $total = $dipinjam+$tersedia+$rusak+$tidakKembali;
        $tersedia2 = $tersedia + 75;
        $total2 = $total - (0.2*$rusak);

        echo "Total keseluruhan buku : ".$total;
        echo "<br>Tersedia setelah dikembalikan : " . $tersedia2 ;
        echo "<br>Total setelah buku rusak dibuang : " . $total2 ;
    }
}
?>