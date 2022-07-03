<?php

namespace App\View;

class Template implements ViewInterface
{

    public function __construct(
        protected string $template,
        protected array $data,
    ) {
    }

    public function render(): bool|string
    {
        header('Content-Type: text/html; charset=utf-8');
        extract($this->data);
        // var_dump($this->data);
        ob_start();
        // TEMPLATE_PATH .
        // var_dump(DIRECTORY_SEPARATOR . $this->template . '.php');
        include(__DIR__ . DIRECTORY_SEPARATOR .  '..' . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR . $this->template . '.php');
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }
}
