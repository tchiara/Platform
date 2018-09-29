<?php

/* OCCoreBundle::layout.html.twig */
class __TwigTemplate_86f0d9f82dee0fb8cf50ec8283a4365569024fb266304d949c8a7cf8c67e9f9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe4841a14bea08eff97d7044972ee268c18e03c675d78ca864acfdc9994d0014 = $this->env->getExtension("native_profiler");
        $__internal_fe4841a14bea08eff97d7044972ee268c18e03c675d78ca864acfdc9994d0014->enter($__internal_fe4841a14bea08eff97d7044972ee268c18e03c675d78ca864acfdc9994d0014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle::layout.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "  </head>

  <body>
  <div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
      <h1>Ma plateforme d'annonces</h1>
      <p>
        Ce projet est propulsé par Symfony, et construit grâce au MOOC OpenClassrooms et SensioLabs.
      </p>
      <p>
        <a class=\"btn btn-primary btn-lg\" href=\"https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony2\">
          Participer au MOOC »
        </a>
      </p>
    </div>

    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\">
        <h3>Les annonces</h3>
        <ul class=\"nav nav-pills nav-stacked\">
          <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("oc_platform_home");
        echo "\">Accueil</a></li>
          <li><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("oc_platform_add");
        echo "\">Ajouter une annonce</a></li>
        </ul>

        <h4>Dernières annonces</h4>
        ";
        // line 40
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("OCPlatformBundle:Advert:menu", array("limit" => 3)));
        echo "
      </div>
      <div id=\"content\" class=\"col-md-9\">
        ";
        // line 43
        $this->displayBlock('body', $context, $blocks);
        // line 45
        echo "      </div>
    </div>

    <hr>

    <footer>
      <p>The sky's the limit © ";
        // line 51
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
    </footer>
  </div>

  ";
        // line 55
        $this->displayBlock('javascripts', $context, $blocks);
        // line 60
        echo "
  </body>
</html>
";
        
        $__internal_fe4841a14bea08eff97d7044972ee268c18e03c675d78ca864acfdc9994d0014->leave($__internal_fe4841a14bea08eff97d7044972ee268c18e03c675d78ca864acfdc9994d0014_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_01b2e9eed133aa6066a9239e4c0b2000219367d5d0c5e4c7e2e6ff25a30237f7 = $this->env->getExtension("native_profiler");
        $__internal_01b2e9eed133aa6066a9239e4c0b2000219367d5d0c5e4c7e2e6ff25a30237f7->enter($__internal_01b2e9eed133aa6066a9239e4c0b2000219367d5d0c5e4c7e2e6ff25a30237f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OC Plateforme";
        
        $__internal_01b2e9eed133aa6066a9239e4c0b2000219367d5d0c5e4c7e2e6ff25a30237f7->leave($__internal_01b2e9eed133aa6066a9239e4c0b2000219367d5d0c5e4c7e2e6ff25a30237f7_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_688b1fdeeb8bcc03381d5c45b330638cda3244704d497315d3bffa6dcc1741c4 = $this->env->getExtension("native_profiler");
        $__internal_688b1fdeeb8bcc03381d5c45b330638cda3244704d497315d3bffa6dcc1741c4->enter($__internal_688b1fdeeb8bcc03381d5c45b330638cda3244704d497315d3bffa6dcc1741c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "      ";
        // line 13
        echo "      <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    ";
        
        $__internal_688b1fdeeb8bcc03381d5c45b330638cda3244704d497315d3bffa6dcc1741c4->leave($__internal_688b1fdeeb8bcc03381d5c45b330638cda3244704d497315d3bffa6dcc1741c4_prof);

    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
        $__internal_2f047a14969773a3b7699c5630c727f49f86641c13d95a8624660993b9a32d36 = $this->env->getExtension("native_profiler");
        $__internal_2f047a14969773a3b7699c5630c727f49f86641c13d95a8624660993b9a32d36->enter($__internal_2f047a14969773a3b7699c5630c727f49f86641c13d95a8624660993b9a32d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 44
        echo "        ";
        
        $__internal_2f047a14969773a3b7699c5630c727f49f86641c13d95a8624660993b9a32d36->leave($__internal_2f047a14969773a3b7699c5630c727f49f86641c13d95a8624660993b9a32d36_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_843d2c0bdd479de2ecf6d39dbe7b4cdf891f137f51f344347d45521f5597006a = $this->env->getExtension("native_profiler");
        $__internal_843d2c0bdd479de2ecf6d39dbe7b4cdf891f137f51f344347d45521f5597006a->enter($__internal_843d2c0bdd479de2ecf6d39dbe7b4cdf891f137f51f344347d45521f5597006a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 56
        echo "    ";
        // line 57
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_843d2c0bdd479de2ecf6d39dbe7b4cdf891f137f51f344347d45521f5597006a->leave($__internal_843d2c0bdd479de2ecf6d39dbe7b4cdf891f137f51f344347d45521f5597006a_prof);

    }

    public function getTemplateName()
    {
        return "OCCoreBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 57,  157 => 56,  151 => 55,  144 => 44,  138 => 43,  130 => 13,  128 => 12,  122 => 11,  110 => 9,  100 => 60,  98 => 55,  91 => 51,  83 => 45,  81 => 43,  75 => 40,  68 => 36,  64 => 35,  42 => 15,  40 => 11,  35 => 9,  26 => 2,);
    }
}
/* {# src/OC/CoreBundle/Resources/views/layout.html.twig #}*/
/* */
/* <!DOCTYPE html>*/
/* <html>*/
/*   <head>*/
/*     <meta charset="utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/*     <title>{% block title %}OC Plateforme{% endblock %}</title>*/
/* */
/*     {% block stylesheets %}*/
/*       {# On charge le CSS de bootstrap depuis le site directement #}*/
/*       <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">*/
/*     {% endblock %}*/
/*   </head>*/
/* */
/*   <body>*/
/*   <div class="container">*/
/*     <div id="header" class="jumbotron">*/
/*       <h1>Ma plateforme d'annonces</h1>*/
/*       <p>*/
/*         Ce projet est propulsé par Symfony, et construit grâce au MOOC OpenClassrooms et SensioLabs.*/
/*       </p>*/
/*       <p>*/
/*         <a class="btn btn-primary btn-lg" href="https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony2">*/
/*           Participer au MOOC »*/
/*         </a>*/
/*       </p>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*       <div id="menu" class="col-md-3">*/
/*         <h3>Les annonces</h3>*/
/*         <ul class="nav nav-pills nav-stacked">*/
/*           <li><a href="{{ path('oc_platform_home') }}">Accueil</a></li>*/
/*           <li><a href="{{ path('oc_platform_add') }}">Ajouter une annonce</a></li>*/
/*         </ul>*/
/* */
/*         <h4>Dernières annonces</h4>*/
/*         {{ render(controller("OCPlatformBundle:Advert:menu", {'limit': 3})) }}*/
/*       </div>*/
/*       <div id="content" class="col-md-9">*/
/*         {% block body %}*/
/*         {% endblock %}*/
/*       </div>*/
/*     </div>*/
/* */
/*     <hr>*/
/* */
/*     <footer>*/
/*       <p>The sky's the limit © {{ 'now'|date('Y') }} and beyond.</p>*/
/*     </footer>*/
/*   </div>*/
/* */
/*   {% block javascripts %}*/
/*     {# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}*/
/*     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>*/
/*     <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>*/
/*   {% endblock %}*/
/* */
/*   </body>*/
/* </html>*/
/* */
