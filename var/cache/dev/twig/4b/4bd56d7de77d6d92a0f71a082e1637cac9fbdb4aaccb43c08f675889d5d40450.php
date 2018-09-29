<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_411770baae496f83e1e7578bc3d0f08081056d4339790ac12d3096430e606bbb extends Twig_Template
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
        $__internal_a572d4a8c6f65aea92a1c7c5cda6fa27e9e9dd3a589b91f14c2ae0a296edc490 = $this->env->getExtension("native_profiler");
        $__internal_a572d4a8c6f65aea92a1c7c5cda6fa27e9e9dd3a589b91f14c2ae0a296edc490->enter($__internal_a572d4a8c6f65aea92a1c7c5cda6fa27e9e9dd3a589b91f14c2ae0a296edc490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_a572d4a8c6f65aea92a1c7c5cda6fa27e9e9dd3a589b91f14c2ae0a296edc490->leave($__internal_a572d4a8c6f65aea92a1c7c5cda6fa27e9e9dd3a589b91f14c2ae0a296edc490_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
