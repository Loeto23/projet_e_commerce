<?php

/* @JeremyUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_b4129007f1d7eae4af8fa1acf27d08f494f4b44f1ca76b5a63879aa0e44452fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@JeremyUser/ChangePassword/change_password.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@JeremyUser/ChangePassword/change_password.html.twig", 4)->display($context);
    }

    public function getTemplateName()
    {
        return "@JeremyUser/ChangePassword/change_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@JeremyUser/ChangePassword/change_password.html.twig", "E:\\wamp64\\www\\projet_e_commerce\\src\\Jeremy\\UserBundle\\Resources\\views\\ChangePassword\\change_password.html.twig");
    }
}
