<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_149abc693168f960c0ffbe88fa20e3ce36c0b1d6f9398861630901cafa60baec extends Twig_Template
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
        $__internal_bf38c7b554f04f8fc18b781b6c1b697ddbaacc04b22ba02cf5a64c09d24da7f6 = $this->env->getExtension("native_profiler");
        $__internal_bf38c7b554f04f8fc18b781b6c1b697ddbaacc04b22ba02cf5a64c09d24da7f6->enter($__internal_bf38c7b554f04f8fc18b781b6c1b697ddbaacc04b22ba02cf5a64c09d24da7f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_bf38c7b554f04f8fc18b781b6c1b697ddbaacc04b22ba02cf5a64c09d24da7f6->leave($__internal_bf38c7b554f04f8fc18b781b6c1b697ddbaacc04b22ba02cf5a64c09d24da7f6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
