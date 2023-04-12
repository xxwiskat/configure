<?php 

    include("connection.php");

    $tbl= "CREATE TABLE tbl_user( 
        id INT AUTO_INCREMENT PRIMARY KEY,
        nama VARCHAR(255),
        email VARCHAR(255),
        umur VARCHAR(3),
        username VARCHAR(10),
        pw VARCHAR(255),
        iduser VARCHAR(255)
    );";


    // EKSEKUSI VARIABLE $TBL
    $rslt= mysqli_query( $conn, $tbl );

    // PENGECEKAN APAKAH TABLE BERHASIL DIBUAT ATAU TIDAK
    if( $rslt ):
        echo "TABEL tbl_user ===> SUCCESS";
    endif;
?>