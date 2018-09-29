<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_040cbd86a3dd2624921e97d347c16424fb9654620df5c8dfbd96cf0ef740e2d2 extends Twig_Template
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
        $__internal_81478d0945ef665c770d70be5e1388f496bd479ef8fff6396cabf718a15b0837 = $this->env->getExtension("native_profiler");
        $__internal_81478d0945ef665c770d70be5e1388f496bd479ef8fff6396cabf718a15b0837->enter($__internal_81478d0945ef665c770d70be5e1388f496bd479ef8fff6396cabf718a15b0837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_81478d0945ef665c770d70be5e1388f496bd479ef8fff6396cabf718a15b0837->leave($__internal_81478d0945ef665c770d70be5e1388f496bd479ef8fff6396cabf718a15b0837_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
