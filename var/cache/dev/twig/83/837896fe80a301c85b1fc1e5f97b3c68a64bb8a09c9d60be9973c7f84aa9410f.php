<?php

/* @Shop/entity.html.twig */
class __TwigTemplate_88f8c259046838fbd18e9e656b4dbc3a4a9cbe6a61cc4d1aa64db970eba65e9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Shop/base.html.twig", "@Shop/entity.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Shop/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b22ee1a9d1a1bceaaf0435210deb65cd502d80dbae37b89456a842f0285f6749 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b22ee1a9d1a1bceaaf0435210deb65cd502d80dbae37b89456a842f0285f6749->enter($__internal_b22ee1a9d1a1bceaaf0435210deb65cd502d80dbae37b89456a842f0285f6749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Shop/entity.html.twig"));

        $__internal_bafc1aa3c7a82398f23ddc0fbcd34709170d56374fea17db54b425eea6241580 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bafc1aa3c7a82398f23ddc0fbcd34709170d56374fea17db54b425eea6241580->enter($__internal_bafc1aa3c7a82398f23ddc0fbcd34709170d56374fea17db54b425eea6241580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Shop/entity.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b22ee1a9d1a1bceaaf0435210deb65cd502d80dbae37b89456a842f0285f6749->leave($__internal_b22ee1a9d1a1bceaaf0435210deb65cd502d80dbae37b89456a842f0285f6749_prof);

        
        $__internal_bafc1aa3c7a82398f23ddc0fbcd34709170d56374fea17db54b425eea6241580->leave($__internal_bafc1aa3c7a82398f23ddc0fbcd34709170d56374fea17db54b425eea6241580_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_23543a8feddcb28c33d8d1ae664fa54ff6847643a80ab34b7c448d7474e95acb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23543a8feddcb28c33d8d1ae664fa54ff6847643a80ab34b7c448d7474e95acb->enter($__internal_23543a8feddcb28c33d8d1ae664fa54ff6847643a80ab34b7c448d7474e95acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c8cb7af8b05d81d8fbdae6f43329996721ae4540d5ef3de8e180b1ecf32cc53c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8cb7af8b05d81d8fbdae6f43329996721ae4540d5ef3de8e180b1ecf32cc53c->enter($__internal_c8cb7af8b05d81d8fbdae6f43329996721ae4540d5ef3de8e180b1ecf32cc53c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <h3>";
        // line 7
        echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
        echo "</h3>
                ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

                ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
                <button type=\"submit\" class=\"btn btn-primary\">Save</button>
                <button type=\"reset\" class=\"btn btn-danger\">Cancel</button>
                <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["backUrl"] ?? $this->getContext($context, "backUrl")), "html", null, true);
        echo "\" class=\"btn btn-info\" role=\"button\">Back</a>
                ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div></div></div>
";
        
        $__internal_c8cb7af8b05d81d8fbdae6f43329996721ae4540d5ef3de8e180b1ecf32cc53c->leave($__internal_c8cb7af8b05d81d8fbdae6f43329996721ae4540d5ef3de8e180b1ecf32cc53c_prof);

        
        $__internal_23543a8feddcb28c33d8d1ae664fa54ff6847643a80ab34b7c448d7474e95acb->leave($__internal_23543a8feddcb28c33d8d1ae664fa54ff6847643a80ab34b7c448d7474e95acb_prof);

    }

    public function getTemplateName()
    {
        return "@Shop/entity.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 14,  72 => 13,  66 => 10,  61 => 8,  57 => 7,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Shop/base.html.twig' %}
{% block body %}
    {{ parent() }}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <h3>{{ title }}</h3>
                {{ form_start(form) }}

                {{ form_widget(form) }}
                <button type=\"submit\" class=\"btn btn-primary\">Save</button>
                <button type=\"reset\" class=\"btn btn-danger\">Cancel</button>
                <a href=\"{{ backUrl }}\" class=\"btn btn-info\" role=\"button\">Back</a>
                {{ form_end(form) }}
            </div></div></div>
{% endblock %}
", "@Shop/entity.html.twig", "/var/www/FishAndPlaces/src/FishAndPlaces/UI/Bundle/ShopBundle/Resources/views/entity.html.twig");
    }
}
