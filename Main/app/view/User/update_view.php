<hr/>
<a href="index.php?controller=person&action=retrieve">HOME</a>
<hr/>
<?= $msg ?>
<fieldset>
    <legend>UPDATE</legend>
    <form method="post">
        <input type="hidden" name="id" value="<?= $person['id'] ?>" />
        <table border="0" cellspacing="0" cellpadding="3">
            <tr>
                <td>NAME</td>
                <td><input name="name" value="<?= $person['name'] ?>"/></td>
                <td><?=$personErr['name']?></td>
            </tr>
            <tr>
                <td>EMAIL</td>
                <td><input name="email" value="<?= $person['email'] ?>"/></td>
                <td><?=$personErr['email']?></td>
            </tr>
        </table>
        <hr/>
        <input type="submit" value="SAVE" />
    </form
</fieldset>