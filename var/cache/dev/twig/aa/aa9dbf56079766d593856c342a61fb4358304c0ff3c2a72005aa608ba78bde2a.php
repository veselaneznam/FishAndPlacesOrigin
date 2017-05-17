<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_c783548c6af438dd24fd4cfedc587e095b62dd18388dc691631d4c8b64f6081a extends Twig_Template
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
        $__internal_5055aa412d9c3b94bbbb8214fcfe6e65ca070636a676da2539245649d38bf880 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5055aa412d9c3b94bbbb8214fcfe6e65ca070636a676da2539245649d38bf880->enter($__internal_5055aa412d9c3b94bbbb8214fcfe6e65ca070636a676da2539245649d38bf880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        $__internal_2e3382e616f56a4e5c6418809da2124aeec7c1c759bb1344ef22ad65205a293a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e3382e616f56a4e5c6418809da2124aeec7c1c759bb1344ef22ad65205a293a->enter($__internal_2e3382e616f56a4e5c6418809da2124aeec7c1c759bb1344ef22ad65205a293a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_5055aa412d9c3b94bbbb8214fcfe6e65ca070636a676da2539245649d38bf880->leave($__internal_5055aa412d9c3b94bbbb8214fcfe6e65ca070636a676da2539245649d38bf880_prof);

        
        $__internal_2e3382e616f56a4e5c6418809da2124aeec7c1c759bb1344ef22ad65205a293a->leave($__internal_2e3382e616f56a4e5c6418809da2124aeec7c1c759bb1344ef22ad65205a293a_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_6e6c4302e59f464b179049e7330060719f3f5c3e8911997734d1778afd34b67f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e6c4302e59f464b179049e7330060719f3f5c3e8911997734d1778afd34b67f->enter($__internal_6e6c4302e59f464b179049e7330060719f3f5c3e8911997734d1778afd34b67f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_271dde26f0c4641bc47e7dcd86310384598bb1b2178319d223d0f4d124eac93e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_271dde26f0c4641bc47e7dcd86310384598bb1b2178319d223d0f4d124eac93e->enter($__internal_271dde26f0c4641bc47e7dcd86310384598bb1b2178319d223d0f4d124eac93e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_271dde26f0c4641bc47e7dcd86310384598bb1b2178319d223d0f4d124eac93e->leave($__internal_271dde26f0c4641bc47e7dcd86310384598bb1b2178319d223d0f4d124eac93e_prof);

        
        $__internal_6e6c4302e59f464b179049e7330060719f3f5c3e8911997734d1778afd34b67f->leave($__internal_6e6c4302e59f464b179049e7330060719f3f5c3e8911997734d1778afd34b67f_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_bdb81c15197e1fd0bec655ba2c0cfa5bb595e1289701dc925b5f09c4bd2ab00f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdb81c15197e1fd0bec655ba2c0cfa5bb595e1289701dc925b5f09c4bd2ab00f->enter($__internal_bdb81c15197e1fd0bec655ba2c0cfa5bb595e1289701dc925b5f09c4bd2ab00f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_cf30a0b6a996da80172e5634db95bf593d6c8d3051e07f0252a3b2a954006166 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf30a0b6a996da80172e5634db95bf593d6c8d3051e07f0252a3b2a954006166->enter($__internal_cf30a0b6a996da80172e5634db95bf593d6c8d3051e07f0252a3b2a954006166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_cf30a0b6a996da80172e5634db95bf593d6c8d3051e07f0252a3b2a954006166->leave($__internal_cf30a0b6a996da80172e5634db95bf593d6c8d3051e07f0252a3b2a954006166_prof);

        
        $__internal_bdb81c15197e1fd0bec655ba2c0cfa5bb595e1289701dc925b5f09c4bd2ab00f->leave($__internal_bdb81c15197e1fd0bec655ba2c0cfa5bb595e1289701dc925b5f09c4bd2ab00f_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_5a2ce4779288e8b63e450d18b6b06a9a84618eb942364e7212f87e5f0e460845 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a2ce4779288e8b63e450d18b6b06a9a84618eb942364e7212f87e5f0e460845->enter($__internal_5a2ce4779288e8b63e450d18b6b06a9a84618eb942364e7212f87e5f0e460845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_ef837a15bfa1dcddf852bd76f5d2bdd6d3caccd967f81e1b3289e474bfd89369 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef837a15bfa1dcddf852bd76f5d2bdd6d3caccd967f81e1b3289e474bfd89369->enter($__internal_ef837a15bfa1dcddf852bd76f5d2bdd6d3caccd967f81e1b3289e474bfd89369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_ef837a15bfa1dcddf852bd76f5d2bdd6d3caccd967f81e1b3289e474bfd89369->leave($__internal_ef837a15bfa1dcddf852bd76f5d2bdd6d3caccd967f81e1b3289e474bfd89369_prof);

        
        $__internal_5a2ce4779288e8b63e450d18b6b06a9a84618eb942364e7212f87e5f0e460845->leave($__internal_5a2ce4779288e8b63e450d18b6b06a9a84618eb942364e7212f87e5f0e460845_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Resetting/email.txt.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
