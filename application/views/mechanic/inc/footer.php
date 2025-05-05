



</div>



</div>

<?php  
    
    $this->load->view('front/inc/footer.php');
?>

<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script> -->

<script>
    // JavaScript to toggle sidebar
    document.getElementById("toggle-btn").addEventListener("click", function() {
        var sidebar = document.getElementById("sidebar");
        var mainContent = document.getElementById("main-content");

        sidebar.classList.toggle("closed");  // Toggle sidebar visibility
        mainContent.classList.toggle("full-width");  // Adjust main content width
    });

    // JavaScript to toggle the submenu
    document.getElementById("orders-toggle").addEventListener("click", function(e) {
        e.preventDefault();
        var submenu = document.getElementById("orders-submenu");
        submenu.classList.toggle("open");  // Toggle submenu visibility
    });

    // JavaScript to add active class to clicked menu item
    function setActiveMenuItem(menuId) {
        // Remove active class from all menu items
        var menuItems = document.querySelectorAll('.sidebar a');
        menuItems.forEach(function(item) {
            item.classList.remove('active');
        });

        // Add active class to the clicked menu item
        var activeMenuItem = document.getElementById(menuId);
        if (activeMenuItem) {
            activeMenuItem.classList.add('active');
        }
    }

    // Add event listeners for each link in the sidebar
    document.getElementById("dashboard-link").addEventListener("click", function() {
        setActiveMenuItem("dashboard-link");
    });
    document.getElementById("edit-profile-link").addEventListener("click", function() {
        setActiveMenuItem("edit-profile-link");
    });
    document.getElementById("view-orders-link").addEventListener("click", function() {
        setActiveMenuItem("view-orders-link");
    });
    document.getElementById("track-order-link").addEventListener("click", function() {
        setActiveMenuItem("track-order-link");
    });
    document.getElementById("transactions-link").addEventListener("click", function() {
        setActiveMenuItem("transactions-link");
    });
    document.getElementById("list-car-link").addEventListener("click", function() {
        setActiveMenuItem("list-car-link");
    });
    document.getElementById("logout-link").addEventListener("click", function() {
        setActiveMenuItem("logout-link");
    });

    // Add event listener for submenu items to add active state
    document.getElementById("view-orders-link").addEventListener("click", function() {
        document.getElementById("view-orders-link").classList.add("active");
        document.getElementById("track-order-link").classList.remove("active");
    });
    document.getElementById("track-order-link").addEventListener("click", function() {
        document.getElementById("track-order-link").classList.add("active");
        document.getElementById("view-orders-link").classList.remove("active");
    });
</script>
