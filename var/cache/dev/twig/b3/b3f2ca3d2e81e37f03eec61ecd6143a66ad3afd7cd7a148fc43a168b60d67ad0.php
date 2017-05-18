<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_758707891556c1c6224c1e87a57d71278f23e0ec8ff5fda6bfb1e5a8794ed653 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_60e410fb17bc1b40dfde0658b47e82c6534eb623279f1cc1b6e6571760cb8b11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60e410fb17bc1b40dfde0658b47e82c6534eb623279f1cc1b6e6571760cb8b11->enter($__internal_60e410fb17bc1b40dfde0658b47e82c6534eb623279f1cc1b6e6571760cb8b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_d610293d98d1e246aeb5deb744b10d90344d95b6d9520b190ae1c40146382ba3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d610293d98d1e246aeb5deb744b10d90344d95b6d9520b190ae1c40146382ba3->enter($__internal_d610293d98d1e246aeb5deb744b10d90344d95b6d9520b190ae1c40146382ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60e410fb17bc1b40dfde0658b47e82c6534eb623279f1cc1b6e6571760cb8b11->leave($__internal_60e410fb17bc1b40dfde0658b47e82c6534eb623279f1cc1b6e6571760cb8b11_prof);

        
        $__internal_d610293d98d1e246aeb5deb744b10d90344d95b6d9520b190ae1c40146382ba3->leave($__internal_d610293d98d1e246aeb5deb744b10d90344d95b6d9520b190ae1c40146382ba3_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_e43f86bc7aac6b5dcfbc69c791d668a2a66d4a5de97deab50e1ab28161c0e672 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e43f86bc7aac6b5dcfbc69c791d668a2a66d4a5de97deab50e1ab28161c0e672->enter($__internal_e43f86bc7aac6b5dcfbc69c791d668a2a66d4a5de97deab50e1ab28161c0e672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_68d52cd82d5f4c65d0f59aa5bd7485060c3f770572c6a6d7de873a83195567bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68d52cd82d5f4c65d0f59aa5bd7485060c3f770572c6a6d7de873a83195567bf->enter($__internal_68d52cd82d5f4c65d0f59aa5bd7485060c3f770572c6a6d7de873a83195567bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_68d52cd82d5f4c65d0f59aa5bd7485060c3f770572c6a6d7de873a83195567bf->leave($__internal_68d52cd82d5f4c65d0f59aa5bd7485060c3f770572c6a6d7de873a83195567bf_prof);

        
        $__internal_e43f86bc7aac6b5dcfbc69c791d668a2a66d4a5de97deab50e1ab28161c0e672->leave($__internal_e43f86bc7aac6b5dcfbc69c791d668a2a66d4a5de97deab50e1ab28161c0e672_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d1d2e5d142421369bf45ee55b1b73691fe0d99da1192e1fe07dd95acf5167873 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1d2e5d142421369bf45ee55b1b73691fe0d99da1192e1fe07dd95acf5167873->enter($__internal_d1d2e5d142421369bf45ee55b1b73691fe0d99da1192e1fe07dd95acf5167873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a363b9336eb94a5b8def056ba5a13aedb9c7cd417f3a464ddd726fd624bae3ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a363b9336eb94a5b8def056ba5a13aedb9c7cd417f3a464ddd726fd624bae3ff->enter($__internal_a363b9336eb94a5b8def056ba5a13aedb9c7cd417f3a464ddd726fd624bae3ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_a363b9336eb94a5b8def056ba5a13aedb9c7cd417f3a464ddd726fd624bae3ff->leave($__internal_a363b9336eb94a5b8def056ba5a13aedb9c7cd417f3a464ddd726fd624bae3ff_prof);

        
        $__internal_d1d2e5d142421369bf45ee55b1b73691fe0d99da1192e1fe07dd95acf5167873->leave($__internal_d1d2e5d142421369bf45ee55b1b73691fe0d99da1192e1fe07dd95acf5167873_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
