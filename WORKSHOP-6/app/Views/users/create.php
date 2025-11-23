<!DOCTYPE html>
<html>
<head>
    <title>Create User</title>
</head>
<body>
<h1>Add New User</h1>
<form action="/users/store" method="post">
    <label>Name</label>
    <input type="text" name="name" required><br><br>

    <label>Last-name</label>
    <input type="text" name="lastName" required><br><br>
    <label>Career</label>
    <select id = "idCareer" name="idCareer"> 
        <option value = ""> </option>
        <?php foreach ($careers as $career): ?>
            <option value =  <?= $career['idCareer']?> > <?= $career['career']?></option>
        <?php endforeach; ?>
    </select>
    <button type="submit">Save</button>
</form>
</body>
</html>