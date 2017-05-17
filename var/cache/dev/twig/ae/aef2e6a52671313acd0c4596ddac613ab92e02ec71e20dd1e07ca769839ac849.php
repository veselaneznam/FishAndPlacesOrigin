<?php

/* @Shop/entity.html.twig */
class __TwigTemplate_99898daf56ac53cabe4b6bd5e6454143d6a8dbe5a937c233c715c8cdc5ca3b3b extends Twig_Template
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
        $__internal_9c0e1859ee90e52ce2b19e37710c1014146763e0501874f80916d1c47385f5bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c0e1859ee90e52ce2b19e37710c1014146763e0501874f80916d1c47385f5bf->enter($__internal_9c0e1859ee90e52ce2b19e37710c1014146763e0501874f80916d1c47385f5bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Shop/entity.html.twig"));

        $__internal_43c9ba5c7afc317997e7de43bcd115c45520ccc4a4dba8b1f18eef8a44d2f54c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43c9ba5c7afc317997e7de43bcd115c45520ccc4a4dba8b1f18eef8a44d2f54c->enter($__internal_43c9ba5c7afc317997e7de43bcd115c45520ccc4a4dba8b1f18eef8a44d2f54c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Shop/entity.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c0e1859ee90e52ce2b19e37710c1014146763e0501874f80916d1c47385f5bf->leave($__internal_9c0e1859ee90e52ce2b19e37710c1014146763e0501874f80916d1c47385f5bf_prof);

        
        $__internal_43c9ba5c7afc317997e7de43bcd115c45520ccc4a4dba8b1f18eef8a44d2f54c->leave($__internal_43c9ba5c7afc317997e7de43bcd115c45520ccc4a4dba8b1f18eef8a44d2f54c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_0c9167b8c7c099dbd09aa5a3da99cfcc657ff349da9bef6608d1d03ecc888e84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c9167b8c7c099dbd09aa5a3da99cfcc657ff349da9bef6608d1d03ecc888e84->enter($__internal_0c9167b8c7c099dbd09aa5a3da99cfcc657ff349da9bef6608d1d03ecc888e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3a1aaaf91ed33e20407e0c83599293301151a6e5f8a0c5c45d82a0b4b2b95058 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a1aaaf91ed33e20407e0c83599293301151a6e5f8a0c5c45d82a0b4b2b95058->enter($__internal_3a1aaaf91ed33e20407e0c83599293301151a6e5f8a0c5c45d82a0b4b2b95058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <h3>";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</h3>
                ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

                ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                <button type=\"submit\" class=\"btn btn-primary\">Save</button>
                <button type=\"reset\" class=\"btn btn-danger\">Cancel</button>
                <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["backUrl"]) ? $context["backUrl"] : $this->getContext($context, "backUrl")), "html", null, true);
        echo "\" class=\"btn btn-info\" role=\"button\">Back</a>
                ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div></div></div>
";
        
        $__internal_3a1aaaf91ed33e20407e0c83599293301151a6e5f8a0c5c45d82a0b4b2b95058->leave($__internal_3a1aaaf91ed33e20407e0c83599293301151a6e5f8a0c5c45d82a0b4b2b95058_prof);

        
        $__internal_0c9167b8c7c099dbd09aa5a3da99cfcc657ff349da9bef6608d1d03ecc888e84->leave($__internal_0c9167b8c7c099dbd09aa5a3da99cfcc657ff349da9bef6608d1d03ecc888e84_prof);

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
", "@Shop/entity.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/src/FishAndPlaces/UI/Bundle/ShopBundle/Resources/views/entity.html.twig");
    }
}
