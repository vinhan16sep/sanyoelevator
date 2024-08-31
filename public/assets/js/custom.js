document.addEventListener("DOMContentLoaded", function() {
    // Get the current URL path
    const currentPath = window.location.pathname;
    // Get all menu items
    const menuItems = document.querySelectorAll("#menu-main_menu > li a.menu-url");

    // Loop through each menu item
    menuItems.forEach(item => {
        const href = item.getAttribute("href");
        const path = new URL(href).pathname;
        if (currentPath.startsWith(path) && path !== "/") {
            item.parentElement.classList.add("current-menu-item");
            item.parentElement.classList.add("current_page_item");
        } else {
            item.parentElement.classList.remove("current-menu-item");
            item.parentElement.classList.remove("current_page_item");
        }
    });
});
