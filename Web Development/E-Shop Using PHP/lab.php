<?php
    include('Conectarelab.php')
    if(isset($_POST['id'])){
        $nume = htmlentities($_POST['nume'], ENT_QUOTES);
        $note = htmlentities($_POST['note'], ENT_QUOTES);
        if ($nume == '' || $note == ''){
            echo "Campuri goale!";
            exit;
        }
        else {
            if ($stmt = $mysqli -> prepare("INSERT INTO ex(nume, note) VALUES (?, ?)"))
            {
                $stmt->bind_param("sd", $nume, $note);
                $stmt->execute();
                $stmt->close();
            }
        }
    }
    else {
        echo "ID incorect";
    }
    $mysqli->close;
?>

<!DOCTYPE html>
    <head>
        <title>Inserare</title>
    </head>
    <body>
        <form action="" method="post">
            <strong>Nume: </strong><input type="text" name="nume" value="">
            <strong>Nota: </strong><input type="text" name="nota" value="">
        </form>
    </body>
</html>

