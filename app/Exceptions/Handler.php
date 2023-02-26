<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)

    {
        //return parent::render($request, $exception);

        //return redirectto('welcome');
       // return redirectto('errors.404')
		/*
		return '
		<img src="public/images/line2.png" width="100%" height="40px" class="header">
		<h2>Извините! Что-то не так с системой!</h2>		
		<a href="/">Главная</a>
		';
		*/
        return '<script>window.location = "/"</script>;';
    }
}
