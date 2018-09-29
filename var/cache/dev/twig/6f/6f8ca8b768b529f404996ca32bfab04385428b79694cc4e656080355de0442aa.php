<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_1d22d35c0fa33dff650d30d37403dbf35760c50aabf1aabcf4f2e8cd2e94595d extends Twig_Template
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
        $__internal_079fd903aa7c0565e665ea17589f01eb92d6f6b3ed053cfdc25879570dc3fa6b = $this->env->getExtension("native_profiler");
        $__internal_079fd903aa7c0565e665ea17589f01eb92d6f6b3ed053cfdc25879570dc3fa6b->enter($__internal_079fd903aa7c0565e665ea17589f01eb92d6f6b3ed053cfdc25879570dc3fa6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_079fd903aa7c0565e665ea17589f01eb92d6f6b3ed053cfdc25879570dc3fa6b->leave($__internal_079fd903aa7c0565e665ea17589f01eb92d6f6b3ed053cfdc25879570dc3fa6b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
