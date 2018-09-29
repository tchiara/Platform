<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_43b94de71df4e09b9877e762881e0d10e2c747a048b2679b788c9f88ebb5ce40 extends Twig_Template
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
        $__internal_e48f0748da9fd13c6233256a2b5363876bb12237d03c0ad2562c0679749d988a = $this->env->getExtension("native_profiler");
        $__internal_e48f0748da9fd13c6233256a2b5363876bb12237d03c0ad2562c0679749d988a->enter($__internal_e48f0748da9fd13c6233256a2b5363876bb12237d03c0ad2562c0679749d988a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_e48f0748da9fd13c6233256a2b5363876bb12237d03c0ad2562c0679749d988a->leave($__internal_e48f0748da9fd13c6233256a2b5363876bb12237d03c0ad2562c0679749d988a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
