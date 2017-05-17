<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_c2e5e2a75433122c50ccce8212ba18e8a37e271a7295cbc66e1c1a845fe49f15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_0c9a2dce3c5ef7947230042dd7566f813beffb45caffaef0a2aab97e99b94761 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c9a2dce3c5ef7947230042dd7566f813beffb45caffaef0a2aab97e99b94761->enter($__internal_0c9a2dce3c5ef7947230042dd7566f813beffb45caffaef0a2aab97e99b94761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $__internal_bf68e7c88d0b09efecbc5470c66e001eb8e1327a9b7643b42b74fcbe600e1a7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf68e7c88d0b09efecbc5470c66e001eb8e1327a9b7643b42b74fcbe600e1a7b->enter($__internal_bf68e7c88d0b09efecbc5470c66e001eb8e1327a9b7643b42b74fcbe600e1a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c9a2dce3c5ef7947230042dd7566f813beffb45caffaef0a2aab97e99b94761->leave($__internal_0c9a2dce3c5ef7947230042dd7566f813beffb45caffaef0a2aab97e99b94761_prof);

        
        $__internal_bf68e7c88d0b09efecbc5470c66e001eb8e1327a9b7643b42b74fcbe600e1a7b->leave($__internal_bf68e7c88d0b09efecbc5470c66e001eb8e1327a9b7643b42b74fcbe600e1a7b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9181e4c6144506b6dc38d25ad551847cdb1485ea24b3f025cace3e4c22543dcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9181e4c6144506b6dc38d25ad551847cdb1485ea24b3f025cace3e4c22543dcd->enter($__internal_9181e4c6144506b6dc38d25ad551847cdb1485ea24b3f025cace3e4c22543dcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2c8f6343447d16b38ace4734f545610b5095709b81944315be5bff71a1f4d7f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c8f6343447d16b38ace4734f545610b5095709b81944315be5bff71a1f4d7f0->enter($__internal_2c8f6343447d16b38ace4734f545610b5095709b81944315be5bff71a1f4d7f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_2c8f6343447d16b38ace4734f545610b5095709b81944315be5bff71a1f4d7f0->leave($__internal_2c8f6343447d16b38ace4734f545610b5095709b81944315be5bff71a1f4d7f0_prof);

        
        $__internal_9181e4c6144506b6dc38d25ad551847cdb1485ea24b3f025cace3e4c22543dcd->leave($__internal_9181e4c6144506b6dc38d25ad551847cdb1485ea24b3f025cace3e4c22543dcd_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
