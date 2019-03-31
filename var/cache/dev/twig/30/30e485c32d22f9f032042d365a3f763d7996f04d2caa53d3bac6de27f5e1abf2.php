<?php

/* footer.html.twig */
class __TwigTemplate_aadfd72ee0ef883634c7ae0c2c0acbc4afab3c4cbfb26d990ec57cf7164997d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "footer.html.twig"));

        // line 1
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_footer($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 2
        echo "<br>
<br>
<div id=\"footer\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-3 col-md-6\">
        <h4 class=\"mb-3\">Pages</h4>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_noussommes");
        echo "\">Qui sommes-nous ?</a></li>
          <li><a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_contact");
        echo "\">Nous contacter</a></li>
          <li><a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_faq");
        echo "\">FAQ</a></li>
          <li><a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_mention");
        echo "\">Mentions légales</a></li>
          <li><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_cgv");
        echo "\">Conditions générales de vente</a></li>
        </ul>
        <hr>
        <h4 class=\"mb-3\">Utilisateur</h4>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">Se connecter</a></li>
          <li><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">S'inscrire</a></li>
        </ul>
      </div>
      <!-- /.col-lg-3-->
      <div class=\"col-lg-3 col-md-6\">
        <h4 class=\"mb-3 mLeft50\">Catégories</h4>
        <h5>Vêtements</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_tops");
        echo "\">Tops</a></li>
          <li><a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_robe");
        echo "\">Robes</a></li>
          <li><a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_pantalon");
        echo "\">Pantalons</a></li>
          <li><a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_jupe");
        echo "\">Jupes</a></li>
          <li><a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_veste");
        echo "\">Vestes/Manteaux</a></li>
        </ul>
        <h5>Chaussures</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_botte");
        echo "\">Bottes</a></li>
          <li><a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_sandale");
        echo "\">Sandales</a></li>
          <li><a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_basket");
        echo "\">Baskets</a></li>
          <li><a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_escarpin");
        echo "\">Escarpins</a></li>
          <li><a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_chausson");
        echo "\">Chaussons</a></li>
        </ul>
      </div>
      <div class=\"col-lg-3 col-md-6 mTop35\">
      <h5>Accessoires</h5>
      <ul class=\"list-unstyled\">
        <li><a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_sac");
        echo "\">Sacs</a></li>
        <li><a href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_echarpe");
        echo "\">Foulards/Echarpes</a></li>
        <li><a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_ceinture");
        echo "\">Ceintures</a></li>
        <li><a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_chapeau");
        echo "\">Couvre-chef</a></li>
        <li><a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_bijou");
        echo "\">Bijoux</a></li>
      </ul>
      </div>

      <div class=\"col-lg-3 col-md-6\">
        <h4 class=\"mb-3\">S'abonner aux Newsletter</h4>
        <p class=\"text-muted\">Pour vous tenir informé des nouvelles sorties et des nouvelles promos, n'hesitez pas à vous abonner !</p>
        <form>
          <div class=\"input-group\">
            <input type=\"text\" class=\"form-control\"><span class=\"input-group-append\">
              <button type=\"button\" class=\"btn btn-outline-secondary\">S'abonner!</button></span>
          </div>

        </form>
        <hr>

      </div>

    </div>

  </div>

</div>

<div id=\"copyright\">
  <div class=\"container\">
    <div class=\"row textAlign\">
      <div class=\"col-lg-12 mb-2 mb-lg-0\">
        ©2019 Jérémy BATILLIOT - Site (Exercice) Fin de formation
      </div>
    </div>
  </div>
