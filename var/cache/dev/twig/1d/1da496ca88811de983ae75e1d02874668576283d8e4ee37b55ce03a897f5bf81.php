<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_4a1eda53d227a3953bc1a8e3f17dc4b378a2510d717726e4154575314baa186b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_18e55418f71e3bc9fd55393f9fdeebd0abe9eb1f5582001cd73bdbccff5c36b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18e55418f71e3bc9fd55393f9fdeebd0abe9eb1f5582001cd73bdbccff5c36b8->enter($__internal_18e55418f71e3bc9fd55393f9fdeebd0abe9eb1f5582001cd73bdbccff5c36b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_7c32be9bee820cdcb8a87e5663db54d7c10b6cf7696654637730e182c6a654a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c32be9bee820cdcb8a87e5663db54d7c10b6cf7696654637730e182c6a654a6->enter($__internal_7c32be9bee820cdcb8a87e5663db54d7c10b6cf7696654637730e182c6a654a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18e55418f71e3bc9fd55393f9fdeebd0abe9eb1f5582001cd73bdbccff5c36b8->leave($__internal_18e55418f71e3bc9fd55393f9fdeebd0abe9eb1f5582001cd73bdbccff5c36b8_prof);

        
        $__internal_7c32be9bee820cdcb8a87e5663db54d7c10b6cf7696654637730e182c6a654a6->leave($__internal_7c32be9bee820cdcb8a87e5663db54d7c10b6cf7696654637730e182c6a654a6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d3da39ad5d3ebe7de4003d4232902a1e4914c9d5a0b42b0f0c2c8f29801b4b29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3da39ad5d3ebe7de4003d4232902a1e4914c9d5a0b42b0f0c2c8f29801b4b29->enter($__internal_d3da39ad5d3ebe7de4003d4232902a1e4914c9d5a0b42b0f0c2c8f29801b4b29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e23c203bc22781401addd20a5647821423c599e0fc5746067aa4da10664fc183 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e23c203bc22781401addd20a5647821423c599e0fc5746067aa4da10664fc183->enter($__internal_e23c203bc22781401addd20a5647821423c599e0fc5746067aa4da10664fc183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_e23c203bc22781401addd20a5647821423c599e0fc5746067aa4da10664fc183->leave($__internal_e23c203bc22781401addd20a5647821423c599e0fc5746067aa4da10664fc183_prof);

        
        $__internal_d3da39ad5d3ebe7de4003d4232902a1e4914c9d5a0b42b0f0c2c8f29801b4b29->leave($__internal_d3da39ad5d3ebe7de4003d4232902a1e4914c9d5a0b42b0f0c2c8f29801b4b29_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_381b763ca4498fc1997ec4178b7477218410bb5bd681cc81236316b43aa946ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_381b763ca4498fc1997ec4178b7477218410bb5bd681cc81236316b43aa946ab->enter($__internal_381b763ca4498fc1997ec4178b7477218410bb5bd681cc81236316b43aa946ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ffde3587d8aea22265cf7a7e8c5157bee424ae6377ef2e59bac5b78389226fe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffde3587d8aea22265cf7a7e8c5157bee424ae6377ef2e59bac5b78389226fe8->enter($__internal_ffde3587d8aea22265cf7a7e8c5157bee424ae6377ef2e59bac5b78389226fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_ffde3587d8aea22265cf7a7e8c5157bee424ae6377ef2e59bac5b78389226fe8->leave($__internal_ffde3587d8aea22265cf7a7e8c5157bee424ae6377ef2e59bac5b78389226fe8_prof);

        
        $__internal_381b763ca4498fc1997ec4178b7477218410bb5bd681cc81236316b43aa946ab->leave($__internal_381b763ca4498fc1997ec4178b7477218410bb5bd681cc81236316b43aa946ab_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
