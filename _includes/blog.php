<?php
	function blog($feed)
	{
		$xml = simplexml_load_file("$feed");
		$feed_title=$xml->channel->title;
		echo "<h2>$feed_title</h2>";
		$item = $xml->channel->item[0];
		echo "<a href=\"$item->link\">$item->title</a><br />$item->description";
	}

function second()
{
   $feeds=array("http://beepboopeveryday.wordpress.com/feed","http://flashficinthepan.wordpress.com/feed");
   for ($i=0;$i<count($feeds);$i++)
   {
      $xml[$i]=simplexml_load_file("$feeds[$i]");
      $pubDate[$i]=$xml[$i]->channel->item[0]->pubDate;
      $pub[$i]=strtotime("$pubDate[$i]");
   }

   switch (max($pub)) {
   case $pub[0]:
      return $feeds[0];
      break;
   case $pub[1]:
      return $feeds[1];
      break;
   }
}
?>

<div class='blog-wrapper'>
<h1>Recent Blogs</h1>
	<div class='blog-left'>
		<?php blog("http://urbanphantasy.wordpress.com/feed/"); ?>
	</div>
	<div class='blog-right'>
		<?php blog(second()); ?>
	</div>
</div>
<div class='clear'></div>
