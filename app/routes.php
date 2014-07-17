<?php



// home page
Route::get('/', function() {

return View::make('index');


}
);

Route::post('/display', function()
{	


  	$data = Input::all(); 
	$howmany = $data["numberofparagraphs"];
	$generator = new Badcow\LoremIpsum\Generator();
	$paragraphs = $generator->getParagraphs($howmany); 

	echo implode('<p>', $paragraphs);

return View::make('lorem-ipsum');
	
// var_dump($paragraphs);




});

Route::get('post-form', function()
{

    return View::make('form');
});









Route::post('/displays', function()
{	

require_once '/fzaninotto/faker/src/autoload.php';



 $data = Input::all();
 $howmanyusers = $data["numberofusers"];
 $faker = Faker\Factory::create();
 $i = 0;

while($i < $howmanyusers){
	
	echo $faker->name, "\n";
	
	$i++;
    //var_dump($howmanyusers);



//return View::make('lorem-ipsum');
	
// var_dump($paragraphs);

}

});


// routes for the Random User Generator 
Route::get('/user-generator', function() {

return "/user-generator page";

}
);

Route::get('post-forms', function()
{

    return View::make('userform');
});
