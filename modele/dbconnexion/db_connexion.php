<?php
function connex_bdd()
         { try

        {

            $bdd = new PDO('mysql:host=localhost;dbname=batimentprojets;charset=utf8', 'root', 'sahbia2017');

        }

        catch(Exception $e)

        {

                die('Erreur : '.$e->getMessage());

        }
        return  $bdd;
  }