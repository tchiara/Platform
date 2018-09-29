<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_0abd7c60468144c27a453232a610f33d70117359a7d31882631516ad49a30696 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_61b3975ce48ca01ecdf37ef4cae868a990ea7c99e977d6e2c2752f0f2601ddbf = $this->env->getExtension("native_profiler");
        $__internal_61b3975ce48ca01ecdf37ef4cae868a990ea7c99e977d6e2c2752f0f2601ddbf->enter($__internal_61b3975ce48ca01ecdf37ef4cae868a990ea7c99e977d6e2c2752f0f2601ddbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61b3975ce48ca01ecdf37ef4cae868a990ea7c99e977d6e2c2752f0f2601ddbf->leave($__internal_61b3975ce48ca01ecdf37ef4cae868a990ea7c99e977d6e2c2752f0f2601ddbf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1c87fa027bcf44aa885e64bb03d8a959da0c69d93a99d364afbee96b681f3564 = $this->env->getExtension("native_profiler");
        $__internal_1c87fa027bcf44aa885e64bb03d8a959da0c69d93a99d364afbee96b681f3564->enter($__internal_1c87fa027bcf44aa885e64bb03d8a959da0c69d93a99d364afbee96b681f3564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_1c87fa027bcf44aa885e64bb03d8a959da0c69d93a99d364afbee96b681f3564->leave($__internal_1c87fa027bcf44aa885e64bb03d8a959da0c69d93a99d364afbee96b681f3564_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7552e8c18d8162d3ff90ea8b471a595dfe18de2860baad9be98083e2374f2edc = $this->env->getExtension("native_profiler");
        $__internal_7552e8c18d8162d3ff90ea8b471a595dfe18de2860baad9be98083e2374f2edc->enter($__internal_7552e8c18d8162d3ff90ea8b471a595dfe18de2860baad9be98083e2374f2edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_7552e8c18d8162d3ff90ea8b471a595dfe18de2860baad9be98083e2374f2edc->leave($__internal_7552e8c18d8162d3ff90ea8b471a595dfe18de2860baad9be98083e2374f2edc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
