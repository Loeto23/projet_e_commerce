<?php

/* JeremyFrontBundle:Contact:contact.html.twig */
class __TwigTemplate_48ccf3ba5ff44a29200c80df0b7003aeba6aba5dedecae93b5cd310696c50b8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "JeremyFrontBundle:Contact:contact.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'section' => array($this, 'block_section'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JeremyFrontBundle:Contact:contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JeremyFrontBundle:Contact:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "
Contact

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_section($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        // line 10
        echo "

  <div id=\"all\">
    <div id=\"content\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-12\">
            <nav aria-label=\"breadcrumb\">
              <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_contact");
        echo "\">Accueil</a></li>
                <li aria-current=\"page\" class=\"breadcrumb-item active\">Contact</li>
              </ol>
            </nav>
          </div>
          <div class=\"col-lg-3\">
            <!--
            *** PAGES MENU ***
            _________________________________________________________
            -->
            <div class=\"card sidebar-menu mb-4\">
              <div class=\"card-header\">
                <h3 class=\"h4 card-title\">Informations</h3>
              </div>
              <div class=\"card-body\">
                <ul class=\"nav nav-pills flex-column\">
                  <li><a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_noussommes");
        echo "\" class=\"nav-link\">Qui sommes-nous ?</a></li>
                  <li><a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_contact");
        echo "\" class=\"nav-link\">Nous contacter</a></li>
                  <li><a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_faq");
        echo "\" class=\"nav-link\">FAQ</a></li>
                  <li><a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_mention");
        echo "\" class=\"nav-link\">Mentions légales</a></li>
                  <li><a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_cgv");
        echo "\" class=\"nav-link\">Conditions générales de vente</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class=\"col-lg-9\">
            <div id=\"contact\" class=\"box\">
              <h1>Nous contacter</h1>
              <p class=\"lead\">Besoin de réponse à vos questions ? N'hesitez pas à nous contacter.</p>
              <p>Nous sommes disponibles de 9h à 17h du lundi au vendredi.</p>
              <hr>
              <div class=\"row\">
                <div class=\"col-md-4\">
                  <h3><i class=\"fa fa-map-marker\"></i> Adresse</h3>
                  <p>73 Avenue Gambetta<br>Saint-Maur des fossés<br>94100<br><strong>FRANCE</strong></p>
                </div>
                <!-- /.col-sm-4-->
                <div class=\"col-md-4\">
                  <h3><i class=\"fa fa-phone\"></i> Par téléphone</h3>
                  <p><strong>0123456789</strong><i class=\"text-muted\"> (appel gratuit)</i></p>
                </div>
                <!-- /.col-sm-4-->
                <div class=\"col-md-4\">
                  <h3><i class=\"fa fa-envelope\"></i> Support</h3>
                  <p class=\"text-muted\">N'hésitez pas à nous envoyer un courrier électronique ou à utiliser notre formulaire de contact.</p>
                  <ul>
                    <li><strong><a href=\"mailto:\">jeremy.batilliot23@gmail.com</a></strong></li>
                    <li><strong><a href=\"";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeremy_front_contact");
        echo "\">Ticket</a></strong> - pour ouvrir un ticket</li>
                  </ul>
                </div>

              </div>

              <hr>
              <div id=\"map\"><iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2628.240975788464!2d2.493040415097047!3d48.796379301542785!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e60cf44628de0f%3A0xdbd1262e9a9b8018!2s73+Avenue+Gambetta%2C+94100+Saint-Maur-des-Foss%C3%A9s!5e0!3m2!1sfr!2sfr!4v1550664917064\" width=\"750\" height=\"400\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe></div>
              <hr>
              <h2>Formulaire de contact</h2>
              <form>
                <div class=\"row\">
                  <div class=\"col-md-6\">
                    <div class=\"form-group\">
                      <label for=\"nom\">Nom</label>
                      <input id=\"nom\" type=\"text\" class=\"form-control\" required>
                    </div>
                  </div>
                  <div class=\"col-md-6\">
                    <div class=\"form-group\">
                      <label for=\"prenom\">Prénom</label>
                      <input id=\"prenom\" type=\"text\" class=\"form-control\" required>
                    </div>
                  </div>
                  <div class=\"col-md-6\">
                    <div class=\"form-group\">
                      <label for=\"email\">Email</label>
                      <input id=\"email\" type=\"text\" class=\"form-control\" pattern=\".+@globex.com\" size=\"30\" required>
                    </div>
                  </div>
                  <div class=\"col-md-6\">
                    <div class=\"form-group\">
                      <label for=\"sujet\">Sujet</label>
                      <input id=\"sujet\" type=\"text\" class=\"form-control\" required>
                    </div>
                  </div>
                  <div class=\"col-md-12\">
                    <div class=\"form-group\">
                      <label for=\"message\">Message</label>
                      <textarea id=\"message\" class=\"form-control\" required></textarea>
                    </div>
                  </div>
                  <div class=\"col-md-12 text-center\">
                    <button type=\"submit\" class=\"btn btn-primary\"><i class=\"far fa-envelope\"></i></i> Envoyer message</button>
                  </div>
                </div>
              </form>
            </div>
          </div>


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
        return "JeremyFrontBundle:Contact:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 66,  118 => 39,  114 => 38,  110 => 37,  106 => 36,  102 => 35,  83 => 19,  72 => 10,  63 => 9,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}

Contact

{% endblock %}

{% block section %}


  <div id=\"all\">
    <div id=\"content\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-12\">
            <nav aria-label=\"breadcrumb\">
              <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"{{ path('jeremy_front_contact') }}\">Accueil</a></li>
                <li aria-current=\"page\" class=\"breadcrumb-item active\">Contact</li>
              </ol>
            </nav>
          </div>
          <div class=\"col-lg-3\">
            <!--
            *** PAGES MENU ***
            _________________________________________________________
            -->
            <div class=\"card sidebar-menu mb-4\">
              <div class=\"card-header\">
                <h3 class=\"h4 card-title\">Informations</h3>
              </div>
              <div class=\"card-body\">
                <ul class=\"nav nav-pills flex-column\">
                  <li><a href=\"{{ path('jeremy_front_noussommes') }}\" class=\"nav-link\">Qui sommes-nous ?</a></li>
                  <li><a href=\"{{ path('jeremy_front_contact') }}\" class=\"nav-link\">Nous contacter</a></li>
                  <li><a href=\"{{ path('jeremy_front_faq') }}\" class=\"nav-link\">FAQ</a></li>
                  <li><a href=\"{{ path('jeremy_front_mention') }}\" class=\"nav-link\">Mentions légales</a></li>
                  <li><a href=\"{{ path('jeremy_front_cgv') }}\" class=\"nav-link\">Conditions générales de vente</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class=\"col-lg-9\">
            <div id=\"contact\" class=\"box\">
              <h1>Nous contacter</h1>
              <p class=\"lead\">Besoin de réponse à vos questions ? N'hesitez pas à nous contacter.</p>
              <p>Nous sommes disponibles de 9h à 17h du lundi au vendredi.</p>
              <hr>
              <div class=\"row\">
                <div class=\"col-md-4\">
                  <h3><i class=\"fa fa-map-marker\"></i> Adresse</h3>
                  <p>73 Avenue Gambetta<br>Saint-Maur des fossés<br>94100<br><strong>FRANCE</strong></p>
                </div>
                <!-- /.col-sm-4-->
                <div class=\"col-md-4\">
                  <h3><i class=\"fa fa-phone\"></i> Par téléphone</h3>
                  <p><strong>0123456789</strong><i class=\"text-muted\"> (appel gratuit)</i></p>
                </div>
                <!-- /.col-sm-4-->
                <div class=\"col-md-4\">
                  <h3><i class=\"fa fa-envelope\"></i> Support</h3>
                  <p class=\"text-muted\">N'hésitez pas à nous envoyer un courrier électronique ou à utiliser notre formulaire de contact.</p>
                  <ul>
                    <li><strong><a href=\"mailto:\">jeremy.batilliot23@gmail.com</a></strong></li>
                    <li><strong><a href=\"{{ path('jeremy_front_contact') }}\">Ticket</a></strong> - pour ouvrir un ticket</li>
                  </ul>
                </div>

              </div>

              <hr>
              <div id=\"map\"><iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2628.240975788464!2d2.493040415097047!3d48.796379301542785!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e60cf44628de0f%3A0xdbd1262e9a9b8018!2s73+Avenue+Gambetta%2C+94100+Saint-Maur-des-Foss%C3%A9s!5e0!3m2!1sfr!2sfr!4v1550664917064\" width=\"750\" height=\"400\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe></div>
              <hr>
              <h2>Formulaire de contact</h2>
              <form>
                <div class=\"row\">
                  <div class=\"col-md-6\">
                    <div class=\"form-group\">
                      <label for=\"nom\">Nom</label>
                      <input id=\"nom\" type=\"text\" class=\"form-control\" required>
                    </div>
                  </div>
                  <div class=\"col-md-6\">
                    <div class=\"form-group\">
                      <label for=\"prenom\">Prénom</label>
                      <input id=\"prenom\" type=\"text\" class=\"form-control\" required>
                    </div>
                  </div>
                  <div class=\"col-md-6\">
                    <div class=\"form-group\">
                      <label for=\"email\">Email</label>
                      <input id=\"email\" type=\"text\" class=\"form-control\" pattern=\".+@globex.com\" size=\"30\" required>
                    </div>
                  </div>
                  <div class=\"col-md-6\">
                    <div class=\"form-group\">
                      <label for=\"sujet\">Sujet</label>
                      <input id=\"sujet\" type=\"text\" class=\"form-control\" required>
                    </div>
                  </div>
                  <div class=\"col-md-12\">
                    <div class=\"form-group\">
                      <label for=\"message\">Message</label>
                      <textarea id=\"message\" class=\"form-control\" required></textarea>
                    </div>
                  </div>
                  <div class=\"col-md-12 text-center\">
                    <button type=\"submit\" class=\"btn btn-primary\"><i class=\"far fa-envelope\"></i></i> Envoyer message</button>
                  </div>
                </div>
              </form>
            </div>
          </div>


        </div>
      </div>
    </div>
  </div>






{% endblock %}
", "JeremyFrontBundle:Contact:contact.html.twig", "E:\\wamp64\\www\\projet_e_commerce\\src\\Jeremy\\FrontBundle/Resources/views/Contact/contact.html.twig");
    }
}
