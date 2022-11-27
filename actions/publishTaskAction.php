<?php

require("database/mysql.php");

if(isset($_POST['validate'])){

    if(!empty($_POST['task_name']) && !empty($_POST['priority'])){

        $task_name = htmlspecialchars($_POST['task_name']);
        $task_priority = (int)$_POST['priority'];

        $insertTaskOnWebsite = $bdd->prepare('INSERT INTO task(task_name, priority) VALUES (?, ?)');
        $insertTaskOnWebsite->execute(array(
        $task_name,
        $task_priority
        ));

        $successMsg = "Votre question a bien été publié sur le forum.";

    }else{

        $errorMsg = 'Veuillez complèter tous les champs.';

    }
}