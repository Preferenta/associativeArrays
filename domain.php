<?php
function getDomainInfo(string $domain) : array
{
    if (substr($domain, 0, 8) === 'https://') {
        $scheme = 'https';
    } else {
        $scheme = 'http';
    }
    $name = str_replace("{$scheme}", '', $domain);

    return ['scheme' => $scheme, 'name' => $name];
}
$domain1 = 'google.com';
getDomainInfo($domain1);
