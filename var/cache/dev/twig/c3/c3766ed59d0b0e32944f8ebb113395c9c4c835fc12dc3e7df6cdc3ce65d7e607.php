<?php

/* @OCPlatform/Advert/index.html.twig */
class __TwigTemplate_a0cb6d3e67641bcfec4419da75cdd300296370a287744ab481b3eb1b4a9f6823 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "@OCPlatform/Advert/index.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_32182eda7f1ecf5a4d68ef822853a14d9143cab35c488785ee8688ca62d92d6a = $this->env->getExtension("native_profiler");
        $__internal_32182eda7f1ecf5a4d68ef822853a14d9143cab35c488785ee8688ca62d92d6a->enter($__internal_32182eda7f1ecf5a4d68ef822853a14d9143cab35c488785ee8688ca62d92d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Advert/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32182eda7f1ecf5a4d68ef822853a14d9143cab35c488785ee8688ca62d92d6a->leave($__internal_32182eda7f1ecf5a4d68ef822853a14d9143cab35c488785ee8688ca62d92d6a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e533ecde9ff46c65da47a3c6b8338e644ce31b1208655500d66bebfaaed950b6 = $this->env->getExtension("native_profiler");
        $__internal_e533ecde9ff46c65da47a3c6b8338e644ce31b1208655500d66bebfaaed950b6->enter($__internal_e533ecde9ff46c65da47a3c6b8338e644ce31b1208655500d66bebfaaed950b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e533ecde9ff46c65da47a3c6b8338e644ce31b1208655500d66bebfaaed950b6->leave($__internal_e533ecde9ff46c65da47a3c6b8338e644ce31b1208655500d66bebfaaed950b6_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_b469c5431ebf29222889966d6daa1f80970dad429525178278383e3bb0f0be0c = $this->env->getExtension("native_profiler");
        $__internal_b469c5431ebf29222889966d6daa1f80970dad429525178278383e3bb0f0be0c->enter($__internal_b469c5431ebf29222889966d6daa1f80970dad429525178278383e3bb0f0be0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
  <h2>Liste des annonces</h2>

  <ul>
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) ? $context["listAdverts"] : $this->getContext($context, "listAdverts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 15
            echo "      <li>
        <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">
          ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "
        </a>
        par ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "author", array()), "html", null, true);
            echo ",
        le ";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["advert"], "date", array()), "d/m/Y"), "html", null, true);
            echo "
      </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "      <li>Pas (encore !) d'annonces</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "  </ul>

";
        
        $__internal_b469c5431ebf29222889966d6daa1f80970dad429525178278383e3bb0f0be0c->leave($__internal_b469c5431ebf29222889966d6daa1f80970dad429525178278383e3bb0f0be0c_prof);

    }

    public function getTemplateName()
    {
        return "@OCPlatform/Advert/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 25,  92 => 23,  84 => 20,  80 => 19,  75 => 17,  71 => 16,  68 => 15,  63 => 14,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/index.html.twig #}*/
/* */
/* {% extends "OCPlatformBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Accueil - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block ocplatform_body %}*/
/* */
/*   <h2>Liste des annonces</h2>*/
/* */
/*   <ul>*/
/*     {% for advert in listAdverts %}*/
/*       <li>*/
/*         <a href="{{ path('oc_platform_view', {'id': advert.id}) }}">*/
/*           {{ advert.title }}*/
/*         </a>*/
/*         par {{ advert.author }},*/
/*         le {{ advert.date|date('d/m/Y') }}*/
/*       </li>*/
/*     {% else %}*/
/*       <li>Pas (encore !) d'annonces</li>*/
/*     {% endfor %}*/
/*   </ul>*/
/* */
/* {% endblock %}*/
/* */
