<?php
// Include the SimplePie library
require_once(($_SERVER['DOCUMENT_ROOT'] . '/simplepie.php'));
 
// Because we're using multiple feeds, let's just set the headers here.
header("Content-type: text/xml; charset=utf-8");
 
// These are the feeds we want to use
$feeds = array(
	'http://feeds.5by5.tv/b2w/',
	'http://feeds.5by5.tv/frequency/',
	'http://feeds.5by5.tv/quit',
	'http://s3.roosterteeth.com/podcasts/index.xml',
	'http://s3.roosterteeth.com/podcasts/gaming-index.xml',
);
 
// This array will hold the items we'll be grabbing.
$first_items = array();
 
// Let's go through the array, feed by feed, and store the items we want.
foreach ($feeds as $url)
{
    // Use the long syntax
    $feed = new SimplePie();
    $feed->set_feed_url($url);
	$feed->set_cache_location($_SERVER['DOCUMENT_ROOT'] . '/cache');
    $feed->init();
 
	// How many items per feed should we try to grab?
	$items_per_feed = 1;
 
	// As long as we're not trying to grab more items than the feed has, go through them one by one and add them to the array.
	for ($x = 0; $x < $feed->get_item_quantity($items_per_feed); $x++)
	{
		$first_items[] = $feed->get_item($x);
	}
 
    // We're done with this feed, so let's release some memory.
    unset($feed);
}
 
// We need to sort the items by date with a user-defined sorting function.  Since usort() won't accept "SimplePie::sort_items", we need to wrap it in a new function.

$playlist = new SimpleXMLElement('<playlist/>');


foreach($first_items as $item):
	$feed = $item->get_feed();

$track = $playlist->addChild('track');


$track->addChild('title', $item->get_title());
if ($enclosure = $item->get_enclosure());
$track->addChild('mp3', $enclosure->get_link());
// $track->addChild('duration', $enclosure->get_duration());
$track->addChild('poster', $feed->get_image_url());
endforeach;

print($playlist->asXML());
?>
