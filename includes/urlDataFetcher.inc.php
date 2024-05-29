<?php

function fetch_url_data($url) {
    // Initialize cURL session
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $html = curl_exec($ch);

    // Load HTML content into a DOMDocument object
    $dom = new DOMDocument();
    @$dom->loadHTML($html);

    // Extract the title element
    $title = $dom->getElementsByTagName("title")->item(0)->textContent;

    // Extract the meta description, keywords, and og:image
    $metas = $dom->getElementsByTagName("meta");
    $description = "";
    $keywords = "";
    $og_image = "";
    foreach ($metas as $meta) {
        if (strtolower($meta->getAttribute("name")) == "description") {
            $description = $meta->getAttribute("content");
        }
        if (strtolower($meta->getAttribute("name")) == "keywords") {
            $keywords = $meta->getAttribute("content");
        }
        if (strtolower($meta->getAttribute("property")) == "og:image") {
            $og_image = $meta->getAttribute("content");
        }
    }

    // Return an array of data
    return array(
        'title' => $title,
        'description' => $description,
        'keywords' => $keywords,
        'og_image' => $og_image
    );
}


?>