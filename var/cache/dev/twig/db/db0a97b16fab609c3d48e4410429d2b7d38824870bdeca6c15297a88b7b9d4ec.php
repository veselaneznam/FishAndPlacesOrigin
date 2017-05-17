<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_e7cc7c767c20fea1ad2d3d2642a7b6eecc13564198302f7810b623d6aeae928d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_24bb90d1bffadf631c002f4a3dfd135d760c4ec9cfcdb8fc3dc269e54a45faf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24bb90d1bffadf631c002f4a3dfd135d760c4ec9cfcdb8fc3dc269e54a45faf4->enter($__internal_24bb90d1bffadf631c002f4a3dfd135d760c4ec9cfcdb8fc3dc269e54a45faf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_c8fbc09e8bf6e32278160086aa40892199d68067dd04691d34fce54716a8da01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8fbc09e8bf6e32278160086aa40892199d68067dd04691d34fce54716a8da01->enter($__internal_c8fbc09e8bf6e32278160086aa40892199d68067dd04691d34fce54716a8da01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_24bb90d1bffadf631c002f4a3dfd135d760c4ec9cfcdb8fc3dc269e54a45faf4->leave($__internal_24bb90d1bffadf631c002f4a3dfd135d760c4ec9cfcdb8fc3dc269e54a45faf4_prof);

        
        $__internal_c8fbc09e8bf6e32278160086aa40892199d68067dd04691d34fce54716a8da01->leave($__internal_c8fbc09e8bf6e32278160086aa40892199d68067dd04691d34fce54716a8da01_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "@FOSUser/Profile/show_content.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show_content.html.twig");
    }
}
