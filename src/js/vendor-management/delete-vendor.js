function deleteVendor(vendorID) {
  const deleteVendor = document.querySelector("#Delete");
  const displayDelete = document.querySelector("#deleteVendor");
  const _vendorID = vendorID;

  fetch(
    "/VendorPortal/src/admin-pages/partials/vendor-management/delete-vendor.php",
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
      displayDelete.innerHTML = data;
    })
    .catch((error) => {
      console.error("Error:", error);
    });

  deleteVendor.showModal();
}
