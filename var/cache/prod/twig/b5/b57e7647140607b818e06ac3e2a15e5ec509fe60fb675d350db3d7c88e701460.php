<?php

/* JeremyNewsletterBundle:Default:contact.html.twig */
class __TwigTemplate_471b3254f4d9ca3127c2ce1895a3022dfe8f0a20b3c8ab7d41ac2a9cb440688d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('body', $context, $blocks);
    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        echo "Salut !";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form');
        echo "
";
    }

    public function getTemplateName()
    {
        return "JeremyNewsletterBundle:Default:contact.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 4,  36 => 3,  30 => 1,  26 => 3,  23 => 2,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "JeremyNewsletterBundle:Default:contact.html.twig", "E:\\wamp64\\www\\projet_e_commerce\\src\\Jeremy\\NewsletterBundle/Resources/views/Default/contact.html.twig");
    }
}
