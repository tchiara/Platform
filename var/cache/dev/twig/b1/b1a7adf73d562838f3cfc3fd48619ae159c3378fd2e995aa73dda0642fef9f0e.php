<?php

/* @OCPlatform/Advert/edit.html.twig */
class __TwigTemplate_cb5a27d58c5cdf0143cfb74d3d2ca1ae58110db13f763b33ae865b327d4da18d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "@OCPlatform/Advert/edit.html.twig", 3);
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
        $__internal_47a68c707bc12ffdbef8f36b9ec535d2eb83a51604013778d1c4a8d177ff263e = $this->env->getExtension("native_profiler");
        $__internal_47a68c707bc12ffdbef8f36b9ec535d2eb83a51604013778d1c4a8d177ff263e->enter($__internal_47a68c707bc12ffdbef8f36b9ec535d2eb83a51604013778d1c4a8d177ff263e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Advert/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47a68c707bc12ffdbef8f36b9ec535d2eb83a51604013778d1c4a8d177ff263e->leave($__internal_47a68c707bc12ffdbef8f36b9ec535d2eb83a51604013778d1c4a8d177ff263e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_aee6e3dff0a5a5a0648410bf938d879d83cc2d96f34fd1600acbeab9dc9e37f8 = $this->env->getExtension("native_profiler");
        $__internal_aee6e3dff0a5a5a0648410bf938d879d83cc2d96f34fd1600acbeab9dc9e37f8->enter($__internal_aee6e3dff0a5a5a0648410bf938d879d83cc2d96f34fd1600acbeab9dc9e37f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_aee6e3dff0a5a5a0648410bf938d879d83cc2d96f34fd1600acbeab9dc9e37f8->leave($__internal_aee6e3dff0a5a5a0648410bf938d879d83cc2d96f34fd1600acbeab9dc9e37f8_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_aaeb26e4b8ff646439ad47fc03f0671eff7ac16fa4c3bf6f8f06f8b1ac81bb63 = $this->env->getExtension("native_profiler");
        $__internal_aaeb26e4b8ff646439ad47fc03f0671eff7ac16fa4c3bf6f8f06f8b1ac81bb63->enter($__internal_aaeb26e4b8ff646439ad47fc03f0671eff7ac16fa4c3bf6f8f06f8b1ac81bb63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

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
        
        $__internal_aaeb26e4b8ff646439ad47fc03f0671eff7ac16fa4c3bf6f8f06f8b1ac81bb63->leave($__internal_aaeb26e4b8ff646439ad47fc03f0671eff7ac16fa4c3bf6f8f06f8b1ac81bb63_prof);

    }

    public function getTemplateName()
    {
        return "@OCPlatform/Advert/edit.html.twig";
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
