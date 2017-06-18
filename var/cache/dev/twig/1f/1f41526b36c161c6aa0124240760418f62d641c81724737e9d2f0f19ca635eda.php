<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_3fb7f25cfcd3319e5b1e399a5c08d504c2641d14c98f217ae9cf6ecd33edaefe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e56002193dd0e1c2eb2f597e8f034c4551dbc42e512f09df68c298b60d57ac4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e56002193dd0e1c2eb2f597e8f034c4551dbc42e512f09df68c298b60d57ac4d->enter($__internal_e56002193dd0e1c2eb2f597e8f034c4551dbc42e512f09df68c298b60d57ac4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        $__internal_de73c13d22d9ce91b8624b440d043f631204e1478a299c8c811f875a06e93752 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de73c13d22d9ce91b8624b440d043f631204e1478a299c8c811f875a06e93752->enter($__internal_de73c13d22d9ce91b8624b440d043f631204e1478a299c8c811f875a06e93752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_e56002193dd0e1c2eb2f597e8f034c4551dbc42e512f09df68c298b60d57ac4d->leave($__internal_e56002193dd0e1c2eb2f597e8f034c4551dbc42e512f09df68c298b60d57ac4d_prof);

        
        $__internal_de73c13d22d9ce91b8624b440d043f631204e1478a299c8c811f875a06e93752->leave($__internal_de73c13d22d9ce91b8624b440d043f631204e1478a299c8c811f875a06e93752_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_7b57001e55139d266d9f749f524ce6b9349d1daac8558decd24f316d61d855ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b57001e55139d266d9f749f524ce6b9349d1daac8558decd24f316d61d855ee->enter($__internal_7b57001e55139d266d9f749f524ce6b9349d1daac8558decd24f316d61d855ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_91125421e465be4a927c5ae33d1d984fbbcf68247fa5b5ef1a9ea6aeef9fc9a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91125421e465be4a927c5ae33d1d984fbbcf68247fa5b5ef1a9ea6aeef9fc9a6->enter($__internal_91125421e465be4a927c5ae33d1d984fbbcf68247fa5b5ef1a9ea6aeef9fc9a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_91125421e465be4a927c5ae33d1d984fbbcf68247fa5b5ef1a9ea6aeef9fc9a6->leave($__internal_91125421e465be4a927c5ae33d1d984fbbcf68247fa5b5ef1a9ea6aeef9fc9a6_prof);

        
        $__internal_7b57001e55139d266d9f749f524ce6b9349d1daac8558decd24f316d61d855ee->leave($__internal_7b57001e55139d266d9f749f524ce6b9349d1daac8558decd24f316d61d855ee_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_fafcdfa5978d6da4bbb09d568d7ec3113059e6f2e3a524cc90d65d3b82f59e65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fafcdfa5978d6da4bbb09d568d7ec3113059e6f2e3a524cc90d65d3b82f59e65->enter($__internal_fafcdfa5978d6da4bbb09d568d7ec3113059e6f2e3a524cc90d65d3b82f59e65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_1232126ebefe69ac292b66b9d5b4fb6abe0eecd8bd173fe8bfaaa75eb85f956d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1232126ebefe69ac292b66b9d5b4fb6abe0eecd8bd173fe8bfaaa75eb85f956d->enter($__internal_1232126ebefe69ac292b66b9d5b4fb6abe0eecd8bd173fe8bfaaa75eb85f956d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_1232126ebefe69ac292b66b9d5b4fb6abe0eecd8bd173fe8bfaaa75eb85f956d->leave($__internal_1232126ebefe69ac292b66b9d5b4fb6abe0eecd8bd173fe8bfaaa75eb85f956d_prof);

        
        $__internal_fafcdfa5978d6da4bbb09d568d7ec3113059e6f2e3a524cc90d65d3b82f59e65->leave($__internal_fafcdfa5978d6da4bbb09d568d7ec3113059e6f2e3a524cc90d65d3b82f59e65_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_31f5236687cae97fab7cccefb92b30279436cfef2913fbf16649c9e40ebe1e18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31f5236687cae97fab7cccefb92b30279436cfef2913fbf16649c9e40ebe1e18->enter($__internal_31f5236687cae97fab7cccefb92b30279436cfef2913fbf16649c9e40ebe1e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_3b7765c8a4a891d5e5766405267b3c60b5f7cef320e8356000dc073518dd65e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b7765c8a4a891d5e5766405267b3c60b5f7cef320e8356000dc073518dd65e6->enter($__internal_3b7765c8a4a891d5e5766405267b3c60b5f7cef320e8356000dc073518dd65e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_3b7765c8a4a891d5e5766405267b3c60b5f7cef320e8356000dc073518dd65e6->leave($__internal_3b7765c8a4a891d5e5766405267b3c60b5f7cef320e8356000dc073518dd65e6_prof);

        
        $__internal_31f5236687cae97fab7cccefb92b30279436cfef2913fbf16649c9e40ebe1e18->leave($__internal_31f5236687cae97fab7cccefb92b30279436cfef2913fbf16649c9e40ebe1e18_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Registration/email.txt.twig", "/var/www/FishAndPlaces/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
