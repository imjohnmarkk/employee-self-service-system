<?php require_once("../../../config/connections.php");

$vendorID = $_POST['vendorID'];

$query = "SELECT * FROM vendors WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $vendorID);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $vendor = $result->fetch_assoc();
?>

    <h3 class="font-bold text-lg">Edit</h3>

    <div class="flex justify-center items-center">

        <form action="../config/vendor-management/update.php" method="post" class="w-full">
            <input type="hidden" name="vendorID" value="<?php echo $vendorID ?>">
            <label class="form-control w-full mb-2">
                <div class="label">
                    <span class="label-text">Name</span>
                </div>
                <input type="text" class="input input-bordered w-full" name="name" value="<?php echo $vendor['name'] ?>" />
            </label>

            <label class="form-control w-full mb-2">
                <div class="label">
                    <span class="label-text">Email</span>
                </div>
                <input type="email" class="input input-bordered w-full" name="email" value="<?php echo $vendor['email'] ?>" />
            </label>

            <label class="form-control w-full mb-2">
                <div class="label">
                    <span class="label-text">Products</span>
                </div>
                <input type="text" class="input input-bordered w-full" name="products" value="<?php echo $vendor['products'] ?>" />
            </label>

            <button class="btn btn-success text-white mt-5 mb-4" type="submit">Confirm</button>
        </form>

    </div>
    <form method="dialog">
        <!-- if there is a button in form, it will close the modal -->
        <button class="btn btn-info text-white">Cancel</button>
    </form>

<?php } else {
    echo "Vendor not found.";
} ?>