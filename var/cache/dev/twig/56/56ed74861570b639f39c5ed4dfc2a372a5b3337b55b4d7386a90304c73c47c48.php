<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_ac48f11146c4d23df78b7e1332edea1c4e95787001763e84d1bfa29d98d52ac7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_13dedb32afe0f08a4f2a6645aaa48b40b84e6ca12c111b8c9f8cb9c49629756a = $this->env->getExtension("native_profiler");
        $__internal_13dedb32afe0f08a4f2a6645aaa48b40b84e6ca12c111b8c9f8cb9c49629756a->enter($__internal_13dedb32afe0f08a4f2a6645aaa48b40b84e6ca12c111b8c9f8cb9c49629756a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_13dedb32afe0f08a4f2a6645aaa48b40b84e6ca12c111b8c9f8cb9c49629756a->leave($__internal_13dedb32afe0f08a4f2a6645aaa48b40b84e6ca12c111b8c9f8cb9c49629756a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_61a3471f7f60d0d72d43c66d898d96990d2a92d978cba2c38797b88f860ae7da = $this->env->getExtension("native_profiler");
        $__internal_61a3471f7f60d0d72d43c66d898d96990d2a92d978cba2c38797b88f860ae7da->enter($__internal_61a3471f7f60d0d72d43c66d898d96990d2a92d978cba2c38797b88f860ae7da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_61a3471f7f60d0d72d43c66d898d96990d2a92d978cba2c38797b88f860ae7da->leave($__internal_61a3471f7f60d0d72d43c66d898d96990d2a92d978cba2c38797b88f860ae7da_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
