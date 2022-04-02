<?php
/* Using the following RewriteRule for php to xml conversion:
    Rewriterule ^sitemap.xml$ sitemap.php [L]
    Live Example: https://shaul.mo.it/sitemap.xml
*/
header('Content-type: application/xml');

require 'classes/Article.class.php';
$conn = require 'inc/database.php';

$articles = Article::getArticles($conn);

echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>";
echo "<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">";
?>
            <?php foreach ($articles as $article) : 
            $dbDate = $article['published_date'];
            $lastmod = DateTime::createFromFormat("F j, Y", $dbDate)->format('Y-m-d\TH:i:sP');
            ?>
        <url>
        <loc><?= BASE_URL."article/".$article['url']; ?></loc>
        <lastmod><?= $lastmod; ?></lastmod>
        </url>
            <?php endforeach; ?>
    </urlset>
?>
