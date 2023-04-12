<?php 

    include("connection.php");

    $tbl= "CREATE TABLE tbl_mhs( 
        id INT AUTO_INCREMENT PRIMARY KEY,
        nama VARCHAR(255),
        nim VARCHAR(255),
        prodi VARCHAR(255),
        jenisKelamin ENUM('Laki-laki', 'Perempuan'),
        tgl_lahir TIMESTAMP,
        idMhs VARCHAR(255)
    );";


    // EKSEKUSI VARIABLE $TBL
    $rslt= mysqli_query( $conn, $tbl );

    // PENGECEKAN APAKAH TABLE BERHASIL DIBUAT ATAU TIDAK
    if( $rslt ):
        echo "TABEL tbl_mhs ===> SUCCESS". "<br>";
    endif;

?>