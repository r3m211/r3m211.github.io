<?php
/**
 * Header template
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title ?? $site['title']; ?></title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: {
                            DEFAULT: '#3b82f6', // Blue color
                            '50': '#eff6ff',
                            '100': '#dbeafe',
                            '200': '#bfdbfe',
                            '300': '#93c5fd',
                            '400': '#60a5fa',
                            '500': '#3b82f6',
                            '600': '#2563eb',
                            '700': '#1d4ed8',
                            '800': '#1e40af',
                            '900': '#1e3a8a',
                            '950': '#172554',
                        }
                    }
                }
            }
        }
    </script>
    
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="flex flex-col min-h-screen bg-white dark:bg-slate-900 text-slate-800 dark:text-white">
    <header id="header" class="fixed top-0 left-0 w-full z-50 transition-all duration-300 <?php echo isset($_GET['scrolled']) && $_GET['scrolled'] === 'true' ? 'bg-white/95 dark:bg-slate-900/95 shadow-sm' : 'bg-transparent'; ?>">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <a href="#" class="flex items-center">
                        <span class="text-xl font-bold">
                            <span class="text-primary">REM</span>
                            <span class="text-slate-800 dark:text-white">Portfolio</span>
                        </span>
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <nav class="hidden md:flex space-x-8">
                    <a href="#home" class="text-slate-600 hover:text-primary dark:text-slate-300 dark:hover:text-primary font-medium transition-colors <?php echo active_menu('home'); ?>">Home</a>
                    <a href="#about" class="text-slate-600 hover:text-primary dark:text-slate-300 dark:hover:text-primary font-medium transition-colors <?php echo active_menu('about'); ?>">About</a>
                    <a href="#skills" class="text-slate-600 hover:text-primary dark:text-slate-300 dark:hover:text-primary font-medium transition-colors <?php echo active_menu('skills'); ?>">Skills</a>
                    <a href="#projects" class="text-slate-600 hover:text-primary dark:text-slate-300 dark:hover:text-primary font-medium transition-colors <?php echo active_menu('projects'); ?>">Projects</a>
                    <a href="#contact" class="text-slate-600 hover:text-primary dark:text-slate-300 dark:hover:text-primary font-medium transition-colors <?php echo active_menu('contact'); ?>">Contact</a>
                </nav>

                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="bg-transparent hover:bg-slate-100 dark:hover:bg-slate-800 p-2 rounded-md">
                        <i class="fa-solid fa-bars text-slate-800 dark:text-white text-xl"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <div id="mobile-menu" class="absolute top-16 left-0 w-full bg-white dark:bg-slate-800 shadow-lg md:hidden transform transition-transform duration-300 -translate-y-full">
            <div class="px-4 py-2 space-y-2">
                <a href="#home" class="block w-full text-left px-3 py-2 rounded-md text-base font-medium text-slate-700 hover:text-primary hover:bg-slate-100 dark:text-slate-200 dark:hover:text-primary dark:hover:bg-slate-700 transition-colors <?php echo active_menu('home'); ?>">Home</a>
                <a href="#about" class="block w-full text-left px-3 py-2 rounded-md text-base font-medium text-slate-700 hover:text-primary hover:bg-slate-100 dark:text-slate-200 dark:hover:text-primary dark:hover:bg-slate-700 transition-colors <?php echo active_menu('about'); ?>">About</a>
                <a href="#skills" class="block w-full text-left px-3 py-2 rounded-md text-base font-medium text-slate-700 hover:text-primary hover:bg-slate-100 dark:text-slate-200 dark:hover:text-primary dark:hover:bg-slate-700 transition-colors <?php echo active_menu('skills'); ?>">Skills</a>
                <a href="#projects" class="block w-full text-left px-3 py-2 rounded-md text-base font-medium text-slate-700 hover:text-primary hover:bg-slate-100 dark:text-slate-200 dark:hover:text-primary dark:hover:bg-slate-700 transition-colors <?php echo active_menu('projects'); ?>">Projects</a>
                <a href="#contact" class="block w-full text-left px-3 py-2 rounded-md text-base font-medium text-slate-700 hover:text-primary hover:bg-slate-100 dark:text-slate-200 dark:hover:text-primary dark:hover:bg-slate-700 transition-colors <?php echo active_menu('contact'); ?>">Contact</a>
            </div>
        </div>
    </header>
    <main class="flex-grow">