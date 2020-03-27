<?php
    function db_connect()
    {
        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=reseaux','root','root');

        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
        return $bdd;
    }
?>