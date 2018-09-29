<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_80ca36eff7088130b5eee94d5cbb900335b54fd7682347abc8b9977679245bfb extends Twig_Template
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
        $__internal_47ba61024689f0f424c2dd1f40bcad746f7f27caa286c28240902d65c2e677aa = $this->env->getExtension("native_profiler");
        $__internal_47ba61024689f0f424c2dd1f40bcad746f7f27caa286c28240902d65c2e677aa->enter($__internal_47ba61024689f0f424c2dd1f40bcad746f7f27caa286c28240902d65c2e677aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_47ba61024689f0f424c2dd1f40bcad746f7f27caa286c28240902d65c2e677aa->leave($__internal_47ba61024689f0f424c2dd1f40bcad746f7f27caa286c28240902d65c2e677aa_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
