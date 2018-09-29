<?php

/* OCPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_313c50c67cddff76f40c2f833c974780750557861fb2327a843c24d675235a2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:index.html.twig", 3);
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
        $__internal_cdc7e5f7861035457d8e643bcf1a3707cc71ba73580210659a50d4c373b00995 = $this->env->getExtension("native_profiler");
        $__internal_cdc7e5f7861035457d8e643bcf1a3707cc71ba73580210659a50d4c373b00995->enter($__internal_cdc7e5f7861035457d8e643bcf1a3707cc71ba73580210659a50d4c373b00995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdc7e5f7861035457d8e643bcf1a3707cc71ba73580210659a50d4c373b00995->leave($__internal_cdc7e5f7861035457d8e643bcf1a3707cc71ba73580210659a50d4c373b00995_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_79d8473e9a1d097101cc0ff8cd1c9fa45ed1b0166b725583324df29720c6809a = $this->env->getExtension("native_profiler");
        $__internal_79d8473e9a1d097101cc0ff8cd1c9fa45ed1b0166b725583324df29720c6809a->enter($__internal_79d8473e9a1d097101cc0ff8cd1c9fa45ed1b0166b725583324df29720c6809a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_79d8473e9a1d097101cc0ff8cd1c9fa45ed1b0166b725583324df29720c6809a->leave($__internal_79d8473e9a1d097101cc0ff8cd1c9fa45ed1b0166b725583324df29720c6809a_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_190916847ee930e27a388b97443fec54082039929f95e9bc0e69774726bde742 = $this->env->getExtension("native_profiler");
        $__internal_190916847ee930e27a388b97443fec54082039929f95e9bc0e69774726bde742->enter($__internal_190916847ee930e27a388b97443fec54082039929f95e9bc0e69774726bde742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

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
        
        $__internal_190916847ee930e27a388b97443fec54082039929f95e9bc0e69774726bde742->leave($__internal_190916847ee930e27a388b97443fec54082039929f95e9bc0e69774726bde742_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:index.html.twig";
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
