<?php

namespace DesignPatterns\Structural\Composite;

require_once('DesignPatterns/Structural/Composite/RenderableInterface.php');

/**
* The composite node MUST extend the component contract. This is mandatory for building
* a tree of components.
*/
class Form implements RenderableInterface
{
    /**
     * @var RenderableInterface[]
     */
    private $elements;

    /**
     * runs through all elements and calls render() on them, then returns the complete representation
     * of the form.
     *
     * from the outside, one will not see this and the form will act like a single object instance
     *
     * @return string
     */
    public function render()
    {
        $form_code = '<form>';

        foreach ( $this->elements as $element ) {
            $form_code .= $element->render();
        }

        $form_code .= '</form>';

        return $form_code;
    }

    /**
     * @param RenderableInterface $element
     */
    public function addElement( RenderableInterface $element )
    {
        $this->elements[] = $element;
    }
}