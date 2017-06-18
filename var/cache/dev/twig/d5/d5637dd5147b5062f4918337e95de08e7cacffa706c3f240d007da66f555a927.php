<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_136fe5659ce5423a24bc9bd62483e3bf542efbf6a7105ebc0278f275199dc923 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_5dcc267d5db6732c4b327fde5f911598a9d16d3588be78124081358b58c6119c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dcc267d5db6732c4b327fde5f911598a9d16d3588be78124081358b58c6119c->enter($__internal_5dcc267d5db6732c4b327fde5f911598a9d16d3588be78124081358b58c6119c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_5b7450bcf2babaf732c6d99873ad16a363e36b29edde438be2eb04af41a04022 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b7450bcf2babaf732c6d99873ad16a363e36b29edde438be2eb04af41a04022->enter($__internal_5b7450bcf2babaf732c6d99873ad16a363e36b29edde438be2eb04af41a04022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5dcc267d5db6732c4b327fde5f911598a9d16d3588be78124081358b58c6119c->leave($__internal_5dcc267d5db6732c4b327fde5f911598a9d16d3588be78124081358b58c6119c_prof);

        
        $__internal_5b7450bcf2babaf732c6d99873ad16a363e36b29edde438be2eb04af41a04022->leave($__internal_5b7450bcf2babaf732c6d99873ad16a363e36b29edde438be2eb04af41a04022_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_42e42a6cc63d1737901d24029232ff4be0c77948f517c2ce41ddb6ca0a9ffdc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42e42a6cc63d1737901d24029232ff4be0c77948f517c2ce41ddb6ca0a9ffdc2->enter($__internal_42e42a6cc63d1737901d24029232ff4be0c77948f517c2ce41ddb6ca0a9ffdc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_aabe8d3dc7c595cc006ce79eab84d1fca09e660e8daba600d4e1ffc5bea2f6fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aabe8d3dc7c595cc006ce79eab84d1fca09e660e8daba600d4e1ffc5bea2f6fc->enter($__internal_aabe8d3dc7c595cc006ce79eab84d1fca09e660e8daba600d4e1ffc5bea2f6fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_aabe8d3dc7c595cc006ce79eab84d1fca09e660e8daba600d4e1ffc5bea2f6fc->leave($__internal_aabe8d3dc7c595cc006ce79eab84d1fca09e660e8daba600d4e1ffc5bea2f6fc_prof);

        
        $__internal_42e42a6cc63d1737901d24029232ff4be0c77948f517c2ce41ddb6ca0a9ffdc2->leave($__internal_42e42a6cc63d1737901d24029232ff4be0c77948f517c2ce41ddb6ca0a9ffdc2_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_1dd1e5d3f1f1d442cbf8cfb1bd3cf9437c0580d3eea5d0c3be668d97b9882580 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dd1e5d3f1f1d442cbf8cfb1bd3cf9437c0580d3eea5d0c3be668d97b9882580->enter($__internal_1dd1e5d3f1f1d442cbf8cfb1bd3cf9437c0580d3eea5d0c3be668d97b9882580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_854b304fe8b129291f60eaec18cc6dfa800f74c6b7e68a7f4414fd64099ce5c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_854b304fe8b129291f60eaec18cc6dfa800f74c6b7e68a7f4414fd64099ce5c3->enter($__internal_854b304fe8b129291f60eaec18cc6dfa800f74c6b7e68a7f4414fd64099ce5c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_854b304fe8b129291f60eaec18cc6dfa800f74c6b7e68a7f4414fd64099ce5c3->leave($__internal_854b304fe8b129291f60eaec18cc6dfa800f74c6b7e68a7f4414fd64099ce5c3_prof);

        
        $__internal_1dd1e5d3f1f1d442cbf8cfb1bd3cf9437c0580d3eea5d0c3be668d97b9882580->leave($__internal_1dd1e5d3f1f1d442cbf8cfb1bd3cf9437c0580d3eea5d0c3be668d97b9882580_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_f5349f2fab8a577fe28a6210fd329aa536274825bc112ac6c03057b6df644093 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5349f2fab8a577fe28a6210fd329aa536274825bc112ac6c03057b6df644093->enter($__internal_f5349f2fab8a577fe28a6210fd329aa536274825bc112ac6c03057b6df644093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f41e757725c1c5b36f3fd778b9b25ea151ab82db0986f51766e2a4496b28827b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f41e757725c1c5b36f3fd778b9b25ea151ab82db0986f51766e2a4496b28827b->enter($__internal_f41e757725c1c5b36f3fd778b9b25ea151ab82db0986f51766e2a4496b28827b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_f41e757725c1c5b36f3fd778b9b25ea151ab82db0986f51766e2a4496b28827b->leave($__internal_f41e757725c1c5b36f3fd778b9b25ea151ab82db0986f51766e2a4496b28827b_prof);

        
        $__internal_f5349f2fab8a577fe28a6210fd329aa536274825bc112ac6c03057b6df644093->leave($__internal_f5349f2fab8a577fe28a6210fd329aa536274825bc112ac6c03057b6df644093_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/FishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
