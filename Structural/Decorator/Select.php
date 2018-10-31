<?php

namespace DesignPatternsInPHP\Structural\Decorator;

class Select extends FormDecorator
{
    public function toString(): string
    {
        $form = explode('</form>', $this->form->toString());
        return $form[0] . '<p><select><option>Select an option</option><select/></p></form>';
    }
}