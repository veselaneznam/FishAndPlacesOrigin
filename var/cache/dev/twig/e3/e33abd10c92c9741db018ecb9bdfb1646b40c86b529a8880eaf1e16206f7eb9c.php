<?php

/* @Admin/dam/activate.html.twig */
class __TwigTemplate_ab75502e7f176559cb229e32a67542626dbf81d11da61cd44c00985ca0e8745d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Admin/base.html.twig", "@Admin/dam/activate.html.twig", 1);
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
        $__internal_146dd7c9117485df1a2dd6afd7de4046881ef2e2e61cb5112c2a4ee07a40893e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_146dd7c9117485df1a2dd6afd7de4046881ef2e2e61cb5112c2a4ee07a40893e->enter($__internal_146dd7c9117485df1a2dd6afd7de4046881ef2e2e61cb5112c2a4ee07a40893e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/dam/activate.html.twig"));

        $__internal_24f9bacf09c2b6f1d67e0d65bf94e072ad73834b6e92e162074190e8f50aa1c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24f9bacf09c2b6f1d67e0d65bf94e072ad73834b6e92e162074190e8f50aa1c7->enter($__internal_24f9bacf09c2b6f1d67e0d65bf94e072ad73834b6e92e162074190e8f50aa1c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/dam/activate.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_146dd7c9117485df1a2dd6afd7de4046881ef2e2e61cb5112c2a4ee07a40893e->leave($__internal_146dd7c9117485df1a2dd6afd7de4046881ef2e2e61cb5112c2a4ee07a40893e_prof);

        
        $__internal_24f9bacf09c2b6f1d67e0d65bf94e072ad73834b6e92e162074190e8f50aa1c7->leave($__internal_24f9bacf09c2b6f1d67e0d65bf94e072ad73834b6e92e162074190e8f50aa1c7_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_111c780d95b125e37af0e2d84ff4605d9d2835c914dcb08f272fe924b0e8d0fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_111c780d95b125e37af0e2d84ff4605d9d2835c914dcb08f272fe924b0e8d0fe->enter($__internal_111c780d95b125e37af0e2d84ff4605d9d2835c914dcb08f272fe924b0e8d0fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_212ef16acf8486247b1033c731044bc68c976c134a31ee4cbaf26c879ff1ad9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_212ef16acf8486247b1033c731044bc68c976c134a31ee4cbaf26c879ff1ad9d->enter($__internal_212ef16acf8486247b1033c731044bc68c976c134a31ee4cbaf26c879ff1ad9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
        // line 4
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["activate_form"]) ? $context["activate_form"] : $this->getContext($context, "activate_form")), 'form_start');
        echo "
<div class=\"uk-modal-header\">
    <h3 class=\"uk-modal-title\">Activate this Dam?</h3>
</div>
<p>
    Are you sure you want to activate '";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dam"]) ? $context["dam"] : $this->getContext($context, "dam")), "name", array()), "html", null, true);
        echo "'?<br/>
</p>
<div class=\"uk-modal-footer uk-text-right\">
    <div>
        <button type=\"submit\" class=\"md-btn md-btn-danger\" title=\"Click to proceed!\">
            <i class=\"uk-icon-trash\"></i> Activate
        </button>
        <button type=\"reset\" class=\"md-btn md-btn-warning uk-modal-close\">Cancel</button>
    </div>
</div>
";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["activate_form"]) ? $context["activate_form"] : $this->getContext($context, "activate_form")), 'form_end');
        echo "
";
        
        $__internal_212ef16acf8486247b1033c731044bc68c976c134a31ee4cbaf26c879ff1ad9d->leave($__internal_212ef16acf8486247b1033c731044bc68c976c134a31ee4cbaf26c879ff1ad9d_prof);

        
        $__internal_111c780d95b125e37af0e2d84ff4605d9d2835c914dcb08f272fe924b0e8d0fe->leave($__internal_111c780d95b125e37af0e2d84ff4605d9d2835c914dcb08f272fe924b0e8d0fe_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/dam/activate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 19,  62 => 9,  54 => 4,  49 => 3,  40 => 2,  11 => 1,);
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
{{ form_start(activate_form) }}
<div class=\"uk-modal-header\">
    <h3 class=\"uk-modal-title\">Activate this Dam?</h3>
</div>
<p>
    Are you sure you want to activate '{{ dam.name }}'?<br/>
</p>
<div class=\"uk-modal-footer uk-text-right\">
    <div>
        <button type=\"submit\" class=\"md-btn md-btn-danger\" title=\"Click to proceed!\">
            <i class=\"uk-icon-trash\"></i> Activate
        </button>
        <button type=\"reset\" class=\"md-btn md-btn-warning uk-modal-close\">Cancel</button>
    </div>
</div>
{{ form_end(activate_form) }}
{% endblock %}
", "@Admin/dam/activate.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/src/FishAndPlaces/UI/Bundle/AdminBundle/Resources/views/dam/activate.html.twig");
    }
}
