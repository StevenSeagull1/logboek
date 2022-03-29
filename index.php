
 <?php
require "view/head.php";

require 'model/model.php';
include "secure/database.php";
// include "view/form.p hp";
// if(isset($_GET['action'])){
    // <!-- opdracht in de url, doorsturen naar functie -->        
    // if($_GET['action']=="nieuwlog" ){
    //     // form ingevuld of nog niet
        if(isset($_POST['verstuur']))
        {
            $result = savelog();
            $_POST=null;
        }
        else
        {
            $vakken = getvakken();
            include("view/form.php") ;
        }
    
if(isset($_GET['action'])){
    if($_GET['action']=="delete" && isset($_GET['id'])){
        $result = deletelog();

        if($result == true){
            echo("log is verwijderd");
        }
        else{
            echo("log kon niet worden verwijderd");
        }
    }
}

else{
    $logboek = getlogboek();
    include 'view/tabel.php';
}
if(isset($_get['action'])){
 if($_GET['action']=="update" && isset($_GET['id'])){
     $result = updatelog();

     if($result == true){
         echo ("het log is geupdate");
     }
     else{
         echo("log kon niet worden geupdate");
        }
    }   
}


 ?>
