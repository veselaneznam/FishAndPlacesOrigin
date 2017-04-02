<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_9a45982aa110aef274af4f6941345fba661b16b757c5e5ee34d2481a6fed3ab2 extends Twig_Template
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
        $__internal_03f3a3580646e8563e0dfe87ce1bd64a71e7b8492f28747a968193c7fdbe3af4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03f3a3580646e8563e0dfe87ce1bd64a71e7b8492f28747a968193c7fdbe3af4->enter($__internal_03f3a3580646e8563e0dfe87ce1bd64a71e7b8492f28747a968193c7fdbe3af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03f3a3580646e8563e0dfe87ce1bd64a71e7b8492f28747a968193c7fdbe3af4->leave($__internal_03f3a3580646e8563e0dfe87ce1bd64a71e7b8492f28747a968193c7fdbe3af4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f8da028dabd8b28e00480e37c0a350d6e0c76006f74a8860e2c76e5e8824ff8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8da028dabd8b28e00480e37c0a350d6e0c76006f74a8860e2c76e5e8824ff8e->enter($__internal_f8da028dabd8b28e00480e37c0a350d6e0c76006f74a8860e2c76e5e8824ff8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f8da028dabd8b28e00480e37c0a350d6e0c76006f74a8860e2c76e5e8824ff8e->leave($__internal_f8da028dabd8b28e00480e37c0a350d6e0c76006f74a8860e2c76e5e8824ff8e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_05c1a660e5751fc0572cbc4a13ede4530abbb175de3eb6c1c9d15ed64c0fb5a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05c1a660e5751fc0572cbc4a13ede4530abbb175de3eb6c1c9d15ed64c0fb5a6->enter($__internal_05c1a660e5751fc0572cbc4a13ede4530abbb175de3eb6c1c9d15ed64c0fb5a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_05c1a660e5751fc0572cbc4a13ede4530abbb175de3eb6c1c9d15ed64c0fb5a6->leave($__internal_05c1a660e5751fc0572cbc4a13ede4530abbb175de3eb6c1c9d15ed64c0fb5a6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc5f9b4146fd1b0b4e6aedd6835c922c861ed95e5d12b532acc67922dd7930e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc5f9b4146fd1b0b4e6aedd6835c922c861ed95e5d12b532acc67922dd7930e9->enter($__internal_dc5f9b4146fd1b0b4e6aedd6835c922c861ed95e5d12b532acc67922dd7930e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_dc5f9b4146fd1b0b4e6aedd6835c922c861ed95e5d12b532acc67922dd7930e9->leave($__internal_dc5f9b4146fd1b0b4e6aedd6835c922c861ed95e5d12b532acc67922dd7930e9_prof);

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
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
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
