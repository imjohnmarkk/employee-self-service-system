function viewVendor(vendorID) {
  const viewVendor = document.querySelector("#View");
  const displayView = document.querySelector("#viewVendor");
  const _vendorID = vendorID;

  fetch(
    "/VendorPortal/src/admin-pages/partials/vendor-management/view-vendor.php",
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
      displayView.innerHTML = data;
    })
    .catch((error) => {
      console.error("Error:", error);
    });

  viewVendor.showModal();
}
