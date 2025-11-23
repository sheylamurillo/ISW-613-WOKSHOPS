<!DOCTYPE html>
<html>
<head>
    <title>Users</title>
</head>
<body>
    <h1>User List</h1>
    <a href="/users/create">+ Add New User</a>
    <ul>
        <?php foreach ($users as $user): ?>
            <li>
                <?= esc($user['name']) ?> 
                <a href="/users/edit/<?= $user['idUser'] ?>">Edit</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>