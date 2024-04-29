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

    <h3 class="font-bold text-lg">Delete</h3>

    <p class="py-4">Are you sure to delete this vendor?</p>

    <div class="modal-action">
        <form action="../config/vendor-management/delete.php" method="post" class="space-x-3">
            <input type="hidden" name="vendorID" value="<?php echo $vendorID ?>">
            <button class="btn btn-error text-white" type="submit">Confirm</button>
        </form>
        <form method="dialog">
            <button class="btn btn-info text-white">Cancel</button>
        </form>
    </div>


<?php } else {
    echo "Vendor not found.";
} ?>