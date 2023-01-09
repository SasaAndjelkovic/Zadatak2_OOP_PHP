<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>

    <div>
        <h1>Teatar na brdu - Predstave</h1>
    </div>

    <div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Naziv predstave</th>
                    <th>Opis</th>
                    <th>Autor</th>
                    <th>Avatar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($_SESSION['predstave'] as $predstave) :
                ?>
                    <tr>
                        <td> <?php echo $predstave->getId(); ?></td>
                        <td> <?php echo $predstave->getName(); ?></td>
                        <td> <?php echo $predstave->getDescription(); ?> </td>
                        <td> <?php echo $predstave->getAuthor(); ?></td>
                        <td> <?php print_r($predstave->getSpisakAvatara()[0]->getName());  ?>
                    </tr>
                <?php

                endforeach;

                ?>
            </tbody>
        </table>
    </div>

    <div>
        <h1>CUD operacije</h1>

        <form action="" method="get">
            <input type="text" name="izmeni" size="25" placeholder="Upisi ID predstave za izmenu">
            <button>Izmeni</button>
            <br>
        </form>

        <form action="" method="get">
            <input type="text" name="izbrisi" size="25" placeholder="Upisi ID predstave za brisanje">
            <button>Obrisi</button>
            <br>
        </form>

    </div>

    <div>
        <a href="?addShow">
            <button>Dodaj novu predstavu</button>
        </a>
    </div>
    <br>


    <br>
    <a href="?logout">
        <button>Logout</button>
    </a>

</body>

</html>