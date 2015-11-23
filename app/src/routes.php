<?php

require 'app/src/userRoutes.php';
require 'app/src/adminRoutes.php';
require 'app/src/FormsValidation.php';


//code redirects to docs
$app->get('/', function ($request, $response, $args) {
    return $response->write("Hello from Getting slim with Slim");
});

$app->map(['GET', 'PUT', 'POST'], '/method', function ($request, $response, $args) {
    return $this->view->render($response, 'forms/bmr.twig', [
                'docs' => $this->toc,
                'bmr' => [],
                'errors' => [],
                'csrf' => [
                    'name' => $request->getAttribute('csrf_name'),
                    'value' => $request->getAttribute('csrf_value'),
                ]
    ]);
});


$app->get('/docs', function ($request, $response, $args) {
    
    $flash_messages = $this->flash->getMessages();
   
    $this->view->render($response, 'md_document.twig', [
        'docs' => $this->toc,
        'flash_messages' => $flash_messages,
         'userLogged' => isset($_SESSION['user_id']),
        'page_content' => "<h1>Get slim with Slim</h1>",
    ]);
    
})->setName('docs-home');


$app->get('/docs/{fname:[^\s]+.html}', function ($request, $response, $args) {

    $dir = $this->application['docs_path'];
    $docs = $this->toc;
    $idx = array_search($args['fname'], array_column($docs, 'slug'));
    $filename = $docs[$idx]['fname'];

    $full_filename = "{$dir}/{$filename}";
    $parser = $this->md_parser;

    $content = $parser->text(file_get_contents($full_filename));
    $this->view->render($response, 'md_document.twig', [
         'userLogged' => isset($_SESSION['user_id']),
        'docs' => $docs,
        'page_content' => $content,
        'current_file' => $filename,
    ]);
})->setName('docs');


$app->get('/bmi', function ($request, $response, $args) {
    return $this->view->render($response, 'forms/bmi.twig', [
                'docs' => $this->toc,
                'bmi' => [],
                'errors' => [],
         'userLogged' => isset($_SESSION['user_id']),        
        'csrf' => [
                    'name' => $request->getAttribute('csrf_name'),
                    'value' => $request->getAttribute('csrf_value'),
                ]
    ]);
})->setName('bmi');

//code below is validating and processing information
$app->post('/bmi', function ($request, $response, $args) {

    if ($request->getAttribute('csrf_status') === false) {
        $msg = "Something went terribly wrong OR  your form  was already processed";
        return $this->view->render($response, 'errors/500.twig', [
                            'docs' => $this->toc,
                            'message' => $msg
                        ])
                        ->withStatus(500)
                        ->withHeader('Content-Type', 'text/html');
    }

    $bmi = $_POST;
    $form = validateBmiForm($bmi);

    if ($form['is_valid']) {
        $bmi_value = round($bmi['weight'] / ($bmi['height'] * $bmi['height']), 2);

        return $this->view->render($response, 'forms/bmi.post.twig', [
             'userLogged' => isset($_SESSION['user_id']),        
            'docs' => $this->toc,
                    'bmi_value' => $bmi_value,
                    'email' => $bmi['email'],
        ]);
    }

    return $this->view->render($response, 'forms/bmi.twig', [
         'userLogged' => isset($_SESSION['user_id']),        
        'docs' => $this->toc, 'bmi' => $bmi,
                'errors' => $form['has_errors'],
                'csrf' => [
                    'name' => $request->getAttribute('csrf_name'),
                    'value' => $request->getAttribute('csrf_value'),
                ]
    ]);
})->setName('bmi');


$app->map(['GET', 'POST'], '/bmr', function ($request, $response, $args) {
    //initilise data
    $bmr = [];
    $errors = [];
    //POST
    if ($request->isPost()) {
        $bmr = $request->getParsedBody();
        $form = validateBmrForm($bmr);

        if ($form['is_valid']) {
            if ($bmr['gender'] == 'male') {
                $bmr_value = round(88.362 + (13.397 * $bmr['weight']) + (479.9 * $bmr['height']) - (5.677 * $bmr['age']), 2);
            } else {
                $bmr_value = round(447.593 + (9.247 * $bmr['weight']) + (309.8 * $bmr['height']) - (4.098 * $bmr['height']), 2);
            }
            //display results
            return $this->view->render($response, 'forms/bmr.post.twig', [
                 'userLogged' => isset($_SESSION['user_id']),        
                'docs' => $this->toc,
                        'bmr_value' => $bmr_value
            ]);
        }
        $errors = $form['has_errors'];
    }
    //GET OR redisplay the page with errors
    return $this->view->render($response, 'forms/bmr.twig', [
         'userLogged' => isset($_SESSION['user_id']),        
        'docs' => $this->toc,
                'bmr' => $bmr,
                'errors' => $errors,
                    /* 'csrf' => [
                      'name' => $request->getAttribute('csrf_name'),
                      'value' => $request->getAttribute('csrf_value'),
                      ] */
    ]);
})->setName('bmr');
/*
include_once 'app/src/BMR.php';
$app->map(['GET', 'POST'], '/bmrx', function ($request, $response, $args) {
    //initilise data
    $bmr = [];
    $errors = [];
    //POST
    if ($request->isPost()) {
        $bmr = new BMR($request->getParsedBody());

        if ($bmr->isValid()) {
            //display results
            return $this->view->render($response, 'forms/bmr.post.twig', [
                        'docs' => $this->toc,
                        'bmr_value' => $bmr->getBmr(),
            ]);
        }
        $errors = $bmr->getErrors();
    }
    //GET OR redisplay the page with errors
    return $this->view->render($response, 'forms/bmrx.twig', [
                'docs' => $this->toc,
                'bmr' => $bmr,
                'errors' => $errors,
                'gender' => [
                    'male' => BMR::MALE,
                    'female' => BMR::FEMALE
                ],
    ]);
})->setName('bmrx');
 
 */
