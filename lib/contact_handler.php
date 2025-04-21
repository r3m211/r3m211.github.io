<?php
/**
 * Contact form handler
 */

// Initialize variables
$errors = [];
$success = false;
$form_data = [
    'name' => '',
    'email' => '',
    'subject' => '',
    'message' => ''
];

// Process form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['contact_submit'])) {
    // Sanitize and validate name
    if (empty($_POST['name'])) {
        $errors['name'] = 'Name is required.';
    } else {
        $form_data['name'] = sanitize_input($_POST['name']);
        if (strlen($form_data['name']) < 2) {
            $errors['name'] = 'Name must be at least 2 characters.';
        }
    }

    // Sanitize and validate email
    if (empty($_POST['email'])) {
        $errors['email'] = 'Email is required.';
    } else {
        $form_data['email'] = sanitize_input($_POST['email']);
        if (!filter_var($form_data['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Please enter a valid email address.';
        }
    }

    // Sanitize and validate subject
    if (empty($_POST['subject'])) {
        $errors['subject'] = 'Subject is required.';
    } else {
        $form_data['subject'] = sanitize_input($_POST['subject']);
        if (strlen($form_data['subject']) < 5) {
            $errors['subject'] = 'Subject must be at least 5 characters.';
        }
    }

    // Sanitize and validate message
    if (empty($_POST['message'])) {
        $errors['message'] = 'Message is required.';
    } else {
        $form_data['message'] = sanitize_input($_POST['message']);
        if (strlen($form_data['message']) < 10) {
            $errors['message'] = 'Message must be at least 10 characters.';
        }
    }

    // Process the form if no errors
    if (empty($errors)) {
        // Save to file if enabled
        if ($contact['save_to_file']) {
            $contact_entry = [
                'id' => uniqid(),
                'name' => $form_data['name'],
                'email' => $form_data['email'],
                'subject' => $form_data['subject'],
                'message' => $form_data['message'],
                'date' => date('Y-m-d H:i:s')
            ];

            // Add to contacts file
            $contacts = [];
            if (file_exists($contact['file_path'])) {
                $contacts_json = file_get_contents($contact['file_path']);
                $contacts = json_decode($contacts_json, true) ?: [];
            }

            $contacts[] = $contact_entry;
            file_put_contents($contact['file_path'], json_encode($contacts, JSON_PRETTY_PRINT));
        }

        // Send email notification (you'd configure this for a real server)
        /*
        $to = $contact['admin_email'];
        $subject = "New contact form submission: {$form_data['subject']}";
        $email_message = "Name: {$form_data['name']}\n";
        $email_message .= "Email: {$form_data['email']}\n\n";
        $email_message .= "Message:\n{$form_data['message']}";
        $headers = "From: {$form_data['email']}";

        mail($to, $subject, $email_message, $headers);
        */

        // Set success flag and reset form
        $success = true;
        $form_data = [
            'name' => '',
            'email' => '',
            'subject' => '',
            'message' => ''
        ];
    }
}