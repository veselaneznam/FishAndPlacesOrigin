<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_93fe30208f2b6cdb57378f1eb2f5fba659bc7573e289106756cbb549e61d28a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_f7dccc4a7ddbc62db4768a8354c9e45436f2741117d26b22314ef47a03b13819 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7dccc4a7ddbc62db4768a8354c9e45436f2741117d26b22314ef47a03b13819->enter($__internal_f7dccc4a7ddbc62db4768a8354c9e45436f2741117d26b22314ef47a03b13819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $__internal_883f94bacf3218b68273c4200793078410a49fe94b7763a247b397c19e3af10c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_883f94bacf3218b68273c4200793078410a49fe94b7763a247b397c19e3af10c->enter($__internal_883f94bacf3218b68273c4200793078410a49fe94b7763a247b397c19e3af10c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7dccc4a7ddbc62db4768a8354c9e45436f2741117d26b22314ef47a03b13819->leave($__internal_f7dccc4a7ddbc62db4768a8354c9e45436f2741117d26b22314ef47a03b13819_prof);

        
        $__internal_883f94bacf3218b68273c4200793078410a49fe94b7763a247b397c19e3af10c->leave($__internal_883f94bacf3218b68273c4200793078410a49fe94b7763a247b397c19e3af10c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fdb49b8c13022f712dce6c17599f123ad5251c60a122a6edff67e01d8dd2ec3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdb49b8c13022f712dce6c17599f123ad5251c60a122a6edff67e01d8dd2ec3e->enter($__internal_fdb49b8c13022f712dce6c17599f123ad5251c60a122a6edff67e01d8dd2ec3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_804de35132f82b1793bfa2daa4f39840745b6994d12c473e3249a9bbb911a2e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_804de35132f82b1793bfa2daa4f39840745b6994d12c473e3249a9bbb911a2e3->enter($__internal_804de35132f82b1793bfa2daa4f39840745b6994d12c473e3249a9bbb911a2e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_804de35132f82b1793bfa2daa4f39840745b6994d12c473e3249a9bbb911a2e3->leave($__internal_804de35132f82b1793bfa2daa4f39840745b6994d12c473e3249a9bbb911a2e3_prof);

        
        $__internal_fdb49b8c13022f712dce6c17599f123ad5251c60a122a6edff67e01d8dd2ec3e->leave($__internal_fdb49b8c13022f712dce6c17599f123ad5251c60a122a6edff67e01d8dd2ec3e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/show.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
