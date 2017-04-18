<?php

/* @Dam/dam/index.html.twig */
class __TwigTemplate_0ffdae0a83269811c0009bc4205e14b42b3ef68bca00c71d7f87068fb5bd7ff1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Dam/base.html.twig", "@Dam/dam/index.html.twig", 1);
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
        $__internal_f12642fd45b80c6923b1862b5fa1372611580440063cec109f7af824a5c9085d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f12642fd45b80c6923b1862b5fa1372611580440063cec109f7af824a5c9085d->enter($__internal_f12642fd45b80c6923b1862b5fa1372611580440063cec109f7af824a5c9085d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Dam/dam/index.html.twig"));

        $__internal_a0a86babb56be4d969389d1c3e701b9fc368aa147c8480ff5d6e4dbef9e401ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0a86babb56be4d969389d1c3e701b9fc368aa147c8480ff5d6e4dbef9e401ba->enter($__internal_a0a86babb56be4d969389d1c3e701b9fc368aa147c8480ff5d6e4dbef9e401ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Dam/dam/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f12642fd45b80c6923b1862b5fa1372611580440063cec109f7af824a5c9085d->leave($__internal_f12642fd45b80c6923b1862b5fa1372611580440063cec109f7af824a5c9085d_prof);

        
        $__internal_a0a86babb56be4d969389d1c3e701b9fc368aa147c8480ff5d6e4dbef9e401ba->leave($__internal_a0a86babb56be4d969389d1c3e701b9fc368aa147c8480ff5d6e4dbef9e401ba_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_f5b59e8b9c3a750cbaa112e49b06531774c289bc3607590a3e458f242af3e807 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5b59e8b9c3a750cbaa112e49b06531774c289bc3607590a3e458f242af3e807->enter($__internal_f5b59e8b9c3a750cbaa112e49b06531774c289bc3607590a3e458f242af3e807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f1664d489268483d8b1016f4e2ed855fe732c0b2eb6b3393063d1f6b7a2c6bd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1664d489268483d8b1016f4e2ed855fe732c0b2eb6b3393063d1f6b7a2c6bd4->enter($__internal_f1664d489268483d8b1016f4e2ed855fe732c0b2eb6b3393063d1f6b7a2c6bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "
    ";
        // line 4
        $this->loadTemplate("@Dam/dam/list.html.twig", "@Dam/dam/index.html.twig", 4)->display($context);
        
        $__internal_f1664d489268483d8b1016f4e2ed855fe732c0b2eb6b3393063d1f6b7a2c6bd4->leave($__internal_f1664d489268483d8b1016f4e2ed855fe732c0b2eb6b3393063d1f6b7a2c6bd4_prof);

        
        $__internal_f5b59e8b9c3a750cbaa112e49b06531774c289bc3607590a3e458f242af3e807->leave($__internal_f5b59e8b9c3a750cbaa112e49b06531774c289bc3607590a3e458f242af3e807_prof);

    }

    public function getTemplateName()
    {
        return "@Dam/dam/index.html.twig";
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
        return new Twig_Source("{% extends '@Dam/base.html.twig' %}
{% block content %}
    {{ parent() }}
    {% include '@Dam/dam/list.html.twig' %}
{% endblock %}
", "@Dam/dam/index.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/src/FishAndPlaces/UI/Bundle/DamBundle/Resources/views/dam/index.html.twig");
    }
}
