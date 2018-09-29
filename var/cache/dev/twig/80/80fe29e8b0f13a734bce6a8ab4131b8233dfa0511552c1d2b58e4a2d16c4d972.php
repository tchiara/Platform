<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_9ee1696ecc36321e76643932529447253b9ab7c047f8863e7651150704a9fad2 extends Twig_Template
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
        $__internal_89ccb8c727fefcdaf00e2656c51f15f762c65f5b4bd4533bb73c04a71df22958 = $this->env->getExtension("native_profiler");
        $__internal_89ccb8c727fefcdaf00e2656c51f15f762c65f5b4bd4533bb73c04a71df22958->enter($__internal_89ccb8c727fefcdaf00e2656c51f15f762c65f5b4bd4533bb73c04a71df22958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_89ccb8c727fefcdaf00e2656c51f15f762c65f5b4bd4533bb73c04a71df22958->leave($__internal_89ccb8c727fefcdaf00e2656c51f15f762c65f5b4bd4533bb73c04a71df22958_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
