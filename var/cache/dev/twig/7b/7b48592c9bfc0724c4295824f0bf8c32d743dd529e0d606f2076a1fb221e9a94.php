<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_1509acb25082423fa2a88267f1867bac8129e561bc002805d7d09292de56954b extends Twig_Template
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
        $__internal_54bb7ccb0db4e4c88689d473188d0943a0c1251157e667692b168479b695a2a0 = $this->env->getExtension("native_profiler");
        $__internal_54bb7ccb0db4e4c88689d473188d0943a0c1251157e667692b168479b695a2a0->enter($__internal_54bb7ccb0db4e4c88689d473188d0943a0c1251157e667692b168479b695a2a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_54bb7ccb0db4e4c88689d473188d0943a0c1251157e667692b168479b695a2a0->leave($__internal_54bb7ccb0db4e4c88689d473188d0943a0c1251157e667692b168479b695a2a0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
