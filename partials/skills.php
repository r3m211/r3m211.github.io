<?php
/**
 * Skills section
 */

// Define skills
$skills = [
    [
        "title" => "Web Development (Frontend)",
        "description" => "Crafting responsive, interactive interfaces using modern frontend tools.",
        "icon" => "fa-code",
        "color" => "yellow",
        "tags" => ["HTML5", "CSS3", "JavaScript", "Bootstrap", "UX Design", "Form Validation"]
    ],
    [
        "title" => "Web Development (Backend)",
        "description" => "Building the logic and handling the data behind applications.",
        "icon" => "fa-terminal",
        "color" => "blue",
        "tags" => ["PHP", "MySQL", "PHPMailer", "Server-side Scripting"]
    ],
    [
        "title" => "Full-Stack Concepts",
        "description" => "End-to-end development including user authentication, REST APIs, and file management.",
        "icon" => "fa-layer-group",
        "color" => "indigo",
        "tags" => ["CRUD", "REST", "Auth", "File Uploads", "Pagination", "Attendance Logic"]
    ],
    [
        "title" => "Embedded Systems & IoT",
        "description" => "Programming microcontrollers and connecting devices to the web.",
        "icon" => "fa-microchip",
        "color" => "green",
        "tags" => ["Arduino", "ESP8266", "RFID", "UART", "HTTP Requests"]
    ],
    [
        "title" => "Desktop Application Development",
        "description" => "Creating Windows-based software with real-time data handling.",
        "icon" => "fa-desktop",
        "color" => "purple",
        "tags" => ["C#", "WinForms", "Serial Data"]
    ],
    [
        "title" => "Database Design & Management",
        "description" => "Structuring databases for performance, integrity, and scalability.",
        "icon" => "fa-database",
        "color" => "red",
        "tags" => ["Normalization", "ER Modeling", "SQL Optimization", "Access Control"]
    ],
    [
        "title" => "Other Tools & Concepts",
        "description" => "Supporting technologies and practices that enhance development.",
        "icon" => "fa-tools",
        "color" => "orange",
        "tags" => ["Flatpickr", "jQuery", "Git", "JSON", "HTTP Methods"]
    ],
];

// Color variants mapping for styling
$colorVariants = [
    "yellow" => ["bg" => "bg-yellow-100", "text" => "text-yellow-600", "darkBg" => "dark:bg-yellow-900/30", "darkText" => "dark:text-yellow-400"],
    "blue" => ["bg" => "bg-blue-100", "text" => "text-blue-600", "darkBg" => "dark:bg-blue-900/30", "darkText" => "dark:text-blue-400"],
    "indigo" => ["bg" => "bg-indigo-100", "text" => "text-indigo-600", "darkBg" => "dark:bg-indigo-900/30", "darkText" => "dark:text-indigo-400"],
    "green" => ["bg" => "bg-green-100", "text" => "text-green-600", "darkBg" => "dark:bg-green-900/30", "darkText" => "dark:text-green-400"],
    "purple" => ["bg" => "bg-purple-100", "text" => "text-purple-600", "darkBg" => "dark:bg-purple-900/30", "darkText" => "dark:text-purple-400"],
    "red" => ["bg" => "bg-red-100", "text" => "text-red-600", "darkBg" => "dark:bg-red-900/30", "darkText" => "dark:text-red-400"],
    "orange" => ["bg" => "bg-orange-100", "text" => "text-orange-600", "darkBg" => "dark:bg-orange-900/30", "darkText" => "dark:text-orange-400"],
];

// Tag color variants mapping
$tagColorVariants = [
    "yellow" => ["bg" => "bg-yellow-100", "text" => "text-yellow-800", "darkBg" => "dark:bg-yellow-900/30", "darkText" => "dark:text-yellow-300"],
    "blue" => ["bg" => "bg-blue-100", "text" => "text-blue-800", "darkBg" => "dark:bg-blue-900/30", "darkText" => "dark:text-blue-300"],
    "indigo" => ["bg" => "bg-indigo-100", "text" => "text-indigo-800", "darkBg" => "dark:bg-indigo-900/30", "darkText" => "dark:text-indigo-300"],
    "green" => ["bg" => "bg-green-100", "text" => "text-green-800", "darkBg" => "dark:bg-green-900/30", "darkText" => "dark:text-green-300"],
    "purple" => ["bg" => "bg-purple-100", "text" => "text-purple-800", "darkBg" => "dark:bg-purple-900/30", "darkText" => "dark:text-purple-300"],
    "red" => ["bg" => "bg-red-100", "text" => "text-red-800", "darkBg" => "dark:bg-red-900/30", "darkText" => "dark:text-red-300"],
    "orange" => ["bg" => "bg-orange-100", "text" => "text-orange-800", "darkBg" => "dark:bg-orange-900/30", "darkText" => "dark:text-orange-300"],
];
?>


<section id="skills" class="py-16 bg-slate-50 dark:bg-slate-900 fade-in-up">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-center text-slate-800 dark:text-white mb-12">
            Skills & Expertise
        </h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($skills as $index => $skill): ?>
                <div class="bg-white dark:bg-slate-800 rounded-lg shadow-md p-6 transition-transform hover:-translate-y-1 card-hover">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 <?php echo $colorVariants[$skill['color']]['bg']; ?> <?php echo $colorVariants[$skill['color']]['text']; ?> <?php echo $colorVariants[$skill['color']]['darkBg']; ?> <?php echo $colorVariants[$skill['color']]['darkText']; ?> rounded-lg flex items-center justify-center mr-4">
                            <i class="fas <?php echo $skill['icon']; ?> text-lg"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-slate-800 dark:text-white"><?php echo $skill['title']; ?></h3>
                    </div>
                    <p class="text-slate-600 dark:text-slate-300 mb-4"><?php echo $skill['description']; ?></p>
                    <div class="flex flex-wrap gap-2">
                        <?php foreach ($skill['tags'] as $tag): ?>
                            <span class="px-3 py-1 <?php echo $tagColorVariants[$skill['color']]['bg']; ?> <?php echo $tagColorVariants[$skill['color']]['text']; ?> <?php echo $tagColorVariants[$skill['color']]['darkBg']; ?> <?php echo $tagColorVariants[$skill['color']]['darkText']; ?> rounded-full text-sm">
                                <?php echo $tag; ?>
                            </span>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
