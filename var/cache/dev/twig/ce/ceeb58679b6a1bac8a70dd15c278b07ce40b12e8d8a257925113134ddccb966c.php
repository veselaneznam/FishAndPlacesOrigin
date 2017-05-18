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
        $__internal_9a9873427d2b612ff820275713f8aadc84b5fa6d3a35c5bcac631e25080bc317 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a9873427d2b612ff820275713f8aadc84b5fa6d3a35c5bcac631e25080bc317->enter($__internal_9a9873427d2b612ff820275713f8aadc84b5fa6d3a35c5bcac631e25080bc317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $__internal_48eaa312ede1d7a6a530fae3ef2ae8c1a6f99aeb73b6fccdaf1ee1a419359765 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48eaa312ede1d7a6a530fae3ef2ae8c1a6f99aeb73b6fccdaf1ee1a419359765->enter($__internal_48eaa312ede1d7a6a530fae3ef2ae8c1a6f99aeb73b6fccdaf1ee1a419359765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a9873427d2b612ff820275713f8aadc84b5fa6d3a35c5bcac631e25080bc317->leave($__internal_9a9873427d2b612ff820275713f8aadc84b5fa6d3a35c5bcac631e25080bc317_prof);

        
        $__internal_48eaa312ede1d7a6a530fae3ef2ae8c1a6f99aeb73b6fccdaf1ee1a419359765->leave($__internal_48eaa312ede1d7a6a530fae3ef2ae8c1a6f99aeb73b6fccdaf1ee1a419359765_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e34872d9df0b524c947a9179eed849eee9d70d731448210e896a7fe64aca00d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e34872d9df0b524c947a9179eed849eee9d70d731448210e896a7fe64aca00d7->enter($__internal_e34872d9df0b524c947a9179eed849eee9d70d731448210e896a7fe64aca00d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4a1a94b59fd6aaa8895b3bc0269929f0dbed7ea33c06fd0043f31a428c772d47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a1a94b59fd6aaa8895b3bc0269929f0dbed7ea33c06fd0043f31a428c772d47->enter($__internal_4a1a94b59fd6aaa8895b3bc0269929f0dbed7ea33c06fd0043f31a428c772d47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_4a1a94b59fd6aaa8895b3bc0269929f0dbed7ea33c06fd0043f31a428c772d47->leave($__internal_4a1a94b59fd6aaa8895b3bc0269929f0dbed7ea33c06fd0043f31a428c772d47_prof);

        
        $__internal_e34872d9df0b524c947a9179eed849eee9d70d731448210e896a7fe64aca00d7->leave($__internal_e34872d9df0b524c947a9179eed849eee9d70d731448210e896a7fe64aca00d7_prof);

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
