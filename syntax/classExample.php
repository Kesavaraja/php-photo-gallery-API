<?php 
echo "Hubba hubba hubba.";

class Book {
	// properties
	public $title; 
	public $pages;
	public $year;

	function set_title($title){
		$this->title = $title;
	}

	function get_title(){
		return $this->title;
	}

}


// class Booklist;


$the_methods = get_class_methods('Book');
$book1 = array( 'pages' => 325,'title' => 'css' ,'year' => '2017' ); 
$book2 = array( 'pages' => 325,'title' => 'react' ,'year' => '2019' );
$book3 = array( 'pages' => 325,'title' => 'elm' ,'year' => '2018' );
$book3 = array( 'pages' => 325,'title' => 'nginx' ,'year' => '2018' );
$book4 = array( 'pages' => 325,'title' => 'elm' ,'year' => '2018' ); 
$the_books = array($book1, $book2, $book3, $book4);

print("\n");

foreach ($the_books as $key => $value) {
	printf("Book %s is about %s <br/>", $key, $value['title']);
}

?>