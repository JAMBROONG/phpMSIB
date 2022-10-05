<?php
function baseUrl($url = false)
{
    if ($url) {
        return "http://localhost/lana_site/" . $url;
    } else {
        return "http://localhost/lana_site/";
    }
}
