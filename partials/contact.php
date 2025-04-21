<?php
/**
 * Contact section
 */
?>
<section id="contact" class="py-16 bg-slate-50 dark:bg-slate-900 fade-in-up">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-xl mx-auto">
            <h2 class="text-3xl font-bold text-center text-slate-800 dark:text-white mb-12">
                Let's Connect
            </h2>

            <div class="bg-white dark:bg-slate-800 rounded-xl shadow-lg overflow-hidden max-w-lg mx-auto">
                <div class="bg-primary dark:bg-primary/90 p-8 text-white text-center">
                    <h3 class="text-xl font-semibold mb-6">Contact Information</h3>

                    <div class="space-y-6 text-center">
    <!-- Email -->
    <div class="flex flex-col items-center">
        <div class="flex items-center justify-center space-x-2 text-blue-200">
            <i class="fa-solid fa-envelope text-lg"></i>
            <p class="text-blue-100 text-sm">Email</p>
        </div>
        <a href="mailto:<?php echo $site['email']; ?>" class="hover:text-blue-200 transition-colors">
            <?php echo $site['email']; ?>
        </a>
    </div>

    <!-- Phone -->
    <!-- <div class="flex flex-col items-center">
        <div class="flex items-center justify-center space-x-2 text-blue-200">
            <i class="fa-solid fa-phone text-lg"></i>
            <p class="text-blue-100 text-sm">Phone</p>
        </div>
        <a href="tel:<?php echo str_replace(['(', ')', ' ', '-'], '', $site['phone']); ?>" class="hover:text-blue-200 transition-colors">
            <?php echo $site['phone']; ?>
        </a>
    </div> -->

    <!-- Location -->
    <div class="flex flex-col items-center">
        <div class="flex items-center justify-center space-x-2 text-blue-200">
            <i class="fa-solid fa-location-dot text-lg"></i>
            <p class="text-blue-100 text-sm">Location</p>
        </div>
        <p><?php echo $site['location']; ?></p>
    </div>
</div>


                    <!-- Social -->
                    <div class="mt-10">
                        <h4 class="text-lg font-medium mb-4">Connect with me</h4>
                        <div class="flex justify-center space-x-4">
                            <a href="<?php echo $site['social']['github']; ?>" target="_blank" rel="noopener noreferrer" class="text-white hover:text-blue-200 transition-colors">
                                <i class="fa-brands fa-github text-xl"></i>
                            </a>
                            <a href="<?php echo $site['social']['linkedin']; ?>" target="_blank" rel="noopener noreferrer" class="text-white hover:text-blue-200 transition-colors">
                                <i class="fa-brands fa-linkedin text-xl"></i>
                            </a>
                            <!-- Uncomment if needed
                            <a href="<?php echo $site['social']['twitter']; ?>" target="_blank" rel="noopener noreferrer" class="text-white hover:text-blue-200 transition-colors">
                                <i class="fa-brands fa-twitter text-xl"></i>
                            </a>
                            -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

