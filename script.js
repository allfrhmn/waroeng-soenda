// Membuat Hamburger Toggle
const toggleButton = document.getElementById('navbar-toggle');
const menuItems = document.getElementById('menu-item');

toggleButton.addEventListener('click', function() {
    menuItems.classList.toggle('hidden');
});