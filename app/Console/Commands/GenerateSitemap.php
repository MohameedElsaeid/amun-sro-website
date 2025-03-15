<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use DOMDocument;
use Illuminate\Console\Command;
use SimpleXMLElement;

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
        $this->info('Generating sitemap manually...');

        // Use your production domain here (ensure no trailing slash)
        $domain = rtrim(config('app.url'), '/'); // e.g., "https://amun-sro.online"
        $sitemapPath = public_path('sitemap.xml');

        // Define manual URLs with their settings.
        // You can customize the lastmod date for each URL if needed.
        $manualUrls = [
            '/' => ['priority' => '1.0', 'changefreq' => 'daily', 'lastmod' => Carbon::now()->toAtomString()],
            '/account' => ['priority' => '0.8', 'changefreq' => 'daily', 'lastmod' => Carbon::now()->toAtomString()],
            '/blog' => ['priority' => '0.8', 'changefreq' => 'daily', 'lastmod' => Carbon::now()->toAtomString()],
            '/bug-report' => ['priority' => '0.5', 'changefreq' => 'weekly', 'lastmod' => Carbon::now()->toAtomString()],
            '/careers' => ['priority' => '0.6', 'changefreq' => 'weekly', 'lastmod' => Carbon::now()->toAtomString()],
            '/character' => ['priority' => '0.7', 'changefreq' => 'daily', 'lastmod' => Carbon::now()->toAtomString()],
            '/contact-us' => ['priority' => '0.7', 'changefreq' => 'monthly', 'lastmod' => Carbon::now()->toAtomString()],
            '/downloads' => ['priority' => '0.8', 'changefreq' => 'weekly', 'lastmod' => Carbon::now()->toAtomString()],
            '/downloads/client' => ['priority' => '0.8', 'changefreq' => 'weekly', 'lastmod' => Carbon::now()->toAtomString()],
            '/downloads/sbot' => ['priority' => '0.8', 'changefreq' => 'weekly', 'lastmod' => Carbon::now()->toAtomString()],
            '/events' => ['priority' => '0.7', 'changefreq' => 'daily', 'lastmod' => Carbon::now()->toAtomString()],
            '/faq' => ['priority' => '0.6', 'changefreq' => 'weekly', 'lastmod' => Carbon::now()->toAtomString()],
            '/help' => ['priority' => '0.7', 'changefreq' => 'weekly', 'lastmod' => Carbon::now()->toAtomString()],
            '/login' => ['priority' => '0.9', 'changefreq' => 'daily', 'lastmod' => Carbon::now()->toAtomString()],
            '/register' => ['priority' => '0.9', 'changefreq' => 'daily', 'lastmod' => Carbon::now()->toAtomString()],
            '/privacy' => ['priority' => '0.6', 'changefreq' => 'monthly', 'lastmod' => Carbon::now()->toAtomString()],
            '/ranking' => ['priority' => '0.8', 'changefreq' => 'daily', 'lastmod' => Carbon::now()->toAtomString()],
            '/recharge' => ['priority' => '0.9', 'changefreq' => 'daily', 'lastmod' => Carbon::now()->toAtomString()],
            '/rules' => ['priority' => '0.7', 'changefreq' => 'monthly', 'lastmod' => Carbon::now()->toAtomString()],
            '/system' => ['priority' => '0.7', 'changefreq' => 'weekly', 'lastmod' => Carbon::now()->toAtomString()],
            '/terms' => ['priority' => '0.6', 'changefreq' => 'monthly', 'lastmod' => Carbon::now()->toAtomString()],
        ];

        // Create the base XML element using SimpleXMLElement
        $xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><urlset></urlset>');

        // Add required namespace attributes with the proper "xmlns:" prefix
        $xml->addAttribute('xmlns', 'http://www.sitemaps.org/schemas/sitemap/0.9');
        $xml->addAttribute('xmlns:xhtml', 'http://www.w3.org/1999/xhtml');
        $xml->addAttribute('xmlns:image', 'http://www.google.com/schemas/sitemap-image/1.1');
        $xml->addAttribute('xmlns:video', 'http://www.google.com/schemas/sitemap-video/1.1');
        $xml->addAttribute('xmlns:news', 'http://www.google.com/schemas/sitemap-news/0.9');

        // Loop over each URL entry and add it to the sitemap.
        foreach ($manualUrls as $path => $data) {
            $url = $xml->addChild('url');
            $loc = $domain . $path;
            $url->addChild('loc', htmlspecialchars($loc, ENT_XML1, 'UTF-8'));
            $url->addChild('lastmod', $data['lastmod']);
            $url->addChild('changefreq', $data['changefreq']);
            $url->addChild('priority', $data['priority']);
        }

        // Use DOMDocument to format the output nicely
        $dom = new DOMDocument('1.0', 'UTF-8');
        $dom->preserveWhiteSpace = false;
        $dom->formatOutput = true;
        $dom->loadXML($xml->asXML());
        $formattedXml = $dom->saveXML();

        // Write the formatted XML to the sitemap file
        file_put_contents($sitemapPath, $formattedXml);

        $this->info("Sitemap generated at: {$sitemapPath}");
    }
}
