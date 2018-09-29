<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_4db864ad742e1d1e5fa43a3db18ad59fe7c21e0222654b0e98cea077327a5cc9 extends Twig_Template
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
        $__internal_0252898f4825ff775166b0c3ce30056d1d70a990bbd1f996fef5181799571fb9 = $this->env->getExtension("native_profiler");
        $__internal_0252898f4825ff775166b0c3ce30056d1d70a990bbd1f996fef5181799571fb9->enter($__internal_0252898f4825ff775166b0c3ce30056d1d70a990bbd1f996fef5181799571fb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_0252898f4825ff775166b0c3ce30056d1d70a990bbd1f996fef5181799571fb9->leave($__internal_0252898f4825ff775166b0c3ce30056d1d70a990bbd1f996fef5181799571fb9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
