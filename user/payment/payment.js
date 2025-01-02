document.addEventListener("DOMContentLoaded", function () {
  const confirmButton = document.getElementById("confirmPaymentButton");
  const paymentSection = document.getElementById("paymentSection");
  const orderCompletedMessage = document.getElementById(
    "orderCompletedMessage"
  );
  const paymentModal = new bootstrap.Modal(
    document.getElementById("paymentModal")
  );

  confirmButton.addEventListener("click", function () {
    // Hide the payment section
    paymentSection.style.display = "none";

    // Show the order completed message
    orderCompletedMessage.style.display = "block";

    // Hide the modal
    paymentModal.hide();
  });
});

// Dismiss the Order Completed message and reload the page
function dismissOrderCompleted() {
  location.reload();
}
