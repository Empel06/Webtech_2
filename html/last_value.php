<?php
header('Content-Type: application/json');

try {
    // Database connection
    $conn = new PDO('pgsql:host=db;dbname=webtech_db', 'postgres', 'pipikaka');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Determine the request method
    $method = $_SERVER['REQUEST_METHOD'];

    if ($method === 'POST') {
        // Create: Insert a new temperature value
        $input = json_decode(file_get_contents('php://input'), true);
        $temperature = $input['value'] ?? null;

        if (is_numeric($temperature)) {
            $stmt = $conn->prepare('INSERT INTO cpu_temperature (value) VALUES (:value)');
            $stmt->bindParam(':value', $temperature, PDO::PARAM_STR);
            $stmt->execute();

            echo json_encode(['status' => 'success', 'message' => 'Temperature data inserted successfully']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Invalid temperature value']);
        }
    } elseif ($method === 'GET') {
        // Read: Retrieve the last recorded value
        $stmt = $conn->prepare('SELECT value FROM cpu_temperature ORDER BY recorded_at DESC LIMIT 1');
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            echo json_encode(['value' => $result['value']]);
        } else {
            echo json_encode(['error' => 'No data found']);
        }
    } elseif ($method === 'PUT') {
        // Update: (Optional) Update a specific record
        parse_str(file_get_contents("php://input"), $input);
        $id = $input['id'] ?? null;
        $value = $input['value'] ?? null;

        if ($id && is_numeric($value)) {
            $stmt = $conn->prepare('UPDATE cpu_temperature SET value = :value WHERE id = :id');
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->bindParam(':value', $value, PDO::PARAM_STR);
            $stmt->execute();

            echo json_encode(['status' => 'success', 'message' => 'Temperature data updated successfully']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Invalid parameters']);
        }
    } elseif ($method === 'DELETE') {
        // Delete: (Optional) Delete a specific record
        parse_str(file_get_contents("php://input"), $input);
        $id = $input['id'] ?? null;

        if ($id) {
            $stmt = $conn->prepare('DELETE FROM cpu_temperature WHERE id = :id');
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();

            echo json_encode(['status' => 'success', 'message' => 'Temperature data deleted successfully']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Invalid ID']);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Unsupported request method']);
    }
} catch (PDOException $e) {
    echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
}
?>