</div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  157 => 50,  153 => 49,  149 => 48,  145 => 47,  141 => 46,  132 => 40,  128 => 39,  124 => 38,  120 => 37,  116 => 36,  109 => 32,  105 => 31,  101 => 30,  97 => 29,  93 => 28,  82 => 20,  78 => 19,  70 => 14,  66 => 13,  62 => 12,  58 => 11,  54 => 10,  44 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block footer %}
<br>
<br>
<div id=\"footer\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-3 col-md-6\">
        <h4 class=\"mb-3\">Pages</h4>
        <ul class=\"list-unstyled\">
          <li><a href=\"{{ path('jeremy_front_noussommes') }}\">Qui sommes-nous ?</a></li>
          <li><a href=\"{{ path('jeremy_front_contact') }}\">Nous contacter</a></li>
          <li><a href=\"{{ path('jeremy_front_faq') }}\">FAQ</a></li>
          <li><a href=\"{{ path('jeremy_front_mention') }}\">Mentions légales</a></li>
          <li><a href=\"{{ path('jeremy_front_cgv') }}\">Conditions générales de vente</a></li>
        </ul>
        <hr>
        <h4 class=\"mb-3\">Utilisateur</h4>
        <ul class=\"list-unstyled\">
          <li><a href=\"{{ path('fos_user_security_login') }}\">Se connecter</a></li>
          <li><a href=\"{{ path('fos_user_registration_register') }}\">S'inscrire</a></li>
        </ul>
      </div>
      <!-- /.col-lg-3-->
      <div class=\"col-lg-3 col-md-6\">
        <h4 class=\"mb-3 mLeft50\">Catégories</h4>
        <h5>Vêtements</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"{{ path('jeremy_front_tops') }}\">Tops</a></li>
          <li><a href=\"{{ path('jeremy_front_robe') }}\">Robes</a></li>
          <li><a href=\"{{ path('jeremy_front_pantalon') }}\">Pantalons</a></li>
          <li><a href=\"{{ path('jeremy_front_jupe') }}\">Jupes</a></li>
          <li><a href=\"{{ path('jeremy_front_veste') }}\">Vestes/Manteaux</a></li>
        </ul>
        <h5>Chaussures</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"{{ path('jeremy_front_botte') }}\">Bottes</a></li>
          <li><a href=\"{{ path('jeremy_front_sandale') }}\">Sandales</a></li>
          <li><a href=\"{{ path('jeremy_front_basket') }}\">Baskets</a></li>
          <li><a href=\"{{ path('jeremy_front_escarpin') }}\">Escarpins</a></li>
          <li><a href=\"{{ path('jeremy_front_chausson') }}\">Chaussons</a></li>
        </ul>
      </div>
      <div class=\"col-lg-3 col-md-6 mTop35\">
      <h5>Accessoires</h5>
      <ul class=\"list-unstyled\">
        <li><a href=\"{{ path('jeremy_front_sac') }}\">Sacs</a></li>
        <li><a href=\"{{ path('jeremy_front_echarpe') }}\">Foulards/Echarpes</a></li>
        <li><a href=\"{{ path('jeremy_front_ceinture') }}\">Ceintures</a></li>
        <li><a href=\"{{ path('jeremy_front_chapeau') }}\">Couvre-chef</a></li>
        <li><a href=\"{{ path('jeremy_front_bijou') }}\">Bijoux</a></li>
      </ul>
      </div>

      <div class=\"col-lg-3 col-md-6\">
        <h4 class=\"mb-3\">S'abonner aux Newsletter</h4>
        <p class=\"text-muted\">Pour vous tenir informé des nouvelles sorties et des nouvelles promos, n'hesitez pas à vous abonner !</p>
        <form>
          <div class=\"input-group\">
            <input type=\"text\" class=\"form-control\"><span class=\"input-group-append\">
              <button type=\"button\" class=\"btn btn-outline-secondary\">S'abonner!</button></span>
          </div>

        </form>
        <hr>

      </div>

    </div>

  </div>

</div>

<div id=\"copyright\">
  <div class=\"container\">
    <div class=\"row textAlign\">
      <div class=\"col-lg-12 mb-2 mb-lg-0\">
        ©2019 Jérémy BATILLIOT - Site (Exercice) Fin de formation
      </div>
    </div>
  </div>
</div>



{% endblock %}
", "footer.html.twig", "E:\\wamp64\\www\\projet_e_commerce\\app\\Resources\\views\\footer.html.twig");
    }
}
