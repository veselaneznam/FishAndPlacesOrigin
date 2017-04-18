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
        $__internal_4bc2ba377639d6afeb7d295e4775fafd5ec0cf709af7d1c7e0dcff95e3330d52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bc2ba377639d6afeb7d295e4775fafd5ec0cf709af7d1c7e0dcff95e3330d52->enter($__internal_4bc2ba377639d6afeb7d295e4775fafd5ec0cf709af7d1c7e0dcff95e3330d52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_4c9d87cf6b42e90452865f2e93f9d358d7390354ad5b3b7a032483f7f45eef3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c9d87cf6b42e90452865f2e93f9d358d7390354ad5b3b7a032483f7f45eef3d->enter($__internal_4c9d87cf6b42e90452865f2e93f9d358d7390354ad5b3b7a032483f7f45eef3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4bc2ba377639d6afeb7d295e4775fafd5ec0cf709af7d1c7e0dcff95e3330d52->leave($__internal_4bc2ba377639d6afeb7d295e4775fafd5ec0cf709af7d1c7e0dcff95e3330d52_prof);

        
        $__internal_4c9d87cf6b42e90452865f2e93f9d358d7390354ad5b3b7a032483f7f45eef3d->leave($__internal_4c9d87cf6b42e90452865f2e93f9d358d7390354ad5b3b7a032483f7f45eef3d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1d428947aee0a13017231a082e7ea550904ae1d0ef684fdf3b8f0ded92f56e82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d428947aee0a13017231a082e7ea550904ae1d0ef684fdf3b8f0ded92f56e82->enter($__internal_1d428947aee0a13017231a082e7ea550904ae1d0ef684fdf3b8f0ded92f56e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f850f70a444ec6c0363186eb8b49ab937559379caaabd8cd3570b03e4b9c8ed0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f850f70a444ec6c0363186eb8b49ab937559379caaabd8cd3570b03e4b9c8ed0->enter($__internal_f850f70a444ec6c0363186eb8b49ab937559379caaabd8cd3570b03e4b9c8ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f850f70a444ec6c0363186eb8b49ab937559379caaabd8cd3570b03e4b9c8ed0->leave($__internal_f850f70a444ec6c0363186eb8b49ab937559379caaabd8cd3570b03e4b9c8ed0_prof);

        
        $__internal_1d428947aee0a13017231a082e7ea550904ae1d0ef684fdf3b8f0ded92f56e82->leave($__internal_1d428947aee0a13017231a082e7ea550904ae1d0ef684fdf3b8f0ded92f56e82_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_645359432bdacc9f13602e96996967b5bcd44e901f350a41bc06904cde3794e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_645359432bdacc9f13602e96996967b5bcd44e901f350a41bc06904cde3794e5->enter($__internal_645359432bdacc9f13602e96996967b5bcd44e901f350a41bc06904cde3794e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_742d64924ccd746bbbb26075f39c0a69cdbb263887eb097e31e2af4b170a0760 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_742d64924ccd746bbbb26075f39c0a69cdbb263887eb097e31e2af4b170a0760->enter($__internal_742d64924ccd746bbbb26075f39c0a69cdbb263887eb097e31e2af4b170a0760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_742d64924ccd746bbbb26075f39c0a69cdbb263887eb097e31e2af4b170a0760->leave($__internal_742d64924ccd746bbbb26075f39c0a69cdbb263887eb097e31e2af4b170a0760_prof);

        
        $__internal_645359432bdacc9f13602e96996967b5bcd44e901f350a41bc06904cde3794e5->leave($__internal_645359432bdacc9f13602e96996967b5bcd44e901f350a41bc06904cde3794e5_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_44c982dc67c91d451cd28ea46292ea3e05dd2d30081ee765aaf5c12f0279174e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44c982dc67c91d451cd28ea46292ea3e05dd2d30081ee765aaf5c12f0279174e->enter($__internal_44c982dc67c91d451cd28ea46292ea3e05dd2d30081ee765aaf5c12f0279174e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ea1acd91ca10d76c6de9f037b17ed027cae4a0d88cf9480000d53104f46c5fe4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea1acd91ca10d76c6de9f037b17ed027cae4a0d88cf9480000d53104f46c5fe4->enter($__internal_ea1acd91ca10d76c6de9f037b17ed027cae4a0d88cf9480000d53104f46c5fe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_ea1acd91ca10d76c6de9f037b17ed027cae4a0d88cf9480000d53104f46c5fe4->leave($__internal_ea1acd91ca10d76c6de9f037b17ed027cae4a0d88cf9480000d53104f46c5fe4_prof);

        
        $__internal_44c982dc67c91d451cd28ea46292ea3e05dd2d30081ee765aaf5c12f0279174e->leave($__internal_44c982dc67c91d451cd28ea46292ea3e05dd2d30081ee765aaf5c12f0279174e_prof);

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
