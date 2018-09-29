<?php

/* OCPlatformBundle:Advert:view.html.twig */
class __TwigTemplate_fad3d0e188130c538f38fb5925eedefcc3b07cb57c31885ed10f0dff41df8853 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:view.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_413a3923e3e65bb9d74c5893f64ca0bcedde8b6e71ab2e89050a5e76825494b7 = $this->env->getExtension("native_profiler");
        $__internal_413a3923e3e65bb9d74c5893f64ca0bcedde8b6e71ab2e89050a5e76825494b7->enter($__internal_413a3923e3e65bb9d74c5893f64ca0bcedde8b6e71ab2e89050a5e76825494b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_413a3923e3e65bb9d74c5893f64ca0bcedde8b6e71ab2e89050a5e76825494b7->leave($__internal_413a3923e3e65bb9d74c5893f64ca0bcedde8b6e71ab2e89050a5e76825494b7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9bd628e3cdee47ffb72c9638120375bd0f9c775a36e8d7e9127b1f2846dd46ef = $this->env->getExtension("native_profiler");
        $__internal_9bd628e3cdee47ffb72c9638120375bd0f9c775a36e8d7e9127b1f2846dd46ef->enter($__internal_9bd628e3cdee47ffb72c9638120375bd0f9c775a36e8d7e9127b1f2846dd46ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Lecture d'une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_9bd628e3cdee47ffb72c9638120375bd0f9c775a36e8d7e9127b1f2846dd46ef->leave($__internal_9bd628e3cdee47ffb72c9638120375bd0f9c775a36e8d7e9127b1f2846dd46ef_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_45414743654bf96a608958c6c69fb7ae20160f87fcd247ef470aee939085432b = $this->env->getExtension("native_profiler");
        $__internal_45414743654bf96a608958c6c69fb7ae20160f87fcd247ef470aee939085432b->enter($__internal_45414743654bf96a608958c6c69fb7ae20160f87fcd247ef470aee939085432b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
  <div style=\"float: left; margin-right: 1em;\">
    ";
        // line 13
        echo "    ";
        if ( !(null === $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "image", array()))) {
            // line 14
            echo "      <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "image", array()), "url", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "image", array()), "alt", array()), "html", null, true);
            echo "\" height=\"60\">
    ";
        }
        // line 16
        echo "  </div>

  <h2>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "title", array()), "html", null, true);
        echo "</h2>
  <i>Par ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "author", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i>

  <div class=\"well\">
    ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "content", array()), "html", null, true);
        echo "
  </div>

  ";
        // line 25
        if ( !$this->getAttribute($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "categories", array()), "empty", array())) {
            // line 26
            echo "    <p>
      Cette annonce est parue dans les catégories suivantes :
      ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "categories", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 29
                echo "        ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 30
                echo "      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "    </p>
  ";
        }
        // line 33
        echo "
  ";
        // line 34
        if ((twig_length_filter($this->env, (isset($context["listAdvertSkills"]) ? $context["listAdvertSkills"] : $this->getContext($context, "listAdvertSkills"))) > 0)) {
            // line 35
            echo "    <div>
      Cette annonce requiert les compétences suivantes :
      <ul>
        ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listAdvertSkills"]) ? $context["listAdvertSkills"] : $this->getContext($context, "listAdvertSkills")));
            foreach ($context['_seq'] as $context["_key"] => $context["advertSkill"]) {
                // line 39
                echo "          <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["advertSkill"], "skill", array()), "name", array()), "html", null, true);
                echo " : niveau ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["advertSkill"], "level", array()), "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advertSkill'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "      </ul>
    </div>
  ";
        }
        // line 44
        echo "
  <p>
    <a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("oc_platform_home");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la liste
    </a>
    <a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_edit", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      Modifier l'annonce
    </a>
    <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_delete", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-trash\"></i>
      Supprimer l'annonce
    </a>
  </p>

";
        
        $__internal_45414743654bf96a608958c6c69fb7ae20160f87fcd247ef470aee939085432b->leave($__internal_45414743654bf96a608958c6c69fb7ae20160f87fcd247ef470aee939085432b_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 54,  182 => 50,  175 => 46,  171 => 44,  166 => 41,  155 => 39,  151 => 38,  146 => 35,  144 => 34,  141 => 33,  137 => 31,  123 => 30,  117 => 29,  100 => 28,  96 => 26,  94 => 25,  88 => 22,  80 => 19,  76 => 18,  72 => 16,  64 => 14,  61 => 13,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/view/Advert/view.html.twig #}*/
/* */
/* {% extends "OCPlatformBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Lecture d'une annonce - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block ocplatform_body %}*/
/* */
/*   <div style="float: left; margin-right: 1em;">*/
/*     {# On vérifie qu'une image soit bien associée à l'article #}*/
/*     {% if advert.image is not null %}*/
/*       <img src="{{ advert.image.url }}" alt="{{ advert.image.alt }}" height="60">*/
/*     {% endif %}*/
/*   </div>*/
/* */
/*   <h2>{{ advert.title }}</h2>*/
/*   <i>Par {{ advert.author }}, le {{ advert.date|date('d/m/Y') }}</i>*/
/* */
/*   <div class="well">*/
/*     {{ advert.content }}*/
/*   </div>*/
/* */
/*   {% if not advert.categories.empty %}*/
/*     <p>*/
/*       Cette annonce est parue dans les catégories suivantes :*/
/*       {% for category in advert.categories %}*/
/*         {{ category.name }}{% if not loop.last %}, {% endif %}*/
/*       {% endfor %}*/
/*     </p>*/
/*   {% endif %}*/
/* */
/*   {% if listAdvertSkills|length > 0 %}*/
/*     <div>*/
/*       Cette annonce requiert les compétences suivantes :*/
/*       <ul>*/
/*         {% for advertSkill in listAdvertSkills %}*/
/*           <li>{{ advertSkill.skill.name }} : niveau {{ advertSkill.level }}</li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   {% endif %}*/
/* */
/*   <p>*/
/*     <a href="{{ path('oc_platform_home') }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à la liste*/
/*     </a>*/
/*     <a href="{{ path('oc_platform_edit', {'id': advert.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-edit"></i>*/
/*       Modifier l'annonce*/
/*     </a>*/
/*     <a href="{{ path('oc_platform_delete', {'id': advert.id}) }}" class="btn btn-danger">*/
/*       <i class="glyphicon glyphicon-trash"></i>*/
/*       Supprimer l'annonce*/
/*     </a>*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
