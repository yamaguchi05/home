<?php

namespace Kakeibo\Controller;

use Kakeibo\Http\Request;
use Kakeibo\Http\Response;

class IndexController extends Controller
{
    /**
     * @Route { name='Index'}
     * @return Response
     */
    public function index_action() : Response
    {
        return new Response($this->view->render("{$this->resource_path}\Index", 'index.html.twig'));
    }
}