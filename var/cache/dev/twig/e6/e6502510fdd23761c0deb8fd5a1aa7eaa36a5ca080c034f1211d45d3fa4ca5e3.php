<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_ad1de4ae201be62850399c522195bb583873d184fd8dadf2b44880b9d8f0dae6 extends Twig_Template
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
        $__internal_3037d57a522f7a21f0a8a90dc5429c03431dde6083f6c12a8bdbef0bfa993232 = $this->env->getExtension("native_profiler");
        $__internal_3037d57a522f7a21f0a8a90dc5429c03431dde6083f6c12a8bdbef0bfa993232->enter($__internal_3037d57a522f7a21f0a8a90dc5429c03431dde6083f6c12a8bdbef0bfa993232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_3037d57a522f7a21f0a8a90dc5429c03431dde6083f6c12a8bdbef0bfa993232->leave($__internal_3037d57a522f7a21f0a8a90dc5429c03431dde6083f6c12a8bdbef0bfa993232_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
