<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


<!-- Sidebar Toggle Script -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const toggleBtn = document.getElementById('sidebarToggle');
    const wrapper = document.getElementById('wrapper');

    if (toggleBtn && wrapper) {
        toggleBtn.addEventListener('click', function () {
            wrapper.classList.toggle('active');
        });
    }
});
</script>
