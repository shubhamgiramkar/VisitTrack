<?php
include 'db.php';

// Fetch visitor data
$sql = "SELECT * FROM visitor_logs ORDER BY visit_time DESC";
$stmt = $pdo->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page - Visitor Logs</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Visitor Details</h1>
        <table>
            <tr>
                <th>IP Address</th>
                <th>Referrer</th>
                <th>Visit Time</th>
            </tr>
            <?php while ($row = $stmt->fetch()): ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['ip_address']); ?></td>
                    <td><?php echo htmlspecialchars($row['http_referer']); ?></td>
                    <td><?php echo htmlspecialchars($row['visit_time']); ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
    </div>
</body>
</html>
