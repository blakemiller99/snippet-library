<?php

/*
* Removes the new "Hello" admin menu that was added in version 3.4.0 on 5/5/25.
* Places Theme settings back under Appearance where it came from.
*/

add_action('admin_menu', function() {
    // Remove the top-level Hello menu and all submenus
    remove_menu_page('hello-elementor');

    // Add "Theme Settings" back under Appearance menu
    add_submenu_page(
        'themes.php', // Parent slug (Appearance)
        'Theme Settings', // Page title
        'Theme Settings', // Menu title
        'manage_options', // Capability
        'hello-elementor', // Menu slug
        '', // Function - leave empty to allow existing Hello page to load
        99 // Position (optional)
    );
}, 999 ); // Priority 999 to ensure it runs after Hello adds its menu
