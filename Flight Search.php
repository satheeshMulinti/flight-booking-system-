<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flight Booking</title>
    <link rel="stylesheet" href="Style.css">
    <script src="Script.js" defer></script>
</head>
<body>
    <div class="container">
        <h1>Flight Booking</h1>
        <form id="flightSearchForm" method="POST" action="Flight Search.php">
            <label for="source">Source:</label>
            <input type="text" id="source" name="source" required>

            <label for="destination">Destination:</label>
            <input type="text" id="destination" name="destination" required>

            <label for="date">Date:</label>
            <input type="date" id="date" name="date" required>

            <button type="submit">Search Flights</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            include 'dbcon.php';

            $source = $_POST['source'];
            $destination = $_POST['destination'];
            $date = $_POST['date'];

            $sql = "SELECT flight_no, flight_name, departure_time, duration, cost FROM flights WHERE source = ? AND destination = ? AND date = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sss", $source, $destination, $date);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                echo "<table>
                        <thead>
                            <tr>
                                <th>Flight No</th>
                                <th>Flight Name</th>
                                <th>Departure Time</th>
                                <th>Duration</th>
                                <th>Cost</th>
                            </tr>
                        </thead>
                        <tbody>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['flight_no']}</td>
                            <td>{$row['flight_name']}</td>
                            <td>{$row['departure_time']}</td>
                            <td>{$row['duration']}</td>
                            <td>{$row['cost']}</td>
                        </tr>";
                }
                echo "</tbody></table>";
            } else {
                echo "No flights found.";
            }

            $stmt->close();
            $conn->close();
        }
        ?>
    </div>
</body>
</html>
