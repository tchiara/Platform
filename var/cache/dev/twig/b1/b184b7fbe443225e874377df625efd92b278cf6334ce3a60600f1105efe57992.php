<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_864ecaca53d35e5e56d6c1ec8aa00cb14b6d31a9353e51e037b2c81fa0de7587 extends Twig_Template
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
        $__internal_1a34422a1c60eacfeed3578b69e61ed4ff771dd1e1ebc582039b9b048551f2ad = $this->env->getExtension("native_profiler");
        $__internal_1a34422a1c60eacfeed3578b69e61ed4ff771dd1e1ebc582039b9b048551f2ad->enter($__internal_1a34422a1c60eacfeed3578b69e61ed4ff771dd1e1ebc582039b9b048551f2ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_1a34422a1c60eacfeed3578b69e61ed4ff771dd1e1ebc582039b9b048551f2ad->leave($__internal_1a34422a1c60eacfeed3578b69e61ed4ff771dd1e1ebc582039b9b048551f2ad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
