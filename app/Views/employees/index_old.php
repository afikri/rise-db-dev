<!DOCTYPE html>
<html>
<head>
    <title>Employees</title>
</head>
<body>
    <h2>Employees</h2>
    <a href="/employees/create">Create Employee</a>
    <table border="1">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Position</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($employees as $employee): ?>
            <tr>
                <td><?= $employee['name'] ?></td>
                <td><?= $employee['email'] ?></td>
                <td><?= $employee['position'] ?></td>
                <td>
                    <a href="/employees/edit/<?= $employee['id'] ?>">Edit</a>
                    <form action="/employees/delete/<?= $employee['id'] ?>" method="post" style="display:inline;">
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
