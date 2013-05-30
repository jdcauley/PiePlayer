<?php
require_once('simplepie.php');
// We'll process this feed with all of the default options.
$feed = new SimplePie();
 
// Set which feed to process.
$feed->set_feed_url('http://feeds.5by5.tv/b2w/');
$feed->set_cache_location($_SERVER['DOCUMENT_ROOT'] . 'simplypie/cache');
 
// Run SimplePie.
$feed->init();
 
// This makes sure that the content is sent to the browser as text/html and the UTF-8 character set (since we didn't change it).
$feed->handle_content_type();

$playlist = new SimpleXMLElement($xmlstr);

$track = $playlist->track->addChild('track');

foreach ($feed->get_items(0 , 1) as $item):
$track->addChild('title', echo $item->get_title());
if ($enclosure = $item->get_enclosure());
$track->addChild('mp3', echo $enclosure->get_link());
$track->addChild('duration', echo $enclosure->get_duration(true));
endforeach;

echo $playlist->asXML();
?>