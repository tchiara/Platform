<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_5a027755e15abf9a2125abeeead1d5ae7b28706d585acabc515b04d9b69cf1f9 extends Twig_Template
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
        $__internal_3600b33bce59ad686fed16083a61c81cba556845ad922231a4a696b7e85cad7b = $this->env->getExtension("native_profiler");
        $__internal_3600b33bce59ad686fed16083a61c81cba556845ad922231a4a696b7e85cad7b->enter($__internal_3600b33bce59ad686fed16083a61c81cba556845ad922231a4a696b7e85cad7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_3600b33bce59ad686fed16083a61c81cba556845ad922231a4a696b7e85cad7b->leave($__internal_3600b33bce59ad686fed16083a61c81cba556845ad922231a4a696b7e85cad7b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
