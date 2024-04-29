function showVendorManagement() {
  fetch("/VendorPortal/src/admin-pages/vendor-management.php")
    .then((response) => response.text())
    .then((data) => {
      document.getElementById("content").innerHTML = data;
    })
    .catch((error) => {
      console.error("Error:", error);
    });
}
