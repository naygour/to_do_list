<?php

require("database/mysql.php");

if(isset($_POST['save'])){

    if(isset($_POST['ended']) && !empty($_POST['ended'])){

        foreach($_POST['ended'] as $deleteid){
            
            $idTask = (int)$deleteid;
            $deleteTask= $bdd->prepare("DELETE FROM task WHERE id= '$idTask'");
            $deleteTask->execute();

        header("Location: index.php");
        }
    }else{

        echo "Erreur checkbox n'est pas connu..";

    }
}
