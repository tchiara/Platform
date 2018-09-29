<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_8d67b2824076908b52f792d10ec032bda777cfaba57d022d64d9aa32773af0b2 extends Twig_Template
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
        $__internal_9a06d511085dfaccc9f52eebe850a50e9d9edffed9dffb75531634f3bdded528 = $this->env->getExtension("native_profiler");
        $__internal_9a06d511085dfaccc9f52eebe850a50e9d9edffed9dffb75531634f3bdded528->enter($__internal_9a06d511085dfaccc9f52eebe850a50e9d9edffed9dffb75531634f3bdded528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_9a06d511085dfaccc9f52eebe850a50e9d9edffed9dffb75531634f3bdded528->leave($__internal_9a06d511085dfaccc9f52eebe850a50e9d9edffed9dffb75531634f3bdded528_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
