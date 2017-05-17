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
        $__internal_f49ca912950b976ee918ef4195a65b47dd89cebd98df193422b3baaead51afd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f49ca912950b976ee918ef4195a65b47dd89cebd98df193422b3baaead51afd8->enter($__internal_f49ca912950b976ee918ef4195a65b47dd89cebd98df193422b3baaead51afd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/dam/deactivate.html.twig"));

        $__internal_2e04b2ef3d63cc509912de75da84ccea271c4116aa0e194eb7ffc46229acc38a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e04b2ef3d63cc509912de75da84ccea271c4116aa0e194eb7ffc46229acc38a->enter($__internal_2e04b2ef3d63cc509912de75da84ccea271c4116aa0e194eb7ffc46229acc38a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/dam/deactivate.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f49ca912950b976ee918ef4195a65b47dd89cebd98df193422b3baaead51afd8->leave($__internal_f49ca912950b976ee918ef4195a65b47dd89cebd98df193422b3baaead51afd8_prof);

        
        $__internal_2e04b2ef3d63cc509912de75da84ccea271c4116aa0e194eb7ffc46229acc38a->leave($__internal_2e04b2ef3d63cc509912de75da84ccea271c4116aa0e194eb7ffc46229acc38a_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_47b5644ce26d9d377f288de58b4b6e946df88edf7ca602acd1ffb6a6e33139c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47b5644ce26d9d377f288de58b4b6e946df88edf7ca602acd1ffb6a6e33139c0->enter($__internal_47b5644ce26d9d377f288de58b4b6e946df88edf7ca602acd1ffb6a6e33139c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8ff9cdb8d2082422bfd6b385cb0ceaa0cdf43e2f9cb2cc3b66553faa97955802 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ff9cdb8d2082422bfd6b385cb0ceaa0cdf43e2f9cb2cc3b66553faa97955802->enter($__internal_8ff9cdb8d2082422bfd6b385cb0ceaa0cdf43e2f9cb2cc3b66553faa97955802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8ff9cdb8d2082422bfd6b385cb0ceaa0cdf43e2f9cb2cc3b66553faa97955802->leave($__internal_8ff9cdb8d2082422bfd6b385cb0ceaa0cdf43e2f9cb2cc3b66553faa97955802_prof);

        
        $__internal_47b5644ce26d9d377f288de58b4b6e946df88edf7ca602acd1ffb6a6e33139c0->leave($__internal_47b5644ce26d9d377f288de58b4b6e946df88edf7ca602acd1ffb6a6e33139c0_prof);

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
