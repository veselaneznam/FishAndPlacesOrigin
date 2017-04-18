<?php

/* @Dam/dam/google_map.html.twig */
class __TwigTemplate_b0d566275d78700493ef5459851eb18ebca5f24b4f38dfd26c92f7d53c6ce896 extends Twig_Template
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
        $__internal_2b6a9be8d9eb9b410fa35404c92be28149d86406ce31aec841ba5bc90b34990a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b6a9be8d9eb9b410fa35404c92be28149d86406ce31aec841ba5bc90b34990a->enter($__internal_2b6a9be8d9eb9b410fa35404c92be28149d86406ce31aec841ba5bc90b34990a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Dam/dam/google_map.html.twig"));

        $__internal_874e3cfe6ff28c4de1fe5e57d62e595d5a935d76a2289e065765a583a07de344 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_874e3cfe6ff28c4de1fe5e57d62e595d5a935d76a2289e065765a583a07de344->enter($__internal_874e3cfe6ff28c4de1fe5e57d62e595d5a935d76a2289e065765a583a07de344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Dam/dam/google_map.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b6a9be8d9eb9b410fa35404c92be28149d86406ce31aec841ba5bc90b34990a->leave($__internal_2b6a9be8d9eb9b410fa35404c92be28149d86406ce31aec841ba5bc90b34990a_prof);

        
        $__internal_874e3cfe6ff28c4de1fe5e57d62e595d5a935d76a2289e065765a583a07de344->leave($__internal_874e3cfe6ff28c4de1fe5e57d62e595d5a935d76a2289e065765a583a07de344_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_131c73761c2dc570ba20fc700b54e4c09fd325c597b0ad09118cd31945c56de7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_131c73761c2dc570ba20fc700b54e4c09fd325c597b0ad09118cd31945c56de7->enter($__internal_131c73761c2dc570ba20fc700b54e4c09fd325c597b0ad09118cd31945c56de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_d4238d4266beb9b85e56ce8e1b170548afbfe4c92b02650d4a11bfb29afe59f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4238d4266beb9b85e56ce8e1b170548afbfe4c92b02650d4a11bfb29afe59f4->enter($__internal_d4238d4266beb9b85e56ce8e1b170548afbfe4c92b02650d4a11bfb29afe59f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_d4238d4266beb9b85e56ce8e1b170548afbfe4c92b02650d4a11bfb29afe59f4->leave($__internal_d4238d4266beb9b85e56ce8e1b170548afbfe4c92b02650d4a11bfb29afe59f4_prof);

        
        $__internal_131c73761c2dc570ba20fc700b54e4c09fd325c597b0ad09118cd31945c56de7->leave($__internal_131c73761c2dc570ba20fc700b54e4c09fd325c597b0ad09118cd31945c56de7_prof);

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
