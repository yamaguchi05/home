<?php

namespace Kakeibo\Controller;

use Kakeibo\View\ViewInterface;

abstract class Controller
{
    /**
     * @var ViewInterface
     */
    protected $view;

    protected $resource_path = __DIR__ . '\..\Resource\View';

    /**
     * @param ViewInterface $view
     */
    public function set_view(ViewInterface $view)
    {
        $this->view = $view;
    }
}