<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_313bef683d242432573af37b3c3c04ae546cae5ec20377da9abed64c8ed1c6f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3d05a13dadaa015ec21aab9d4b6e4c14e483e858b9b61036ba87710e013b3209 = $this->env->getExtension("native_profiler");
        $__internal_3d05a13dadaa015ec21aab9d4b6e4c14e483e858b9b61036ba87710e013b3209->enter($__internal_3d05a13dadaa015ec21aab9d4b6e4c14e483e858b9b61036ba87710e013b3209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_3d05a13dadaa015ec21aab9d4b6e4c14e483e858b9b61036ba87710e013b3209->leave($__internal_3d05a13dadaa015ec21aab9d4b6e4c14e483e858b9b61036ba87710e013b3209_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
