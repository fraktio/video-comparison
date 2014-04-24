<?php

use Symfony\Component\HttpFoundation\Response;

require_once __DIR__ . '/../bootstrap.php';

$ret = $twig->render(
    'index.html.twig',
    [
        'players' => [
            'jwplayer',
        ]
    ]
);

$response = new Response($ret);
$response->send();
