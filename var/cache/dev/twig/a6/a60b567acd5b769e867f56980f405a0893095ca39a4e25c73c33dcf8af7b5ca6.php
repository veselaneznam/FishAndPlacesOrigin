<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_317cdbec9ca35282102847d3aa98f46ddc94f95d8bba7230ae65ffde67967cf5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
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
        $__internal_de24eac761d4063b11f0ee30b8852e8ade35d5e2aee33aa11f22ef224769b379 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de24eac761d4063b11f0ee30b8852e8ade35d5e2aee33aa11f22ef224769b379->enter($__internal_de24eac761d4063b11f0ee30b8852e8ade35d5e2aee33aa11f22ef224769b379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $__internal_32f73af5c17a47d7806865f486ef10ce69d6c80f26398af21f28b5c4acab07b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32f73af5c17a47d7806865f486ef10ce69d6c80f26398af21f28b5c4acab07b4->enter($__internal_32f73af5c17a47d7806865f486ef10ce69d6c80f26398af21f28b5c4acab07b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de24eac761d4063b11f0ee30b8852e8ade35d5e2aee33aa11f22ef224769b379->leave($__internal_de24eac761d4063b11f0ee30b8852e8ade35d5e2aee33aa11f22ef224769b379_prof);

        
        $__internal_32f73af5c17a47d7806865f486ef10ce69d6c80f26398af21f28b5c4acab07b4->leave($__internal_32f73af5c17a47d7806865f486ef10ce69d6c80f26398af21f28b5c4acab07b4_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a3f8641b3bcc5e6f7f380880070e4b9478a5d39546b234718cb00384de2ee014 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3f8641b3bcc5e6f7f380880070e4b9478a5d39546b234718cb00384de2ee014->enter($__internal_a3f8641b3bcc5e6f7f380880070e4b9478a5d39546b234718cb00384de2ee014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2cb739008ca8f9c97b9f8bdc4721920f685303d192983c40190b35d8623ab060 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cb739008ca8f9c97b9f8bdc4721920f685303d192983c40190b35d8623ab060->enter($__internal_2cb739008ca8f9c97b9f8bdc4721920f685303d192983c40190b35d8623ab060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_2cb739008ca8f9c97b9f8bdc4721920f685303d192983c40190b35d8623ab060->leave($__internal_2cb739008ca8f9c97b9f8bdc4721920f685303d192983c40190b35d8623ab060_prof);

        
        $__internal_a3f8641b3bcc5e6f7f380880070e4b9478a5d39546b234718cb00384de2ee014->leave($__internal_a3f8641b3bcc5e6f7f380880070e4b9478a5d39546b234718cb00384de2ee014_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "@FOSUser/Registration/check_email.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
