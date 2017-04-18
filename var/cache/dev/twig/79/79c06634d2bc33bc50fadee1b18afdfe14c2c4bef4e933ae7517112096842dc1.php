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
        $__internal_f41155f5e39f439e38dbf39aa25d2fe6107eae0e59ba7c86c754ac38c5c5859c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f41155f5e39f439e38dbf39aa25d2fe6107eae0e59ba7c86c754ac38c5c5859c->enter($__internal_f41155f5e39f439e38dbf39aa25d2fe6107eae0e59ba7c86c754ac38c5c5859c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $__internal_47548f0a7840fbfb0b814974d8175a45eb6f7e4ec35f4d77a1dd4107e31865ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47548f0a7840fbfb0b814974d8175a45eb6f7e4ec35f4d77a1dd4107e31865ba->enter($__internal_47548f0a7840fbfb0b814974d8175a45eb6f7e4ec35f4d77a1dd4107e31865ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f41155f5e39f439e38dbf39aa25d2fe6107eae0e59ba7c86c754ac38c5c5859c->leave($__internal_f41155f5e39f439e38dbf39aa25d2fe6107eae0e59ba7c86c754ac38c5c5859c_prof);

        
        $__internal_47548f0a7840fbfb0b814974d8175a45eb6f7e4ec35f4d77a1dd4107e31865ba->leave($__internal_47548f0a7840fbfb0b814974d8175a45eb6f7e4ec35f4d77a1dd4107e31865ba_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b181336d4c4463d5f489e27c472d69943f424283aab3f6b6a70529a5c21dc592 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b181336d4c4463d5f489e27c472d69943f424283aab3f6b6a70529a5c21dc592->enter($__internal_b181336d4c4463d5f489e27c472d69943f424283aab3f6b6a70529a5c21dc592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e798199d58a58eb5623e9e0ceeea0cbab6f12f50080230e2bf3c1ca5a2e14032 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e798199d58a58eb5623e9e0ceeea0cbab6f12f50080230e2bf3c1ca5a2e14032->enter($__internal_e798199d58a58eb5623e9e0ceeea0cbab6f12f50080230e2bf3c1ca5a2e14032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_e798199d58a58eb5623e9e0ceeea0cbab6f12f50080230e2bf3c1ca5a2e14032->leave($__internal_e798199d58a58eb5623e9e0ceeea0cbab6f12f50080230e2bf3c1ca5a2e14032_prof);

        
        $__internal_b181336d4c4463d5f489e27c472d69943f424283aab3f6b6a70529a5c21dc592->leave($__internal_b181336d4c4463d5f489e27c472d69943f424283aab3f6b6a70529a5c21dc592_prof);

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
