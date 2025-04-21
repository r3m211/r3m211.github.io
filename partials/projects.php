<?php
/**
 * Projects section
 */

// Define other projects
$otherProjects = [
    [
        "title" => "ESP8266 + RFID Tag Reader with Desktop App Integration",
        "description" => "A real-time inventory tracking system with barcode integration and automatic reordering.",
        "image" => "https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80",
        "tags" => ["PHP", "MySQL", "jQuery"],
    ],
    // [
    //     "title" => "E-commerce API Platform",
    //     "description" => "RESTful API service for e-commerce operations with OAuth2 authentication and comprehensive documentation.",
    //     "image" => "https://images.unsplash.com/photo-1557568192-225bcc02b452?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80",
    //     "tags" => ["PHP", "MySQL", "API", "Laravel"],
    // ],
    // [
    //     "title" => "CRM System",
    //     "description" => "Customer relationship management system with lead tracking, sales pipeline, and reporting features.",
    //     "image" => "https://images.unsplash.com/photo-1560472355-536de3962603?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80",
    //     "tags" => ["PHP", "MySQL", "CodeIgniter"],
    // ],
];

// Define featured project technologies
$featuredTech = ["PHP 8", "MySQL", "JavaScript", "AJAX", "jQuery", "HTML5", "CSS3", "Bootstrap", "PHPMailer", "Flatpickr"];
?>

<section id="projects" class="py-16 bg-white dark:bg-slate-800 fade-in-up">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-center text-slate-800 dark:text-white mb-12">
            Featured Projects
        </h2>

        <!-- Main Project Highlight -->
        <div class="mb-16 bg-gradient-to-r from-blue-50 to-indigo-50 dark:from-slate-700 dark:to-slate-700 rounded-xl overflow-hidden shadow-lg">
            <div class="p-6 md:p-8">
                <h3 class="text-2xl font-bold text-slate-800 dark:text-white mb-4">
                Employee Portal & Attendance System
                </h3>
                <div class="flex flex-col md:flex-row gap-8">
                    <div class="md:w-1/2">
                        <div class="bg-white dark:bg-slate-800 p-2 rounded-lg shadow-md overflow-hidden">
                            <img
                                src="images/EmployeePortal.jpg"
                                alt="Employee Portal Dashboard"
                                class="w-full h-auto rounded-md transition-all duration-300 hover:scale-105"
                            />
                        </div>
                    </div>
                    <div class="md:w-1/2">
                        <div class="space-y-4">
                            <p class="text-slate-600 dark:text-slate-300">
                            A custom employee portal using PHP and MySQL, designed to help HR teams handle everyday tasks 
                            more efficiently. From leave applications to attendance logging, it keeps everything organized 
                            in one place—plus it sends email notifications using PHPMailer.
                            </p>
                            <div class="space-y-2">
                                <h4 class="font-semibold text-slate-800 dark:text-white">
                                    Key Features:
                                </h4>
                                <ul class="list-disc pl-5 text-slate-600 dark:text-slate-300 space-y-1">
                                    <li>
                                    Secure login system with role-based access (admins, supervisors, employees)
                                    </li>
                                    <li>Leave application with approval flow and email notifications</li>
                                    <li>Real-time attendance tracking, including paid/unpaid leave logic</li>
                                    <li>Dashboard with charts and reports for easy insights</li>
                                    <li>Upload and manage documents with file validation</li>
                                </ul>
                            </div>

                            <div class="space-y-2">
                                <h4 class="font-semibold text-slate-800 dark:text-white">
                                    Technologies Used:
                                </h4>
                                <div class="flex flex-wrap gap-2">
                                    <?php foreach ($featuredTech as $tech): ?>
                                        <span class="px-3 py-1 bg-blue-100 text-blue-800 dark:bg-blue-900/30 dark:text-blue-300 rounded-full text-sm">
                                            <?php echo $tech; ?>
                                        </span>
                                    <?php endforeach; ?>
                                </div>
                            </div>

                            <a href="#" class="inline-block mt-2 px-6 py-3 bg-primary hover:bg-primary-600 text-white rounded-md font-medium transition-colors">
                                View Project Details
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Other Projects Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($otherProjects as $project): ?>
                <div class="bg-white dark:bg-slate-800 rounded-lg shadow-md overflow-hidden transition-transform hover:-translate-y-1 group card-hover">
                    <div class="relative overflow-hidden">
                        <img
                            src="<?php echo $project['image']; ?>"
                            alt="<?php echo $project['title']; ?>"
                            class="w-full h-56 object-cover transition-transform duration-300 group-hover:scale-105"
                        />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
                            <div class="p-4">
                                <a href="#" class="inline-block px-4 py-2 bg-white text-primary hover:bg-slate-100 rounded-md text-sm font-medium transition-colors">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="p-5">
                        <h3 class="text-xl font-semibold text-slate-800 dark:text-white mb-2">
                            <?php echo $project['title']; ?>
                        </h3>
                        <p class="text-slate-600 dark:text-slate-300 mb-4">
                            <?php echo $project['description']; ?>
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <?php foreach ($project['tags'] as $tag): ?>
                                <span class="px-3 py-1 bg-slate-100 text-slate-800 dark:bg-slate-700 dark:text-slate-300 rounded-full text-xs">
                                    <?php echo $tag; ?>
                                </span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>