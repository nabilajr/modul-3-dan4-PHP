<?php
    $day= date("D");
    switch ($day) {
        case 'Sun': $hari= "Minggu"; break;
        case 'mon': $hari= "Senin"; break;
        case 'Tue': $hari= "Selasa"; break;
        case 'Wed': $hari= "Rabu"; break;
        case 'Thu': $hari= "Kamis"; break;
        case 'Fri': $hari= "Jumat"; break;
        case 'Sat': $hari= "Sabtu"; break;
        default   : $hari= "Kiamat";
    }
    echo "Sekarang hari <b>$hari</b>";
?>