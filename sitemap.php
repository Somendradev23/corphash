<?php
// Set the content type to XML
header("Content-Type: application/xml; charset=utf-8");

// Define your website's base URL
$base_url = "https://www.yourwebsite.com";

// Define an array of URLs to include in the sitemap
$pages = [
    ['loc' => '/', 'priority' => '1.0', 'changefreq' => 'daily'],
    ['loc' => '/index', 'priority' => '1.0', 'changefreq' => 'daily'],
    ['loc' => '/about', 'priority' => '0.8', 'changefreq' => 'weekly'],
    ['loc' => '/contact', 'priority' => '0.7', 'changefreq' => 'monthly'],
    ['loc' => '/404', 'priority' => '0.4', 'changefreq' => 'monthly'],
];

// Start the XML output
echo '<?xml version="1.0" encoding="UTF-8"?>';
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

// Loop through pages and generate XML for each
foreach ($pages as $page) {
    echo '<url>';
    echo '<loc>' . htmlspecialchars($base_url . $page['loc']) . '</loc>';
    echo '<priority>' . $page['priority'] . '</priority>';
    echo '<changefreq>' . $page['changefreq'] . '</changefreq>';
    echo '</url>';
}

// Close the XML tag
echo '</urlset>';
?>
