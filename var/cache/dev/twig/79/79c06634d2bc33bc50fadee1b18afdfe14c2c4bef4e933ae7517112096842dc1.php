<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_fe982a4ce697db0c487ccba0fa8f5bd420d5611bb38e9701fda5bd161dcb2e68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
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
        $__internal_1739b492c6a85347b712dd294e7b1c70b17ce1d1958b05724199c12a6c169899 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1739b492c6a85347b712dd294e7b1c70b17ce1d1958b05724199c12a6c169899->enter($__internal_1739b492c6a85347b712dd294e7b1c70b17ce1d1958b05724199c12a6c169899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $__internal_f4270ae428a70aa03518a75f30013dd7155b1d60cb3735e02a8ccacf6b58161a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4270ae428a70aa03518a75f30013dd7155b1d60cb3735e02a8ccacf6b58161a->enter($__internal_f4270ae428a70aa03518a75f30013dd7155b1d60cb3735e02a8ccacf6b58161a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1739b492c6a85347b712dd294e7b1c70b17ce1d1958b05724199c12a6c169899->leave($__internal_1739b492c6a85347b712dd294e7b1c70b17ce1d1958b05724199c12a6c169899_prof);

        
        $__internal_f4270ae428a70aa03518a75f30013dd7155b1d60cb3735e02a8ccacf6b58161a->leave($__internal_f4270ae428a70aa03518a75f30013dd7155b1d60cb3735e02a8ccacf6b58161a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_42eadc8a7611cc82cfe2d542c4c5080c1057fb3778bbc750e364602af7f615f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42eadc8a7611cc82cfe2d542c4c5080c1057fb3778bbc750e364602af7f615f5->enter($__internal_42eadc8a7611cc82cfe2d542c4c5080c1057fb3778bbc750e364602af7f615f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9b2ddab809d007ff6565f95d83d707ba4746e870c9829f161fab64cb3262e151 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b2ddab809d007ff6565f95d83d707ba4746e870c9829f161fab64cb3262e151->enter($__internal_9b2ddab809d007ff6565f95d83d707ba4746e870c9829f161fab64cb3262e151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_9b2ddab809d007ff6565f95d83d707ba4746e870c9829f161fab64cb3262e151->leave($__internal_9b2ddab809d007ff6565f95d83d707ba4746e870c9829f161fab64cb3262e151_prof);

        
        $__internal_42eadc8a7611cc82cfe2d542c4c5080c1057fb3778bbc750e364602af7f615f5->leave($__internal_42eadc8a7611cc82cfe2d542c4c5080c1057fb3778bbc750e364602af7f615f5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "@FOSUser/Resetting/check_email.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
