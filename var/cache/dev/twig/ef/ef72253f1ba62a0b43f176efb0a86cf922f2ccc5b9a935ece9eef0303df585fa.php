<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_e5e749242eafd3b251be8a4c72244fa7f20cfaea9e2d59c0b43e11005b639cba extends Twig_Template
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
        $__internal_ed40802dbcfd9f691e2bf566e0774f3d4250dc4a86fc5750cc15f2008b581016 = $this->env->getExtension("native_profiler");
        $__internal_ed40802dbcfd9f691e2bf566e0774f3d4250dc4a86fc5750cc15f2008b581016->enter($__internal_ed40802dbcfd9f691e2bf566e0774f3d4250dc4a86fc5750cc15f2008b581016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_ed40802dbcfd9f691e2bf566e0774f3d4250dc4a86fc5750cc15f2008b581016->leave($__internal_ed40802dbcfd9f691e2bf566e0774f3d4250dc4a86fc5750cc15f2008b581016_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
