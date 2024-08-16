<?php

namespace App\Helpers;

class YouTubeHelper
{
    public static function extractVideoId($url)
    {
        parse_str(parse_url($url, PHP_URL_QUERY), $query);
        return isset($query['v']) ? $query['v'] : null;
    }
}
