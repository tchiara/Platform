<?php

/* @OCCore/layout.html.twig */
class __TwigTemplate_c6878959238c630b76dcaf360082984b9a0035dde6b14042bece4c91e2a854e5 extends Twig_Template
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
        $__internal_a098f2a0b5c4bd17b7834d73c4515434c3313a2b7a3babab933918b3dcd33377 = $this->env->getExtension("native_profiler");
        $__internal_a098f2a0b5c4bd17b7834d73c4515434c3313a2b7a3babab933918b3dcd33377->enter($__internal_a098f2a0b5c4bd17b7834d73c4515434c3313a2b7a3babab933918b3dcd33377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCCore/layout.html.twig"));

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
        
        $__internal_a098f2a0b5c4bd17b7834d73c4515434c3313a2b7a3babab933918b3dcd33377->leave($__internal_a098f2a0b5c4bd17b7834d73c4515434c3313a2b7a3babab933918b3dcd33377_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_b675e9cca99cec04914c80b0173a353bee14135c57f0203ca1ab005c6ee85190 = $this->env->getExtension("native_profiler");
        $__internal_b675e9cca99cec04914c80b0173a353bee14135c57f0203ca1ab005c6ee85190->enter($__internal_b675e9cca99cec04914c80b0173a353bee14135c57f0203ca1ab005c6ee85190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OC Plateforme";
        
        $__internal_b675e9cca99cec04914c80b0173a353bee14135c57f0203ca1ab005c6ee85190->leave($__internal_b675e9cca99cec04914c80b0173a353bee14135c57f0203ca1ab005c6ee85190_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_79e2f5213403e9ed98de30622a38a3adc757fb4ef0fd39f37326e9f20a52a4ec = $this->env->getExtension("native_profiler");
        $__internal_79e2f5213403e9ed98de30622a38a3adc757fb4ef0fd39f37326e9f20a52a4ec->enter($__internal_79e2f5213403e9ed98de30622a38a3adc757fb4ef0fd39f37326e9f20a52a4ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "      ";
        // line 13
        echo "      <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    ";
        
        $__internal_79e2f5213403e9ed98de30622a38a3adc757fb4ef0fd39f37326e9f20a52a4ec->leave($__internal_79e2f5213403e9ed98de30622a38a3adc757fb4ef0fd39f37326e9f20a52a4ec_prof);

    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
        $__internal_2952f84287f8a71439646cf644e226755b8a045cbf811272c126006a47cfca4f = $this->env->getExtension("native_profiler");
        $__internal_2952f84287f8a71439646cf644e226755b8a045cbf811272c126006a47cfca4f->enter($__internal_2952f84287f8a71439646cf644e226755b8a045cbf811272c126006a47cfca4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 44
        echo "        ";
        
        $__internal_2952f84287f8a71439646cf644e226755b8a045cbf811272c126006a47cfca4f->leave($__internal_2952f84287f8a71439646cf644e226755b8a045cbf811272c126006a47cfca4f_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3b72aa5d88ece365de9b5071a50006b1ee7757853ab28e777da0d417d25f2bea = $this->env->getExtension("native_profiler");
        $__internal_3b72aa5d88ece365de9b5071a50006b1ee7757853ab28e777da0d417d25f2bea->enter($__internal_3b72aa5d88ece365de9b5071a50006b1ee7757853ab28e777da0d417d25f2bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 56
        echo "    ";
        // line 57
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_3b72aa5d88ece365de9b5071a50006b1ee7757853ab28e777da0d417d25f2bea->leave($__internal_3b72aa5d88ece365de9b5071a50006b1ee7757853ab28e777da0d417d25f2bea_prof);

    }

    public function getTemplateName()
    {
        return "@OCCore/layout.html.twig";
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
