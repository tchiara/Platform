<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_e0061ba206c9f034bd484ec62971a9e6bd39caeacb06849c09625a7422a4d463 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3db2f991a41c2f7371f6f21a759d5c551573d1d4ddeb4b9a40a9b4c2280cb5ff = $this->env->getExtension("native_profiler");
        $__internal_3db2f991a41c2f7371f6f21a759d5c551573d1d4ddeb4b9a40a9b4c2280cb5ff->enter($__internal_3db2f991a41c2f7371f6f21a759d5c551573d1d4ddeb4b9a40a9b4c2280cb5ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3db2f991a41c2f7371f6f21a759d5c551573d1d4ddeb4b9a40a9b4c2280cb5ff->leave($__internal_3db2f991a41c2f7371f6f21a759d5c551573d1d4ddeb4b9a40a9b4c2280cb5ff_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4e4cad3594d40deccea4f81772768353d3ce48947133bc9ab6755590a9b376f9 = $this->env->getExtension("native_profiler");
        $__internal_4e4cad3594d40deccea4f81772768353d3ce48947133bc9ab6755590a9b376f9->enter($__internal_4e4cad3594d40deccea4f81772768353d3ce48947133bc9ab6755590a9b376f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4e4cad3594d40deccea4f81772768353d3ce48947133bc9ab6755590a9b376f9->leave($__internal_4e4cad3594d40deccea4f81772768353d3ce48947133bc9ab6755590a9b376f9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_60954c4f0c0abcdfc795e5153d0c03d1767d97a3a173474d13fe37e765ac5ce0 = $this->env->getExtension("native_profiler");
        $__internal_60954c4f0c0abcdfc795e5153d0c03d1767d97a3a173474d13fe37e765ac5ce0->enter($__internal_60954c4f0c0abcdfc795e5153d0c03d1767d97a3a173474d13fe37e765ac5ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_60954c4f0c0abcdfc795e5153d0c03d1767d97a3a173474d13fe37e765ac5ce0->leave($__internal_60954c4f0c0abcdfc795e5153d0c03d1767d97a3a173474d13fe37e765ac5ce0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4e6498d684340a7815b5d44e4ffb827e80641757a074b6eaebb46609d9679498 = $this->env->getExtension("native_profiler");
        $__internal_4e6498d684340a7815b5d44e4ffb827e80641757a074b6eaebb46609d9679498->enter($__internal_4e6498d684340a7815b5d44e4ffb827e80641757a074b6eaebb46609d9679498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4e6498d684340a7815b5d44e4ffb827e80641757a074b6eaebb46609d9679498->leave($__internal_4e6498d684340a7815b5d44e4ffb827e80641757a074b6eaebb46609d9679498_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
