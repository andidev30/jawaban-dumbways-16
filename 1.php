<?php 


    function hitungKembalian($bayar, $uang){
        $sisa = $uang - $bayar;
        if($sisa < 0){
            echo "uang anda kurang";
        }
        if ($uang > 250000) {
            
        }else {
            if($sisa < 5000 && $sisa > 0) {
                echo $sisa . " disumbangkan karena tidak ada pecahan dibawah 5000";
            } else if($sisa == 0){
                echo "uang anda pas";
            }else {
                if ($sisa >= 50000) {
                    $jumlah = $sisa % 50000;
                    echo $jumlah . " X 50000";
                    $sisa = $sisa - (jumlah * 50000);
                }
                if ($sisa >= 20000) {
                    $jumlah = $sisa / 20000;
                    echo $jumlah . " X 10000";
                    $sisa = $sisa - ($jumlah * 20000);
                }
                if ($sisa >= 10000) {
                    $jumlah = $sisa / 10000;
                    echo $jumlah . " X 10000";
                    $sisa = $sisa - ($jumlah * 10000);
                }
                if ($sisa >= 5000) {
                    $jumlah = $sisa / 5000;
                    echo $jumlah . " X 5000";
                    $sisa = $sisa - ($jumlah * 5000);
                }
            }
        }
    }

    hitungKembalian(5000, 55000);