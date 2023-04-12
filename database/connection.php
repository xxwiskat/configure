<?php 

    include("../configure.php");

    $conn= mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT) or die("Koneksi ke DBMS Mysql Failed");

    // Pengecekan conn sudah berhasil terhubung atau belum
    // if( $conn ):
    //     echo "Koneksi ke DBMS Mysql Success";
    // else:
    //     echo "Koneksi ke DBMS Mysql Failed";
    // endif;
    // mysqli_close($conn);
?>