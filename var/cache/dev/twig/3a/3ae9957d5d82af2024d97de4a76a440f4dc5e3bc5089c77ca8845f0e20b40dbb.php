<?php

/* @GoGreen/core/page.html.twig */
class __TwigTemplate_84726aa75a8b8ed173315d1220085f0a5e0d074781ca9ee75cec84ace8192191 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@GoGreen/base.html.twig", "@GoGreen/core/page.html.twig", 1);
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
        $__internal_f2056c4ab71928d5278027b9cd07daea04549a22b51e7fe3253db7f9da118c70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2056c4ab71928d5278027b9cd07daea04549a22b51e7fe3253db7f9da118c70->enter($__internal_f2056c4ab71928d5278027b9cd07daea04549a22b51e7fe3253db7f9da118c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GoGreen/core/page.html.twig"));

        $__internal_691d5482e6a14cb74ce6863b1b9a73255d82ec05edb2737f38f869aad721f847 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_691d5482e6a14cb74ce6863b1b9a73255d82ec05edb2737f38f869aad721f847->enter($__internal_691d5482e6a14cb74ce6863b1b9a73255d82ec05edb2737f38f869aad721f847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GoGreen/core/page.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2056c4ab71928d5278027b9cd07daea04549a22b51e7fe3253db7f9da118c70->leave($__internal_f2056c4ab71928d5278027b9cd07daea04549a22b51e7fe3253db7f9da118c70_prof);

        
        $__internal_691d5482e6a14cb74ce6863b1b9a73255d82ec05edb2737f38f869aad721f847->leave($__internal_691d5482e6a14cb74ce6863b1b9a73255d82ec05edb2737f38f869aad721f847_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_94333e22c5b6688bd664ee319e37c79d395076e00547029ebe64502f1698572a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94333e22c5b6688bd664ee319e37c79d395076e00547029ebe64502f1698572a->enter($__internal_94333e22c5b6688bd664ee319e37c79d395076e00547029ebe64502f1698572a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_813e19e0c6fdd467056e95f14e427499f010dfd4762575ad4e82d980a3212075 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_813e19e0c6fdd467056e95f14e427499f010dfd4762575ad4e82d980a3212075->enter($__internal_813e19e0c6fdd467056e95f14e427499f010dfd4762575ad4e82d980a3212075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "
<div class=\"row container_custome\">
    <div class=\"col-lg-6\">
        <h3>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? $this->getContext($context, "page")), "title", array()), "html", null, true);
        echo "</h3></div>
    <div class=\"col-lg-12\" >";
        // line 7
        echo $this->getAttribute(($context["page"] ?? $this->getContext($context, "page")), "description", array());
        echo "</div>
</div>
";
        
        $__internal_813e19e0c6fdd467056e95f14e427499f010dfd4762575ad4e82d980a3212075->leave($__internal_813e19e0c6fdd467056e95f14e427499f010dfd4762575ad4e82d980a3212075_prof);

        
        $__internal_94333e22c5b6688bd664ee319e37c79d395076e00547029ebe64502f1698572a->leave($__internal_94333e22c5b6688bd664ee319e37c79d395076e00547029ebe64502f1698572a_prof);

    }

    public function getTemplateName()
    {
        return "@GoGreen/core/page.html.twig";
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
        return new Twig_Source("{% extends '@GoGreen/base.html.twig' %}
{% block content %}
    {{ parent() }}
<div class=\"row container_custome\">
    <div class=\"col-lg-6\">
        <h3>{{ page.title }}</h3></div>
    <div class=\"col-lg-12\" >{{ page.description | raw}}</div>
</div>
{% endblock %}
", "@GoGreen/core/page.html.twig", "/var/www/FishAndPlaces/src/FishAndPlaces/UI/Bundle/GoGreenBundle/Resources/views/core/page.html.twig");
    }
}
