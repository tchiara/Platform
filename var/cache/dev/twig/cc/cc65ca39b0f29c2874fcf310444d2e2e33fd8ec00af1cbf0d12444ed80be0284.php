<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_964aa6d5600a642e67d939e4f48e7e3d194c4d0689fb3828e62f8eb8356a2d87 extends Twig_Template
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
        $__internal_21992471cf516ce5516583543e927303f2943a4d5b10e06af0ce1de980b68b1c = $this->env->getExtension("native_profiler");
        $__internal_21992471cf516ce5516583543e927303f2943a4d5b10e06af0ce1de980b68b1c->enter($__internal_21992471cf516ce5516583543e927303f2943a4d5b10e06af0ce1de980b68b1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_21992471cf516ce5516583543e927303f2943a4d5b10e06af0ce1de980b68b1c->leave($__internal_21992471cf516ce5516583543e927303f2943a4d5b10e06af0ce1de980b68b1c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
