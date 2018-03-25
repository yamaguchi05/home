<?php

namespace Kakeibo\View;

class TwigAdapter implements ViewInterface
{
    private $parameters = [];

    public function assign(string $name, $value): void
    {
        $this->parameters[$name] = $value;
    }

    public function render(string $template_dir, string $resource_name): string
    {
        $twig = new \Twig_Environment(
            new \Twig_Loader_Filesystem(
                [
                    $template_dir,
                    'C:\kakeibo\src\Resource\View',
                ]
            )
        );
        return $twig->render($resource_name);
    }
}
