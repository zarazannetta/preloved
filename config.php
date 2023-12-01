<?php
$db=pg_connect('host=localhost port=5433 dbname=projectbasdat user=postgres password=postgres');
if( !$db ){
    die("Gagal terhubung dengan database: " . pg_last_error());
}
?>