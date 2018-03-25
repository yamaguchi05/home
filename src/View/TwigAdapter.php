<?php

namespace Kakeibo\View;

class TwigAdapter implements ViewInterface
{
    private $parameters = [];
    /**
     * @var string
     */
    private $resource_dir;

    public function __construct(string $resource_dir)
    {
        if (!is_dir($resource_dir)) {
            throw new \LogicException();
        }

        $this->resource_dir = $resource_dir;
    }

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
                    $this->resource_dir,
                ]
            )
        );
        return $twig->render($resource_name);
    }
}
