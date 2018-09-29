<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_7aee940b4ec4a588b5f21602da1669da50493bf851a8f92a03747b410cc9a9b6 extends Twig_Template
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
        $__internal_ca45afd74f304bbf52fc69a415e9db9d8a122002dc1d242b7232aef46b31bc4e = $this->env->getExtension("native_profiler");
        $__internal_ca45afd74f304bbf52fc69a415e9db9d8a122002dc1d242b7232aef46b31bc4e->enter($__internal_ca45afd74f304bbf52fc69a415e9db9d8a122002dc1d242b7232aef46b31bc4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_ca45afd74f304bbf52fc69a415e9db9d8a122002dc1d242b7232aef46b31bc4e->leave($__internal_ca45afd74f304bbf52fc69a415e9db9d8a122002dc1d242b7232aef46b31bc4e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
