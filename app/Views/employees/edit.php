<!DOCTYPE html>
<html>

<head>
    <title>Edit Employee</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 50%;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
            color: #555;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        button {
            padding: 10px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Edit Employee</h2>
        <form action="/employees/update/<?= $employee['id'] ?>" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?= $employee['name'] ?>"><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?= $employee['email'] ?>"><br>
            <label for="position">Position:</label>
            <input type="text" id="position" name="position" value="<?= $employee['position'] ?>"><br>
            <button type="submit">Update</button>
        </form>
    </div>

</body>

</html>