<?php 

$books = array(
    'The Hobbit' => array(
        'published' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ),
    'Game of Thrones' => array(
        'published' => 1996,
        'author' => 'George R. R. Martin',
        'pages' => 835
    ),
    'The Catcher in the Rye' => array(
        'published' => 1951,
        'author' => 'J. D. Salinger',
        'pages' => 220
    ),
    'A Tale of Two Cities' => array(
        'published' => 1859,
        'author' => 'Charles Dickens',
        'pages' => 544
    )
);


// $books references the whole array
// $title references the key as the title of book (ex. 'The Hobbit')
// $ data references the information inside the array

foreach ($books as $title => $data) {
	// Grab each book that was published after  
	if ($data['published'] < 1950) {
		// data references the array data
		// info references the key of the value (ex. 'published')
		// $value is the value of the key (ex. 1951)
		foreach ($data as $info => $value) {
			echo "$title was published in {$info['published']} and was authored by {$info['author']}\n";
		}
	}
}



 ?>