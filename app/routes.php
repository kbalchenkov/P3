<?php



// home page
Route::get('/', function() {

return View::make('index');


}
);


// routes for the Lorem Ipsum Generator
Route::get('/lorem-ipsum', function() {

return View::make('lorem-ipsum');

}
);

// routes for the Random User Generator 
Route::get('/user-generator', function() {

return "/user-generator page";

}
);

Route::get('/books/{category}', function($category) {
        return 'Here are all the books in the category of '.$category;
}); 

Route::get('/new', function() {

    $view  = '<form method="POST">';
    $view .= 'Title: <input type="text" name="title">';
    $view .= '<input type="submit">';
    $view .= '</form>';
    return $view;
	
});

Route::post('/new', function() {

    $input =  Input::all();
    print_r($input);

});