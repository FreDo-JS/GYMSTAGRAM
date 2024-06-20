<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gymstagram";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, nazwa, lokalizacja, ocena FROM siłownie";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='gym-item'>";
        echo "<span><strong>Nazwa:</strong> " . $row["nazwa"] . "</span>";
        echo "<span><strong>Lokalizacja:</strong> " . $row["lokalizacja"] . "</span>";
        echo "<span><strong>Ocena:</strong> " . $row["ocena"] . "</span>";
        echo "<form action='rate_gyms.php' method='POST'>";
        echo "<input type='hidden' name='gym_id' value='" . $row["id"] . "'>";
        echo "<label for='rating'>Oceń:</label>";
        echo "<select name='rating' id='rating'>";
        echo "<option value='1'>1</option>";
        echo "<option value='2'>2</option>";
        echo "<option value='3'>3</option>";
        echo "<option value='4'>4</option>";
        echo "<option value='5'>5</option>";
        echo "</select>";
        echo "<button type='submit'>Submit</button>";
        echo "</form>";
        echo "</div>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
