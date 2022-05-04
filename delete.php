<?php

    include_once("config.php");

    function delete($id) {
        global $mysql;
        mysqli_query($mysql, "DELETE FROM  tester_request WHERE id = $id");
    
        return mysqli_affected_rows($mysql);
    
    }

    $id = $_GET["id"];

    if( delete($id) > 0 ) {

    echo "
        <script>
            alert ('Data Anda berhasil dihapus!');
            document.location.href = 'dashboard.php';
        </script>
    ";
    } else{
        echo "
        <script>
            alert ('Data Anda Gagal dihapus!');
            document.location.href = 'dashboard.php';
        </script>
    ";
    }


    