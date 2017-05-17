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
        $__internal_44f5585fc3911b727fa95fa65fa848c57c6786ec0d649a8704ba021c1d3d7f56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44f5585fc3911b727fa95fa65fa848c57c6786ec0d649a8704ba021c1d3d7f56->enter($__internal_44f5585fc3911b727fa95fa65fa848c57c6786ec0d649a8704ba021c1d3d7f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $__internal_4d0cc301ab0f10200f6306b42362ede6a24d9baacc220d53cf56f8559cc1b9bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d0cc301ab0f10200f6306b42362ede6a24d9baacc220d53cf56f8559cc1b9bc->enter($__internal_4d0cc301ab0f10200f6306b42362ede6a24d9baacc220d53cf56f8559cc1b9bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44f5585fc3911b727fa95fa65fa848c57c6786ec0d649a8704ba021c1d3d7f56->leave($__internal_44f5585fc3911b727fa95fa65fa848c57c6786ec0d649a8704ba021c1d3d7f56_prof);

        
        $__internal_4d0cc301ab0f10200f6306b42362ede6a24d9baacc220d53cf56f8559cc1b9bc->leave($__internal_4d0cc301ab0f10200f6306b42362ede6a24d9baacc220d53cf56f8559cc1b9bc_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b2b212d256d56fe28a4b8f84037bb5e50a9e5088679e07c820d4b094245a750e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2b212d256d56fe28a4b8f84037bb5e50a9e5088679e07c820d4b094245a750e->enter($__internal_b2b212d256d56fe28a4b8f84037bb5e50a9e5088679e07c820d4b094245a750e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_edd4ae51626489df5c028ad4401e611de943d6795aee44ac938da882ea2bf0c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edd4ae51626489df5c028ad4401e611de943d6795aee44ac938da882ea2bf0c5->enter($__internal_edd4ae51626489df5c028ad4401e611de943d6795aee44ac938da882ea2bf0c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_edd4ae51626489df5c028ad4401e611de943d6795aee44ac938da882ea2bf0c5->leave($__internal_edd4ae51626489df5c028ad4401e611de943d6795aee44ac938da882ea2bf0c5_prof);

        
        $__internal_b2b212d256d56fe28a4b8f84037bb5e50a9e5088679e07c820d4b094245a750e->leave($__internal_b2b212d256d56fe28a4b8f84037bb5e50a9e5088679e07c820d4b094245a750e_prof);

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
