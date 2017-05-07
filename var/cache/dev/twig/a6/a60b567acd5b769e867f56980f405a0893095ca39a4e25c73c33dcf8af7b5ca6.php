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
        $__internal_ad6aa720e89437433b5fac878c3d8f383464131444d735931611676ffd421c5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad6aa720e89437433b5fac878c3d8f383464131444d735931611676ffd421c5e->enter($__internal_ad6aa720e89437433b5fac878c3d8f383464131444d735931611676ffd421c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $__internal_ed2beab8038f60132c94d91f996b4fdf79d665c8b4cb1c9e4cef00c35141b3ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed2beab8038f60132c94d91f996b4fdf79d665c8b4cb1c9e4cef00c35141b3ef->enter($__internal_ed2beab8038f60132c94d91f996b4fdf79d665c8b4cb1c9e4cef00c35141b3ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad6aa720e89437433b5fac878c3d8f383464131444d735931611676ffd421c5e->leave($__internal_ad6aa720e89437433b5fac878c3d8f383464131444d735931611676ffd421c5e_prof);

        
        $__internal_ed2beab8038f60132c94d91f996b4fdf79d665c8b4cb1c9e4cef00c35141b3ef->leave($__internal_ed2beab8038f60132c94d91f996b4fdf79d665c8b4cb1c9e4cef00c35141b3ef_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5ccf5d3941c1d2798858d6b6d4efb26fae3d9c13a171d2a8dee9970ca66b49d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ccf5d3941c1d2798858d6b6d4efb26fae3d9c13a171d2a8dee9970ca66b49d2->enter($__internal_5ccf5d3941c1d2798858d6b6d4efb26fae3d9c13a171d2a8dee9970ca66b49d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_40838ffd7e088319be59fb8ad291453022fd71bb2de6ce450e58ee190f084d4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40838ffd7e088319be59fb8ad291453022fd71bb2de6ce450e58ee190f084d4e->enter($__internal_40838ffd7e088319be59fb8ad291453022fd71bb2de6ce450e58ee190f084d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_40838ffd7e088319be59fb8ad291453022fd71bb2de6ce450e58ee190f084d4e->leave($__internal_40838ffd7e088319be59fb8ad291453022fd71bb2de6ce450e58ee190f084d4e_prof);

        
        $__internal_5ccf5d3941c1d2798858d6b6d4efb26fae3d9c13a171d2a8dee9970ca66b49d2->leave($__internal_5ccf5d3941c1d2798858d6b6d4efb26fae3d9c13a171d2a8dee9970ca66b49d2_prof);

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
