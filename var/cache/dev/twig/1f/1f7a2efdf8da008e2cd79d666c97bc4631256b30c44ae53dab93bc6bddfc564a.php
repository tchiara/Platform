<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_00a32e954946a8b39d237393c744d7bf75a8b73dc502724879ac8c04ec8bc80d extends Twig_Template
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
        $__internal_b8932ba5ce8762825fc826931032e1a454f10ced2559cfec7e7374a607dfa35b = $this->env->getExtension("native_profiler");
        $__internal_b8932ba5ce8762825fc826931032e1a454f10ced2559cfec7e7374a607dfa35b->enter($__internal_b8932ba5ce8762825fc826931032e1a454f10ced2559cfec7e7374a607dfa35b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_b8932ba5ce8762825fc826931032e1a454f10ced2559cfec7e7374a607dfa35b->leave($__internal_b8932ba5ce8762825fc826931032e1a454f10ced2559cfec7e7374a607dfa35b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
