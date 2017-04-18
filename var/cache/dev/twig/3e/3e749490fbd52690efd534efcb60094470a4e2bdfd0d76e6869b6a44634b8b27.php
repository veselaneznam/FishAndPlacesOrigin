<?php

/* @Dam/dam/index.html.twig */
class __TwigTemplate_ab4bef9403d7519f3c87277482d7a6cc918275c6a1f637bdcd588a824e3f7301 extends Twig_Template
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
        $__internal_6809182e6ae80c1ce27cc9fe3f0c244f10b76eec31d2ef34db56627f1b4bdc07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6809182e6ae80c1ce27cc9fe3f0c244f10b76eec31d2ef34db56627f1b4bdc07->enter($__internal_6809182e6ae80c1ce27cc9fe3f0c244f10b76eec31d2ef34db56627f1b4bdc07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Dam/dam/index.html.twig"));

        $__internal_50b97168e2423835702f428691941d72c3d774fa7e5932367e556ab8500bfd05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50b97168e2423835702f428691941d72c3d774fa7e5932367e556ab8500bfd05->enter($__internal_50b97168e2423835702f428691941d72c3d774fa7e5932367e556ab8500bfd05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Dam/dam/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6809182e6ae80c1ce27cc9fe3f0c244f10b76eec31d2ef34db56627f1b4bdc07->leave($__internal_6809182e6ae80c1ce27cc9fe3f0c244f10b76eec31d2ef34db56627f1b4bdc07_prof);

        
        $__internal_50b97168e2423835702f428691941d72c3d774fa7e5932367e556ab8500bfd05->leave($__internal_50b97168e2423835702f428691941d72c3d774fa7e5932367e556ab8500bfd05_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_6e0d1ff424f1a5b6ff976a4ae4858e5b43e812a25cf4679cea645cadf58bb2bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e0d1ff424f1a5b6ff976a4ae4858e5b43e812a25cf4679cea645cadf58bb2bb->enter($__internal_6e0d1ff424f1a5b6ff976a4ae4858e5b43e812a25cf4679cea645cadf58bb2bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_5e5e55454d4263707f2d27aa29e829a2fc1c598452a5d5093af76bdaac13c17c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e5e55454d4263707f2d27aa29e829a2fc1c598452a5d5093af76bdaac13c17c->enter($__internal_5e5e55454d4263707f2d27aa29e829a2fc1c598452a5d5093af76bdaac13c17c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "
    ";
        // line 4
        $this->loadTemplate("@Dam/dam/list.html.twig", "@Dam/dam/index.html.twig", 4)->display($context);
        
        $__internal_5e5e55454d4263707f2d27aa29e829a2fc1c598452a5d5093af76bdaac13c17c->leave($__internal_5e5e55454d4263707f2d27aa29e829a2fc1c598452a5d5093af76bdaac13c17c_prof);

        
        $__internal_6e0d1ff424f1a5b6ff976a4ae4858e5b43e812a25cf4679cea645cadf58bb2bb->leave($__internal_6e0d1ff424f1a5b6ff976a4ae4858e5b43e812a25cf4679cea645cadf58bb2bb_prof);

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
