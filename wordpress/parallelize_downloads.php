<?php
//Fix “Parallelize Downloads Across Hostnames” Warning
function parallelize_hostnames($url, $id) {
 $hostname = par_get_hostname($url); //call supplemental function
 $url = str_replace(parse_url(get_bloginfo('url'), PHP_URL_HOST), $hostname, $url);
 return $url;
}
function par_get_hostname($name) {
 $subdomains = array('media1.mydomain.com','media2.mydomain.com'); //add your subdomains here, as many as you want.
 $host = abs(crc32(basename($name)) % count($subdomains));
 $hostname = $subdomains[$host];
 return $hostname;
}
add_filter('wp_get_attachment_url', 'parallelize_hostnames', 10, 2);