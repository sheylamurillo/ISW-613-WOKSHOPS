<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>
<h1>Edit User</h1>
<form action="/users/update/<?= $user['idUser'] ?>" method="post">
    <label>Name</label>
    <input type="text" name="name" required><br><br>

    <label>Last-name</label>
    <input type="text" name="lastName" required><br><br>
    <label>Career</label>
    <select id="idCareer" name="idCareer" required>
    <?php foreach ($careers as $career): ?>
        <option value="<?= $career['idCareer'] ?>"
            <?php if ($career['idCareer'] == $user['idCareer']) { echo 'selected'; } ?>>
            <?= $career['career'] ?>
        </option>
    <?php endforeach; ?>
</select>

    <button type="submit">Save</button>
</form>
</body>
</html>
