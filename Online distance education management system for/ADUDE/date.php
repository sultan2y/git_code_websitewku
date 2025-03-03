<?php
session_start();
include("connection.php");

// Ensure the 'cde' database is selected (optional if already set in connection.php)
$conn->select_db("cde");

// Query the 'date' table
$sql = "SELECT * FROM date";
$result = $conn->query($sql);

// Check for query errors
if (!$result) {
    die("Query failed: " . $conn->error);
}
?>

<html>
<head>
    <title>Important Dates - Wolkite University</title>
</head>
<body>
    <h3>Important Dates</h3>
    <?php if ($result->num_rows > 0): ?>
        <ul>
            <?php while ($row = $result->fetch_assoc()): ?>
                <li><?php echo htmlspecialchars($row['note']) . " (" . $row['start_date'] . " to " . $row['end_date'] . ")"; ?></li>
            <?php endwhile; ?>
        </ul>
    <?php else: ?>
        <p>No important dates available.</p>
    <?php endif; ?>
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>