<?php

/* OCPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_a4d9fb2109e13cba0a91d584dcab06f51db42208ebf679a07bd864aee29baa21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:add.html.twig", 3);
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
        $__internal_203edceab5ad40536d6ecb60f7dd319cf48fcb854c3833533ff86ac0ac872f99 = $this->env->getExtension("native_profiler");
        $__internal_203edceab5ad40536d6ecb60f7dd319cf48fcb854c3833533ff86ac0ac872f99->enter($__internal_203edceab5ad40536d6ecb60f7dd319cf48fcb854c3833533ff86ac0ac872f99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_203edceab5ad40536d6ecb60f7dd319cf48fcb854c3833533ff86ac0ac872f99->leave($__internal_203edceab5ad40536d6ecb60f7dd319cf48fcb854c3833533ff86ac0ac872f99_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_39686eca50575cb53cc48a57b52cb1737c96b9393b4b36d9fc466c813e998688 = $this->env->getExtension("native_profiler");
        $__internal_39686eca50575cb53cc48a57b52cb1737c96b9393b4b36d9fc466c813e998688->enter($__internal_39686eca50575cb53cc48a57b52cb1737c96b9393b4b36d9fc466c813e998688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_39686eca50575cb53cc48a57b52cb1737c96b9393b4b36d9fc466c813e998688->leave($__internal_39686eca50575cb53cc48a57b52cb1737c96b9393b4b36d9fc466c813e998688_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:add.html.twig";
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
