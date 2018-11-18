<?php

namespace App\Facade;

class Template
{
    /** @var string */
    private $template = '<h5>%s</h5><p>ID: <strong>%s</strong> - Age: <strong>%s</strong></p>';

    public function __construct()
    {
    }

    public function serve(int $id, array $data): string
    {
        if (!empty($data)) {
            return sprintf($this->template, $data['name'], $id, $data['age']);
        }
        return '';
    }
}
