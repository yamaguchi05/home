<?php

namespace Kakeibo\View;

class SmartyAdapter implements ViewInterface
{
    /**
     * @var \Smarty
     */
    private $smarty;

    public function __construct(string $cache_dir, string $compile_dir)
    {
        $this->smarty = new \Smarty();
        $this->smarty->setCacheDir($cache_dir);
        $this->smarty->setCompileDir($compile_dir);
    }

    public function assign(string $name, $value): void
    {
        $this->smarty->assign($name, $value);
    }

    public function render(string $template_dir, string $resource_name): string
    {
        return $this->smarty->fetch($resource_name);
    }
}
