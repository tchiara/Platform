<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_442384ecabb48055ed2b4744a43d6f6b9fd157b43a04fd23dac0acbc82762295 extends Twig_Template
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
        $__internal_75431a55725a4a4f87135aef3b0f5dbb62309613005ba0cc9732b71d0fbd6fc6 = $this->env->getExtension("native_profiler");
        $__internal_75431a55725a4a4f87135aef3b0f5dbb62309613005ba0cc9732b71d0fbd6fc6->enter($__internal_75431a55725a4a4f87135aef3b0f5dbb62309613005ba0cc9732b71d0fbd6fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_75431a55725a4a4f87135aef3b0f5dbb62309613005ba0cc9732b71d0fbd6fc6->leave($__internal_75431a55725a4a4f87135aef3b0f5dbb62309613005ba0cc9732b71d0fbd6fc6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
