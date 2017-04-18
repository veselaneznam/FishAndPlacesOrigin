<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_2c24d3490565497a2c2396660dc0ef57e6901d6cbe1fa29b3f4c52d313f1ffd2 extends Twig_Template
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
        $__internal_92080a0ad3849c364035ebe1a04978ede15f70f3189db349576b292cbb6dc1bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92080a0ad3849c364035ebe1a04978ede15f70f3189db349576b292cbb6dc1bc->enter($__internal_92080a0ad3849c364035ebe1a04978ede15f70f3189db349576b292cbb6dc1bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_2b2606aecd743508e64a29338ce7b65f54644f6ca324c41cb5582b73fb7e35d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b2606aecd743508e64a29338ce7b65f54644f6ca324c41cb5582b73fb7e35d4->enter($__internal_2b2606aecd743508e64a29338ce7b65f54644f6ca324c41cb5582b73fb7e35d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92080a0ad3849c364035ebe1a04978ede15f70f3189db349576b292cbb6dc1bc->leave($__internal_92080a0ad3849c364035ebe1a04978ede15f70f3189db349576b292cbb6dc1bc_prof);

        
        $__internal_2b2606aecd743508e64a29338ce7b65f54644f6ca324c41cb5582b73fb7e35d4->leave($__internal_2b2606aecd743508e64a29338ce7b65f54644f6ca324c41cb5582b73fb7e35d4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5cbcb1a871161e1361926927f7dcebc63448a762d5df504ddbbab11935e38ed7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cbcb1a871161e1361926927f7dcebc63448a762d5df504ddbbab11935e38ed7->enter($__internal_5cbcb1a871161e1361926927f7dcebc63448a762d5df504ddbbab11935e38ed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ee91892d5d2ab04a652feeb6f1819ea08093a58e8b92e38204afe1e25ea0febc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee91892d5d2ab04a652feeb6f1819ea08093a58e8b92e38204afe1e25ea0febc->enter($__internal_ee91892d5d2ab04a652feeb6f1819ea08093a58e8b92e38204afe1e25ea0febc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ee91892d5d2ab04a652feeb6f1819ea08093a58e8b92e38204afe1e25ea0febc->leave($__internal_ee91892d5d2ab04a652feeb6f1819ea08093a58e8b92e38204afe1e25ea0febc_prof);

        
        $__internal_5cbcb1a871161e1361926927f7dcebc63448a762d5df504ddbbab11935e38ed7->leave($__internal_5cbcb1a871161e1361926927f7dcebc63448a762d5df504ddbbab11935e38ed7_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_884d9f2280d972ad5bfd9beae4f84c22a127d6b68ef268065735040fbb521862 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_884d9f2280d972ad5bfd9beae4f84c22a127d6b68ef268065735040fbb521862->enter($__internal_884d9f2280d972ad5bfd9beae4f84c22a127d6b68ef268065735040fbb521862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6d2a1f1244b972f480b6cd7b7e2ae4812beb264d5bdd81e0a026d317d1d3dbec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d2a1f1244b972f480b6cd7b7e2ae4812beb264d5bdd81e0a026d317d1d3dbec->enter($__internal_6d2a1f1244b972f480b6cd7b7e2ae4812beb264d5bdd81e0a026d317d1d3dbec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6d2a1f1244b972f480b6cd7b7e2ae4812beb264d5bdd81e0a026d317d1d3dbec->leave($__internal_6d2a1f1244b972f480b6cd7b7e2ae4812beb264d5bdd81e0a026d317d1d3dbec_prof);

        
        $__internal_884d9f2280d972ad5bfd9beae4f84c22a127d6b68ef268065735040fbb521862->leave($__internal_884d9f2280d972ad5bfd9beae4f84c22a127d6b68ef268065735040fbb521862_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb52cdbe01c568954118063dbfd5771d0bce821e0e9376f259735f97d28aa5f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb52cdbe01c568954118063dbfd5771d0bce821e0e9376f259735f97d28aa5f3->enter($__internal_eb52cdbe01c568954118063dbfd5771d0bce821e0e9376f259735f97d28aa5f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_999523499aca14d11a087d9c2c965645a9faa068cd31beccbc21f32484c350a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_999523499aca14d11a087d9c2c965645a9faa068cd31beccbc21f32484c350a1->enter($__internal_999523499aca14d11a087d9c2c965645a9faa068cd31beccbc21f32484c350a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_999523499aca14d11a087d9c2c965645a9faa068cd31beccbc21f32484c350a1->leave($__internal_999523499aca14d11a087d9c2c965645a9faa068cd31beccbc21f32484c350a1_prof);

        
        $__internal_eb52cdbe01c568954118063dbfd5771d0bce821e0e9376f259735f97d28aa5f3->leave($__internal_eb52cdbe01c568954118063dbfd5771d0bce821e0e9376f259735f97d28aa5f3_prof);

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
