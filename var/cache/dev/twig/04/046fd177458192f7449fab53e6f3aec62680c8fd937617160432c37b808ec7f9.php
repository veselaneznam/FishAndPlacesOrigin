<?php

/* @GoGreen/dam/google_map.html.twig */
class __TwigTemplate_2054321d3c8bf1c1154600074b778fb2cd7588ccb7810777738f934a22ee1295 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@GoGreen/base.html.twig", "@GoGreen/dam/google_map.html.twig", 1);
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
        $__internal_85199e277a5565f1aad1ad0c624fc151c87050d03c5e4e13534fdc898a5fb7d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85199e277a5565f1aad1ad0c624fc151c87050d03c5e4e13534fdc898a5fb7d9->enter($__internal_85199e277a5565f1aad1ad0c624fc151c87050d03c5e4e13534fdc898a5fb7d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GoGreen/dam/google_map.html.twig"));

        $__internal_ec79c0e0e2be7dfe901d9cb0b7a9f35683427478ba0ec24ce1e1260a7f144744 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec79c0e0e2be7dfe901d9cb0b7a9f35683427478ba0ec24ce1e1260a7f144744->enter($__internal_ec79c0e0e2be7dfe901d9cb0b7a9f35683427478ba0ec24ce1e1260a7f144744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GoGreen/dam/google_map.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85199e277a5565f1aad1ad0c624fc151c87050d03c5e4e13534fdc898a5fb7d9->leave($__internal_85199e277a5565f1aad1ad0c624fc151c87050d03c5e4e13534fdc898a5fb7d9_prof);

        
        $__internal_ec79c0e0e2be7dfe901d9cb0b7a9f35683427478ba0ec24ce1e1260a7f144744->leave($__internal_ec79c0e0e2be7dfe901d9cb0b7a9f35683427478ba0ec24ce1e1260a7f144744_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_7ccabb69466a52311321564f6ee292e4f666b32e3ddec79d19f60d159d186e43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ccabb69466a52311321564f6ee292e4f666b32e3ddec79d19f60d159d186e43->enter($__internal_7ccabb69466a52311321564f6ee292e4f666b32e3ddec79d19f60d159d186e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_38e888a42eda96f15188404b37e7ae914fecf56a6280edf88a3a29bbb069a2d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38e888a42eda96f15188404b37e7ae914fecf56a6280edf88a3a29bbb069a2d8->enter($__internal_38e888a42eda96f15188404b37e7ae914fecf56a6280edf88a3a29bbb069a2d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "
<br />
<div class=\"thumb\">
";
        // line 6
        echo $this->env->getExtension('Ivory\GoogleMapBundle\Twig\MapExtension')->render(($context["map"] ?? $this->getContext($context, "map")));
        echo "
";
        // line 7
        echo $this->env->getExtension('Ivory\GoogleMapBundle\Twig\ApiExtension')->render(array(0 => ($context["map"] ?? $this->getContext($context, "map"))));
        echo "
    </div>
     ";
        // line 9
        $this->loadTemplate("@GoGreen/dam/list.html.twig", "@GoGreen/dam/google_map.html.twig", 9)->display($context);
        
        $__internal_38e888a42eda96f15188404b37e7ae914fecf56a6280edf88a3a29bbb069a2d8->leave($__internal_38e888a42eda96f15188404b37e7ae914fecf56a6280edf88a3a29bbb069a2d8_prof);

        
        $__internal_7ccabb69466a52311321564f6ee292e4f666b32e3ddec79d19f60d159d186e43->leave($__internal_7ccabb69466a52311321564f6ee292e4f666b32e3ddec79d19f60d159d186e43_prof);

    }

    public function getTemplateName()
    {
        return "@GoGreen/dam/google_map.html.twig";
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
        return new Twig_Source("{% extends '@GoGreen/base.html.twig' %}
{% block content %}
    {{ parent() }}
<br />
<div class=\"thumb\">
{{ ivory_google_map(map) }}
{{ ivory_google_api([map]) }}
    </div>
     {% include '@GoGreen/dam/list.html.twig' %}
{% endblock %}
", "@GoGreen/dam/google_map.html.twig", "/var/www/FishAndPlaces/src/FishAndPlaces/UI/Bundle/GoGreenBundle/Resources/views/dam/google_map.html.twig");
    }
}
