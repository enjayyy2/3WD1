<?php

function getConnection(): PDO
{
    $host = "localhost";
    $port = 3306;
    $database = "belajar_php_database";
    $username = "root";
    $password = "";

    return new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
}

try {
    $connection = new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
    echo "Sukses terlkoneksi ke database";

//menutup koneksi
    $connection = null;
    }catch (PDOException $exception) {
        echo "Error terkoneksi ke database : " . $exception->getMessage();
    }

// membuat table customers
CREATE TABLE customers
(
    id VARCHAR(100) NOT NULL,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    PRIMARY KEY (id)
) ENGINE = InnoDB;

// eksekusi sql menggunakan PDO
$connection = getConnection();

$sql = <<<SQL
    INSERT INTO customers(id, name, email)
    VALUES ('eko', 'Eko', 'eko@test.com');
SQL;

$connection->exec($sql);

$connection = null;

// query sql dengan PDO
$connection = getConnection();

$sql = "SELECT * FROM customers";
$result = $connection->query($sql);

$connection = null;

//foreach PDOStatment
$connection = getConnection();

$sql = "SELECT * FROM customers";
$result = $connection->query($sql);
foreach ($result as $row) {
    var_dump($row);
}

$connection = null;

// membuat table admin
CREATE TABLE admin
(
    username VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL,
    PRIMARY KEY (username)
) ENGINE = InnoDB;

// membuat sql dari input user
$username = "admin";
$password = "admin";

$sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";

// contoh query dengan parameter
$sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
$result = $connection->query(sql);

$success = false;
foreach ($result as $row) {
    $success = true;
}
if ($success) {
    echo "SUKSES LOGIN";
}else {
    echo "GAGAL LOGIN";
}

// contoh sql injection
$username = "admin'; #";
$password = "admin";

// menggunakan function quote
$username = $connection->quote("admin'; #");
$password = $connection->quote("admin");

$sql = "SELECT * FROM admin WHERE username = $username AND password = $password";
$result = $connection->query($sql);

// membuat prepare statement
$sql = "SELECT * FROM admin WHERE username = :username AND password = :password";
$result = $connection->prepare($sql);

// binding parameter
$username = "admin'; #";
$password = "admin";

$sql = "SELECT * FROM admin WHERE username = :username AND password = :password";
$result = $connection->prepare($sql);
$result->bindParam("username", $username);
$result->bindParam("password", $password);
$result->execute();

$success = false;
foreach ($result as $row) {
    $success = true
}

// binding parameter dengan index
$username = "admin";
$password = "admin";

$sql = "SELECT * FROM admin WHERE username = ? AND password = ?";
$result = $connection->prepare($sql);
$result->bindParam(1, $username);
$result->bindParam(2, $password);
$result->execute();

$success = false;
foreach ($result as $row) {
    $success = true
}

//binding parameter ketika execute
$username = "admin";
$password = "admin";

$sql = "SELECT * FROM admin WHERE username = ? AND password = ?";
$result = $connection->prepare($sql);
$result->execute([$username, $password]);

$success = false;
foreach ($result as $row) {
    $success = true
}

// function fetch()
$username = "admin";
$password = "admin";

$sql = "SELECT * FROM admin WHERE username = ? AND password = ?";
$result = $connection->prepare($sql);
$result->execute([$username, $password]);

if ($row = $result->fetch()) {
    echo "SUKSES LOGIN : " . $row["username"];
} else {
    echo "GAGAL LOGIN";
}

// function fetch all()
$connection = getConnection();

$sql = "SELECT * FROM customers";
$result = $connection->query($sql);
$customers = $result->fetchAll();

var_dump($customers);

// membuat table
CREATE TABLE comments
(
    id INT NOT NULL AUTO INCREMENT,
    email VARCHAR(100) NOT NULL,
    comment TEXT,
    PRIMARY KEY (id)
) ENGINE = InnoDB;

// function lastInsertId()
$connection = getConnection();

$connection->exec("INSERT INTO comments(email, comment) VALUES('eko@test.com', 'hi')");
$id = $connection->lastInsertId();

var_dump($id);

$connection = null;

?>