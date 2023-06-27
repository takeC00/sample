<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index(Request $request, Response $response)
    {
        $html = <<<EOF
        <html>
        <head>
        <title>Hello/Index</title>
        <style>
            body { font-size:16px; color:#999; }
            h1 {font-size:120pt; text-align:right; color:#fafafa; margin:-50px 0px -120px 0px }
        </style>
        </head>
        <body>

        </body>
        </html>s
        EOF;

        $response->setContent($html);
        return $response;
    }
}
