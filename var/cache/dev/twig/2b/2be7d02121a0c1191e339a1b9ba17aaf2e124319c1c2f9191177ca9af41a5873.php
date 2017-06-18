<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_63c1f495c745cf8d070cc2f4769f1e4ee8e45315015e6053fae3498fb375696b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_74af3e6c4e8f7c12fbe0637f45a63306dd34a3ab809391cd30b26322a1236b62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74af3e6c4e8f7c12fbe0637f45a63306dd34a3ab809391cd30b26322a1236b62->enter($__internal_74af3e6c4e8f7c12fbe0637f45a63306dd34a3ab809391cd30b26322a1236b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $__internal_395b2bbd2cfd6ecd9980ce805c3b12367f2292bb0c155b0664e879302c3a2d97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_395b2bbd2cfd6ecd9980ce805c3b12367f2292bb0c155b0664e879302c3a2d97->enter($__internal_395b2bbd2cfd6ecd9980ce805c3b12367f2292bb0c155b0664e879302c3a2d97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74af3e6c4e8f7c12fbe0637f45a63306dd34a3ab809391cd30b26322a1236b62->leave($__internal_74af3e6c4e8f7c12fbe0637f45a63306dd34a3ab809391cd30b26322a1236b62_prof);

        
        $__internal_395b2bbd2cfd6ecd9980ce805c3b12367f2292bb0c155b0664e879302c3a2d97->leave($__internal_395b2bbd2cfd6ecd9980ce805c3b12367f2292bb0c155b0664e879302c3a2d97_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_669ebb2cf904ae2fd45fd22617133e90efbb643be66290a034dc798e746aec7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_669ebb2cf904ae2fd45fd22617133e90efbb643be66290a034dc798e746aec7c->enter($__internal_669ebb2cf904ae2fd45fd22617133e90efbb643be66290a034dc798e746aec7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b080fb27dbda28234d741a8124dc6ba839768e8165f329e5020fff05882009ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b080fb27dbda28234d741a8124dc6ba839768e8165f329e5020fff05882009ac->enter($__internal_b080fb27dbda28234d741a8124dc6ba839768e8165f329e5020fff05882009ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_b080fb27dbda28234d741a8124dc6ba839768e8165f329e5020fff05882009ac->leave($__internal_b080fb27dbda28234d741a8124dc6ba839768e8165f329e5020fff05882009ac_prof);

        
        $__internal_669ebb2cf904ae2fd45fd22617133e90efbb643be66290a034dc798e746aec7c->leave($__internal_669ebb2cf904ae2fd45fd22617133e90efbb643be66290a034dc798e746aec7c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/new.html.twig", "/var/www/FishAndPlaces/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
