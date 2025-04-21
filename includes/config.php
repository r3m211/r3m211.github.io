<?php
/**
 * Configuration file for the portfolio
 */

// Set site details
$site = [
    'title' => 'Portfolio',
    'name' => 'Remegio Aloda Jr',
    'position' => 'IT Specialist',
    // 'description' => 'I create robust, scalable web applications with a focus on secure database design and efficient backend systems.',
    'email' => 'remegio.alodajr@gmail.com',
    'phone' => '-',
    'location' => 'Baguio City, PH',
    'social' => [
        'github' => 'https://github.com',
        'linkedin' => 'https://linkedin.com',
        'twitter' => 'https://twitter.com'
    ]
];

// Contact form settings
$contact = [
    'save_to_file' => true,
    'file_path' => __DIR__ . '/../data/contacts.json',
    'admin_email' => 'remegio.alodajr@gmail.com'
];

// Create data directory if it doesn't exist
if ($contact['save_to_file']) {
    $dataDir = dirname($contact['file_path']);
    if (!file_exists($dataDir)) {
        mkdir($dataDir, 0755, true);
    }
}

// Helper functions
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    return $data;
}

function active_menu($section) {
    global $active_section;
    return $active_section === $section ? 'text-primary dark:text-primary' : '';
}