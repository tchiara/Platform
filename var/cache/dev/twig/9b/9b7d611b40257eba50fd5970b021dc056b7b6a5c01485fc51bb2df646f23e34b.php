<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_6c6545cf08586d6a420f81fb634fd2a7ca3e38753eda2902ce6152601212bd02 extends Twig_Template
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
        $__internal_f6218c811b09f279513cae9e6e027a10c6bedc2f4c5902a7f9105348241d979a = $this->env->getExtension("native_profiler");
        $__internal_f6218c811b09f279513cae9e6e027a10c6bedc2f4c5902a7f9105348241d979a->enter($__internal_f6218c811b09f279513cae9e6e027a10c6bedc2f4c5902a7f9105348241d979a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_f6218c811b09f279513cae9e6e027a10c6bedc2f4c5902a7f9105348241d979a->leave($__internal_f6218c811b09f279513cae9e6e027a10c6bedc2f4c5902a7f9105348241d979a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
