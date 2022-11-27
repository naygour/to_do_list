<!DOCTYPE html>
<html lang="fr">

<?php
require("database/mysql.php");
require("assets/navbar.php");
require("actions/publishTaskAction.php");
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>To Do List - Test</title>
</head>

<body>

    <form class="container" method="post">

        <?php
        if (isset($errorMsg)) {
            echo '<p>' . $errorMsg . '</p>';
        } elseif (isset($successMsg)) {
            echo '<p>' . $successMsg . '</p>';
        }
        ?>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nom de la tâche</label>
            <input type="text" class="form-control" name="task_name">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Importance</label>
            <select class="form-select" name="priority">
                <option value="1"> Pas d'Importance
                <option value="2"> Assez pressant
                <option value="3"> Ne peut pas attendre
            </select>
        </div>
        <button type="submit" class="btn btn-success" name="validate">Publier</button>
        <a href="index.php" class="btn btn-light">Retouner à l'accueil</a>


    </form>

</body>

</html>