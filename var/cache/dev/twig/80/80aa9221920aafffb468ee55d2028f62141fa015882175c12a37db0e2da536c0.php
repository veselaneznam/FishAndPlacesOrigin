<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_114882bb15d26ed53bf1bbd3f4cbd39d27536d3c208f5494be4431f7af1382e4 extends Twig_Template
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
        $__internal_135faa274c2d21e45b6dca4a7663e31d465b91dd692d9f2dd0cc5f9988a1ba27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_135faa274c2d21e45b6dca4a7663e31d465b91dd692d9f2dd0cc5f9988a1ba27->enter($__internal_135faa274c2d21e45b6dca4a7663e31d465b91dd692d9f2dd0cc5f9988a1ba27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $__internal_3012e9315ac5b33a711ddcc857e5a8420ff978117721447b35da5bd84c89bf65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3012e9315ac5b33a711ddcc857e5a8420ff978117721447b35da5bd84c89bf65->enter($__internal_3012e9315ac5b33a711ddcc857e5a8420ff978117721447b35da5bd84c89bf65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_135faa274c2d21e45b6dca4a7663e31d465b91dd692d9f2dd0cc5f9988a1ba27->leave($__internal_135faa274c2d21e45b6dca4a7663e31d465b91dd692d9f2dd0cc5f9988a1ba27_prof);

        
        $__internal_3012e9315ac5b33a711ddcc857e5a8420ff978117721447b35da5bd84c89bf65->leave($__internal_3012e9315ac5b33a711ddcc857e5a8420ff978117721447b35da5bd84c89bf65_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_736daaa1b9861cd3ca64b5031fd2a21ada24e3caa15a7e8eb1d085876ec56087 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_736daaa1b9861cd3ca64b5031fd2a21ada24e3caa15a7e8eb1d085876ec56087->enter($__internal_736daaa1b9861cd3ca64b5031fd2a21ada24e3caa15a7e8eb1d085876ec56087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6357d33cab8bb1261bd165d1ea19ebcdb68b70282c73ba9f02eb39d71df49a6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6357d33cab8bb1261bd165d1ea19ebcdb68b70282c73ba9f02eb39d71df49a6b->enter($__internal_6357d33cab8bb1261bd165d1ea19ebcdb68b70282c73ba9f02eb39d71df49a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_6357d33cab8bb1261bd165d1ea19ebcdb68b70282c73ba9f02eb39d71df49a6b->leave($__internal_6357d33cab8bb1261bd165d1ea19ebcdb68b70282c73ba9f02eb39d71df49a6b_prof);

        
        $__internal_736daaa1b9861cd3ca64b5031fd2a21ada24e3caa15a7e8eb1d085876ec56087->leave($__internal_736daaa1b9861cd3ca64b5031fd2a21ada24e3caa15a7e8eb1d085876ec56087_prof);

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
", "@FOSUser/Group/show.html.twig", "/var/www/FishAndPlaces/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
