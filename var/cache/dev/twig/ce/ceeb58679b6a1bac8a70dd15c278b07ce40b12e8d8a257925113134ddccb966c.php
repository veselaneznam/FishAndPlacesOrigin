<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_93fe30208f2b6cdb57378f1eb2f5fba659bc7573e289106756cbb549e61d28a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_0d4c9eec9f99ee2d5c994994927d2252260046ac617091d8e3ffb930778a3921 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d4c9eec9f99ee2d5c994994927d2252260046ac617091d8e3ffb930778a3921->enter($__internal_0d4c9eec9f99ee2d5c994994927d2252260046ac617091d8e3ffb930778a3921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $__internal_ad46ca3baac605a0b4c7a87bdf55cd8d45d525843ed40782daaa22b0bbfc4408 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad46ca3baac605a0b4c7a87bdf55cd8d45d525843ed40782daaa22b0bbfc4408->enter($__internal_ad46ca3baac605a0b4c7a87bdf55cd8d45d525843ed40782daaa22b0bbfc4408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d4c9eec9f99ee2d5c994994927d2252260046ac617091d8e3ffb930778a3921->leave($__internal_0d4c9eec9f99ee2d5c994994927d2252260046ac617091d8e3ffb930778a3921_prof);

        
        $__internal_ad46ca3baac605a0b4c7a87bdf55cd8d45d525843ed40782daaa22b0bbfc4408->leave($__internal_ad46ca3baac605a0b4c7a87bdf55cd8d45d525843ed40782daaa22b0bbfc4408_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5616102791d7fb6a97dd599934405593a7cb640a129080b0cbf46060ace14868 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5616102791d7fb6a97dd599934405593a7cb640a129080b0cbf46060ace14868->enter($__internal_5616102791d7fb6a97dd599934405593a7cb640a129080b0cbf46060ace14868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_33e43d5373e2dfc2ae1ba206db5c5ad9b257497a4bb8c6af835f259c1567d043 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33e43d5373e2dfc2ae1ba206db5c5ad9b257497a4bb8c6af835f259c1567d043->enter($__internal_33e43d5373e2dfc2ae1ba206db5c5ad9b257497a4bb8c6af835f259c1567d043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_33e43d5373e2dfc2ae1ba206db5c5ad9b257497a4bb8c6af835f259c1567d043->leave($__internal_33e43d5373e2dfc2ae1ba206db5c5ad9b257497a4bb8c6af835f259c1567d043_prof);

        
        $__internal_5616102791d7fb6a97dd599934405593a7cb640a129080b0cbf46060ace14868->leave($__internal_5616102791d7fb6a97dd599934405593a7cb640a129080b0cbf46060ace14868_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/show.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
