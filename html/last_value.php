<?php
// last_value.php

$host = 'db'; // Name of the PostgreSQL service in Docker Compose
$port = '5432';
$dbname = 'cpu_temperature';
$user = 'postgres';
$password = 'pipikaka';

try {
    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname";
    $pdo = new PDO($dsn, $user, $password);
    
    // Query to get the last added value (adjust column name as necessary)
    $stmt = $pdo->query("SELECT * FROM your_table_name ORDER BY id DESC LIMIT 1");
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($result) {
        echo json_encode($result);
    } else {
        echo json_encode(['error' => 'No data found']);
    }
} catch (PDOException $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
?>
