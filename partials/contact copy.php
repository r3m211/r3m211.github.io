<?php
/**
 * Contact section
 */
?>
<section id="contact" class="py-16 bg-slate-50 dark:bg-slate-900 fade-in-up">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold text-center text-slate-800 dark:text-white mb-12">
                Let's Connect
            </h2>

            <div class="bg-white dark:bg-slate-800 rounded-xl shadow-lg overflow-hidden">
                <div class="flex flex-col md:flex-row">
                    <div class="md:w-1/3 bg-primary dark:bg-primary/90 p-8 text-white">
                        <h3 class="text-xl font-semibold mb-4">Contact Information</h3>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <div class="mt-1 mr-3 text-blue-200">
                                    <i class="fa-solid fa-envelope text-lg"></i>
                                </div>
                                <div>
                                    <p class="text-blue-100 text-sm">Email</p>
                                    <a href="mailto:<?php echo $site['email']; ?>" class="hover:text-blue-200 transition-colors">
                                        <?php echo $site['email']; ?>
                                    </a>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="mt-1 mr-3 text-blue-200">
                                    <i class="fa-solid fa-phone text-lg"></i>
                                </div>
                                <div>
                                    <p class="text-blue-100 text-sm">Phone</p>
                                    <a href="tel:<?php echo str_replace(['(', ')', ' ', '-'], '', $site['phone']); ?>" class="hover:text-blue-200 transition-colors">
                                        <?php echo $site['phone']; ?>
                                    </a>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="mt-1 mr-3 text-blue-200">
                                    <i class="fa-solid fa-location-dot text-lg"></i>
                                </div>
                                <div>
                                    <p class="text-blue-100 text-sm">Location</p>
                                    <p><?php echo $site['location']; ?></p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-8">
                            <h4 class="text-lg font-medium mb-4">Connect with me</h4>
                            <div class="flex space-x-4">
                                <a href="<?php echo $site['social']['github']; ?>" target="_blank" rel="noopener noreferrer" class="text-white hover:text-blue-200 transition-colors">
                                    <i class="fa-brands fa-github text-xl"></i>
                                </a>
                                <a href="<?php echo $site['social']['linkedin']; ?>" target="_blank" rel="noopener noreferrer" class="text-white hover:text-blue-200 transition-colors">
                                    <i class="fa-brands fa-linkedin text-xl"></i>
                                </a>
                                <a href="<?php echo $site['social']['twitter']; ?>" target="_blank" rel="noopener noreferrer" class="text-white hover:text-blue-200 transition-colors">
                                    <i class="fa-brands fa-twitter text-xl"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="md:w-2/3 p-8">
                        <h3 class="text-xl font-semibold text-slate-800 dark:text-white mb-6">
                            Send Me a Message
                        </h3>

                        <?php if ($success): ?>
                            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 dark:bg-green-900/30 dark:text-green-300">
                                <p>Thanks for your message! I'll get back to you soon.</p>
                            </div>
                        <?php endif; ?>

                        <form method="post" action="#contact" class="space-y-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="name" class="form-label">Name</label>
                                    <input 
                                        type="text" 
                                        id="name" 
                                        name="name" 
                                        placeholder="Your name" 
                                        value="<?php echo htmlspecialchars($form_data['name']); ?>" 
                                        class="form-input dark:bg-slate-700" 
                                        required
                                    >
                                    <?php if (isset($errors['name'])): ?>
                                        <p class="form-error"><?php echo $errors['name']; ?></p>
                                    <?php endif; ?>
                                </div>
                                <div>
                                    <label for="email" class="form-label">Email</label>
                                    <input 
                                        type="email" 
                                        id="email" 
                                        name="email" 
                                        placeholder="Your email" 
                                        value="<?php echo htmlspecialchars($form_data['email']); ?>" 
                                        class="form-input dark:bg-slate-700" 
                                        required
                                    >
                                    <?php if (isset($errors['email'])): ?>
                                        <p class="form-error"><?php echo $errors['email']; ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div>
                                <label for="subject" class="form-label">Subject</label>
                                <input 
                                    type="text" 
                                    id="subject" 
                                    name="subject" 
                                    placeholder="Message subject" 
                                    value="<?php echo htmlspecialchars($form_data['subject']); ?>" 
                                    class="form-input dark:bg-slate-700" 
                                    required
                                >
                                <?php if (isset($errors['subject'])): ?>
                                    <p class="form-error"><?php echo $errors['subject']; ?></p>
                                <?php endif; ?>
                            </div>
                            <div>
                                <label for="message" class="form-label">Message</label>
                                <textarea 
                                    id="message" 
                                    name="message" 
                                    placeholder="Your message" 
                                    rows="4" 
                                    class="form-input resize-none dark:bg-slate-700" 
                                    required
                                ><?php echo htmlspecialchars($form_data['message']); ?></textarea>
                                <?php if (isset($errors['message'])): ?>
                                    <p class="form-error"><?php echo $errors['message']; ?></p>
                                <?php endif; ?>
                            </div>
                            <button 
                                type="submit" 
                                name="contact_submit" 
                                class="w-full md:w-auto px-6 py-3 bg-primary hover:bg-primary-600 text-white rounded-md font-medium transition-colors"
                            >
                                Send Message
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>