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
        $__internal_b120a53687096378959109343bf47e69d4bd0540f7a5b658e61f4c9548d4a081 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b120a53687096378959109343bf47e69d4bd0540f7a5b658e61f4c9548d4a081->enter($__internal_b120a53687096378959109343bf47e69d4bd0540f7a5b658e61f4c9548d4a081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/dam/activate.html.twig"));

        $__internal_19afaa12fb81a53e4b28f6a512051ec068423e176deb5f8e9752d07884122d00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19afaa12fb81a53e4b28f6a512051ec068423e176deb5f8e9752d07884122d00->enter($__internal_19afaa12fb81a53e4b28f6a512051ec068423e176deb5f8e9752d07884122d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/dam/activate.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b120a53687096378959109343bf47e69d4bd0540f7a5b658e61f4c9548d4a081->leave($__internal_b120a53687096378959109343bf47e69d4bd0540f7a5b658e61f4c9548d4a081_prof);

        
        $__internal_19afaa12fb81a53e4b28f6a512051ec068423e176deb5f8e9752d07884122d00->leave($__internal_19afaa12fb81a53e4b28f6a512051ec068423e176deb5f8e9752d07884122d00_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_116fd76a926394e212bb66189e9c536227b1ed2f0eb3d1e9c80a61df046f162b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_116fd76a926394e212bb66189e9c536227b1ed2f0eb3d1e9c80a61df046f162b->enter($__internal_116fd76a926394e212bb66189e9c536227b1ed2f0eb3d1e9c80a61df046f162b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_36def5f2b8937de914492a82520e28d120847dab647e3ae2564965a70aa700e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36def5f2b8937de914492a82520e28d120847dab647e3ae2564965a70aa700e7->enter($__internal_36def5f2b8937de914492a82520e28d120847dab647e3ae2564965a70aa700e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_36def5f2b8937de914492a82520e28d120847dab647e3ae2564965a70aa700e7->leave($__internal_36def5f2b8937de914492a82520e28d120847dab647e3ae2564965a70aa700e7_prof);

        
        $__internal_116fd76a926394e212bb66189e9c536227b1ed2f0eb3d1e9c80a61df046f162b->leave($__internal_116fd76a926394e212bb66189e9c536227b1ed2f0eb3d1e9c80a61df046f162b_prof);

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
