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
        $__internal_7473a5f1f87c1eb98ae4e9a8ce0ca64fbaf575e25efcc721d3476f50831dfc2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7473a5f1f87c1eb98ae4e9a8ce0ca64fbaf575e25efcc721d3476f50831dfc2d->enter($__internal_7473a5f1f87c1eb98ae4e9a8ce0ca64fbaf575e25efcc721d3476f50831dfc2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_82b5a24f2c70119c88521671aa4f9b8b844794ecbfd448665ab7b8b836393276 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82b5a24f2c70119c88521671aa4f9b8b844794ecbfd448665ab7b8b836393276->enter($__internal_82b5a24f2c70119c88521671aa4f9b8b844794ecbfd448665ab7b8b836393276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7473a5f1f87c1eb98ae4e9a8ce0ca64fbaf575e25efcc721d3476f50831dfc2d->leave($__internal_7473a5f1f87c1eb98ae4e9a8ce0ca64fbaf575e25efcc721d3476f50831dfc2d_prof);

        
        $__internal_82b5a24f2c70119c88521671aa4f9b8b844794ecbfd448665ab7b8b836393276->leave($__internal_82b5a24f2c70119c88521671aa4f9b8b844794ecbfd448665ab7b8b836393276_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d8d77167913b6867fdba74ad1e8e9c9a790a8406e00049668d7a1639ee299d21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8d77167913b6867fdba74ad1e8e9c9a790a8406e00049668d7a1639ee299d21->enter($__internal_d8d77167913b6867fdba74ad1e8e9c9a790a8406e00049668d7a1639ee299d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_666dbe1f4828384cf8b8d49175401c885b633c0b6fa450b3ce2273eeaa8978df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_666dbe1f4828384cf8b8d49175401c885b633c0b6fa450b3ce2273eeaa8978df->enter($__internal_666dbe1f4828384cf8b8d49175401c885b633c0b6fa450b3ce2273eeaa8978df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_666dbe1f4828384cf8b8d49175401c885b633c0b6fa450b3ce2273eeaa8978df->leave($__internal_666dbe1f4828384cf8b8d49175401c885b633c0b6fa450b3ce2273eeaa8978df_prof);

        
        $__internal_d8d77167913b6867fdba74ad1e8e9c9a790a8406e00049668d7a1639ee299d21->leave($__internal_d8d77167913b6867fdba74ad1e8e9c9a790a8406e00049668d7a1639ee299d21_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_e13d7238b2cbfa87ea74d63dd8f5d312ea0dfa79caa8fe4db4362dbfdc7165b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e13d7238b2cbfa87ea74d63dd8f5d312ea0dfa79caa8fe4db4362dbfdc7165b9->enter($__internal_e13d7238b2cbfa87ea74d63dd8f5d312ea0dfa79caa8fe4db4362dbfdc7165b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5f2a449b50b5af591d909229b17e2a77bd96971c76b0a720c7989c10bc00197d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f2a449b50b5af591d909229b17e2a77bd96971c76b0a720c7989c10bc00197d->enter($__internal_5f2a449b50b5af591d909229b17e2a77bd96971c76b0a720c7989c10bc00197d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5f2a449b50b5af591d909229b17e2a77bd96971c76b0a720c7989c10bc00197d->leave($__internal_5f2a449b50b5af591d909229b17e2a77bd96971c76b0a720c7989c10bc00197d_prof);

        
        $__internal_e13d7238b2cbfa87ea74d63dd8f5d312ea0dfa79caa8fe4db4362dbfdc7165b9->leave($__internal_e13d7238b2cbfa87ea74d63dd8f5d312ea0dfa79caa8fe4db4362dbfdc7165b9_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_aeec9674f238fcc0363b4122faf5e666100abd8df2e65a61f6529ddc3d8dbaaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aeec9674f238fcc0363b4122faf5e666100abd8df2e65a61f6529ddc3d8dbaaa->enter($__internal_aeec9674f238fcc0363b4122faf5e666100abd8df2e65a61f6529ddc3d8dbaaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_02c706fa00cb003b83c488ac23b56155c1325a78ad42a3d981f43c27fb31ef07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02c706fa00cb003b83c488ac23b56155c1325a78ad42a3d981f43c27fb31ef07->enter($__internal_02c706fa00cb003b83c488ac23b56155c1325a78ad42a3d981f43c27fb31ef07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_02c706fa00cb003b83c488ac23b56155c1325a78ad42a3d981f43c27fb31ef07->leave($__internal_02c706fa00cb003b83c488ac23b56155c1325a78ad42a3d981f43c27fb31ef07_prof);

        
        $__internal_aeec9674f238fcc0363b4122faf5e666100abd8df2e65a61f6529ddc3d8dbaaa->leave($__internal_aeec9674f238fcc0363b4122faf5e666100abd8df2e65a61f6529ddc3d8dbaaa_prof);

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
