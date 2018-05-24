<?php

function connect() {
    $conn = mysqli_connect("db", "test", "test", "test");

    if (!$conn) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
    
    echo "Success: A proper connection to MySQL was made!" . PHP_EOL;
    echo "Host information: " . mysqli_get_host_info($conn) . PHP_EOL;
    
    return $conn;
}

function drop_table($conn) {
    $sql = "DROP TABLE  user;";
    if ($conn->query($sql) === TRUE) {
        echo "Table user created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }
}

function create_table($conn) {

    $sql = "CREATE TABLE IF NOT EXISTS user (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(30) NOT NULL
        )";
        
    if ($conn->query($sql) === TRUE) {
        echo "Table user created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }
}

function add_row($conn) {

    $sql = "INSERT INTO user (firstname, lastname, email)
    VALUES ('John', 'Doe', 'john@example.com')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

function get_rows($conn) {

    $sql = "SELECT id, firstname, lastname, email FROM user";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. " " . $row["email"]. "<br>";
        }
        return $result->num_rows;
    } else {
        return 0;
    }    
}

$conn = connect();
//drop_table($conn);
//create_table($conn);

$count = get_rows($conn);

//if ($count == 0) {
//    add_row($conn);
//}

$conn->close();

?>
