<?php
function gettanggal(){
global $tanggal;
$tanggal=date('d-m-Y');
date_default_timezone_set('Asia/Jakarta');
}
?>