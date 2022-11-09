<?php

require_once __DIR__ . '/incs/data.php';
require_once __DIR__ . '/incs/functions.php';

if(!empty($_POST)) {
    debug($_POST);
    $fields = load($fields);
    debug($fields);
    if($errors = validate($fields)) {
        debug($errors);
    }else{
        echo 'OK';
        //mail
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    	<meta charset="utf-8">
    	<link rel="stylesheet" type="text/css" href="styles/style.css">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<link  href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
    	<title>Form</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">	
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    

                    <form method="post">
                        <div class="mb-3">
                            <label for="name">Name</label>
                            <input name="name" type="text" class="form-control" id="name">
                        </div>

                        <div class="mb-3">
                            <label for="email">Email</label>
                            <input name="email" type="email" class="form-control" id="email">
                        </div>

                        <div class="mb-3">
                            <label for="address">Addres</label>
                            <input name="address" type="text" class="form-control" id="address">
                        </div>

                        <div class="mb-3">
                            <label for="phone">Phone</label>
                            <input name="phone" type="text" class="form-control" id="phone">
                        </div>

                        <div class="mb-3">
                            <label for="comment">Comment</label>
                            <textarea name="comment" id="comment" rows="3" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>