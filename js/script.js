// Add event listeners once the DOM is loaded
document.addEventListener("DOMContentLoaded", function () {
    // Example: Update cart count when items are added
    updateCartCount();
});

// Function to update the cart count (example)
function updateCartCount() {
    const cartItemCount = getCartItemCount(); // Replace with your logic to get cart item count
    const cartCountElement = document.getElementById("cart-count");

    if (cartCountElement) {
        cartCountElement.textContent = cartItemCount;
    }
}
