<?php require_once ("../config/connections.php") ?>

<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css" />
    <title>Employee Management</title>

    <style>
        tr,
        td {
            white-space: nowrap;
        }
    </style>
</head>

<body>
    <div class="drawer lg:drawer-open">
        <input id="my-drawer" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content">
            <!-- Page content here -->
            <div class="navbar bg-base-100 flex justify-center items-center shadow-lg ">
                <label for="my-drawer"
                    class="btn btn-circle btn-neutral drawer-button lg:hidden fixed top-0 left-0 m-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h7" />
                    </svg>
                </label>
                <a class="text-xl font-bold"> <img src="../../ess-logo.jpg" alt="ESS Logo"
                        class="h-[40px] w-[40px] rounded-lg">
                    E.S.S</a>
            </div>

            <div class="overflow-x-auto">
                <table class="border-collapse w-full table ">
                    <thead>
                        <tr>
                            <th
                                class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                                ID</th>
                            <th
                                class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                                Name</th>
                            <th
                                class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                                Date of Birth</th>
                            <th
                                class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                                Gender</th>
                            <th
                                class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                                Address</th>
                            <th
                                class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                                Email</th>
                            <th
                                class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                                Phone Number</th>
                            <th
                                class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                                Hire Date</th>
                            <th
                                class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                                Department ID</th>
                            <th
                                class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                                Job Title</th>
                            <th
                                class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                                Salary</th>
                            <th
                                class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                                Manager ID</th>
                            <th
                                class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                                Employment Status</th>
                            <th
                                class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                                Emergency Contact Name</th>
                            <th
                                class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                                Emergency Contact Phone</th>
                            <th
                                class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                                Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // SQL query to retrieve employee data
                        $sql = "SELECT * FROM Employees";

                        // Execute the query
                        $result = $conn->query($sql);

                        // Check if there are any results
                        if ($result->num_rows > 0) {
                            // Output data of each row
                            while ($row = $result->fetch_assoc()) {
                                ?>
                                <tr
                                    class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                                    <td
                                        class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                                        <span
                                            class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">ID</span>
                                        <?php echo $row["EmployeeID"]; ?>
                                    </td>
                                    <td
                                        class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b  block lg:table-cell relative lg:static">
                                        <span
                                            class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Name</span>
                                        <?php echo $row["FirstName"] . " " . $row["LastName"]; ?>
                                    </td>
                                    <td
                                        class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b  block lg:table-cell relative lg:static">
                                        <span
                                            class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Date
                                            of Birth</span>
                                        <?php echo $row["DateOfBirth"]; ?>
                                    </td>
                                    <td
                                        class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b  block lg:table-cell relative lg:static">
                                        <span
                                            class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Gender</span>
                                        <?php echo $row["Gender"]; ?>
                                    </td>
                                    <td
                                        class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b  block lg:table-cell relative lg:static">
                                        <span
                                            class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Address</span>
                                        <?php echo $row["Address"]; ?>
                                    </td>
                                    <td
                                        class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b  block lg:table-cell relative lg:static">
                                        <span
                                            class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Email</span>
                                        <?php echo $row["Email"]; ?>
                                    </td>
                                    <td
                                        class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b  block lg:table-cell relative lg:static">
                                        <span
                                            class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Phone
                                            Number</span>
                                        <?php echo $row["PhoneNumber"]; ?>
                                    </td>
                                    <td
                                        class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b  block lg:table-cell relative lg:static">
                                        <span
                                            class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Hire
                                            Date</span>
                                        <?php echo $row["HireDate"]; ?>
                                    </td>
                                    <td
                                        class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b  block lg:table-cell relative lg:static">
                                        <span
                                            class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Department
                                            ID</span>
                                        <?php echo $row["DepartmentID"]; ?>
                                    </td>
                                    <td
                                        class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b  block lg:table-cell relative lg:static">
                                        <span
                                            class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Job
                                            Title</span>
                                        <?php echo $row["JobTitle"]; ?>
                                    </td>
                                    <td
                                        class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b  block lg:table-cell relative lg:static">
                                        <span
                                            class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Salary</span>
                                        <?php echo $row["Salary"]; ?>
                                    </td>
                                    <td
                                        class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b  block lg:table-cell relative lg:static">
                                        <span
                                            class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Manager
                                            ID</span>
                                        <?php echo $row["ManagerID"]; ?>
                                    </td>
                                    <td
                                        class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b  block lg:table-cell relative lg:static">
                                        <span
                                            class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Employment
                                            Status</span>
                                        <?php echo $row["EmploymentStatus"]; ?>
                                    </td>
                                    <td
                                        class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b  block lg:table-cell relative lg:static">
                                        <span
                                            class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Emergency
                                            Contact Name</span>
                                        <?php echo $row["EmergencyContactName"]; ?>
                                    </td>
                                    <td
                                        class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b  block lg:table-cell relative lg:static">
                                        <span
                                            class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Emergency
                                            Contact Phone</span>
                                        <?php echo $row["EmergencyContactPhone"]; ?>
                                    </td>
                                    <td
                                        class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b  block lg:table-cell relative lg:static">
                                        <span
                                            class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Actions</span>

                                        <!-- Edit button -->
                                        <button onclick="openEditModal()" class="btn btn-success mx-3 ">Edit</button>
                                        <!-- Delete button -->
                                        <button onclick="openDeleteModal()" class="btn btn-error">Delete</button>

                                    </td>
                                    </td>
                                </tr>
                                <?php
                            }
                        } else {
                            echo "<tr><td colspan='15'>0 results</td></tr>";
                        }

                        // Close connection
                        $conn->close();
                        ?>
                </table>


                <!-- Edit Modal -->
                <dialog id="edit" class="modal modal-bottom sm:modal-middle">
                    <div class="modal-box">
                        <h3 class="font-bold text-lg">Edit Employee</h3>
                        <!-- Add form or content for editing employee data here -->
                        <!-- Example: -->
                        <form method="post">
                            <!-- Input fields for editing employee data -->
                            <!-- Example: -->
                            <label for="firstName">First Name:</label>
                            <input type="text" id="firstName" name="firstName" value="">
                            <br>
                            <label for="lastName">Last Name:</label>
                            <input type="text" id="lastName" name="lastName" value="">
                            <br>
                            <!-- Add more input fields as needed -->
                            <br>
                            <!-- Submit button -->
                            <button type="submit" class="btn">Submit</button>
                        </form>
                        <button class="btn" onclick="closeModal('edit')">Close</button>
                    </div>
                </dialog>

                <!-- Delete Modal -->
                <dialog id="delete" class="modal modal-bottom sm:modal-middle">
                    <div class="modal-box">
                        <h3 class="font-bold text-lg">Delete Employee</h3>
                        <p>Are you sure you want to delete this employee?</p>
                        <!-- Add form for deleting employee here -->
                        <form method="post" action="../config/delete_employee.php">
                            <!-- Hidden input field to store employee ID -->
                            <input type="hidden" id="employeeID" name="employeeID" value="">
                            <!-- Submit button -->
                            <button type="submit" class="btn" name="delete">Delete</button>
                        </form>
                        <button class="btn" onclick="closeModal('delete')">Close</button>
                    </div>
                </dialog>


            </div>



        </div>

        <div class="drawer-side">
            <label for="my-drawer" aria-label="close sidebar" class="drawer-overlay"></label>
            <ul
                class="menu p-4 w-80 min-h-full bg-base-200 text-base-content rounded-box space-y-4 font-sans font-semibold">
                <!-- Sidebar content here -->

                <li><a href="../dashboard/admin-dashboard.php">Dashboard</a></li>
                <li><a href="../admin-pages/employee-management.php">Employee Management</a></li>
                <li><a href="#">Time and Attendance</a></li>
                <li><a href="#">Payroll and Compensation</a></li>
                <li><a href="#">Performance Management</a></li>
                <li><a href="#">Training and Development</a></li>
                <li><a href="#">Benefits Administration</a></li>
                <li><a href="#">Communication and Announcements</a></li>
                <li><a href="#">Reports and Analytics</a></li>
                <li><a href="#">Settings and Configuration</a></li>

            </ul>
        </div>
    </div>


    <script>
        // JavaScript functions to handle modal functionality

        // Function to open modal for editing employee
        function openEditModal() {
            document.getElementById('edit').showModal();
        }

        // Function to close modal for editing employee
        function closeEditModal() {
            document.getElementById('edit').close();
        }

        function openDeleteModal(employeeID) {
            // Set the employee ID in the hidden input field
            document.getElementById('employeeID').value = employeeID;
            // Open the delete modal
            document.getElementById('delete').showModal();
        }

        function closeDeleteModal() {
            document.getElementById('delete').close();
        }

        // Function to close modal by ID
        function closeModal(id) {
            document.getElementById(id).close();
        }
    </script>
</body>

</html>