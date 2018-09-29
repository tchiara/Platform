<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_b5913a0ffa694ae6c1d8c24edaa27c3942c580dc9c4a3fc1fb1997f860fa48e0 extends Twig_Template
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
        $__internal_0e6ae928351d98e416ef243e086ecd637614b158274e157d949ff918584f10df = $this->env->getExtension("native_profiler");
        $__internal_0e6ae928351d98e416ef243e086ecd637614b158274e157d949ff918584f10df->enter($__internal_0e6ae928351d98e416ef243e086ecd637614b158274e157d949ff918584f10df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_0e6ae928351d98e416ef243e086ecd637614b158274e157d949ff918584f10df->leave($__internal_0e6ae928351d98e416ef243e086ecd637614b158274e157d949ff918584f10df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
