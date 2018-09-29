<?php

/* @OCPlatform/Advert/add.html.twig */
class __TwigTemplate_1d75038bf14afa99006128059a92c16f8813f0c872d2166495caf29317065dbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "@OCPlatform/Advert/add.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dec58c9921f602018d981335e7b1a725c347f8ab778f631fe917a46f16d55915 = $this->env->getExtension("native_profiler");
        $__internal_dec58c9921f602018d981335e7b1a725c347f8ab778f631fe917a46f16d55915->enter($__internal_dec58c9921f602018d981335e7b1a725c347f8ab778f631fe917a46f16d55915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Advert/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dec58c9921f602018d981335e7b1a725c347f8ab778f631fe917a46f16d55915->leave($__internal_dec58c9921f602018d981335e7b1a725c347f8ab778f631fe917a46f16d55915_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_bdfe4940e3cd409537c90a03dc882085fd35bc9be021910c42f8e22c3922e6f7 = $this->env->getExtension("native_profiler");
        $__internal_bdfe4940e3cd409537c90a03dc882085fd35bc9be021910c42f8e22c3922e6f7->enter($__internal_bdfe4940e3cd409537c90a03dc882085fd35bc9be021910c42f8e22c3922e6f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
  <h2>Ajouter une annonce</h2>

  ";
        // line 9
        echo twig_include($this->env, $context, "OCPlatformBundle:Advert:form.html.twig");
        echo "

  <p>
    Attention : cette annonce sera ajoutée directement
    sur la page d'accueil après validation du formulaire.
  </p>

";
        
        $__internal_bdfe4940e3cd409537c90a03dc882085fd35bc9be021910c42f8e22c3922e6f7->leave($__internal_bdfe4940e3cd409537c90a03dc882085fd35bc9be021910c42f8e22c3922e6f7_prof);

    }

    public function getTemplateName()
    {
        return "@OCPlatform/Advert/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 9,  40 => 6,  34 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/add.html.twig #}*/
/* */
/* {% extends "OCPlatformBundle::layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/*   <h2>Ajouter une annonce</h2>*/
/* */
/*   {{ include("OCPlatformBundle:Advert:form.html.twig") }}*/
/* */
/*   <p>*/
/*     Attention : cette annonce sera ajoutée directement*/
/*     sur la page d'accueil après validation du formulaire.*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
