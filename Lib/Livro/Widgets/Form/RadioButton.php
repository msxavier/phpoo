<?php
Namespace Livro\Widgets\Form;

/**
 * classe RadioButton
 * classe para construção de rádio
 */
class RadioButton extends Field implements FormElementInterface
{
    /**
     * método show()
     * exibe o widget na tela
     */
    public function show()
    {
        // atribui as propriedades da TAG
        $this->tag->name = $this->name;
        $this->tag->value = $this->value;
        $this->tag->type = 'radio';
        
        // se o campo não é editável
        if (!parent::getEditable())
        {
            // desabilita a TAG input
            $this->tag->readonly = "1";
            $this->tag->class = 'tfield_disabled';		 // classe CSS
        }
        // exibe a tag
        $this->tag->show();
    }
}
