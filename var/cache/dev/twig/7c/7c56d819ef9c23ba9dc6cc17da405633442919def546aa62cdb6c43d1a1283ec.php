<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_cb49853ca5987546862d8f0c4f12703f266852bb0ec72380a04eb5eb984d5eee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c666f36cc63aeb9d3229e540b50f9561f17dfc4e829bca18e42e83fe826c7b4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c666f36cc63aeb9d3229e540b50f9561f17dfc4e829bca18e42e83fe826c7b4d->enter($__internal_c666f36cc63aeb9d3229e540b50f9561f17dfc4e829bca18e42e83fe826c7b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $__internal_4a25e33a3531adf97da83df6ac078fd0d8a1a5dfb2fe1d2212bc58c89fc0c1e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a25e33a3531adf97da83df6ac078fd0d8a1a5dfb2fe1d2212bc58c89fc0c1e1->enter($__internal_4a25e33a3531adf97da83df6ac078fd0d8a1a5dfb2fe1d2212bc58c89fc0c1e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c666f36cc63aeb9d3229e540b50f9561f17dfc4e829bca18e42e83fe826c7b4d->leave($__internal_c666f36cc63aeb9d3229e540b50f9561f17dfc4e829bca18e42e83fe826c7b4d_prof);

        
        $__internal_4a25e33a3531adf97da83df6ac078fd0d8a1a5dfb2fe1d2212bc58c89fc0c1e1->leave($__internal_4a25e33a3531adf97da83df6ac078fd0d8a1a5dfb2fe1d2212bc58c89fc0c1e1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_95f08b6e66ddb72ab4982d6bf2f9b7329496d02ae25fdfb37cb44ea2e997b8e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95f08b6e66ddb72ab4982d6bf2f9b7329496d02ae25fdfb37cb44ea2e997b8e4->enter($__internal_95f08b6e66ddb72ab4982d6bf2f9b7329496d02ae25fdfb37cb44ea2e997b8e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_566d8e12ec761b55bb09b988f44ff7dc5da460a75d3d33c55a90d80fe842f124 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_566d8e12ec761b55bb09b988f44ff7dc5da460a75d3d33c55a90d80fe842f124->enter($__internal_566d8e12ec761b55bb09b988f44ff7dc5da460a75d3d33c55a90d80fe842f124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_566d8e12ec761b55bb09b988f44ff7dc5da460a75d3d33c55a90d80fe842f124->leave($__internal_566d8e12ec761b55bb09b988f44ff7dc5da460a75d3d33c55a90d80fe842f124_prof);

        
        $__internal_95f08b6e66ddb72ab4982d6bf2f9b7329496d02ae25fdfb37cb44ea2e997b8e4->leave($__internal_95f08b6e66ddb72ab4982d6bf2f9b7329496d02ae25fdfb37cb44ea2e997b8e4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/list.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
