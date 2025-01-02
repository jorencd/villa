document.addEventListener('DOMContentLoaded', function () {
    flatpickr("#checkin", {
        dateFormat: "d/ M",
    });

    flatpickr("#checkout", {
        dateFormat: "d/ M",
    });
});