<!doctype html>
<html>
    <?php
    require "require/connection.php";
    $statement1 = $connection->prepare('SELECT * FROM todo');
    $statement2 = $connection->prepare('SELECT * FROM logg ORDER BY logg_id DESC LIMIT 10');
    require "require/statement-execute-1.php";
    require "require/statement-execute-2.php";
    ?>
    <head>
        <title>Handleliste</title>
        <link rel="stylesheet" type="text/css" href="require/stylesheet.css">
    </head>

    <body>
        <div id="wrapper">
            <div id="content">
                <div id="todo-top">
                    <div id="todo-new">
                        <form id="form-new" action="store-todo.php" method="post">
                                <label class="">Vare: </label>
                                <input class="" type="text" id="new-todo-todo" name="new-todo-todo" onChange='submit();'>
                        </form>
                    </div>
                    
                    <div id="todo-tools">
                        <form id="form-help" action="send-help.php" method="post">
                            <input id="help-button" name="help-button" type="submit" value="Hjelp">
                        </form>
                        <form id="form-delete-all-checked" action="delete-all-checked.php" method="post">
                            <input id="delete-all-button-checked" name="delete-all-button-checked" type="submit" value="Slett alle avsjekkede">
                        </form>
                        <form id="form-delete-all" action="delete-all.php" method="post">
                            <input id="delete-all-button" name="delete-all-button" type="submit" value="Slett alle">
                        </form>
                    </div>
                </div>
                <div id="todo-list">
                    <?php 
                    foreach ($events1 as $event)
                    { 
                        require "todo-card.php"; 
                    } ?>
                </div>
                <br><br><br>
                <div id="log-list">
                    <?php 
                    foreach ($events2 as $event)
                    { 
                        require "logg-card.php"; 
                    } ?>
                </div>
            </div>
        </div>
    </body>
</html>