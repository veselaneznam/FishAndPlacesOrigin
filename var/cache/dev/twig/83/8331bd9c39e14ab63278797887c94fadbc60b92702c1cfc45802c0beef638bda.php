<?php

/* @GoGreen/dam/index.html.twig */
class __TwigTemplate_4dcef6b82b30a85457dfed26e285bf77330911a45fef37734692df65f6b9185b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@GoGreen/base.html.twig", "@GoGreen/dam/index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@GoGreen/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_66365c06659fed6436ef983b7194259883b344545673e6cf204d47838da65661 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66365c06659fed6436ef983b7194259883b344545673e6cf204d47838da65661->enter($__internal_66365c06659fed6436ef983b7194259883b344545673e6cf204d47838da65661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GoGreen/dam/index.html.twig"));

        $__internal_5d87d7deff25d1d976196de03132557753f7291c46d660e2cf6a1492c6ef7f11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d87d7deff25d1d976196de03132557753f7291c46d660e2cf6a1492c6ef7f11->enter($__internal_5d87d7deff25d1d976196de03132557753f7291c46d660e2cf6a1492c6ef7f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GoGreen/dam/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66365c06659fed6436ef983b7194259883b344545673e6cf204d47838da65661->leave($__internal_66365c06659fed6436ef983b7194259883b344545673e6cf204d47838da65661_prof);

        
        $__internal_5d87d7deff25d1d976196de03132557753f7291c46d660e2cf6a1492c6ef7f11->leave($__internal_5d87d7deff25d1d976196de03132557753f7291c46d660e2cf6a1492c6ef7f11_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_7bbe56f8ac0d291b6a075983af9c87b9e3a064c7a813ac503d495b53d06543e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bbe56f8ac0d291b6a075983af9c87b9e3a064c7a813ac503d495b53d06543e8->enter($__internal_7bbe56f8ac0d291b6a075983af9c87b9e3a064c7a813ac503d495b53d06543e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_65386e1ced1326cdb20acb2fee65c567d3345865370ade03df2001271fe26f6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65386e1ced1326cdb20acb2fee65c567d3345865370ade03df2001271fe26f6b->enter($__internal_65386e1ced1326cdb20acb2fee65c567d3345865370ade03df2001271fe26f6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "
    ";
        // line 4
        $this->loadTemplate("@GoGreen/dam/list.html.twig", "@GoGreen/dam/index.html.twig", 4)->display($context);
        
        $__internal_65386e1ced1326cdb20acb2fee65c567d3345865370ade03df2001271fe26f6b->leave($__internal_65386e1ced1326cdb20acb2fee65c567d3345865370ade03df2001271fe26f6b_prof);

        
        $__internal_7bbe56f8ac0d291b6a075983af9c87b9e3a064c7a813ac503d495b53d06543e8->leave($__internal_7bbe56f8ac0d291b6a075983af9c87b9e3a064c7a813ac503d495b53d06543e8_prof);

    }

    public function getTemplateName()
    {
        return "@GoGreen/dam/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 4,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@GoGreen/base.html.twig' %}
{% block content %}
    {{ parent() }}
    {% include '@GoGreen/dam/list.html.twig' %}
{% endblock %}
", "@GoGreen/dam/index.html.twig", "/var/www/FishAndPlaces/src/FishAndPlaces/UI/Bundle/GoGreenBundle/Resources/views/dam/index.html.twig");
    }
}
