<?php

/* @Dam/dam/google_map.html.twig */
class __TwigTemplate_b44f0a54b6585b5df2cb0d8fe79f31323ac4290b6965077856765498c7910527 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Dam/base.html.twig", "@Dam/dam/google_map.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Dam/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7302222e29250db125fd24f8803988721c31016f2f6785bbfddfc25e943119d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7302222e29250db125fd24f8803988721c31016f2f6785bbfddfc25e943119d6->enter($__internal_7302222e29250db125fd24f8803988721c31016f2f6785bbfddfc25e943119d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Dam/dam/google_map.html.twig"));

        $__internal_5f2d4ed3fd180604955f92f784db7b4d57bcd262aae0c3285788eb30fa4b3b8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f2d4ed3fd180604955f92f784db7b4d57bcd262aae0c3285788eb30fa4b3b8d->enter($__internal_5f2d4ed3fd180604955f92f784db7b4d57bcd262aae0c3285788eb30fa4b3b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Dam/dam/google_map.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7302222e29250db125fd24f8803988721c31016f2f6785bbfddfc25e943119d6->leave($__internal_7302222e29250db125fd24f8803988721c31016f2f6785bbfddfc25e943119d6_prof);

        
        $__internal_5f2d4ed3fd180604955f92f784db7b4d57bcd262aae0c3285788eb30fa4b3b8d->leave($__internal_5f2d4ed3fd180604955f92f784db7b4d57bcd262aae0c3285788eb30fa4b3b8d_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_fcda957123de3af8e3b37e9b8adf81b10436846d7a968ea924d8a258e24c454b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcda957123de3af8e3b37e9b8adf81b10436846d7a968ea924d8a258e24c454b->enter($__internal_fcda957123de3af8e3b37e9b8adf81b10436846d7a968ea924d8a258e24c454b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_93ca05d41e22aa4dd6cb81a7988ae669d5d90a63eb74edee517bf39ae1bea9a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93ca05d41e22aa4dd6cb81a7988ae669d5d90a63eb74edee517bf39ae1bea9a4->enter($__internal_93ca05d41e22aa4dd6cb81a7988ae669d5d90a63eb74edee517bf39ae1bea9a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "
<br />
<div class=\"thumb\">
";
        // line 6
        echo $this->env->getExtension('Ivory\GoogleMapBundle\Twig\MapExtension')->render((isset($context["map"]) ? $context["map"] : $this->getContext($context, "map")));
        echo "
";
        // line 7
        echo $this->env->getExtension('Ivory\GoogleMapBundle\Twig\ApiExtension')->render(array(0 => (isset($context["map"]) ? $context["map"] : $this->getContext($context, "map"))));
        echo "
    </div>
     ";
        // line 9
        $this->loadTemplate("@Dam/dam/list.html.twig", "@Dam/dam/google_map.html.twig", 9)->display($context);
        
        $__internal_93ca05d41e22aa4dd6cb81a7988ae669d5d90a63eb74edee517bf39ae1bea9a4->leave($__internal_93ca05d41e22aa4dd6cb81a7988ae669d5d90a63eb74edee517bf39ae1bea9a4_prof);

        
        $__internal_fcda957123de3af8e3b37e9b8adf81b10436846d7a968ea924d8a258e24c454b->leave($__internal_fcda957123de3af8e3b37e9b8adf81b10436846d7a968ea924d8a258e24c454b_prof);

    }

    public function getTemplateName()
    {
        return "@Dam/dam/google_map.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 9,  60 => 7,  56 => 6,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Dam/base.html.twig' %}
{% block content %}
    {{ parent() }}
<br />
<div class=\"thumb\">
{{ ivory_google_map(map) }}
{{ ivory_google_api([map]) }}
    </div>
     {% include '@Dam/dam/list.html.twig' %}
{% endblock %}
", "@Dam/dam/google_map.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/src/FishAndPlaces/UI/Bundle/DamBundle/Resources/views/dam/google_map.html.twig");
    }
}
