<?php
    session_start();

    $_SESSION = array();

    session_destroy();

    echo "udah tuh, sessionnya ilang semua. ini gwa pake buat testing, jadi kalau mau reset session tinggal buka ini.";
?>