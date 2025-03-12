<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\ImageOptimizer\OptimizerChainFactory;
use Spatie\Sitemap\SitemapGenerator;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate the sitemap for Amun Sro website';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        // Generate sitemap
        $this->info('Generating sitemap...');
        $sitemapPath = public_path('sitemap.xml');

        SitemapGenerator::create(config('app.url'))
            ->writeToFile($sitemapPath);

        $this->info("Sitemap generated at: {$sitemapPath}");

        // Optimize images in public/icons
        $this->info('Optimizing images in public/icons directory...');
        $iconsPath = public_path('icons');
        // Adjust the glob pattern to include file types you want to optimize
        $files = glob($iconsPath . '/*.{png,jpg,jpeg,svg,webp}', GLOB_BRACE);

        if (empty($files)) {
            $this->info('No images found in public/icons to optimize.');
        } else {
            $optimizerChain = OptimizerChainFactory::create();

            foreach ($files as $file) {
                $this->info("Optimizing: {$file}");
                $optimizerChain->optimize($file);
            }
            $this->info('Image optimization completed.');
        }
    }
}
