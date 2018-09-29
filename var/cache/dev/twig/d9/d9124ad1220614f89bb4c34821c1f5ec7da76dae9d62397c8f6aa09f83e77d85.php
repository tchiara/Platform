<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_9ced66ff70e2d229a4d4c5d249b291c208d7f0b79af41447854f0aad1cd755ea extends Twig_Template
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
        $__internal_8f0540b9c90a11c750758bddaab255ba379b6addedee43562f3fe0f822ac909b = $this->env->getExtension("native_profiler");
        $__internal_8f0540b9c90a11c750758bddaab255ba379b6addedee43562f3fe0f822ac909b->enter($__internal_8f0540b9c90a11c750758bddaab255ba379b6addedee43562f3fe0f822ac909b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_8f0540b9c90a11c750758bddaab255ba379b6addedee43562f3fe0f822ac909b->leave($__internal_8f0540b9c90a11c750758bddaab255ba379b6addedee43562f3fe0f822ac909b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
