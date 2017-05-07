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
        $__internal_d9be9becdad59dceee7ac0800f3ce9f7e5ad5b218bffdff92a0a293c62fe587a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9be9becdad59dceee7ac0800f3ce9f7e5ad5b218bffdff92a0a293c62fe587a->enter($__internal_d9be9becdad59dceee7ac0800f3ce9f7e5ad5b218bffdff92a0a293c62fe587a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_6476728efe5041be74d1730304fcb17d15f252b715c8cf737f1f036c73ebab54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6476728efe5041be74d1730304fcb17d15f252b715c8cf737f1f036c73ebab54->enter($__internal_6476728efe5041be74d1730304fcb17d15f252b715c8cf737f1f036c73ebab54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9be9becdad59dceee7ac0800f3ce9f7e5ad5b218bffdff92a0a293c62fe587a->leave($__internal_d9be9becdad59dceee7ac0800f3ce9f7e5ad5b218bffdff92a0a293c62fe587a_prof);

        
        $__internal_6476728efe5041be74d1730304fcb17d15f252b715c8cf737f1f036c73ebab54->leave($__internal_6476728efe5041be74d1730304fcb17d15f252b715c8cf737f1f036c73ebab54_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_e4a0800f342c1c26515ea3dde271200e71bc4d2ef5fe34b5ec412402caf2d37b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4a0800f342c1c26515ea3dde271200e71bc4d2ef5fe34b5ec412402caf2d37b->enter($__internal_e4a0800f342c1c26515ea3dde271200e71bc4d2ef5fe34b5ec412402caf2d37b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_4be73dd544d2340b6f8c1f5f37d2b212f3fdf79839b975aef38179511b170e08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4be73dd544d2340b6f8c1f5f37d2b212f3fdf79839b975aef38179511b170e08->enter($__internal_4be73dd544d2340b6f8c1f5f37d2b212f3fdf79839b975aef38179511b170e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_4be73dd544d2340b6f8c1f5f37d2b212f3fdf79839b975aef38179511b170e08->leave($__internal_4be73dd544d2340b6f8c1f5f37d2b212f3fdf79839b975aef38179511b170e08_prof);

        
        $__internal_e4a0800f342c1c26515ea3dde271200e71bc4d2ef5fe34b5ec412402caf2d37b->leave($__internal_e4a0800f342c1c26515ea3dde271200e71bc4d2ef5fe34b5ec412402caf2d37b_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6fcd7741642077653cd6ce1ed474a626a166a5e9162c34399b7e086772fefc15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fcd7741642077653cd6ce1ed474a626a166a5e9162c34399b7e086772fefc15->enter($__internal_6fcd7741642077653cd6ce1ed474a626a166a5e9162c34399b7e086772fefc15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2feeb251d2c1611bd72598c4fab715881773bf342855e44693f37b5a06a19214 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2feeb251d2c1611bd72598c4fab715881773bf342855e44693f37b5a06a19214->enter($__internal_2feeb251d2c1611bd72598c4fab715881773bf342855e44693f37b5a06a19214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_2feeb251d2c1611bd72598c4fab715881773bf342855e44693f37b5a06a19214->leave($__internal_2feeb251d2c1611bd72598c4fab715881773bf342855e44693f37b5a06a19214_prof);

        
        $__internal_6fcd7741642077653cd6ce1ed474a626a166a5e9162c34399b7e086772fefc15->leave($__internal_6fcd7741642077653cd6ce1ed474a626a166a5e9162c34399b7e086772fefc15_prof);

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
