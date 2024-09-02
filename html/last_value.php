<?php
header('Content-Type: application/json');

try {
    // Database connection
    $conn = new PDO('pgsql:host=db;dbname=webtech_db', 'postgres', 'pipikaka');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Insert new temperature data
        if (isset($_POST['temperature'])) {
            $temperature = $_POST['temperature'];

            if (is_numeric($temperature)) {
                $stmt = $conn->prepare('INSERT INTO cpu_temperature (value) VALUES (:value)');
                $stmt->bindParam(':value', $temperature, PDO::PARAM_STR);
                $stmt->execute();

                echo json_encode(['status' => 'success', 'message' => 'Temperature data inserted successfully']);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Invalid temperature value']);
            }
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Temperature value not provided']);
        }
    } else if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        // Retrieve temperature data from the last 2 minutes
        $stmt = $conn->prepare('SELECT id, value, recorded_at FROM cpu_temperature WHERE recorded_at >= NOW() - INTERVAL \'2 minutes\' ORDER BY recorded_at DESC');
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

        echo json_encode($data);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Unsupported request method']);
    }
} catch (PDOException $e) {
    echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
}
?>
