const navLinks = document.querySelectorAll(".nav-link");

function updateRoomDisplay(activeRoom) {
  const roomCards = document.querySelectorAll(".room-card-container");
  roomCards.forEach((card) => {
    if (card.getAttribute("data-room-type") === activeRoom) {
      card.style.display = "block"; // Show the room type
    } else {
      card.style.display = "none"; // Hide other room types
    }
  });
}

navLinks.forEach((link) => {
  link.addEventListener("click", (e) => {
    e.preventDefault();
    navLinks.forEach((nav) => nav.classList.remove("active"));
    link.classList.add("active");
    const roomType = link.textContent.trim();
    updateRoomDisplay(roomType);
  });
});

document.addEventListener("DOMContentLoaded", () => {
  const defaultRoom = "KING ROOM"; // Default to KING ROOM
  const kingRoomLink = Array.from(navLinks).find(
    (link) => link.textContent.trim() === defaultRoom
  );
  if (kingRoomLink) {
    kingRoomLink.classList.add("active");
  }
  updateRoomDisplay(defaultRoom);
});
