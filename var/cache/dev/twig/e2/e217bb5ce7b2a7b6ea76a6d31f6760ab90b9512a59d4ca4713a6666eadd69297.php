<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_2155dc60394eca663ff13c47bf1e6d353134842583c7fd69d0618452e4680508 extends Twig_Template
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
        $__internal_58a2ecffe97def226306e3ab268501ef713d7ba47c4072253cc6c15d62533c91 = $this->env->getExtension("native_profiler");
        $__internal_58a2ecffe97def226306e3ab268501ef713d7ba47c4072253cc6c15d62533c91->enter($__internal_58a2ecffe97def226306e3ab268501ef713d7ba47c4072253cc6c15d62533c91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_58a2ecffe97def226306e3ab268501ef713d7ba47c4072253cc6c15d62533c91->leave($__internal_58a2ecffe97def226306e3ab268501ef713d7ba47c4072253cc6c15d62533c91_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
