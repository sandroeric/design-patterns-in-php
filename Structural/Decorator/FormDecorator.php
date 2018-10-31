<?php

namespace DesignPatternsInPHP\Structural\Decorator;

abstract class FormDecorator implements Form
{
    protected $form;

    public function __construct(Form $form)
    {
        $this->form = $form;
    }
}