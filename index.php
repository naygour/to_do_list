<!DOCTYPE html>
<html lang="fr">

<?php
require("database/mysql.php");
require("assets/navbar.php");
require("actions/deleteTaskAction.php");
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>To Do List - Test</title>
</head>

<body>

    <?php
    // select all tasks if page is visited or refreshed
    $tasks = $bdd->prepare('SELECT * FROM task JOIN task_priority ON task.priority = task_priority.id_priority');
    $tasks->execute();
    $task = $tasks->fetchAll();
    ?>
    <form class='container' method='post' action=''>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Tâche</th>
                    <th scope="col">Importance</th>
                    <th scope="col">Terminé</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($task as $tasks) { ?>
                    <tr>
                        <td><?= $tasks['task_name']; ?></td>
                        <td><?= $tasks['priority_name']; ?></td>
                        <td><input type="checkbox" id="endedItem" name="ended[]" value="<?= $tasks['id']; ?>"></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <div class="col text-center">
            <a href="publishTask.php" class="btn btn-warning">Ajouter une tâche</a>
            <button type="submit" class="btn btn-danger" name="save">Supprimer la ou les tâches</button>
        </div>

    </form>
</body>

</html>