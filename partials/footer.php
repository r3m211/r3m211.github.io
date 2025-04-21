    </main>
    <footer class="bg-slate-800 dark:bg-slate-900 text-white py-8">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-4 md:mb-0">
                    <p class="text-slate-300">&copy; <?php echo date('Y'); ?> <?php echo $site['name']; ?>. All rights reserved.</p>
                </div>
                <div class="flex space-x-6">
                    <a href="<?php echo $site['social']['github']; ?>" target="_blank" rel="noopener noreferrer" class="text-slate-300 hover:text-white transition-colors" aria-label="GitHub">
                        <i class="fa-brands fa-github text-lg"></i>
                    </a>
                    <a href="<?php echo $site['social']['linkedin']; ?>" target="_blank" rel="noopener noreferrer" class="text-slate-300 hover:text-white transition-colors" aria-label="LinkedIn">
                        <i class="fa-brands fa-linkedin text-lg"></i>
                    </a>
                    <a href="<?php echo $site['social']['twitter']; ?>" target="_blank" rel="noopener noreferrer" class="text-slate-300 hover:text-white transition-colors" aria-label="Twitter">
                        <i class="fa-brands fa-twitter text-lg"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript for portfolio functionality -->
    <script src="js/main.js"></script>
</body>
</html>