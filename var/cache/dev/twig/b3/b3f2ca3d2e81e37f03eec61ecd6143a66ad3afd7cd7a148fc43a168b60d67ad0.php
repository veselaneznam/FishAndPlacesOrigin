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
        $__internal_926d5193e694a4c5cb9eb5b17edde18453b5a39f59edf1a49557864797cc9562 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_926d5193e694a4c5cb9eb5b17edde18453b5a39f59edf1a49557864797cc9562->enter($__internal_926d5193e694a4c5cb9eb5b17edde18453b5a39f59edf1a49557864797cc9562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_70217a140307b720b428b9703370ef52eea40fd4433fd2e3cb7d90c071d72e4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70217a140307b720b428b9703370ef52eea40fd4433fd2e3cb7d90c071d72e4a->enter($__internal_70217a140307b720b428b9703370ef52eea40fd4433fd2e3cb7d90c071d72e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_926d5193e694a4c5cb9eb5b17edde18453b5a39f59edf1a49557864797cc9562->leave($__internal_926d5193e694a4c5cb9eb5b17edde18453b5a39f59edf1a49557864797cc9562_prof);

        
        $__internal_70217a140307b720b428b9703370ef52eea40fd4433fd2e3cb7d90c071d72e4a->leave($__internal_70217a140307b720b428b9703370ef52eea40fd4433fd2e3cb7d90c071d72e4a_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_0460a8974ccb4abe108bec795c551ec15030f02a04bf676f9dd1d64bfc43f5e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0460a8974ccb4abe108bec795c551ec15030f02a04bf676f9dd1d64bfc43f5e6->enter($__internal_0460a8974ccb4abe108bec795c551ec15030f02a04bf676f9dd1d64bfc43f5e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_77002d579492c77de44ec22585557f099ac361b936972f6229c815ade9620c3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77002d579492c77de44ec22585557f099ac361b936972f6229c815ade9620c3a->enter($__internal_77002d579492c77de44ec22585557f099ac361b936972f6229c815ade9620c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_77002d579492c77de44ec22585557f099ac361b936972f6229c815ade9620c3a->leave($__internal_77002d579492c77de44ec22585557f099ac361b936972f6229c815ade9620c3a_prof);

        
        $__internal_0460a8974ccb4abe108bec795c551ec15030f02a04bf676f9dd1d64bfc43f5e6->leave($__internal_0460a8974ccb4abe108bec795c551ec15030f02a04bf676f9dd1d64bfc43f5e6_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_89a4dad5b8728e7fdf6836a4190516137a86113eb81b756a952fb10be6c9666c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89a4dad5b8728e7fdf6836a4190516137a86113eb81b756a952fb10be6c9666c->enter($__internal_89a4dad5b8728e7fdf6836a4190516137a86113eb81b756a952fb10be6c9666c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f507b9c105b96a4375901bad5d95ffe7d24019ae6f48681abcb6d134c078dfa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f507b9c105b96a4375901bad5d95ffe7d24019ae6f48681abcb6d134c078dfa7->enter($__internal_f507b9c105b96a4375901bad5d95ffe7d24019ae6f48681abcb6d134c078dfa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_f507b9c105b96a4375901bad5d95ffe7d24019ae6f48681abcb6d134c078dfa7->leave($__internal_f507b9c105b96a4375901bad5d95ffe7d24019ae6f48681abcb6d134c078dfa7_prof);

        
        $__internal_89a4dad5b8728e7fdf6836a4190516137a86113eb81b756a952fb10be6c9666c->leave($__internal_89a4dad5b8728e7fdf6836a4190516137a86113eb81b756a952fb10be6c9666c_prof);

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
