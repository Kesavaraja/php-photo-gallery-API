<?php 
echo "Hubba hubba hubba.";

class Notebooks {

	function getTool() {
		echo "pen";
	}

	function getVolume() {
		echo "yellow";
	}
}

$the_methods = get_class_methods('Notebooks')

$book1 = array( 'cover' => 'blue' ,'topic' => 'css' ,'year' => '2017' ); 
$book2 = array( 'cover' => 'yellow' ,'topic' => 'react' ,'year' => '2019' );
$book3 = array( 'cover' => 'red' ,'topic' => 'elm' ,'year' => '2018' );
$book3 = array( 'cover' => 'green' ,'topic' => 'nginx' ,'year' => '2018' );
$book4 = array( 'cover' => 'red' ,'topic' => 'elm' ,'year' => '2018' ); 
$the_books = array(book1, book2, book3, book4);

echo $the_books[0];
?>