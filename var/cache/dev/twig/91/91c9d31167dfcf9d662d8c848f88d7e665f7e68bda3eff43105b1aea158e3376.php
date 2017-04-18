<?php

/* @User/entity.html.twig */
class __TwigTemplate_3b9e6c59de6999f5b3a18d13a48fdf56b17ad1ff52c1aeb8eff422717cc7e019 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Shop/base.html.twig", "@User/entity.html.twig", 1);
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
        $__internal_39137c4911bf4dbaee7bec9be8356ce28d282b2c1efddd2dc8d17bc6b1bf4eec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39137c4911bf4dbaee7bec9be8356ce28d282b2c1efddd2dc8d17bc6b1bf4eec->enter($__internal_39137c4911bf4dbaee7bec9be8356ce28d282b2c1efddd2dc8d17bc6b1bf4eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/entity.html.twig"));

        $__internal_f982b6c7f6fdf7a4c9ccbe9846b8a8cf91896a1816486d5eba926f484112bfdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f982b6c7f6fdf7a4c9ccbe9846b8a8cf91896a1816486d5eba926f484112bfdd->enter($__internal_f982b6c7f6fdf7a4c9ccbe9846b8a8cf91896a1816486d5eba926f484112bfdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/entity.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39137c4911bf4dbaee7bec9be8356ce28d282b2c1efddd2dc8d17bc6b1bf4eec->leave($__internal_39137c4911bf4dbaee7bec9be8356ce28d282b2c1efddd2dc8d17bc6b1bf4eec_prof);

        
        $__internal_f982b6c7f6fdf7a4c9ccbe9846b8a8cf91896a1816486d5eba926f484112bfdd->leave($__internal_f982b6c7f6fdf7a4c9ccbe9846b8a8cf91896a1816486d5eba926f484112bfdd_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c727672b7e25de8df69127bc5437ffa1f93cdd753e1299f747831b411de948eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c727672b7e25de8df69127bc5437ffa1f93cdd753e1299f747831b411de948eb->enter($__internal_c727672b7e25de8df69127bc5437ffa1f93cdd753e1299f747831b411de948eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_41cbfe95e5fd3ce9c995ad2157e625a08d206ffb9ef966a327e463b8b6ed3168 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41cbfe95e5fd3ce9c995ad2157e625a08d206ffb9ef966a327e463b8b6ed3168->enter($__internal_41cbfe95e5fd3ce9c995ad2157e625a08d206ffb9ef966a327e463b8b6ed3168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_41cbfe95e5fd3ce9c995ad2157e625a08d206ffb9ef966a327e463b8b6ed3168->leave($__internal_41cbfe95e5fd3ce9c995ad2157e625a08d206ffb9ef966a327e463b8b6ed3168_prof);

        
        $__internal_c727672b7e25de8df69127bc5437ffa1f93cdd753e1299f747831b411de948eb->leave($__internal_c727672b7e25de8df69127bc5437ffa1f93cdd753e1299f747831b411de948eb_prof);

    }

    public function getTemplateName()
    {
        return "@User/entity.html.twig";
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
", "@User/entity.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/src/FishAndPlaces/UI/Bundle/UserBundle/Resources/views/entity.html.twig");
    }
}
