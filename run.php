<?php
/**
 * Development Server Launcher
 */

echo "Starting PHP development server on port 8080...\n";
echo "Visit http://localhost:8080 to view your portfolio website.\n";
echo "Press Ctrl+C to stop the server.\n";

// Change to the directory of this script
chdir(__DIR__);

// Start the PHP development server
$command = "php -S 0.0.0.0:8080";
system($command);
?>