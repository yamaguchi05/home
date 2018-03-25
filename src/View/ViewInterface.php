<?php

namespace Kakeibo\View;

interface ViewInterface
{
    public function assign(string $name, $value) : void;
    public function render(string $template_dir, string $resource_name) : string;
}