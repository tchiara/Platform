<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_e9f9627933b471e74c095c03d50457a07505ca52258bf6dee60e9289f3fe96ed extends Twig_Template
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
        $__internal_bb238139af59366475eb2f020ee17cff436860843ad274e9bfd07939891d02a1 = $this->env->getExtension("native_profiler");
        $__internal_bb238139af59366475eb2f020ee17cff436860843ad274e9bfd07939891d02a1->enter($__internal_bb238139af59366475eb2f020ee17cff436860843ad274e9bfd07939891d02a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_bb238139af59366475eb2f020ee17cff436860843ad274e9bfd07939891d02a1->leave($__internal_bb238139af59366475eb2f020ee17cff436860843ad274e9bfd07939891d02a1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
