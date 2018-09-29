<?php

/* @OCCore/Core/index.html.twig */
class __TwigTemplate_8832c6c486517498c4ac6955de9b367c836cafc101c5d756c1760971d94b47d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("OCCoreBundle::layout.html.twig", "@OCCore/Core/index.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9c524857775420e3514b2064fca4b67cfddccba632cb96bce283cbac654ed3ea = $this->env->getExtension("native_profiler");
        $__internal_9c524857775420e3514b2064fca4b67cfddccba632cb96bce283cbac654ed3ea->enter($__internal_9c524857775420e3514b2064fca4b67cfddccba632cb96bce283cbac654ed3ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCCore/Core/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c524857775420e3514b2064fca4b67cfddccba632cb96bce283cbac654ed3ea->leave($__internal_9c524857775420e3514b2064fca4b67cfddccba632cb96bce283cbac654ed3ea_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_fd16e382536275a066a72c5c645b9f1b5722ec0805087020615b8533ac7554e0 = $this->env->getExtension("native_profiler");
        $__internal_fd16e382536275a066a72c5c645b9f1b5722ec0805087020615b8533ac7554e0->enter($__internal_fd16e382536275a066a72c5c645b9f1b5722ec0805087020615b8533ac7554e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Page d'accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_fd16e382536275a066a72c5c645b9f1b5722ec0805087020615b8533ac7554e0->leave($__internal_fd16e382536275a066a72c5c645b9f1b5722ec0805087020615b8533ac7554e0_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_f4cce080f6d64d1d39e871ae0086b058cd09efba478726502a5feb348086a200 = $this->env->getExtension("native_profiler");
        $__internal_f4cce080f6d64d1d39e871ae0086b058cd09efba478726502a5feb348086a200->enter($__internal_f4cce080f6d64d1d39e871ae0086b058cd09efba478726502a5feb348086a200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
  <h2>Page d'accueil de notre site</h2>

  ";
        // line 13
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 14
            echo "    <div class=\"alert alert-info\">Message flash : ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
  ";
        // line 18
        echo "  <h3>Dernières annonces</h3>
  ";
        // line 19
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("OCPlatformBundle:Advert:menu", array("limit" => 3)));
        echo "

  <h3>Derniers messages sur le forum (hypothétique)</h3>
  <p>
    ";
        // line 25
        echo "    Bla bla bla...
  </p>

";
        
        $__internal_f4cce080f6d64d1d39e871ae0086b058cd09efba478726502a5feb348086a200->leave($__internal_f4cce080f6d64d1d39e871ae0086b058cd09efba478726502a5feb348086a200_prof);

    }

    public function getTemplateName()
    {
        return "@OCCore/Core/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 25,  82 => 19,  79 => 18,  76 => 16,  67 => 14,  62 => 13,  57 => 9,  51 => 8,  41 => 5,  35 => 4,  11 => 2,);
    }
}
/* {# On utilise ici le layout général, qui se situe dans ce même CoreBundle maintenant #}*/
/* {% extends "OCCoreBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Page d'accueil - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*   <h2>Page d'accueil de notre site</h2>*/
/* */
/*   {# On affiche tous les messages flash dont le nom est « info » #}*/
/*   {% for message in app.session.flashbag.get('info') %}*/
/*     <div class="alert alert-info">Message flash : {{ message }}</div>*/
/*   {% endfor %}*/
/* */
/*   {# Pour afficher les dernières annonces, on réutilise le contrôleur menu du PlatformBundle #}*/
/*   <h3>Dernières annonces</h3>*/
/*   {{ render(controller("OCPlatformBundle:Advert:menu", {'limit': 3})) }}*/
/* */
/*   <h3>Derniers messages sur le forum (hypothétique)</h3>*/
/*   <p>*/
/*     {# Ici, on devrait utiliser un contrôleur d'un éventuel ForumBundle pour afficher les derniers posts sur le forum,*/
/*        ce n'est pas le sujet ici #}*/
/*     Bla bla bla...*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
