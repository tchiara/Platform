<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_0e3e5e43d126c8f60bc76210ec71eb6ea3e58b6387adef3a67dad281f40463c1 extends Twig_Template
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
        $__internal_df274ea1eb9a7b42147ecf6961c6a94f8a82dc30f16f66ef93c875f4558adacd = $this->env->getExtension("native_profiler");
        $__internal_df274ea1eb9a7b42147ecf6961c6a94f8a82dc30f16f66ef93c875f4558adacd->enter($__internal_df274ea1eb9a7b42147ecf6961c6a94f8a82dc30f16f66ef93c875f4558adacd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_df274ea1eb9a7b42147ecf6961c6a94f8a82dc30f16f66ef93c875f4558adacd->leave($__internal_df274ea1eb9a7b42147ecf6961c6a94f8a82dc30f16f66ef93c875f4558adacd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
