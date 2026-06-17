<?php
// =====================================================================
//  process_booking.php
//  Receives the booking form (POST) from places.php and saves it
//  into the MySQL "booking" table inside the "know_oman" database.
// =====================================================================

// Only run when the form was actually submitted (button name = confirm_booking)
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['confirm_booking'])) {

    // 1) Connect to the database
    $conn = new mysqli("localhost", "root", "", "know_oman");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // 2) Read the data sent from the form
    //    <input type="date"> already gives us the YYYY-MM-DD format MySQL needs.
    $tripDate    = $_POST['tripDate'];
    $touristName = $_POST['user_name'];     // captured for the confirmation message
    $destination = $_POST['destination'];   // captured for the confirmation message
    $status      = "Confirmed";

    // 3) Insert into the columns that actually exist in your table:
    //    booking_id (auto), user_id, package_id, wilayat_id, booking_date, status
    //    We fill booking_date + status. The id columns allow NULL, so we skip them.
    //    Prepared statement => safe from SQL injection.
    $stmt = $conn->prepare("INSERT INTO booking (booking_date, status) VALUES (?, ?)");
    $stmt->bind_param("ss", $tripDate, $status);   // "ss" = two string parameters

    // 4) Run it and report the result
    if ($stmt->execute()) {
        $newId = $stmt->insert_id; // the booking_id MySQL generated
        echo "<div style='font-family:Arial; text-align:center; margin-top:60px;'>";
        echo "<h2 style='color:#2c5e43;'>✅ Booking saved successfully!</h2>";
        echo "<p>Booking ID: <b>" . $newId . "</b></p>";
        echo "<p>Name: " . htmlspecialchars($touristName) . "</p>";
        echo "<p>Destination: " . htmlspecialchars($destination) . "</p>";
        echo "<p>Trip Date: " . htmlspecialchars($tripDate) . "</p>";
        echo "<p>Status: " . $status . "</p>";
        echo "<br><a href='places.php' style='background:#d4af37;color:#fff;"
           . "padding:10px 20px;border-radius:6px;text-decoration:none;'>Back to site</a>";
        echo "</div>";
    } else {
        echo "Error: " . $stmt->error;
    }

    // 5) Clean up
    $stmt->close();
    $conn->close();

} else {
    // Someone opened this file directly without submitting the form
    echo "No booking data received. Please book from the ";
    echo "<a href='places.php'>Tourist Attractions</a> page.";
}


?>
