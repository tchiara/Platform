<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_0dbf1c67a653b3880280c3900fba1a84f712c8c2789b4dac2d73054870d5077d extends Twig_Template
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
        $__internal_734d26c9a207c25f5a529cdf36d3772cca3a01660e2a3d21dad0314f9858359b = $this->env->getExtension("native_profiler");
        $__internal_734d26c9a207c25f5a529cdf36d3772cca3a01660e2a3d21dad0314f9858359b->enter($__internal_734d26c9a207c25f5a529cdf36d3772cca3a01660e2a3d21dad0314f9858359b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_734d26c9a207c25f5a529cdf36d3772cca3a01660e2a3d21dad0314f9858359b->leave($__internal_734d26c9a207c25f5a529cdf36d3772cca3a01660e2a3d21dad0314f9858359b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
