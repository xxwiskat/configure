<?php 

    include("../configure.php");

    $conn= mysqli_connect(DBHOST, DBUSER, DBPASS);

    // Pengecekan conn sudah berhasil terhubung atau belum
    if( $conn ):
        
        $create_db= "CREATE DATABASE " . DBNAME;

        // EKSEKUSI QUERY VARIABLE $CREATE_DB
        $result= mysqli_query( $conn, $create_db );

        // pengecekan apakah DATABASE BERHASIL DIBUAT ATAU TIDAK
        if( $result ):
            echo "Database " . DBNAME . " SUCCESS";
        else:
            echo "Database " . DBNAME . " FAILED";
        endif;

    else:
        echo "Koneksi ke DBMS Mysql Failed";
    endif;
    mysqli_close($conn);

?>