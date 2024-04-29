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

    <h3 class="font-bold text-lg">View</h3>

    <div class="flex justify-center items-center">

        <div class="space-y-6">
            <div>Name: <?php echo $vendor['name'] ?></div>
            <div>Email: <?php echo $vendor['email'] ?></div>
            <div>Products: <?php echo $vendor['products'] ?></div>
        </div>

    </div>
    <div class="modal-action">

        <form method="dialog">
            <button class="btn btn-info text-white">Close</button>
        </form>

    </div>
<?php } else {
    echo "Vendor not found.";
} ?>