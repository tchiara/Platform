<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_bfcde1d18e03ea49c76a6e16854ecd395bb2d7576b2ffc917c4c590e53ac431b extends Twig_Template
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
        $__internal_c32b4ed85233691274a9649820f65b5185f8763268925aeed37268ef7b77615b = $this->env->getExtension("native_profiler");
        $__internal_c32b4ed85233691274a9649820f65b5185f8763268925aeed37268ef7b77615b->enter($__internal_c32b4ed85233691274a9649820f65b5185f8763268925aeed37268ef7b77615b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_c32b4ed85233691274a9649820f65b5185f8763268925aeed37268ef7b77615b->leave($__internal_c32b4ed85233691274a9649820f65b5185f8763268925aeed37268ef7b77615b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
