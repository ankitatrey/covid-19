<?php

$contents_india = fopen("https://api.apify.com/v2/key-value-stores/toDWvRj1JpTXiM8FF/records/LATEST?disableRedirect=true", "r");
$json_india = stream_get_contents($contents_india);
fclose($contents_india);

print $json_india;
?>
