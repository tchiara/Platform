<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_74234c683b328bb2ccde89cf8fee726cf7a2ba9bce40e35554515173cb3f7907 extends Twig_Template
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
        $__internal_a5ca0ff27caca8a433f91781e84c18660c2c0af3d9fa1417011edd7411e0d009 = $this->env->getExtension("native_profiler");
        $__internal_a5ca0ff27caca8a433f91781e84c18660c2c0af3d9fa1417011edd7411e0d009->enter($__internal_a5ca0ff27caca8a433f91781e84c18660c2c0af3d9fa1417011edd7411e0d009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_a5ca0ff27caca8a433f91781e84c18660c2c0af3d9fa1417011edd7411e0d009->leave($__internal_a5ca0ff27caca8a433f91781e84c18660c2c0af3d9fa1417011edd7411e0d009_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
