<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_c2e5e2a75433122c50ccce8212ba18e8a37e271a7295cbc66e1c1a845fe49f15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_46dd9b2b3e1698f813bb0cf3aad7cbca7be1d4f732aa5c2b0a50bcc94be683f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46dd9b2b3e1698f813bb0cf3aad7cbca7be1d4f732aa5c2b0a50bcc94be683f7->enter($__internal_46dd9b2b3e1698f813bb0cf3aad7cbca7be1d4f732aa5c2b0a50bcc94be683f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $__internal_87f1eeb143a7766991207d94209dc3ecdb66231e98136d1fad9d0fc8df7ae906 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87f1eeb143a7766991207d94209dc3ecdb66231e98136d1fad9d0fc8df7ae906->enter($__internal_87f1eeb143a7766991207d94209dc3ecdb66231e98136d1fad9d0fc8df7ae906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46dd9b2b3e1698f813bb0cf3aad7cbca7be1d4f732aa5c2b0a50bcc94be683f7->leave($__internal_46dd9b2b3e1698f813bb0cf3aad7cbca7be1d4f732aa5c2b0a50bcc94be683f7_prof);

        
        $__internal_87f1eeb143a7766991207d94209dc3ecdb66231e98136d1fad9d0fc8df7ae906->leave($__internal_87f1eeb143a7766991207d94209dc3ecdb66231e98136d1fad9d0fc8df7ae906_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_455dd958e938111d48565b70d6c7f13a687391651f7a7142c196ba5b1e606823 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_455dd958e938111d48565b70d6c7f13a687391651f7a7142c196ba5b1e606823->enter($__internal_455dd958e938111d48565b70d6c7f13a687391651f7a7142c196ba5b1e606823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fa5f4e73b04bb59f642e0c92726835f88d839153ddcb95d8f839160d7324176d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa5f4e73b04bb59f642e0c92726835f88d839153ddcb95d8f839160d7324176d->enter($__internal_fa5f4e73b04bb59f642e0c92726835f88d839153ddcb95d8f839160d7324176d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_fa5f4e73b04bb59f642e0c92726835f88d839153ddcb95d8f839160d7324176d->leave($__internal_fa5f4e73b04bb59f642e0c92726835f88d839153ddcb95d8f839160d7324176d_prof);

        
        $__internal_455dd958e938111d48565b70d6c7f13a687391651f7a7142c196ba5b1e606823->leave($__internal_455dd958e938111d48565b70d6c7f13a687391651f7a7142c196ba5b1e606823_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
