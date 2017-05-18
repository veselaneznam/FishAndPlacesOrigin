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
        $__internal_ceed33f56e2d2d55a8f3281a102ad050e56c082d356d5db3649394292290a011 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ceed33f56e2d2d55a8f3281a102ad050e56c082d356d5db3649394292290a011->enter($__internal_ceed33f56e2d2d55a8f3281a102ad050e56c082d356d5db3649394292290a011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/entity.html.twig"));

        $__internal_06a35e5ca347a96b6e0ccb5e292d918dc910e894729ad6845bdc6236c25a1977 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06a35e5ca347a96b6e0ccb5e292d918dc910e894729ad6845bdc6236c25a1977->enter($__internal_06a35e5ca347a96b6e0ccb5e292d918dc910e894729ad6845bdc6236c25a1977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/entity.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ceed33f56e2d2d55a8f3281a102ad050e56c082d356d5db3649394292290a011->leave($__internal_ceed33f56e2d2d55a8f3281a102ad050e56c082d356d5db3649394292290a011_prof);

        
        $__internal_06a35e5ca347a96b6e0ccb5e292d918dc910e894729ad6845bdc6236c25a1977->leave($__internal_06a35e5ca347a96b6e0ccb5e292d918dc910e894729ad6845bdc6236c25a1977_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_8606187eb0c97420a68226d3055e3510d05fe3e5ee7708b7bf0a5129d7b7eedc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8606187eb0c97420a68226d3055e3510d05fe3e5ee7708b7bf0a5129d7b7eedc->enter($__internal_8606187eb0c97420a68226d3055e3510d05fe3e5ee7708b7bf0a5129d7b7eedc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d0bc8db41e6447fec28259426018c32e74e37ab211f9a0de311c5e4ac59253eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0bc8db41e6447fec28259426018c32e74e37ab211f9a0de311c5e4ac59253eb->enter($__internal_d0bc8db41e6447fec28259426018c32e74e37ab211f9a0de311c5e4ac59253eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d0bc8db41e6447fec28259426018c32e74e37ab211f9a0de311c5e4ac59253eb->leave($__internal_d0bc8db41e6447fec28259426018c32e74e37ab211f9a0de311c5e4ac59253eb_prof);

        
        $__internal_8606187eb0c97420a68226d3055e3510d05fe3e5ee7708b7bf0a5129d7b7eedc->leave($__internal_8606187eb0c97420a68226d3055e3510d05fe3e5ee7708b7bf0a5129d7b7eedc_prof);

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
