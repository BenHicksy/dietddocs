<?php

$app->add(new \Zeuxisoo\Whoops\Provider\Slim\WhoopsMiddleware());
/*
  use Slim\Http\Response as Response;

//INVALID CSRF handler
$app->add(function ($request, $response, $next) use ($app) {
    if ($request->getAttribute('csrf_status') === false) {
        $error_msg = "Something went terribly wrong OR  your form  was already processed";;
        $c = $app->getContainer();
        return $c['view']->render($response, 'errors/500.twig',
            [
                'docs' => $c['toc'],
                'message' => $error_msg
            ])
            ->withStatus(500)
            ->withHeader('Content-Type', 'text/html');
    }
    return $next($request, $response);
});

//Adds CSRF automaticallty to your form
$app->add(function ($request, Response $response, $next) use ($app) {

    $response = $next($request, $response);

    $str_body = (string)$response->getBody();
    //check for forms, othwerwise ignore
    if (strpos($str_body, '</form>') === false) {
        return $response;
    }

    //at least one form exists
    //define replacement for every </form> element

    $withCSRF = <<<MSG
        <input type="hidden" name="csrf_name" value="{$request->getAttribute('csrf_name')}">
        <input type="hidden" name="csrf_value" value="{$request->getAttribute('csrf_value')}">
        </form>
MSG;

    $new_str_body = str_replace('</form>', $withCSRF, $str_body);
    //overwrites  response body entirely
    $body = new Slim\Http\Body(fopen('php://temp', 'r+'));
    $body->write($new_str_body);

    return $response->withBody($body);
});



*/
$app->add($app->csrf);