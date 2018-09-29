<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_a0c73ed7007e141d4c3729d3166e035e212009acaad94bb50d954a9eb360c9bf extends Twig_Template
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
        $__internal_2254c81ccbc80973e25791548975c776c0d93ec1fbf7bc47751e52825c3a0580 = $this->env->getExtension("native_profiler");
        $__internal_2254c81ccbc80973e25791548975c776c0d93ec1fbf7bc47751e52825c3a0580->enter($__internal_2254c81ccbc80973e25791548975c776c0d93ec1fbf7bc47751e52825c3a0580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_2254c81ccbc80973e25791548975c776c0d93ec1fbf7bc47751e52825c3a0580->leave($__internal_2254c81ccbc80973e25791548975c776c0d93ec1fbf7bc47751e52825c3a0580_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
