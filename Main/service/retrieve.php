<html>
    <head>
        <title></title>
    </head>
    <body>
        <hr/>
        <a href="index.php?controller=person&action=create">NEW</a>
        <hr/>
        
        <fieldset>
            <legend>RETRIEVE</legend>
            
            <form method="post">
                <input type="submit" value="SEARCH"/>
                <input name="search" value="<?= $searchKey ?>"/> By
                <select name="search_by">
                    <option <?= $searchBySelected["Any"] ?>>Any</option>
                    <option <?= $searchBySelected["Name"] ?>>Name</option>
                    <option <?= $searchBySelected["Email"] ?>>Email</option>
                </select>
            </form>

            <table border="1" cellspacing="0" cellpadding="5">
                <tr>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th colspan="3"></th>
                </tr>
                
                <?php if (count($persons) == 0) { ?>
                    <tr>
                        <td colspan="5">NO RECORD FOUND</td>
                    </tr>
                <?php } ?>

                <?php foreach ($persons as $person) { ?>
                    <tr>
                        <td><?= $person['name'] ?></td>
                        <td><?= $person['email'] ?></td>
                        <td><a href="index.php?controller=person&action=detail&id=<?= $person['id'] ?>">detail</a></td>
                        <td><a href="index.php?controller=person&action=update&id=<?= $person['id'] ?>">edit</a></td>
                        <td><a href="index.php?controller=person&action=delete&id=<?= $person['id'] ?>">delete</a></td>
                    </tr>
                <?php } ?>
            </table>
        </fieldset>
    </body>
</html>
