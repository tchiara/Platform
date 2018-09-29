<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_d7d93960b882f15fcba494f1df9d1e6112b770a5cb2f83a1acd192e0a0fed5ba extends Twig_Template
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
        $__internal_5a00f3472a13e41c87c9926221fbe7dde500bc6a09132bfcec7298685b65a7e5 = $this->env->getExtension("native_profiler");
        $__internal_5a00f3472a13e41c87c9926221fbe7dde500bc6a09132bfcec7298685b65a7e5->enter($__internal_5a00f3472a13e41c87c9926221fbe7dde500bc6a09132bfcec7298685b65a7e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_5a00f3472a13e41c87c9926221fbe7dde500bc6a09132bfcec7298685b65a7e5->leave($__internal_5a00f3472a13e41c87c9926221fbe7dde500bc6a09132bfcec7298685b65a7e5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
