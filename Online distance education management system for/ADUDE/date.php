<?php
session_start();
include("connection.php");

// Debug: Show the current database
$current_db = $conn->query("SELECT DATABASE()")->fetch_row()[0];
echo "Current database: " . $current_db . "<br>";

// Force 'cde' (temporary)
$conn->select_db("cde");

// Run the query
$sql = "SELECT * FROM date";
$result = $conn->query($sql);

// Check for errors
if (!$result) {
    die("Query failed: " . $conn->error);
} else {
    echo "Query executed successfully.<br>";
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
$conn->close();
?>