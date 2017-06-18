<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_c5c27bcea2ac2369e40b03c9c9584b9f8f22a04e945f8e9291c1812a20cf4d44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_b260f9a768fc1e3c15d7927810d8be646bfc8c983c8ef584c7b62ab132db5945 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b260f9a768fc1e3c15d7927810d8be646bfc8c983c8ef584c7b62ab132db5945->enter($__internal_b260f9a768fc1e3c15d7927810d8be646bfc8c983c8ef584c7b62ab132db5945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $__internal_f8ff18f7e56f15bfcf14b16b69ec51d016162d39b2ff7a062a93b0e4a7d27e28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8ff18f7e56f15bfcf14b16b69ec51d016162d39b2ff7a062a93b0e4a7d27e28->enter($__internal_f8ff18f7e56f15bfcf14b16b69ec51d016162d39b2ff7a062a93b0e4a7d27e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b260f9a768fc1e3c15d7927810d8be646bfc8c983c8ef584c7b62ab132db5945->leave($__internal_b260f9a768fc1e3c15d7927810d8be646bfc8c983c8ef584c7b62ab132db5945_prof);

        
        $__internal_f8ff18f7e56f15bfcf14b16b69ec51d016162d39b2ff7a062a93b0e4a7d27e28->leave($__internal_f8ff18f7e56f15bfcf14b16b69ec51d016162d39b2ff7a062a93b0e4a7d27e28_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4c19317a93aaef0502a9d4f7b28e8fd599ba8df6deda895ac5cc10050df272f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c19317a93aaef0502a9d4f7b28e8fd599ba8df6deda895ac5cc10050df272f7->enter($__internal_4c19317a93aaef0502a9d4f7b28e8fd599ba8df6deda895ac5cc10050df272f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b5f1e2ae796f253aac34ff3eb41afd919433594ee4254d6a61e4dfb3ca43f889 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5f1e2ae796f253aac34ff3eb41afd919433594ee4254d6a61e4dfb3ca43f889->enter($__internal_b5f1e2ae796f253aac34ff3eb41afd919433594ee4254d6a61e4dfb3ca43f889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_b5f1e2ae796f253aac34ff3eb41afd919433594ee4254d6a61e4dfb3ca43f889->leave($__internal_b5f1e2ae796f253aac34ff3eb41afd919433594ee4254d6a61e4dfb3ca43f889_prof);

        
        $__internal_4c19317a93aaef0502a9d4f7b28e8fd599ba8df6deda895ac5cc10050df272f7->leave($__internal_4c19317a93aaef0502a9d4f7b28e8fd599ba8df6deda895ac5cc10050df272f7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/edit.html.twig", "/var/www/FishAndPlaces/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
