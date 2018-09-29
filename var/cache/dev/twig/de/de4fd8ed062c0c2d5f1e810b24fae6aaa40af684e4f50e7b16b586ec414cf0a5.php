<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_648c5613fcfdc5e7d56469f2a41aee9176f6444e4a53a44fbc8dcc4ee201e6a6 extends Twig_Template
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
        $__internal_8f7b1c5e0568629bf9e74ede2b85f4baccd78b285318130e98ef0d85b80000e5 = $this->env->getExtension("native_profiler");
        $__internal_8f7b1c5e0568629bf9e74ede2b85f4baccd78b285318130e98ef0d85b80000e5->enter($__internal_8f7b1c5e0568629bf9e74ede2b85f4baccd78b285318130e98ef0d85b80000e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_8f7b1c5e0568629bf9e74ede2b85f4baccd78b285318130e98ef0d85b80000e5->leave($__internal_8f7b1c5e0568629bf9e74ede2b85f4baccd78b285318130e98ef0d85b80000e5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
