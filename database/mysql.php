<?php
try{
    $bdd = new PDO('mysql:host=localhost;dbname=to_do_list;charset=utf8;','root','root');
}catch(Exception $e){
    die('Une erreur a été trouvé : '. $e->getMessage());
}