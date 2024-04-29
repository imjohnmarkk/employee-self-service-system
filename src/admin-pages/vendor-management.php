<?php require_once("../config/connections.php") ?>
<?php include("../component/admin/header.php") ?>
<?php include("../component/admin/navbar.php") ?>
<?php include("../component/admin/sidebar.php") ?>
<div class="p-4 sm:ml-64 mt-5">
    <div class="p-4 rounded-lg dark:border-gray-700 mt-5">
        <div>
            <?php if (isset($_SESSION["update-success"])) { ?>

                <div role="alert" class="alert alert-success flex justify-center items-center text-xl text-white w-[400px] mx-auto">
                    <span><?php echo $_SESSION["update-success"]; ?></span>
                </div>

                <?php unset($_SESSION["update-success"]); ?>
            <?php } ?>

            <?php if (isset($_SESSION["delete-success"])) { ?>

                <div role="alert" class="alert alert-success flex justify-center items-center text-xl text-white w-[400px] mx-auto">
                    <span><?php echo $_SESSION["delete-success"]; ?></span>
                </div>

                <?php unset($_SESSION["delete-success"]); ?>
            <?php } ?>
            <h1>Vendor Management</h1>
            <div class="overflow-x-auto">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Products</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        // Fetch vendor data from the database
                        $sql = "SELECT * FROM vendors";
                        $result = $conn->query($sql);
                        ?>

                        <?php if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) { ?>

                                <tr>
                                    <th><?php echo $row['id'] ?></th>
                                    <td><?php echo $row['name'] ?></td>
                                    <td><?php echo $row['email'] ?></td>
                                    <td><?php echo $row['products'] ?></td>
                                    <td>
                                        <button class="btn btn-success text-white" data-id="<?php echo $row['id'] ?>" onclick="editVendor(<?php echo $row['id'] ?>)">Edit</button>
                                        <button class="btn btn-error text-white" onclick="deleteVendor(<?php echo $row['id'] ?>)">Delete</button>
                                        <button class="btn btn-info text-white" onclick="viewVendor(<?php echo $row['id'] ?>)">View</button>
                                    </td>
                                </tr>

                        <?php
                            }
                        } else {
                            echo "<tr><td colspan='5'>No vendors found</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>

            <dialog id="Edit" class="modal modal-bottom sm:modal-middle">
                <div class="modal-box">
                    <div id="editVendor"></div>
                </div>
            </dialog>

            <dialog id="Delete" class="modal modal-bottom sm:modal-middle">
                <div class="modal-box">
                    <div id="deleteVendor"></div>
                </div>
            </dialog>

            <dialog id="View" class="modal modal-bottom sm:modal-middle">
                <div class="modal-box">
                    <div id="viewVendor"></div>
                </div>
            </dialog>

        </div>

    </div>
</div>

<script src="../js/vendor-management/view-vendor.js"></script>
<script src="../js/vendor-management/delete-vendor.js"></script>
<script src="../js/vendor-management/edit-vendor.js"></script>
<?php include("../component/admin/footer.php") ?>