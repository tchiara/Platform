<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_ce9a87b83b971fc2f3960920b56055a0b23dce298d62090bf5feef21bf9fd3d5 extends Twig_Template
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
        $__internal_5a65aa2984ce4f8222deaaebd6151f110a626cc59439b3e10929b4562fcceefa = $this->env->getExtension("native_profiler");
        $__internal_5a65aa2984ce4f8222deaaebd6151f110a626cc59439b3e10929b4562fcceefa->enter($__internal_5a65aa2984ce4f8222deaaebd6151f110a626cc59439b3e10929b4562fcceefa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_5a65aa2984ce4f8222deaaebd6151f110a626cc59439b3e10929b4562fcceefa->leave($__internal_5a65aa2984ce4f8222deaaebd6151f110a626cc59439b3e10929b4562fcceefa_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
