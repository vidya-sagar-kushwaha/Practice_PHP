<?php
// app/Http/routes.php

Route::get('/', function () {
return 'Yeh am alright guv.';
});



//===

Route::get('/', function () {
    return '<!doctype html>
            <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <title>Alright!</title>
                </head>
                <body>
                    <p>This is the perfect response!</p>
                </body>
            </html>';
});

/*=== VIEWS===========

<!-- resources/views/simple.php -->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Views!</title>
</head>
<body>
    <p>Oh yeah! VIEWS!</p>
</body>
</html>

*/

Route::get('/', function () {
    return View::make('simple');
});

/* view data */

Route::get('/{squirrel}', function ($squirrel) {
    $data['squirrel'] = $squirrel;

    return View::make('simple', $data);
});



/*
 * <!-- resources/views/simple.php -->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Squirrels</title>
</head>
<body>
    <p>I wish I were a <?php echo $squirrel; ?> squirrel!</p>
</body>
</html>


Now if we visit the URI /gray we receive a page stating 'I wish I were a gray squirrel!'.
 */



// ============= Redirects


// app/Http/routes.php

Route::get('first', function () {
    return 'First route.';
});

Route::get('second', function () {
    return 'Second route.';
});


//==========

// app/Http/routes.php

Route::get('first', function () {
    return 'First route.';
});

Route::get('second', function () {
    return 'Second route.';
});

// USE case========

Route::get('books', function () {
    if (Auth::guest()) {
        return Redirect::to('login');
    }
    // Show books to only logged in users.
});


// custom responses, response codes


Route::get('custom/response', function () {
    return Response::make('Hello world!', 200);
});


// headers

Route::get('custom/response', function () {
    $response = Response::make('Hello world!', 200);
    $response->headers->set('our key', 'our value');
    return $response;
});



//========

// app/Http/routes.php

Route::get('markdown/response', function () {
    $response = Response::make('***some bold text***', 200);
    $response->headers->set('Content-Type', 'text/x-markdown');
    return $response;
});


// ttl

Route::get('our/response', function () {
    $response = Response::make('Bond, James Bond.', 200);
    $response->setTtl(60);
    return $response;
});

// json as response

Route::get('markdown/response', function () {
    $data = ['iron', 'man', 'rocks'];
    return Response::json($data);
});


// Download responses

// app/Http/routes.php

Route::get('file/download', function () {
    $file = 'path_to_my_file.pdf';
    return Response::download($file);
});


// If we navigate to the /file/download URI the browser will initiate a download instead of displaying a response.
// The Response::download() method will receive a path to a file which will be served when the response is returned.