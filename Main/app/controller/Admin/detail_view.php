<hr/>
<a href="index.php?controller=person&action=retrieve">HOME</a>
<a href="index.php?controller=person&action=update&id=<?= $person['id'] ?>">EDIT</a>
<a href="index.php?controller=person&action=delete&id=<?= $person['id'] ?>">DELETE</a>
<hr/>
<fieldset>
    <legend>DETAIL</legend>
    <table border="0" cellspacing="0" cellpadding="3">
        <tr>
            <td>ID</td>
            <td>:</td>
            <td><?= $person['id'] ?></td>
        </tr>
        <tr>
            <td>NAME</td>
            <td>:</td>
            <td><?= $person['name'] ?></td>
        </tr>
        <tr>
            <td>EMAIL</td>
            <td>:</td>
            <td><?= $person['email'] ?></td>
        </tr> 
    </table>
</fieldset>