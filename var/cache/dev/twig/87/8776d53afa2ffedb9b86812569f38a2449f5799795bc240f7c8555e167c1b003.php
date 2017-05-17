<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_2560045784761d78b2542d229be38390fd159259a3a6229f28e5a3cca5cf3f04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_38f2368997f1d0fb2ec33cee5acd639aa602483ff68d30f47a9a9f1c17bdbefe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38f2368997f1d0fb2ec33cee5acd639aa602483ff68d30f47a9a9f1c17bdbefe->enter($__internal_38f2368997f1d0fb2ec33cee5acd639aa602483ff68d30f47a9a9f1c17bdbefe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $__internal_fde31ad0c3ce7482c8ea837448c3a465ee331ba632c05b55d379c3dd2e173172 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fde31ad0c3ce7482c8ea837448c3a465ee331ba632c05b55d379c3dd2e173172->enter($__internal_fde31ad0c3ce7482c8ea837448c3a465ee331ba632c05b55d379c3dd2e173172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38f2368997f1d0fb2ec33cee5acd639aa602483ff68d30f47a9a9f1c17bdbefe->leave($__internal_38f2368997f1d0fb2ec33cee5acd639aa602483ff68d30f47a9a9f1c17bdbefe_prof);

        
        $__internal_fde31ad0c3ce7482c8ea837448c3a465ee331ba632c05b55d379c3dd2e173172->leave($__internal_fde31ad0c3ce7482c8ea837448c3a465ee331ba632c05b55d379c3dd2e173172_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cb516fc06d2e509b50f669bf3eb543d4b2e7d825eded612d565ad12732ddbba5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb516fc06d2e509b50f669bf3eb543d4b2e7d825eded612d565ad12732ddbba5->enter($__internal_cb516fc06d2e509b50f669bf3eb543d4b2e7d825eded612d565ad12732ddbba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a89975070960a57d85c965637616c04d077a8ab1c791e6dde53085101d4a6060 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a89975070960a57d85c965637616c04d077a8ab1c791e6dde53085101d4a6060->enter($__internal_a89975070960a57d85c965637616c04d077a8ab1c791e6dde53085101d4a6060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_a89975070960a57d85c965637616c04d077a8ab1c791e6dde53085101d4a6060->leave($__internal_a89975070960a57d85c965637616c04d077a8ab1c791e6dde53085101d4a6060_prof);

        
        $__internal_cb516fc06d2e509b50f669bf3eb543d4b2e7d825eded612d565ad12732ddbba5->leave($__internal_cb516fc06d2e509b50f669bf3eb543d4b2e7d825eded612d565ad12732ddbba5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/new.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
