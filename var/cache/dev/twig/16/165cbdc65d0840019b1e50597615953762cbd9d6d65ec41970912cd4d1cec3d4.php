<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_6a4680b07df550d147bde9a3932604cdb958605df151b6ec1eb76e42b57c4478 extends Twig_Template
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
        $__internal_0dba782de4bea06c592d5d76a555fe2e1f657bd5d6f67cd3093ab9b56a458a12 = $this->env->getExtension("native_profiler");
        $__internal_0dba782de4bea06c592d5d76a555fe2e1f657bd5d6f67cd3093ab9b56a458a12->enter($__internal_0dba782de4bea06c592d5d76a555fe2e1f657bd5d6f67cd3093ab9b56a458a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_0dba782de4bea06c592d5d76a555fe2e1f657bd5d6f67cd3093ab9b56a458a12->leave($__internal_0dba782de4bea06c592d5d76a555fe2e1f657bd5d6f67cd3093ab9b56a458a12_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
