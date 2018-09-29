<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_f32cd329d522fe6cb5efd8058b7b96332341b09921140e772d0ebbb57d62a7cf extends Twig_Template
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
        $__internal_81c39714ba76af825fcd60db8e9c55809ff0bb3484ba6b443fb312f157273e34 = $this->env->getExtension("native_profiler");
        $__internal_81c39714ba76af825fcd60db8e9c55809ff0bb3484ba6b443fb312f157273e34->enter($__internal_81c39714ba76af825fcd60db8e9c55809ff0bb3484ba6b443fb312f157273e34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_81c39714ba76af825fcd60db8e9c55809ff0bb3484ba6b443fb312f157273e34->leave($__internal_81c39714ba76af825fcd60db8e9c55809ff0bb3484ba6b443fb312f157273e34_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
