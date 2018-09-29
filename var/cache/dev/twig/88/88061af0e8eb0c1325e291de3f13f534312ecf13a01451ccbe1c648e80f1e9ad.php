<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_4177df8099f40fbb254f12d2d9feae49a8e70dcec2fd13856af3adf80fa92377 extends Twig_Template
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
        $__internal_123ce928911fb373dc69b24a9de47de20750c309d22f37923c7693e7a50fa658 = $this->env->getExtension("native_profiler");
        $__internal_123ce928911fb373dc69b24a9de47de20750c309d22f37923c7693e7a50fa658->enter($__internal_123ce928911fb373dc69b24a9de47de20750c309d22f37923c7693e7a50fa658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_123ce928911fb373dc69b24a9de47de20750c309d22f37923c7693e7a50fa658->leave($__internal_123ce928911fb373dc69b24a9de47de20750c309d22f37923c7693e7a50fa658_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
