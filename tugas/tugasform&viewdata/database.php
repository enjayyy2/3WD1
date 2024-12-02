<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Insert Data</h1>

        <!-- customers -->
        <h2 class="mb-3">Add Customer</h2>
        <form method="POST" action="">
            <div class="mb-3">
                <label for="customer_id" class="form-label">Customer ID</label>
                <input type="text" class="form-control" id="customer_id" name="customer_id"
                    placeholder="Enter customer ID" required>
            </div>
            <div class="mb-3">
                <label for="customer_name" class="form-label">Name</label>
                <input type="text" class="form-control" id="customer_name" name="customer_name" placeholder="Enter name"
                    required>
            </div>
            <div class="mb-3">
                <label for="customer_email" class="form-label">Email</label>
                <input type="email" class="form-control" id="customer_email" name="customer_email"
                    placeholder="Enter email" required>
            </div>
            <div class="mb-3">
            <label for="formFile" class="form-label">Default file input example</label>
            <input class="form-control" type="file" id="formFile">
            </div>
            <button type="submit" class="btn btn-primary" name="submit_customer">Submit Customer</button>
        </form>

        <hr>

        <!-- admin -->
        <h2 class="mb-3">Add Admin</h2>
        <form method="POST" action="">
            <div class="mb-3">
                <label for="admin_username" class="form-label">Username</label>
                <input type="text" class="form-control" id="admin_username" name="admin_username"
                    placeholder="Enter username" required>
            </div>
            <div class="mb-3">
                <label for="admin_password" class="form-label">Password</label>
                <input type="password" class="form-control" id="admin_password" name="admin_password"
                    placeholder="Enter password" required>
            </div>
            <button type="submit" class="btn btn-primary" name="submit_admin">Submit Admin</button>
        </form>

        <hr>

        <!-- comment -->
        <h2 class="mb-3">Add Comment</h2>
        <form method="POST" action="">
            <div class="mb-3">
                <label for="comment_email" class="form-label">Email</label>
                <input type="email" class="form-control" id="comment_email" name="comment_email"
                    placeholder="Enter email" required>
            </div>
            <div class="mb-3">
                <label for="comment_text" class="form-label">Comment</label>
                <textarea class="form-control" id="comment_text" name="comment_text" placeholder="Enter comment"
                    rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="submit_comment">Submit Comment</button>
        </form>

        <hr class="my-4">

        <h2 class="mb-3">Data:</h2>

        <!-- customers table -->
        <h3>Customers</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <!-- connection to database -->
                <?php

                $host = 'localhost';
                $port = '3306';
                $dbname = 'toko';
                $username = 'root';
                $password = '';

                try {
                    $connection = new PDO("mysql:host=$host:$port;dbname=$dbname;charset=utf8", $username, $password);

                    if (isset($_POST['submit_customer'])) {
                        $id = $_POST['customer_id'];
                        $name = $_POST['customer_name'];
                        $email = $_POST['customer_email'];

                        $sql = "INSERT INTO customers (id, name, email) VALUES (:id, :name, :email)";
                        $stmt = $connection->prepare($sql);
                        $stmt->bindParam(':id', $id);
                        $stmt->bindParam(':name', $name);
                        $stmt->bindParam(':email', $email);
                        $stmt->execute();
                    }

                    // Handle Submit Admin
                    if (isset($_POST['submit_admin'])) {
                        $username = $_POST['admin_username'];
                        $password = $_POST['admin_password'];

                        $sql = "INSERT INTO admin (username, password) VALUES (:username, :password)";
                        $stmt = $connection->prepare($sql);
                        $stmt->bindParam(':username', $username);
                        $stmt->bindParam(':password', $password);
                        $stmt->execute();
                    }

                    // Handle Submit Comments
                    if (isset($_POST['submit_comment'])) {
                        $email = $_POST['comment_email'];
                        $comment = $_POST['comment_text'];

                        $sql = "INSERT INTO comments (email, comment) VALUES (:email, :comment)";
                        $stmt = $connection->prepare($sql);
                        $stmt->bindParam(':email', $email);
                        $stmt->bindParam(':comment', $comment);
                        $stmt->execute();
                    }

                    // Fetch Data Customers
                    $sql = "SELECT * FROM customers";
                    $result = $connection->query($sql);
                    foreach ($result as $row) {
                        echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['email']}</td>
                      </tr>";
                    }
                    ?>
                </tbody>
            </table>

            <!-- admin table -->
            <h3>Admin</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Password</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Fetch Data Admin
                    $sql = "SELECT * FROM admin";
                    $result = $connection->query($sql);
                    foreach ($result as $row) {
                        echo "<tr>
                    <td>{$row['username']}</td>
                    <td>{$row['password']}</td>
                  </tr>";
                    }
                    ?>
                </tbody>
            </table>

            <!-- commetn table -->
            <h3>Comments</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Email</th>
                        <th>Comment</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Fetch Data Comments
                    $sql = "SELECT * FROM comments";
                    $result = $connection->query($sql);
                    foreach ($result as $row) {
                        echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['comment']}</td>
                  </tr>";
                    }
                    $connection = null;
                } catch (PDOException $exception) {
                    echo "<div class='alert alert-danger'>Error: " . $exception->getMessage() . "</div>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>