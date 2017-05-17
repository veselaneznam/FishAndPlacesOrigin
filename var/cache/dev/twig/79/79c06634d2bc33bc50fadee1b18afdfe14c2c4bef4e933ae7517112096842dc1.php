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
        $__internal_80a816124ab55f4b3a0d5943226797b2cb0199068a9d8a0f3d0394a9f0edf2d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80a816124ab55f4b3a0d5943226797b2cb0199068a9d8a0f3d0394a9f0edf2d9->enter($__internal_80a816124ab55f4b3a0d5943226797b2cb0199068a9d8a0f3d0394a9f0edf2d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $__internal_f452d49ae9c5ed448dffd3fd5a3ab9b24bd41e52d23d028a9dc5e2ea87fddc4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f452d49ae9c5ed448dffd3fd5a3ab9b24bd41e52d23d028a9dc5e2ea87fddc4a->enter($__internal_f452d49ae9c5ed448dffd3fd5a3ab9b24bd41e52d23d028a9dc5e2ea87fddc4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80a816124ab55f4b3a0d5943226797b2cb0199068a9d8a0f3d0394a9f0edf2d9->leave($__internal_80a816124ab55f4b3a0d5943226797b2cb0199068a9d8a0f3d0394a9f0edf2d9_prof);

        
        $__internal_f452d49ae9c5ed448dffd3fd5a3ab9b24bd41e52d23d028a9dc5e2ea87fddc4a->leave($__internal_f452d49ae9c5ed448dffd3fd5a3ab9b24bd41e52d23d028a9dc5e2ea87fddc4a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2c35142ec2680da707b81fa021b287d9432b3fee64b2d03b3d0d0b54873a72f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c35142ec2680da707b81fa021b287d9432b3fee64b2d03b3d0d0b54873a72f0->enter($__internal_2c35142ec2680da707b81fa021b287d9432b3fee64b2d03b3d0d0b54873a72f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_492c8ce928b85f824b15019ecbae427ea5078ad9202d4cc02905c7e769da357c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_492c8ce928b85f824b15019ecbae427ea5078ad9202d4cc02905c7e769da357c->enter($__internal_492c8ce928b85f824b15019ecbae427ea5078ad9202d4cc02905c7e769da357c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_492c8ce928b85f824b15019ecbae427ea5078ad9202d4cc02905c7e769da357c->leave($__internal_492c8ce928b85f824b15019ecbae427ea5078ad9202d4cc02905c7e769da357c_prof);

        
        $__internal_2c35142ec2680da707b81fa021b287d9432b3fee64b2d03b3d0d0b54873a72f0->leave($__internal_2c35142ec2680da707b81fa021b287d9432b3fee64b2d03b3d0d0b54873a72f0_prof);

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
