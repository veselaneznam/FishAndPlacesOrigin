<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_2f386bb191a4896cb16d4d0822c6e351f99bc89765eabfe1f04d8f4af98728b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_b9c4a8c5afefe591222b8c749393792c420176c0809464cc604f3083f7447458 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9c4a8c5afefe591222b8c749393792c420176c0809464cc604f3083f7447458->enter($__internal_b9c4a8c5afefe591222b8c749393792c420176c0809464cc604f3083f7447458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $__internal_91d7b5a399310c3565a73e4d876d9a091afd0a27d59ef733e0e2b89f907df293 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91d7b5a399310c3565a73e4d876d9a091afd0a27d59ef733e0e2b89f907df293->enter($__internal_91d7b5a399310c3565a73e4d876d9a091afd0a27d59ef733e0e2b89f907df293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9c4a8c5afefe591222b8c749393792c420176c0809464cc604f3083f7447458->leave($__internal_b9c4a8c5afefe591222b8c749393792c420176c0809464cc604f3083f7447458_prof);

        
        $__internal_91d7b5a399310c3565a73e4d876d9a091afd0a27d59ef733e0e2b89f907df293->leave($__internal_91d7b5a399310c3565a73e4d876d9a091afd0a27d59ef733e0e2b89f907df293_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3d8c67466a661711500f789c622f9342c06ab311b9eabaea005218d260c05527 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d8c67466a661711500f789c622f9342c06ab311b9eabaea005218d260c05527->enter($__internal_3d8c67466a661711500f789c622f9342c06ab311b9eabaea005218d260c05527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e9b9c5f7008ae32b61a0c398210c99ddb20297fc28b3cfe3420a502265a22103 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9b9c5f7008ae32b61a0c398210c99ddb20297fc28b3cfe3420a502265a22103->enter($__internal_e9b9c5f7008ae32b61a0c398210c99ddb20297fc28b3cfe3420a502265a22103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_e9b9c5f7008ae32b61a0c398210c99ddb20297fc28b3cfe3420a502265a22103->leave($__internal_e9b9c5f7008ae32b61a0c398210c99ddb20297fc28b3cfe3420a502265a22103_prof);

        
        $__internal_3d8c67466a661711500f789c622f9342c06ab311b9eabaea005218d260c05527->leave($__internal_3d8c67466a661711500f789c622f9342c06ab311b9eabaea005218d260c05527_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/reset.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
