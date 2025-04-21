<?php
/**
 * Portfolio Website - Main Index File
 */

// Include configuration file
require_once 'includes/config.php';

// Set active section (default to home)
$active_section = 'home';

// Include contact form handler for processing form submissions
require_once 'lib/contact_handler.php';

// Start the page
$page_title = $site['title'];
include 'partials/header.php';

// Include all sections
include 'partials/hero.php';
include 'partials/about.php';
include 'partials/skills.php';
include 'partials/projects.php';
include 'partials/contact.php';

// Include footer
include 'partials/footer.php';
?>