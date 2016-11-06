<?php

namespace LatteBundle\Bridge\Symfony\Form;

use Symfony\Component\Form\FormRenderer;
use Symfony\Component\Security\Csrf\CsrfTokenManager;

class LatteRenderer extends FormRenderer
{
    public function __construct(LatteRendererEngine $engine, CsrfTokenManager $csrfProvider)
    {
        parent::__construct($engine, $csrfProvider);
    }
}
