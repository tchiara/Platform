<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_fd26d52185eeb336b675f86b1e1e77a7754a3390c4c1460374708d884b7e1484 extends Twig_Template
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
        $__internal_6ee1393e783e169720bb33eab10a96952a91f030e1ff56687cab8c9dde3e7dc4 = $this->env->getExtension("native_profiler");
        $__internal_6ee1393e783e169720bb33eab10a96952a91f030e1ff56687cab8c9dde3e7dc4->enter($__internal_6ee1393e783e169720bb33eab10a96952a91f030e1ff56687cab8c9dde3e7dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_6ee1393e783e169720bb33eab10a96952a91f030e1ff56687cab8c9dde3e7dc4->leave($__internal_6ee1393e783e169720bb33eab10a96952a91f030e1ff56687cab8c9dde3e7dc4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
