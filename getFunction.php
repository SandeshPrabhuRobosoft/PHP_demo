<?php

function createUser()
{
    if (isset($_POST['submit'])) {
        global $connection;
        $username = $_POST['username'];
        $password = $_POST['password'];
        $username = mysqli_real_escape_string($connection, $username);
        $password = mysqli_real_escape_string($connection, $password);
        if ($username) {
            if ($password) {
                $hashFormat = "$2y$10$";
                $salt = "ThisIsTheSaltForEncryption";
                $hashFormatAndSalt = $hashFormat . $salt;
                $password = crypt($password, $hashFormatAndSalt);
                $insertQuery = "INSERT INTO users(username,password)";
                $insertQuery .= "VALUES('$username','$password')";
                $insertResult = mysqli_query($connection, $insertQuery);
                if (!$insertResult) die("Insertion failed, Error:" . mysqli_error($connection));
                else echo "Insertion successful";
            } else echo "password cannot be empty!!";
        } else echo "username cannot be empty!!!";
    }
}

function showAllData()
{
    global $connection;
    $returnQuery = "SELECT * FROM users";
    $returnResult = mysqli_query($connection, $returnQuery);
    if (!$returnResult) die("Insertion failed, Error:" . mysqli_error($connection));
    while ($row = mysqli_fetch_assoc($returnResult)) {
        print_r($row);
    }
}

function showAllId()
{
    global $connection;
    $returnQuery = "SELECT * FROM users";
    $returnResult = mysqli_query($connection, $returnQuery);
    if (!$returnResult) die("Insertion failed, Error:" . mysqli_error($connection));
    while ($row = mysqli_fetch_assoc($returnResult)) {
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }
}

function updateTable()
{
    if (isset($_POST['submit'])) {
        global $connection;
        $username = mysqli_real_escape_string($connection, $_POST['username']);
        $password = mysqli_real_escape_string($connection, $_POST['password']);
        $id = $_POST['id'];
        $query = "UPDATE users SET ";
        $query .= "username = '$username', password = '$password' ";
        $query .= "WHERE id = $id";
        $updateResult = mysqli_query($connection, $query);
        if ($updateResult) {
            echo "Successfully updated...";
        } else die("Query execution failed, Error: " . mysqli_error(($connection)));
    }
}

function deleteData()
{
    if (isset($_POST['submit'])) {
        global $connection;
        $id = mysqli_real_escape_string($connection, $_POST['id']);
        $query = "DELETE FROM users ";
        $query .= "WHERE id = $id";
        $updatedResult = mysqli_query($connection, $query);
        if ($updatedResult) {
            echo "Successfully deleted...";
        } else die("Query execution failed, Error: " . mysqli_error(($connection)));
    }
}
