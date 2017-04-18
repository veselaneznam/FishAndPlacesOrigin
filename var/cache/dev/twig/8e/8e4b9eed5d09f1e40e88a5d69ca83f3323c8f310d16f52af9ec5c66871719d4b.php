<?php

/* @Dam/core/page.html.twig */
class __TwigTemplate_03d2358014dab1592390ac8ddc052caa8abcce15f3a786a3131d695e78b30d78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Dam/base.html.twig", "@Dam/core/page.html.twig", 1);
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
        $__internal_6c040dabd7ac1d10c7ca022be573185339e6255bd0ce8a3c415aefd7e0e18c4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c040dabd7ac1d10c7ca022be573185339e6255bd0ce8a3c415aefd7e0e18c4e->enter($__internal_6c040dabd7ac1d10c7ca022be573185339e6255bd0ce8a3c415aefd7e0e18c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Dam/core/page.html.twig"));

        $__internal_a34b74460c316148e8ba3e79e7eb3031a09f04f61b092dc4be4991860b20fa39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a34b74460c316148e8ba3e79e7eb3031a09f04f61b092dc4be4991860b20fa39->enter($__internal_a34b74460c316148e8ba3e79e7eb3031a09f04f61b092dc4be4991860b20fa39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Dam/core/page.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c040dabd7ac1d10c7ca022be573185339e6255bd0ce8a3c415aefd7e0e18c4e->leave($__internal_6c040dabd7ac1d10c7ca022be573185339e6255bd0ce8a3c415aefd7e0e18c4e_prof);

        
        $__internal_a34b74460c316148e8ba3e79e7eb3031a09f04f61b092dc4be4991860b20fa39->leave($__internal_a34b74460c316148e8ba3e79e7eb3031a09f04f61b092dc4be4991860b20fa39_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_cfcbaed5fd5d833f2c44a78b40736de2978e0c91a0190970af3b37ad1ff50b86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfcbaed5fd5d833f2c44a78b40736de2978e0c91a0190970af3b37ad1ff50b86->enter($__internal_cfcbaed5fd5d833f2c44a78b40736de2978e0c91a0190970af3b37ad1ff50b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f656c6b62beec9e77fb8f33c1d8b4ee3f721b528cb4d0d100e684f0c2ec4c5a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f656c6b62beec9e77fb8f33c1d8b4ee3f721b528cb4d0d100e684f0c2ec4c5a1->enter($__internal_f656c6b62beec9e77fb8f33c1d8b4ee3f721b528cb4d0d100e684f0c2ec4c5a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "
<div class=\"row container_custome\">
    <div class=\"col-lg-6\">
        <h3>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "title", array()), "html", null, true);
        echo "</h3></div>
    <div class=\"col-lg-12\" >";
        // line 7
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "description", array());
        echo "</div>
</div>
";
        
        $__internal_f656c6b62beec9e77fb8f33c1d8b4ee3f721b528cb4d0d100e684f0c2ec4c5a1->leave($__internal_f656c6b62beec9e77fb8f33c1d8b4ee3f721b528cb4d0d100e684f0c2ec4c5a1_prof);

        
        $__internal_cfcbaed5fd5d833f2c44a78b40736de2978e0c91a0190970af3b37ad1ff50b86->leave($__internal_cfcbaed5fd5d833f2c44a78b40736de2978e0c91a0190970af3b37ad1ff50b86_prof);

    }

    public function getTemplateName()
    {
        return "@Dam/core/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 7,  56 => 6,  49 => 3,  40 => 2,  11 => 1,);
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
<div class=\"row container_custome\">
    <div class=\"col-lg-6\">
        <h3>{{ page.title }}</h3></div>
    <div class=\"col-lg-12\" >{{ page.description | raw}}</div>
</div>
{% endblock %}
", "@Dam/core/page.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/src/FishAndPlaces/UI/Bundle/DamBundle/Resources/views/core/page.html.twig");
    }
}
