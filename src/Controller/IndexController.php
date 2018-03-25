<?php

namespace Kakeibo\Controller;

use Kakeibo\Http\Request;
use Kakeibo\Http\Response;

class IndexController extends Controller
{
    public function index_action(Request $request) : Response
    {
        return new Response($this->view->render("{$this->resource_path}\Index", 'index.html.twig'));
    }
}