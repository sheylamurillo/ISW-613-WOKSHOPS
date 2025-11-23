<!DOCTYPE html>
<html>
<head>
    <title>Careers</title>
</head>
<body>
    <h1>Careers List</h1>
    <a href="/careers/create">+ Add New Career</a>
    <ul>
        <?php foreach ($careers as $career): ?>
            <li>
                <?= $career['career'] ?> 
                <a href="/careers/edit/<?= $career['idCareer'] ?>">Edit</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>