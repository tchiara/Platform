<?php

/* OCPlatformBundle::layout.html.twig */
class __TwigTemplate_c30a55be518980966d590f028cc05683a3dfd54889a3ef2ea4357147145fa18e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCCoreBundle::layout.html.twig", "OCPlatformBundle::layout.html.twig", 3);
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
        $__internal_bc6303e7e90cb71e100521a3d213f266dccd74e2ebe91e29f8938d47f8de2e95 = $this->env->getExtension("native_profiler");
        $__internal_bc6303e7e90cb71e100521a3d213f266dccd74e2ebe91e29f8938d47f8de2e95->enter($__internal_bc6303e7e90cb71e100521a3d213f266dccd74e2ebe91e29f8938d47f8de2e95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc6303e7e90cb71e100521a3d213f266dccd74e2ebe91e29f8938d47f8de2e95->leave($__internal_bc6303e7e90cb71e100521a3d213f266dccd74e2ebe91e29f8938d47f8de2e95_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_991d082ffc702353e9a12a6036633171347b788ed0cdaef00f31f0c91aedbfb9 = $this->env->getExtension("native_profiler");
        $__internal_991d082ffc702353e9a12a6036633171347b788ed0cdaef00f31f0c91aedbfb9->enter($__internal_991d082ffc702353e9a12a6036633171347b788ed0cdaef00f31f0c91aedbfb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_991d082ffc702353e9a12a6036633171347b788ed0cdaef00f31f0c91aedbfb9->leave($__internal_991d082ffc702353e9a12a6036633171347b788ed0cdaef00f31f0c91aedbfb9_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c72d7046b89efc9f75f47ff38f49123f50e77dc4d0d3eb910f0d4c3582df0df = $this->env->getExtension("native_profiler");
        $__internal_6c72d7046b89efc9f75f47ff38f49123f50e77dc4d0d3eb910f0d4c3582df0df->enter($__internal_6c72d7046b89efc9f75f47ff38f49123f50e77dc4d0d3eb910f0d4c3582df0df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6c72d7046b89efc9f75f47ff38f49123f50e77dc4d0d3eb910f0d4c3582df0df->leave($__internal_6c72d7046b89efc9f75f47ff38f49123f50e77dc4d0d3eb910f0d4c3582df0df_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_91781fb2ad4a01480bdebdbc58ff4fa4741dff96d88e99f8a9dc144bf11fdb71 = $this->env->getExtension("native_profiler");
        $__internal_91781fb2ad4a01480bdebdbc58ff4fa4741dff96d88e99f8a9dc144bf11fdb71->enter($__internal_91781fb2ad4a01480bdebdbc58ff4fa4741dff96d88e99f8a9dc144bf11fdb71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 18
        echo "  ";
        
        $__internal_91781fb2ad4a01480bdebdbc58ff4fa4741dff96d88e99f8a9dc144bf11fdb71->leave($__internal_91781fb2ad4a01480bdebdbc58ff4fa4741dff96d88e99f8a9dc144bf11fdb71_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle::layout.html.twig";
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
