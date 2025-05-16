<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Illuminate\Database\QueryException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    public function render($request, Throwable $e)
{
    // Tangkap error koneksi database
    if ($e instanceof QueryException || $e instanceof \PDOException) {
        return response()->view('errors.database-offline', [], 500);
    }

    //404 not found
    if ($e instanceof NotFoundHttpException) {
        return response()->view('errors.custom-404', [], 404);
    }

    //429 Too Many Request
    if ($e instanceof NotFoundHttpException) {
        return response()->view('errors.toomanyrequest429', [], 429);
    }

    return parent::render($request, $e);
}
}
