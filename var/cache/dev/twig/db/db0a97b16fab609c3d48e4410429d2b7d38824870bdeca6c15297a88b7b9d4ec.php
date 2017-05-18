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
        $__internal_9e80fd635af50985b3bb5ff9dc70cda2039ac4f3b3cbc97ac07360cfe33bc5fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e80fd635af50985b3bb5ff9dc70cda2039ac4f3b3cbc97ac07360cfe33bc5fd->enter($__internal_9e80fd635af50985b3bb5ff9dc70cda2039ac4f3b3cbc97ac07360cfe33bc5fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_c156beeae2b5f5d76a83ecbda75be28703e4c5bf0d74e722e52932131fc2f03f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c156beeae2b5f5d76a83ecbda75be28703e4c5bf0d74e722e52932131fc2f03f->enter($__internal_c156beeae2b5f5d76a83ecbda75be28703e4c5bf0d74e722e52932131fc2f03f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

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
        
        $__internal_9e80fd635af50985b3bb5ff9dc70cda2039ac4f3b3cbc97ac07360cfe33bc5fd->leave($__internal_9e80fd635af50985b3bb5ff9dc70cda2039ac4f3b3cbc97ac07360cfe33bc5fd_prof);

        
        $__internal_c156beeae2b5f5d76a83ecbda75be28703e4c5bf0d74e722e52932131fc2f03f->leave($__internal_c156beeae2b5f5d76a83ecbda75be28703e4c5bf0d74e722e52932131fc2f03f_prof);

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
