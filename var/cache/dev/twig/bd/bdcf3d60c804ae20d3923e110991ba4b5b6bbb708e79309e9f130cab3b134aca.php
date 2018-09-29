<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_c2fe9bb5f1b06395dffbac740c1d78c5a232c43a1fd84b9f2ddbad9723d75485 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_2442bb4c3dae9b68ee0e2dbc6b1b99dde5901398b065b9a0e3c17458049d9475 = $this->env->getExtension("native_profiler");
        $__internal_2442bb4c3dae9b68ee0e2dbc6b1b99dde5901398b065b9a0e3c17458049d9475->enter($__internal_2442bb4c3dae9b68ee0e2dbc6b1b99dde5901398b065b9a0e3c17458049d9475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2442bb4c3dae9b68ee0e2dbc6b1b99dde5901398b065b9a0e3c17458049d9475->leave($__internal_2442bb4c3dae9b68ee0e2dbc6b1b99dde5901398b065b9a0e3c17458049d9475_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d2acc29e40ea32e8293a292c27f883b8eda35ce0771be13d7ad6269da5ff263f = $this->env->getExtension("native_profiler");
        $__internal_d2acc29e40ea32e8293a292c27f883b8eda35ce0771be13d7ad6269da5ff263f->enter($__internal_d2acc29e40ea32e8293a292c27f883b8eda35ce0771be13d7ad6269da5ff263f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d2acc29e40ea32e8293a292c27f883b8eda35ce0771be13d7ad6269da5ff263f->leave($__internal_d2acc29e40ea32e8293a292c27f883b8eda35ce0771be13d7ad6269da5ff263f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_dce0d87166d278f0ede0393a41e2e5c4c1b7be0c636965edcf356bd2943527e3 = $this->env->getExtension("native_profiler");
        $__internal_dce0d87166d278f0ede0393a41e2e5c4c1b7be0c636965edcf356bd2943527e3->enter($__internal_dce0d87166d278f0ede0393a41e2e5c4c1b7be0c636965edcf356bd2943527e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_dce0d87166d278f0ede0393a41e2e5c4c1b7be0c636965edcf356bd2943527e3->leave($__internal_dce0d87166d278f0ede0393a41e2e5c4c1b7be0c636965edcf356bd2943527e3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f3cfda3f244e6d495da2bb19a20a9532a80802eb685c3b651a30ad773c1c9d0c = $this->env->getExtension("native_profiler");
        $__internal_f3cfda3f244e6d495da2bb19a20a9532a80802eb685c3b651a30ad773c1c9d0c->enter($__internal_f3cfda3f244e6d495da2bb19a20a9532a80802eb685c3b651a30ad773c1c9d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_f3cfda3f244e6d495da2bb19a20a9532a80802eb685c3b651a30ad773c1c9d0c->leave($__internal_f3cfda3f244e6d495da2bb19a20a9532a80802eb685c3b651a30ad773c1c9d0c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
