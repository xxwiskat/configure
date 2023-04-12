<?php 

    include("connection.php");

    $tbl1= "CREATE TABLE tbl_mhs( 
        id INT AUTO_INCREMENT PRIMARY KEY,
        nama VARCHAR(255),
        nim VARCHAR(255),
        prodi VARCHAR(255),
        jenisKelamin ENUM('Laki-laki', 'Perempuan'),
        tgl_lahir TIMESTAMP,
        idMhs VARCHAR(255)
    );";


    // EKSEKUSI VARIABLE $TBL
    $rslt1= mysqli_query( $conn, $tbl1 );

    // PENGECEKAN APAKAH TABLE BERHASIL DIBUAT ATAU TIDAK
    if( $rslt1 ):
        echo "TABEL tbl_mhs ===> SUCCESS". "<br>";
    endif;

    $tbl2= "CREATE TABLE tbl_user( 
        id INT AUTO_INCREMENT PRIMARY KEY,
        nama VARCHAR(255),
        email VARCHAR(255),
        umur VARCHAR(3),
        username VARCHAR(10),
        pw VARCHAR(255),
        iduser VARCHAR(255)
    );";


    // EKSEKUSI VARIABLE $TBL
    $rslt2= mysqli_query( $conn, $tbl2 );

    // PENGECEKAN APAKAH TABLE BERHASIL DIBUAT ATAU TIDAK
    if( $rslt2 ):
        echo "TABEL tbl_user ===> SUCCESS";
    endif;

?>