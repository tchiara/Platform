<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_95ad5a70e6916ee37d99d72871ab7d96696f1e9b91dd08f74cd68553ec68e4db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_8245b78d9e56b83f09bc1246f7320d5254f606f3fa2a04ab9c19e518616983d9 = $this->env->getExtension("native_profiler");
        $__internal_8245b78d9e56b83f09bc1246f7320d5254f606f3fa2a04ab9c19e518616983d9->enter($__internal_8245b78d9e56b83f09bc1246f7320d5254f606f3fa2a04ab9c19e518616983d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8245b78d9e56b83f09bc1246f7320d5254f606f3fa2a04ab9c19e518616983d9->leave($__internal_8245b78d9e56b83f09bc1246f7320d5254f606f3fa2a04ab9c19e518616983d9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7ead7e8cc8d356f6bb5711fb84f421d0f643fca68ad106939dd316f17d137726 = $this->env->getExtension("native_profiler");
        $__internal_7ead7e8cc8d356f6bb5711fb84f421d0f643fca68ad106939dd316f17d137726->enter($__internal_7ead7e8cc8d356f6bb5711fb84f421d0f643fca68ad106939dd316f17d137726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7ead7e8cc8d356f6bb5711fb84f421d0f643fca68ad106939dd316f17d137726->leave($__internal_7ead7e8cc8d356f6bb5711fb84f421d0f643fca68ad106939dd316f17d137726_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_eac51e0ef3d32890c11d06542d6d8552517465e48423b6ebeca386beaee5e7b3 = $this->env->getExtension("native_profiler");
        $__internal_eac51e0ef3d32890c11d06542d6d8552517465e48423b6ebeca386beaee5e7b3->enter($__internal_eac51e0ef3d32890c11d06542d6d8552517465e48423b6ebeca386beaee5e7b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_eac51e0ef3d32890c11d06542d6d8552517465e48423b6ebeca386beaee5e7b3->leave($__internal_eac51e0ef3d32890c11d06542d6d8552517465e48423b6ebeca386beaee5e7b3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c99d5dc3d3dacb3fc353e816e3e222e9ec8d1efbea0c29d59334cd82b140d647 = $this->env->getExtension("native_profiler");
        $__internal_c99d5dc3d3dacb3fc353e816e3e222e9ec8d1efbea0c29d59334cd82b140d647->enter($__internal_c99d5dc3d3dacb3fc353e816e3e222e9ec8d1efbea0c29d59334cd82b140d647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c99d5dc3d3dacb3fc353e816e3e222e9ec8d1efbea0c29d59334cd82b140d647->leave($__internal_c99d5dc3d3dacb3fc353e816e3e222e9ec8d1efbea0c29d59334cd82b140d647_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
