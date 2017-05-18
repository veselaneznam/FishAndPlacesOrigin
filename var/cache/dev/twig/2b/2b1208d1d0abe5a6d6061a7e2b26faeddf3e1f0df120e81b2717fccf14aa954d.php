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
        $__internal_19dedc499c0b4c2f3ee27f849ef1bf40764fc5ba18d2f8bf12649286e7c4b9b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19dedc499c0b4c2f3ee27f849ef1bf40764fc5ba18d2f8bf12649286e7c4b9b6->enter($__internal_19dedc499c0b4c2f3ee27f849ef1bf40764fc5ba18d2f8bf12649286e7c4b9b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/dam/deactivate.html.twig"));

        $__internal_8514aeff698982258e4cbda5e5bc75159c15da7ac63081c1cbcb0cf2d848fa2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8514aeff698982258e4cbda5e5bc75159c15da7ac63081c1cbcb0cf2d848fa2c->enter($__internal_8514aeff698982258e4cbda5e5bc75159c15da7ac63081c1cbcb0cf2d848fa2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/dam/deactivate.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19dedc499c0b4c2f3ee27f849ef1bf40764fc5ba18d2f8bf12649286e7c4b9b6->leave($__internal_19dedc499c0b4c2f3ee27f849ef1bf40764fc5ba18d2f8bf12649286e7c4b9b6_prof);

        
        $__internal_8514aeff698982258e4cbda5e5bc75159c15da7ac63081c1cbcb0cf2d848fa2c->leave($__internal_8514aeff698982258e4cbda5e5bc75159c15da7ac63081c1cbcb0cf2d848fa2c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_4306dc362c75bf3e4abe06dfc0d035a1917c6ab3e8b9a30b74ce91cd1ad55d5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4306dc362c75bf3e4abe06dfc0d035a1917c6ab3e8b9a30b74ce91cd1ad55d5f->enter($__internal_4306dc362c75bf3e4abe06dfc0d035a1917c6ab3e8b9a30b74ce91cd1ad55d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_25fc5452929c223685e39c0011c363d049ac487f048454d991083088a34dce86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25fc5452929c223685e39c0011c363d049ac487f048454d991083088a34dce86->enter($__internal_25fc5452929c223685e39c0011c363d049ac487f048454d991083088a34dce86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_25fc5452929c223685e39c0011c363d049ac487f048454d991083088a34dce86->leave($__internal_25fc5452929c223685e39c0011c363d049ac487f048454d991083088a34dce86_prof);

        
        $__internal_4306dc362c75bf3e4abe06dfc0d035a1917c6ab3e8b9a30b74ce91cd1ad55d5f->leave($__internal_4306dc362c75bf3e4abe06dfc0d035a1917c6ab3e8b9a30b74ce91cd1ad55d5f_prof);

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
