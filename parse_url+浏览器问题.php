<?php
$url = 'https://evil.net\@business.pinterest.com/';

print_r(parse_url($url));

echo parse_url($url, PHP_URL_PATH);


?>
