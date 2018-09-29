<?php

/* OCPlatformBundle:Advert:edit.html.twig */
class __TwigTemplate_667ce4f9e393838ce4cda82024085ecd6f279a72d4ea9090c8cc12c12bf60abd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:edit.html.twig", 3);
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
        $__internal_0a99f09f3eb085b6f2fba4d8cc942fd18340ec5a307e497bcefc30c799d918e7 = $this->env->getExtension("native_profiler");
        $__internal_0a99f09f3eb085b6f2fba4d8cc942fd18340ec5a307e497bcefc30c799d918e7->enter($__internal_0a99f09f3eb085b6f2fba4d8cc942fd18340ec5a307e497bcefc30c799d918e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a99f09f3eb085b6f2fba4d8cc942fd18340ec5a307e497bcefc30c799d918e7->leave($__internal_0a99f09f3eb085b6f2fba4d8cc942fd18340ec5a307e497bcefc30c799d918e7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2d5bd37406c1421722eff4271e889fb6293713366e7dc228af2db09a746091f6 = $this->env->getExtension("native_profiler");
        $__internal_2d5bd37406c1421722eff4271e889fb6293713366e7dc228af2db09a746091f6->enter($__internal_2d5bd37406c1421722eff4271e889fb6293713366e7dc228af2db09a746091f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2d5bd37406c1421722eff4271e889fb6293713366e7dc228af2db09a746091f6->leave($__internal_2d5bd37406c1421722eff4271e889fb6293713366e7dc228af2db09a746091f6_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_6b44094afedde96e764f843b73b9fb4a0e47ca7428b5f4dd21a493d9f1130f18 = $this->env->getExtension("native_profiler");
        $__internal_6b44094afedde96e764f843b73b9fb4a0e47ca7428b5f4dd21a493d9f1130f18->enter($__internal_6b44094afedde96e764f843b73b9fb4a0e47ca7428b5f4dd21a493d9f1130f18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
  <h2>Modifier une annonce</h2>

  ";
        // line 13
        echo twig_include($this->env, $context, "OCPlatformBundle:Advert:form.html.twig");
        echo "

  <p>
    Vous éditez une annonce déjà existante, merci de ne pas changer
    l'esprit générale de l'annonce déjà publiée.
  </p>

  <p>
    <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
  </p>

";
        
        $__internal_6b44094afedde96e764f843b73b9fb4a0e47ca7428b5f4dd21a493d9f1130f18->leave($__internal_6b44094afedde96e764f843b73b9fb4a0e47ca7428b5f4dd21a493d9f1130f18_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 21,  62 => 13,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/edit.html.twig #}*/
/* */
/* {% extends "OCPlatformBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Modifier une annonce - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block ocplatform_body %}*/
/* */
/*   <h2>Modifier une annonce</h2>*/
/* */
/*   {{ include("OCPlatformBundle:Advert:form.html.twig") }}*/
/* */
/*   <p>*/
/*     Vous éditez une annonce déjà existante, merci de ne pas changer*/
/*     l'esprit générale de l'annonce déjà publiée.*/
/*   </p>*/
/* */
/*   <p>*/
/*     <a href="{{ path('oc_platform_view', {'id': advert.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à l'annonce*/
/*     </a>*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
