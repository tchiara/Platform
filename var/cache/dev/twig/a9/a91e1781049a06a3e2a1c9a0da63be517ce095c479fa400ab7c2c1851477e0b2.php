<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_59c6b04f3d0228668eb4c720dd991d3aff11b9b80b832a4d171b674439672193 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_88dd3c6b0ffef3f856636afea9b376d66c902d229d39b52fce104dade086fe98 = $this->env->getExtension("native_profiler");
        $__internal_88dd3c6b0ffef3f856636afea9b376d66c902d229d39b52fce104dade086fe98->enter($__internal_88dd3c6b0ffef3f856636afea9b376d66c902d229d39b52fce104dade086fe98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88dd3c6b0ffef3f856636afea9b376d66c902d229d39b52fce104dade086fe98->leave($__internal_88dd3c6b0ffef3f856636afea9b376d66c902d229d39b52fce104dade086fe98_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5c2c7a37ceafba3afbbf2f99e1e38b55669619db410aaeb2f8cc44d690287cf2 = $this->env->getExtension("native_profiler");
        $__internal_5c2c7a37ceafba3afbbf2f99e1e38b55669619db410aaeb2f8cc44d690287cf2->enter($__internal_5c2c7a37ceafba3afbbf2f99e1e38b55669619db410aaeb2f8cc44d690287cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5c2c7a37ceafba3afbbf2f99e1e38b55669619db410aaeb2f8cc44d690287cf2->leave($__internal_5c2c7a37ceafba3afbbf2f99e1e38b55669619db410aaeb2f8cc44d690287cf2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c2649ebc59c6711e02ec82f352ec5177f6fd94670a4425f1daa43ca0585bd4d1 = $this->env->getExtension("native_profiler");
        $__internal_c2649ebc59c6711e02ec82f352ec5177f6fd94670a4425f1daa43ca0585bd4d1->enter($__internal_c2649ebc59c6711e02ec82f352ec5177f6fd94670a4425f1daa43ca0585bd4d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c2649ebc59c6711e02ec82f352ec5177f6fd94670a4425f1daa43ca0585bd4d1->leave($__internal_c2649ebc59c6711e02ec82f352ec5177f6fd94670a4425f1daa43ca0585bd4d1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0ffe91e8da50972b006e3bdc301ae707484067894d4ce19596fad18396ca386a = $this->env->getExtension("native_profiler");
        $__internal_0ffe91e8da50972b006e3bdc301ae707484067894d4ce19596fad18396ca386a->enter($__internal_0ffe91e8da50972b006e3bdc301ae707484067894d4ce19596fad18396ca386a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0ffe91e8da50972b006e3bdc301ae707484067894d4ce19596fad18396ca386a->leave($__internal_0ffe91e8da50972b006e3bdc301ae707484067894d4ce19596fad18396ca386a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
