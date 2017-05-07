<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_80a45148f9c232fcf5f0dd881b8a385119cbd9a6113ff92acd1ac9a4127da873 extends Twig_Template
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
        $__internal_bedabf45c3ce169a7ceabc3c2dab4a26e525f5496a23732d0e7c33faf0bb8a15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bedabf45c3ce169a7ceabc3c2dab4a26e525f5496a23732d0e7c33faf0bb8a15->enter($__internal_bedabf45c3ce169a7ceabc3c2dab4a26e525f5496a23732d0e7c33faf0bb8a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_8c938a41377e4e267437c2acb3fe763e336f8c0d8f42ce6e64cd5e0cc66a61fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c938a41377e4e267437c2acb3fe763e336f8c0d8f42ce6e64cd5e0cc66a61fd->enter($__internal_8c938a41377e4e267437c2acb3fe763e336f8c0d8f42ce6e64cd5e0cc66a61fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bedabf45c3ce169a7ceabc3c2dab4a26e525f5496a23732d0e7c33faf0bb8a15->leave($__internal_bedabf45c3ce169a7ceabc3c2dab4a26e525f5496a23732d0e7c33faf0bb8a15_prof);

        
        $__internal_8c938a41377e4e267437c2acb3fe763e336f8c0d8f42ce6e64cd5e0cc66a61fd->leave($__internal_8c938a41377e4e267437c2acb3fe763e336f8c0d8f42ce6e64cd5e0cc66a61fd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b49283412bbf74a09d548460957fb9b745f180ef6401df2e94aa5f28db2f12c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b49283412bbf74a09d548460957fb9b745f180ef6401df2e94aa5f28db2f12c4->enter($__internal_b49283412bbf74a09d548460957fb9b745f180ef6401df2e94aa5f28db2f12c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5b83d4df4249690980f95a1ad22612dd66d73dd5576dae20075bcf020b6cb1c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b83d4df4249690980f95a1ad22612dd66d73dd5576dae20075bcf020b6cb1c6->enter($__internal_5b83d4df4249690980f95a1ad22612dd66d73dd5576dae20075bcf020b6cb1c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_5b83d4df4249690980f95a1ad22612dd66d73dd5576dae20075bcf020b6cb1c6->leave($__internal_5b83d4df4249690980f95a1ad22612dd66d73dd5576dae20075bcf020b6cb1c6_prof);

        
        $__internal_b49283412bbf74a09d548460957fb9b745f180ef6401df2e94aa5f28db2f12c4->leave($__internal_b49283412bbf74a09d548460957fb9b745f180ef6401df2e94aa5f28db2f12c4_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_d04013d5bf770e9b2af937cb0698f9c9bbb57e8934e1c9f81cbdb814f6b6268c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d04013d5bf770e9b2af937cb0698f9c9bbb57e8934e1c9f81cbdb814f6b6268c->enter($__internal_d04013d5bf770e9b2af937cb0698f9c9bbb57e8934e1c9f81cbdb814f6b6268c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_57e4298f7d72b561f957ed242060a3ea664a009d38f0275f93c90f514b8e8a68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57e4298f7d72b561f957ed242060a3ea664a009d38f0275f93c90f514b8e8a68->enter($__internal_57e4298f7d72b561f957ed242060a3ea664a009d38f0275f93c90f514b8e8a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_57e4298f7d72b561f957ed242060a3ea664a009d38f0275f93c90f514b8e8a68->leave($__internal_57e4298f7d72b561f957ed242060a3ea664a009d38f0275f93c90f514b8e8a68_prof);

        
        $__internal_d04013d5bf770e9b2af937cb0698f9c9bbb57e8934e1c9f81cbdb814f6b6268c->leave($__internal_d04013d5bf770e9b2af937cb0698f9c9bbb57e8934e1c9f81cbdb814f6b6268c_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_b129b15fd1f9d95e35c8c780e5a5eedf17bd4429aaebcdc5002c928c5e148657 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b129b15fd1f9d95e35c8c780e5a5eedf17bd4429aaebcdc5002c928c5e148657->enter($__internal_b129b15fd1f9d95e35c8c780e5a5eedf17bd4429aaebcdc5002c928c5e148657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c5c36b90658fe76cf095deb78c3be10287df5b4a7900e34f7494a04eebc7c6ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5c36b90658fe76cf095deb78c3be10287df5b4a7900e34f7494a04eebc7c6ee->enter($__internal_c5c36b90658fe76cf095deb78c3be10287df5b4a7900e34f7494a04eebc7c6ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_c5c36b90658fe76cf095deb78c3be10287df5b4a7900e34f7494a04eebc7c6ee->leave($__internal_c5c36b90658fe76cf095deb78c3be10287df5b4a7900e34f7494a04eebc7c6ee_prof);

        
        $__internal_b129b15fd1f9d95e35c8c780e5a5eedf17bd4429aaebcdc5002c928c5e148657->leave($__internal_b129b15fd1f9d95e35c8c780e5a5eedf17bd4429aaebcdc5002c928c5e148657_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
