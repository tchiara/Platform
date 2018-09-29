<?php

/* @OCPlatform/layout.html.twig */
class __TwigTemplate_12fba67e395b11c5327bb0bed1c0795c8ee1ee3d03ceec9da475d670d7b542c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCCoreBundle::layout.html.twig", "@OCPlatform/layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e5af7cf8f994ae31590c9ff42daf1c96984e12604ce5000e88105a126bf6bc15 = $this->env->getExtension("native_profiler");
        $__internal_e5af7cf8f994ae31590c9ff42daf1c96984e12604ce5000e88105a126bf6bc15->enter($__internal_e5af7cf8f994ae31590c9ff42daf1c96984e12604ce5000e88105a126bf6bc15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5af7cf8f994ae31590c9ff42daf1c96984e12604ce5000e88105a126bf6bc15->leave($__internal_e5af7cf8f994ae31590c9ff42daf1c96984e12604ce5000e88105a126bf6bc15_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc9e882ae109ec554ce34821f6750f4333d9179f8b1dd92997d6844c8c09e7a3 = $this->env->getExtension("native_profiler");
        $__internal_cc9e882ae109ec554ce34821f6750f4333d9179f8b1dd92997d6844c8c09e7a3->enter($__internal_cc9e882ae109ec554ce34821f6750f4333d9179f8b1dd92997d6844c8c09e7a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_cc9e882ae109ec554ce34821f6750f4333d9179f8b1dd92997d6844c8c09e7a3->leave($__internal_cc9e882ae109ec554ce34821f6750f4333d9179f8b1dd92997d6844c8c09e7a3_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_12304a8ae1ae60c292da2f78bf32878ae915ce901ec91a76f022d4a57b17a147 = $this->env->getExtension("native_profiler");
        $__internal_12304a8ae1ae60c292da2f78bf32878ae915ce901ec91a76f022d4a57b17a147->enter($__internal_12304a8ae1ae60c292da2f78bf32878ae915ce901ec91a76f022d4a57b17a147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
  ";
        // line 12
        echo "  <h1>Annonces</h1>

  <hr>

  ";
        // line 17
        echo "  ";
        $this->displayBlock('ocplatform_body', $context, $blocks);
        // line 19
        echo "
";
        
        $__internal_12304a8ae1ae60c292da2f78bf32878ae915ce901ec91a76f022d4a57b17a147->leave($__internal_12304a8ae1ae60c292da2f78bf32878ae915ce901ec91a76f022d4a57b17a147_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_653e7b74ce07709125a27416ee5cbb1244b50cfdffb2d2a0a9239764682737fa = $this->env->getExtension("native_profiler");
        $__internal_653e7b74ce07709125a27416ee5cbb1244b50cfdffb2d2a0a9239764682737fa->enter($__internal_653e7b74ce07709125a27416ee5cbb1244b50cfdffb2d2a0a9239764682737fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 18
        echo "  ";
        
        $__internal_653e7b74ce07709125a27416ee5cbb1244b50cfdffb2d2a0a9239764682737fa->leave($__internal_653e7b74ce07709125a27416ee5cbb1244b50cfdffb2d2a0a9239764682737fa_prof);

    }

    public function getTemplateName()
    {
        return "@OCPlatform/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 18,  78 => 17,  70 => 19,  67 => 17,  61 => 12,  58 => 10,  52 => 9,  42 => 6,  36 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/layout.html.twig #}*/
/* */
/* {% extends "OCCoreBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Annonces - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*   {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}*/
/*   <h1>Annonces</h1>*/
/* */
/*   <hr>*/
/* */
/*   {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}*/
/*   {% block ocplatform_body %}*/
/*   {% endblock %}*/
/* */
/* {% endblock %}*/
/* */
