<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_1d5c917a9510240c57ef2f0930a8145c948f9c14db059ebf1aba73d142ead9ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_705472d509b0b2b40536782bdc7d6631e9123f5075c51a19b69733a0f9323576 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_705472d509b0b2b40536782bdc7d6631e9123f5075c51a19b69733a0f9323576->enter($__internal_705472d509b0b2b40536782bdc7d6631e9123f5075c51a19b69733a0f9323576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $__internal_8413ac39e5d2dd228bddcde1b01ed56f11cf552d7e4bcd09b8a66ccb7800dd1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8413ac39e5d2dd228bddcde1b01ed56f11cf552d7e4bcd09b8a66ccb7800dd1c->enter($__internal_8413ac39e5d2dd228bddcde1b01ed56f11cf552d7e4bcd09b8a66ccb7800dd1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_705472d509b0b2b40536782bdc7d6631e9123f5075c51a19b69733a0f9323576->leave($__internal_705472d509b0b2b40536782bdc7d6631e9123f5075c51a19b69733a0f9323576_prof);

        
        $__internal_8413ac39e5d2dd228bddcde1b01ed56f11cf552d7e4bcd09b8a66ccb7800dd1c->leave($__internal_8413ac39e5d2dd228bddcde1b01ed56f11cf552d7e4bcd09b8a66ccb7800dd1c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dafed7aacb0f9a2125d074b6ac8d582b9e89e251251aaef249b2eb97dc59ef31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dafed7aacb0f9a2125d074b6ac8d582b9e89e251251aaef249b2eb97dc59ef31->enter($__internal_dafed7aacb0f9a2125d074b6ac8d582b9e89e251251aaef249b2eb97dc59ef31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2a70e41a5af8eac6982b1922fc7beb2995590f781fbe2025efdfbc7c84de88af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a70e41a5af8eac6982b1922fc7beb2995590f781fbe2025efdfbc7c84de88af->enter($__internal_2a70e41a5af8eac6982b1922fc7beb2995590f781fbe2025efdfbc7c84de88af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_2a70e41a5af8eac6982b1922fc7beb2995590f781fbe2025efdfbc7c84de88af->leave($__internal_2a70e41a5af8eac6982b1922fc7beb2995590f781fbe2025efdfbc7c84de88af_prof);

        
        $__internal_dafed7aacb0f9a2125d074b6ac8d582b9e89e251251aaef249b2eb97dc59ef31->leave($__internal_dafed7aacb0f9a2125d074b6ac8d582b9e89e251251aaef249b2eb97dc59ef31_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/ChangePassword/change_password.html.twig", "/var/www/FishAndPlaces/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
