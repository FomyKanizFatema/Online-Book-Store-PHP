<hr/>
<a href="index.php?controller=person&action=retrieve">HOME</a>
<hr/>
<fieldset>
    <legend>ARE YOU SURE?</legend>
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
    <hr/>
    <form method="post">
        <input type="submit" value="DELETE" />
    </form>
</fieldset>