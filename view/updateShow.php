<?php

for ($i = 0; $i < count($_SESSION['predstave']); $i++) {
       if ($_SESSION['predstave'][$i]->getId() == $_GET['izmeni']) {
            $index = $i;
            break;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prestave</title>
</head>

<body>
    <form action="#" method="post">
        <h3>Ažuriranje predstave</h3>
        <div>
            <div>
                <div>
                    <input type="text" name="nazivPredstave" placeholder="Naziv predstave *" value="<?php echo $_SESSION['predstave'][$index]->getName() ?>" />
                </div>
                <div>
                    <input type="text" name="opis" placeholder="Opis *" value="<?php echo $_SESSION['predstave'][$index]->getDescription() ?>" />
                </div>
                <div>
                    <input type="text" name="autor" placeholder="Autor *" value="<?php echo $_SESSION['predstave'][$index]->getAuthor() ?>" />
                </div>
                <div>
                    <form action="" method="post">
                    <?php $_SESSION['broj'] = $index;?>
                        <button type="submit" name="azurirajPredstavu"></i> Ažuriraj predstavu</button>
                    </form>
                </div>
            </div>
        </div>
    </form>

    <br>
    <a href="?logout">
        <button>Logout</button>
    </a>
</body>

</html>