<?php
/**
 * Hero section
 */
?>
<section id="home" class="pt-24 pb-16 md:pt-32 md:pb-24 fade-in-up visible">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 md:pr-8">
                <h1 class="text-4xl md:text-5xl font-bold leading-tight text-slate-800 dark:text-white mb-4">
                    Hi, I'm <span class="text-primary dark:text-primary"><?php echo $site['name']; ?></span>
                </h1>
                <h2 class="text-2xl md:text-3xl font-medium text-slate-600 dark:text-slate-300 mb-6">
                    <?php echo $site['position']; ?>
                </h2>
                <!-- <p class="text-lg text-slate-600 dark:text-slate-400 mb-8">
                    <?php echo $site['description']; ?>
                </p> -->
                <div class="flex flex-wrap gap-4">
                    <a href="#projects" class="px-6 py-3 bg-primary hover:bg-primary-600 text-white rounded-md font-medium transition-colors">
                        View My Work
                    </a>
                    <a href="#contact" class="px-6 py-3 border border-primary text-primary hover:bg-primary/10 rounded-md font-medium transition-colors">
                        Contact Me
                    </a>
                </div>
            </div>
            <div class="md:w-1/2 mt-12 md:mt-0">
                <div class="relative">
                    <div class="absolute -inset-1 bg-gradient-to-r from-primary to-indigo-500 rounded-lg blur opacity-25"></div>
                    <div class="relative bg-white dark:bg-slate-800 p-6 rounded-lg shadow-xl">
<pre class="font-mono text-sm text-slate-800 dark:text-slate-300 overflow-x-auto">
<span class="keyword">class</span> <span class="variable">Developer</span> {
    <span class="keyword">private</span> <span class="variable">$name</span> = <span class="string">'<?php echo $site['name']; ?>'</span>;
    <span class="keyword">private</span> <span class="variable">$skills</span> = [
        <span class="string">'PHP'</span>,
        <span class="string">'MySQL'</span>,
        <span class="string">'JavaScript'</span>,
        <span class="string">'C#'</span>,
        <span class="string">'Arduino & IoT'</span>
    ];

    <span class="keyword">public function</span> <span class="variable">solve</span>(<span class="variable">$problem</span>) {
        <span class="comment">// Analyze, build, and deliver with clean code</span>
        <span class="keyword">return</span> <span class="string">"Solution crafted for: $problem"</span>;
    }

    <span class="comment">// Bonus: Developer never stops learning.</span>
}
</pre>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>