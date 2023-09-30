function showProductPreview(id) {
    var productPreview = document.getElementById(id);
    productPreview.style.display = "block";
}

// Function to close the product preview
function closeProductPreview(id) {
    var productPreview = document.getElementById(id);
    productPreview.style.display = "none";
}

// Attach click event handlers for close buttons
document.getElementById("closePreview").addEventListener("click", function() {
    closeProductPreview("susi");
});