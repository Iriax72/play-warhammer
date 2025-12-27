<?php
function create_head (string $page_name): string {
    $html = <<<HTML
    <!DOCTYPE HTML>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>$page_name</title>
            <link href="../../style.css">
        </head>
HTML;
    return $html;
}
?>