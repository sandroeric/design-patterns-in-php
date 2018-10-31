<?php

namespace DesignPatternsInPHP\Structural\Decorator;

class TextField extends FormDecorator
{
    public function toString(): string
    {
        $form = explode('</form>', $this->form->toString());
        return $form[0] . '<p><input type="text" /></p></form>';
    }
}