<?php
    include 'clsCarmesi.class.php';
    $soap=new SoapServer(null,array('uri'=>'http://localhost/'));
    $soap->setClass('clsCarmesi');
    $soap->handle(); 

?>