<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_9e480c10c4459cd7492e21a452b22b8a2f4f40ebe143d0408f5425beec571df1 extends Twig_Template
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
        $__internal_4290aad16a354d3f03c453c108c03074f29cea0fa073aa85359e82c6a3db6762 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4290aad16a354d3f03c453c108c03074f29cea0fa073aa85359e82c6a3db6762->enter($__internal_4290aad16a354d3f03c453c108c03074f29cea0fa073aa85359e82c6a3db6762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_ab41b65320ccf70a8f0f5aacffd90d22a33a29a01721333fe47cf0fe651ab9c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab41b65320ccf70a8f0f5aacffd90d22a33a29a01721333fe47cf0fe651ab9c3->enter($__internal_ab41b65320ccf70a8f0f5aacffd90d22a33a29a01721333fe47cf0fe651ab9c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4290aad16a354d3f03c453c108c03074f29cea0fa073aa85359e82c6a3db6762->leave($__internal_4290aad16a354d3f03c453c108c03074f29cea0fa073aa85359e82c6a3db6762_prof);

        
        $__internal_ab41b65320ccf70a8f0f5aacffd90d22a33a29a01721333fe47cf0fe651ab9c3->leave($__internal_ab41b65320ccf70a8f0f5aacffd90d22a33a29a01721333fe47cf0fe651ab9c3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_952b112465b349b2225bd2e5ed5647d618747fbd682d8b381d504830c9d2c866 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_952b112465b349b2225bd2e5ed5647d618747fbd682d8b381d504830c9d2c866->enter($__internal_952b112465b349b2225bd2e5ed5647d618747fbd682d8b381d504830c9d2c866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ae048ec603d663c2320aaaebf0b43c1278400352a28d8ba3d9b9b86c0326df03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae048ec603d663c2320aaaebf0b43c1278400352a28d8ba3d9b9b86c0326df03->enter($__internal_ae048ec603d663c2320aaaebf0b43c1278400352a28d8ba3d9b9b86c0326df03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ae048ec603d663c2320aaaebf0b43c1278400352a28d8ba3d9b9b86c0326df03->leave($__internal_ae048ec603d663c2320aaaebf0b43c1278400352a28d8ba3d9b9b86c0326df03_prof);

        
        $__internal_952b112465b349b2225bd2e5ed5647d618747fbd682d8b381d504830c9d2c866->leave($__internal_952b112465b349b2225bd2e5ed5647d618747fbd682d8b381d504830c9d2c866_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_9bbb9be8fe31c9828ec2d0d19e6d094f204308584a793ab2a4ef4650edd85e73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bbb9be8fe31c9828ec2d0d19e6d094f204308584a793ab2a4ef4650edd85e73->enter($__internal_9bbb9be8fe31c9828ec2d0d19e6d094f204308584a793ab2a4ef4650edd85e73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b74cecc82f3249e2181c3c72ef9206d3a9321e0ade66f5a7a3e7752427ad7feb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b74cecc82f3249e2181c3c72ef9206d3a9321e0ade66f5a7a3e7752427ad7feb->enter($__internal_b74cecc82f3249e2181c3c72ef9206d3a9321e0ade66f5a7a3e7752427ad7feb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b74cecc82f3249e2181c3c72ef9206d3a9321e0ade66f5a7a3e7752427ad7feb->leave($__internal_b74cecc82f3249e2181c3c72ef9206d3a9321e0ade66f5a7a3e7752427ad7feb_prof);

        
        $__internal_9bbb9be8fe31c9828ec2d0d19e6d094f204308584a793ab2a4ef4650edd85e73->leave($__internal_9bbb9be8fe31c9828ec2d0d19e6d094f204308584a793ab2a4ef4650edd85e73_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_71861a279a63d3b871ab5f921a6a1b60edc5869abf21296f10c14bb69e474762 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71861a279a63d3b871ab5f921a6a1b60edc5869abf21296f10c14bb69e474762->enter($__internal_71861a279a63d3b871ab5f921a6a1b60edc5869abf21296f10c14bb69e474762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b61f1313c29cbf2c569d062000503c53ef0de5b68d52e78bdda180b624a55fd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b61f1313c29cbf2c569d062000503c53ef0de5b68d52e78bdda180b624a55fd9->enter($__internal_b61f1313c29cbf2c569d062000503c53ef0de5b68d52e78bdda180b624a55fd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_b61f1313c29cbf2c569d062000503c53ef0de5b68d52e78bdda180b624a55fd9->leave($__internal_b61f1313c29cbf2c569d062000503c53ef0de5b68d52e78bdda180b624a55fd9_prof);

        
        $__internal_71861a279a63d3b871ab5f921a6a1b60edc5869abf21296f10c14bb69e474762->leave($__internal_71861a279a63d3b871ab5f921a6a1b60edc5869abf21296f10c14bb69e474762_prof);

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
