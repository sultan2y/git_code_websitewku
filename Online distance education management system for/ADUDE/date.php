<?php
session_start();
include("connection.php");

$sql = "SELECT * FROM date";
$result = $conn->query($sql);
?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="3.css">
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
<?php $conn->close(); ?>