<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .pagination {
            display: flex;
            justify-content: center;
        }
        .pagination a {
            margin: 0 5px;
            padding: 8px 16px;
            text-decoration: none;
            color: #007bff;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .pagination a:hover {
            background-color: #f2f2f2;
        }
        .pagination a.active {
            background-color: #007bff;
            color: #fff;
            border-color: #007bff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Employees</h2>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Position</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($employees as $employee): ?>
                <tr>
                    <td><?= esc($employee['name']) ?></td>
                    <td><?= esc($employee['email']) ?></td>
                    <td><?= esc($employee['position']) ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div class="pagination">
            <?= $pager->links() ?>
        </div>
    </div>
</body>
</html>
