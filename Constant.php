<?php
    // deklarasi constant jenis sensitif sebgai default
    define ("MSG", "Hi, kamu!");

    echo MSG;


    // deklarasi constant jenis tidak sensitif
    define ("MSG", "Hi awak!", true);

    echo msg;

?>