<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_2b9e04335c6b4e56f9afaecff1739343db1c7b09ad65d18e732907ba39c04313 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d44caa374b86a5b93f872d8af64e758941d0a13d4b47f2482964eb71bc07a51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d44caa374b86a5b93f872d8af64e758941d0a13d4b47f2482964eb71bc07a51->enter($__internal_7d44caa374b86a5b93f872d8af64e758941d0a13d4b47f2482964eb71bc07a51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_f53e0c3b9e5fb81791f5ba2034f335db16ccd0acd55e1e786526cefa45f5e495 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f53e0c3b9e5fb81791f5ba2034f335db16ccd0acd55e1e786526cefa45f5e495->enter($__internal_f53e0c3b9e5fb81791f5ba2034f335db16ccd0acd55e1e786526cefa45f5e495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d44caa374b86a5b93f872d8af64e758941d0a13d4b47f2482964eb71bc07a51->leave($__internal_7d44caa374b86a5b93f872d8af64e758941d0a13d4b47f2482964eb71bc07a51_prof);

        
        $__internal_f53e0c3b9e5fb81791f5ba2034f335db16ccd0acd55e1e786526cefa45f5e495->leave($__internal_f53e0c3b9e5fb81791f5ba2034f335db16ccd0acd55e1e786526cefa45f5e495_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c24257ba7d2acefa982b7064d8930b412a372f100e62765ae1b356e31b6df0c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c24257ba7d2acefa982b7064d8930b412a372f100e62765ae1b356e31b6df0c9->enter($__internal_c24257ba7d2acefa982b7064d8930b412a372f100e62765ae1b356e31b6df0c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_470da1e48c785fa32a0e4318ec90a161b44c216b9b0a86b9755f49dffd5458c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_470da1e48c785fa32a0e4318ec90a161b44c216b9b0a86b9755f49dffd5458c5->enter($__internal_470da1e48c785fa32a0e4318ec90a161b44c216b9b0a86b9755f49dffd5458c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_470da1e48c785fa32a0e4318ec90a161b44c216b9b0a86b9755f49dffd5458c5->leave($__internal_470da1e48c785fa32a0e4318ec90a161b44c216b9b0a86b9755f49dffd5458c5_prof);

        
        $__internal_c24257ba7d2acefa982b7064d8930b412a372f100e62765ae1b356e31b6df0c9->leave($__internal_c24257ba7d2acefa982b7064d8930b412a372f100e62765ae1b356e31b6df0c9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
