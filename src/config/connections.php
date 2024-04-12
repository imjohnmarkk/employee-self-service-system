<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "employees_self_service";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "connected succefully";

// SQL query to retrieve employee data
$sql = "SELECT * FROM Employees";

// Execute the query
$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
    ?>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Date of Birth</th>
            <th>Gender</th>
            <th>Address</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Hire Date</th>
            <th>Department ID</th>
            <th>Job Title</th>
            <th>Salary</th>
            <th>Manager ID</th>
            <th>Employment Status</th>
            <th>Emergency Contact Name</th>
            <th>Emergency Contact Phone</th>
        </tr>
        <?php
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            ?>
            <tr>
                <td><?php echo $row["EmployeeID"]; ?></td>
                <td><?php echo $row["FirstName"] . " " . $row["LastName"]; ?></td>
                <td><?php echo $row["DateOfBirth"]; ?></td>
                <td><?php echo $row["Gender"]; ?></td>
                <td><?php echo $row["Address"]; ?></td>
                <td><?php echo $row["Email"]; ?></td>
                <td><?php echo $row["PhoneNumber"]; ?></td>
                <td><?php echo $row["HireDate"]; ?></td>
                <td><?php echo $row["DepartmentID"]; ?></td>
                <td><?php echo $row["JobTitle"]; ?></td>
                <td><?php echo $row["Salary"]; ?></td>
                <td><?php echo $row["ManagerID"]; ?></td>
                <td><?php echo $row["EmploymentStatus"]; ?></td>
                <td><?php echo $row["EmergencyContactName"]; ?></td>
                <td><?php echo $row["EmergencyContactPhone"]; ?></td>
            </tr>
            <?php
        }
        ?>
    </table>
    <?php
} else {
    echo "0 results";
}

// Close connection
$conn->close();
?>