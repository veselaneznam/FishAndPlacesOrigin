<?php

/* @Admin/dam/deactivate.html.twig */
class __TwigTemplate_38162155c15340670e2e0ac9e4d01e517f99607157bb3441c7d64834795ee614 extends Twig_Template
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
        $__internal_ae81e9cf9f019d3e963cf214875c1aa57adc4d86d10e8531320faef30a7fbefb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae81e9cf9f019d3e963cf214875c1aa57adc4d86d10e8531320faef30a7fbefb->enter($__internal_ae81e9cf9f019d3e963cf214875c1aa57adc4d86d10e8531320faef30a7fbefb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/dam/deactivate.html.twig"));

        $__internal_9e0285e51750cfdff1dfc4905b438cd78aff982bee24ecd14df3ec6a62bcf6ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e0285e51750cfdff1dfc4905b438cd78aff982bee24ecd14df3ec6a62bcf6ee->enter($__internal_9e0285e51750cfdff1dfc4905b438cd78aff982bee24ecd14df3ec6a62bcf6ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/dam/deactivate.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae81e9cf9f019d3e963cf214875c1aa57adc4d86d10e8531320faef30a7fbefb->leave($__internal_ae81e9cf9f019d3e963cf214875c1aa57adc4d86d10e8531320faef30a7fbefb_prof);

        
        $__internal_9e0285e51750cfdff1dfc4905b438cd78aff982bee24ecd14df3ec6a62bcf6ee->leave($__internal_9e0285e51750cfdff1dfc4905b438cd78aff982bee24ecd14df3ec6a62bcf6ee_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_b7ac1811e35202023bda5e4e38d42c66e3597b07718cd75094691dc92a10c6b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7ac1811e35202023bda5e4e38d42c66e3597b07718cd75094691dc92a10c6b1->enter($__internal_b7ac1811e35202023bda5e4e38d42c66e3597b07718cd75094691dc92a10c6b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a16679e0f2a63bb86c143ed8a9a6b243520e565fa42e35b7534ca8938c8b7303 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a16679e0f2a63bb86c143ed8a9a6b243520e565fa42e35b7534ca8938c8b7303->enter($__internal_a16679e0f2a63bb86c143ed8a9a6b243520e565fa42e35b7534ca8938c8b7303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
        // line 4
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["deactivate_form"] ?? $this->getContext($context, "deactivate_form")), 'form_start');
        echo "
<div class=\"uk-modal-header\">
    <h3 class=\"uk-modal-title\">Deactivate this Dam?</h3>
</div>
<p>
    Are you sure you want to deactivate  '";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dam"] ?? $this->getContext($context, "dam")), "name", array()), "html", null, true);
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["deactivate_form"] ?? $this->getContext($context, "deactivate_form")), 'form_end');
        echo "
";
        
        $__internal_a16679e0f2a63bb86c143ed8a9a6b243520e565fa42e35b7534ca8938c8b7303->leave($__internal_a16679e0f2a63bb86c143ed8a9a6b243520e565fa42e35b7534ca8938c8b7303_prof);

        
        $__internal_b7ac1811e35202023bda5e4e38d42c66e3597b07718cd75094691dc92a10c6b1->leave($__internal_b7ac1811e35202023bda5e4e38d42c66e3597b07718cd75094691dc92a10c6b1_prof);

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
", "@Admin/dam/deactivate.html.twig", "/var/www/FishAndPlaces/src/FishAndPlaces/UI/Bundle/AdminBundle/Resources/views/dam/deactivate.html.twig");
    }
}
