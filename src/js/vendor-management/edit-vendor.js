function editVendor(vendorID) {
  const editVendor = document.querySelector("#Edit");
  const displayEdit = document.querySelector("#editVendor");
  const _vendorID = vendorID;

  fetch(
    "/VendorPortal/src/admin-pages/partials/vendor-management/edit-vendor.php",
    {
      method: "POST",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded",
      },
      body: "vendorID=" + encodeURIComponent(_vendorID),
    }
  )
    .then((response) => response.text())
    .then((data) => {
      // Response from PHP
      console.log(data);
      displayEdit.innerHTML = data;
    })
    .catch((error) => {
      console.error("Error:", error);
    });

  editVendor.showModal();
}
