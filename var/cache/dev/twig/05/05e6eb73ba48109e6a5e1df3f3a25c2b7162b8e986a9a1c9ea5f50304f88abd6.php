<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_c1d238abd3bc2cff998f94c509717a59ef39514426296e5d1bf3bce0f41ea8e1 extends Twig_Template
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
        $__internal_85577d7afd2b3b47ac7936791ce350339193fd527b8fc83412343c04b5470d2a = $this->env->getExtension("native_profiler");
        $__internal_85577d7afd2b3b47ac7936791ce350339193fd527b8fc83412343c04b5470d2a->enter($__internal_85577d7afd2b3b47ac7936791ce350339193fd527b8fc83412343c04b5470d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_85577d7afd2b3b47ac7936791ce350339193fd527b8fc83412343c04b5470d2a->leave($__internal_85577d7afd2b3b47ac7936791ce350339193fd527b8fc83412343c04b5470d2a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
