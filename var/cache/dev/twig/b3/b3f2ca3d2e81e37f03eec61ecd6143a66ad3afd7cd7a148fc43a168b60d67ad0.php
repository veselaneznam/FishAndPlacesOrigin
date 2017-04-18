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
        $__internal_db663fa6ac5a49d5c6a9b31e184eccec825c54163e2a9f44c129105c179145ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db663fa6ac5a49d5c6a9b31e184eccec825c54163e2a9f44c129105c179145ac->enter($__internal_db663fa6ac5a49d5c6a9b31e184eccec825c54163e2a9f44c129105c179145ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_b0bf0ef7a882cf29e76569b1f0a9ec41738710e48eb2f3a07f5912b49ec34c16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0bf0ef7a882cf29e76569b1f0a9ec41738710e48eb2f3a07f5912b49ec34c16->enter($__internal_b0bf0ef7a882cf29e76569b1f0a9ec41738710e48eb2f3a07f5912b49ec34c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db663fa6ac5a49d5c6a9b31e184eccec825c54163e2a9f44c129105c179145ac->leave($__internal_db663fa6ac5a49d5c6a9b31e184eccec825c54163e2a9f44c129105c179145ac_prof);

        
        $__internal_b0bf0ef7a882cf29e76569b1f0a9ec41738710e48eb2f3a07f5912b49ec34c16->leave($__internal_b0bf0ef7a882cf29e76569b1f0a9ec41738710e48eb2f3a07f5912b49ec34c16_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_5ade94c2a3967ea313362a5a969953cb133e53d64c6ce9c1ba8becd52bdd981c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ade94c2a3967ea313362a5a969953cb133e53d64c6ce9c1ba8becd52bdd981c->enter($__internal_5ade94c2a3967ea313362a5a969953cb133e53d64c6ce9c1ba8becd52bdd981c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_aaddad96c674663704f87e6e0fd3950b867f302c3b3add9e76b307e3da0d4878 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaddad96c674663704f87e6e0fd3950b867f302c3b3add9e76b307e3da0d4878->enter($__internal_aaddad96c674663704f87e6e0fd3950b867f302c3b3add9e76b307e3da0d4878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_aaddad96c674663704f87e6e0fd3950b867f302c3b3add9e76b307e3da0d4878->leave($__internal_aaddad96c674663704f87e6e0fd3950b867f302c3b3add9e76b307e3da0d4878_prof);

        
        $__internal_5ade94c2a3967ea313362a5a969953cb133e53d64c6ce9c1ba8becd52bdd981c->leave($__internal_5ade94c2a3967ea313362a5a969953cb133e53d64c6ce9c1ba8becd52bdd981c_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9e1fe6ff5cd8e5b675b8e6f6786e865ea7030d0b730ce23504f3d47dfe5a89b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e1fe6ff5cd8e5b675b8e6f6786e865ea7030d0b730ce23504f3d47dfe5a89b4->enter($__internal_9e1fe6ff5cd8e5b675b8e6f6786e865ea7030d0b730ce23504f3d47dfe5a89b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6e87de4b9ca68b8ae3373e3a0f0b1dcf74016109dfb3c9e74e966101a9fd3887 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e87de4b9ca68b8ae3373e3a0f0b1dcf74016109dfb3c9e74e966101a9fd3887->enter($__internal_6e87de4b9ca68b8ae3373e3a0f0b1dcf74016109dfb3c9e74e966101a9fd3887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_6e87de4b9ca68b8ae3373e3a0f0b1dcf74016109dfb3c9e74e966101a9fd3887->leave($__internal_6e87de4b9ca68b8ae3373e3a0f0b1dcf74016109dfb3c9e74e966101a9fd3887_prof);

        
        $__internal_9e1fe6ff5cd8e5b675b8e6f6786e865ea7030d0b730ce23504f3d47dfe5a89b4->leave($__internal_9e1fe6ff5cd8e5b675b8e6f6786e865ea7030d0b730ce23504f3d47dfe5a89b4_prof);

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
