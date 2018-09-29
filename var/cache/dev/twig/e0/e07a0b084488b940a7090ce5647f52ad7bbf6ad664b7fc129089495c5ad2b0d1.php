<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_2bb5f260c4d6cbdcc0e83bc334447dc3f7fb28389d184c9dfa10df46f8dd32d6 extends Twig_Template
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
        $__internal_c276871d0107f160067bd31c13bfebaa25e64676689594eba0ad0c7dc445fb7b = $this->env->getExtension("native_profiler");
        $__internal_c276871d0107f160067bd31c13bfebaa25e64676689594eba0ad0c7dc445fb7b->enter($__internal_c276871d0107f160067bd31c13bfebaa25e64676689594eba0ad0c7dc445fb7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_c276871d0107f160067bd31c13bfebaa25e64676689594eba0ad0c7dc445fb7b->leave($__internal_c276871d0107f160067bd31c13bfebaa25e64676689594eba0ad0c7dc445fb7b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
