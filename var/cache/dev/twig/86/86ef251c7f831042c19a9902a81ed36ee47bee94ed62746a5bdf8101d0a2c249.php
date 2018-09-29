<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_8a1232f4fbfe5bd73f05b26d461a001e48efd23fa7a0a32875cf5cf4d79e2c2d extends Twig_Template
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
        $__internal_e2167f3ad0d863c943374d7b71ddc86f6b5dfd817266f640cd5e57da443bc66e = $this->env->getExtension("native_profiler");
        $__internal_e2167f3ad0d863c943374d7b71ddc86f6b5dfd817266f640cd5e57da443bc66e->enter($__internal_e2167f3ad0d863c943374d7b71ddc86f6b5dfd817266f640cd5e57da443bc66e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_e2167f3ad0d863c943374d7b71ddc86f6b5dfd817266f640cd5e57da443bc66e->leave($__internal_e2167f3ad0d863c943374d7b71ddc86f6b5dfd817266f640cd5e57da443bc66e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
