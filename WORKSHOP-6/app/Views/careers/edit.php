<!DOCTYPE html>
<html>
<head>
    <title>Edit Career</title>
</head>
<body>
<h1>Edit Career</h1>
<form action= "/careers/update/<?= $career['idCareer'] ?>" method="post">
    <label>Career Name</label>
    <input type="text" name="name" required><br><br>

    

    <button type="submit">Save</button>
</form>
</body>
</html>