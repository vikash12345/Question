<?
// This is a template for a PHP scraper on morph.io (https://morph.io)
// including some code snippets below that you should find helpful

 require 'scraperwiki.php';
 require 'scraperwiki/simple_html_dom.php';
//require 		'simple_html_dom.php';
$BaseLink	=	'https://www.glassdoor.com/Interview/us-associate-interview-questions-SRCH_IL.0,2_IN1_KO3,12_IP';
	$SiteURL	=	'https://www.glassdoor.com/Interview/us-associate-interview-questions-SRCH_IL.0,2_IN1_KO3,12_IP1.htm';
		
	$Pagination = 	file_get_html($SiteURL);
	echo $pagination;
//
// // Find something on the page using css selectors
// $dom = new simple_html_dom();
// $dom->load($html);
// print_r($dom->find("table.list"));
//
// // Write out to the sqlite database using scraperwiki library
// scraperwiki::save_sqlite(array('name'), array('name' => 'susan', 'occupation' => 'software developer'));
//
// // An arbitrary query against the database
// scraperwiki::select("* from data where 'name'='peter'")

// You don't have to do things with the ScraperWiki library.
// You can use whatever libraries you want: https://morph.io/documentation/php
// All that matters is that your final data is written to an SQLite database
// called "data.sqlite" in the current working directory which has at least a table
// called "data".
?>
