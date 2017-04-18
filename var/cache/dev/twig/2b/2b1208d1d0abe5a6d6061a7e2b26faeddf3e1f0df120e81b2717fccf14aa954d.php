<?php

/* @Admin/dam/deactivate.html.twig */
class __TwigTemplate_224ee2b752af0953191365cf4f3bfa92037d0b069c01bd10deff82a1de2f293b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Admin/base.html.twig", "@Admin/dam/deactivate.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a833fb316e580b59d4893031cb7bac8699fb660929d0d177a4ea13b7fbc10c17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a833fb316e580b59d4893031cb7bac8699fb660929d0d177a4ea13b7fbc10c17->enter($__internal_a833fb316e580b59d4893031cb7bac8699fb660929d0d177a4ea13b7fbc10c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/dam/deactivate.html.twig"));

        $__internal_e2a2dd7d7b3b492799fd27462d5507a63a6fbec00d847f9d8f94692b8cdfd00d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2a2dd7d7b3b492799fd27462d5507a63a6fbec00d847f9d8f94692b8cdfd00d->enter($__internal_e2a2dd7d7b3b492799fd27462d5507a63a6fbec00d847f9d8f94692b8cdfd00d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/dam/deactivate.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a833fb316e580b59d4893031cb7bac8699fb660929d0d177a4ea13b7fbc10c17->leave($__internal_a833fb316e580b59d4893031cb7bac8699fb660929d0d177a4ea13b7fbc10c17_prof);

        
        $__internal_e2a2dd7d7b3b492799fd27462d5507a63a6fbec00d847f9d8f94692b8cdfd00d->leave($__internal_e2a2dd7d7b3b492799fd27462d5507a63a6fbec00d847f9d8f94692b8cdfd00d_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e3338cd05e12e8ec9e4886e8dd81492feaeb436227e36447701999cb9d1a465 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e3338cd05e12e8ec9e4886e8dd81492feaeb436227e36447701999cb9d1a465->enter($__internal_5e3338cd05e12e8ec9e4886e8dd81492feaeb436227e36447701999cb9d1a465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9e36d968885ca1e269bd67616025a51b305049f32488e7a328fb4a1016dd86ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e36d968885ca1e269bd67616025a51b305049f32488e7a328fb4a1016dd86ff->enter($__internal_9e36d968885ca1e269bd67616025a51b305049f32488e7a328fb4a1016dd86ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
        // line 4
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["deactivate_form"]) ? $context["deactivate_form"] : $this->getContext($context, "deactivate_form")), 'form_start');
        echo "
<div class=\"uk-modal-header\">
    <h3 class=\"uk-modal-title\">Deactivate this Dam?</h3>
</div>
<p>
    Are you sure you want to deactivate  '";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dam"]) ? $context["dam"] : $this->getContext($context, "dam")), "name", array()), "html", null, true);
        echo "'?<br/>
    This cannot be undone.
</p>
<div class=\"uk-modal-footer uk-text-right\">
    <div>
        <button type=\"submit\" class=\"md-btn md-btn-danger\" title=\"Click to proceed!\">
            <i class=\"uk-icon-trash\"></i> Deactivate
        </button>
        <button type=\"reset\" class=\"md-btn md-btn-warning uk-modal-close\">Cancel</button>
    </div>
</div>
";
        // line 20
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["deactivate_form"]) ? $context["deactivate_form"] : $this->getContext($context, "deactivate_form")), 'form_end');
        echo "
";
        
        $__internal_9e36d968885ca1e269bd67616025a51b305049f32488e7a328fb4a1016dd86ff->leave($__internal_9e36d968885ca1e269bd67616025a51b305049f32488e7a328fb4a1016dd86ff_prof);

        
        $__internal_5e3338cd05e12e8ec9e4886e8dd81492feaeb436227e36447701999cb9d1a465->leave($__internal_5e3338cd05e12e8ec9e4886e8dd81492feaeb436227e36447701999cb9d1a465_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/dam/deactivate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 20,  62 => 9,  54 => 4,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Admin/base.html.twig' %}
{% block body %}
    {{ parent() }}
{{ form_start(deactivate_form) }}
<div class=\"uk-modal-header\">
    <h3 class=\"uk-modal-title\">Deactivate this Dam?</h3>
</div>
<p>
    Are you sure you want to deactivate  '{{ dam.name }}'?<br/>
    This cannot be undone.
</p>
<div class=\"uk-modal-footer uk-text-right\">
    <div>
        <button type=\"submit\" class=\"md-btn md-btn-danger\" title=\"Click to proceed!\">
            <i class=\"uk-icon-trash\"></i> Deactivate
        </button>
        <button type=\"reset\" class=\"md-btn md-btn-warning uk-modal-close\">Cancel</button>
    </div>
</div>
{{ form_end(deactivate_form) }}
{% endblock %}
", "@Admin/dam/deactivate.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/src/FishAndPlaces/UI/Bundle/AdminBundle/Resources/views/dam/deactivate.html.twig");
    }
}
