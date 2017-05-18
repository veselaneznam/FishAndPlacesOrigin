<?php

/* @Admin/base.html.twig */
class __TwigTemplate_e7a9139bb8d5d546a12940a6c719763998e48774b970e3b8b701a9cd9acb0080 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_177d83ea22a9acc0db467ac45f1bb7afd3fa42916a8d7e4d3fab9eb96149a576 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_177d83ea22a9acc0db467ac45f1bb7afd3fa42916a8d7e4d3fab9eb96149a576->enter($__internal_177d83ea22a9acc0db467ac45f1bb7afd3fa42916a8d7e4d3fab9eb96149a576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/base.html.twig"));

        $__internal_b139cccc2a90f7c7bba920c23641ff6440c341614b09941d397d6b70c41255f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b139cccc2a90f7c7bba920c23641ff6440c341614b09941d397d6b70c41255f6->enter($__internal_b139cccc2a90f7c7bba920c23641ff6440c341614b09941d397d6b70c41255f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/jquery-ui.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/jquery-ui.structure.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/jquery-ui.theme.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/grid.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/kmsfroalaeditor/froala_editor_2.5.1/css/froala_style.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />


</head>
<body>
<div class=\"container\">
    <div class=\"jumbotron\">
        ";
        // line 20
        $this->displayBlock('body', $context, $blocks);
        // line 42
        echo "        ";
        // line 43
        echo "        ";
        // line 44
        echo "    </div>

</div>
";
        // line 47
        $this->displayBlock('javascripts', $context, $blocks);
        // line 54
        echo "</body>
</html>
";
        
        $__internal_177d83ea22a9acc0db467ac45f1bb7afd3fa42916a8d7e4d3fab9eb96149a576->leave($__internal_177d83ea22a9acc0db467ac45f1bb7afd3fa42916a8d7e4d3fab9eb96149a576_prof);

        
        $__internal_b139cccc2a90f7c7bba920c23641ff6440c341614b09941d397d6b70c41255f6->leave($__internal_b139cccc2a90f7c7bba920c23641ff6440c341614b09941d397d6b70c41255f6_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_f4ea11efd17a0c5beed2dfc581e30ccb6765ff642e1d8fe7352c1420ebf54c38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4ea11efd17a0c5beed2dfc581e30ccb6765ff642e1d8fe7352c1420ebf54c38->enter($__internal_f4ea11efd17a0c5beed2dfc581e30ccb6765ff642e1d8fe7352c1420ebf54c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_96610cbd762ca4b24c6cb4cc140dcdde5abdd01a7d0ee276b58a4f0849ba2a3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96610cbd762ca4b24c6cb4cc140dcdde5abdd01a7d0ee276b58a4f0849ba2a3a->enter($__internal_96610cbd762ca4b24c6cb4cc140dcdde5abdd01a7d0ee276b58a4f0849ba2a3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 22
            echo "                <div class=\"alert alert-danger\">
                    ";
            // line 23
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 27
            echo "                <div class=\"alert alert-info\">
                    ";
            // line 28
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "            ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 32
            echo "                <div class=\"btn-group btn-group-justified\">
                <a href=\"";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dam_list");
            echo "\" class=\"btn btn-primary\">Dam List</a>
                <a href=\"";
            // line 34
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fish_list");
            echo "\" class=\"btn btn-primary\">Fish List</a>
                <a href=\"";
            // line 35
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_list");
            echo "\" class=\"btn btn-primary\">Page List</a>
                <a href=\"";
            // line 36
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\" class=\"btn btn-primary\">LogOut</a>
            </div>
            ";
        }
        // line 39
        echo "            <br/>

        ";
        
        $__internal_96610cbd762ca4b24c6cb4cc140dcdde5abdd01a7d0ee276b58a4f0849ba2a3a->leave($__internal_96610cbd762ca4b24c6cb4cc140dcdde5abdd01a7d0ee276b58a4f0849ba2a3a_prof);

        
        $__internal_f4ea11efd17a0c5beed2dfc581e30ccb6765ff642e1d8fe7352c1420ebf54c38->leave($__internal_f4ea11efd17a0c5beed2dfc581e30ccb6765ff642e1d8fe7352c1420ebf54c38_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_aff1c766fde5553a4a6f5eba75c3b290790c9c4b59e013ad26909b6f389d6a01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aff1c766fde5553a4a6f5eba75c3b290790c9c4b59e013ad26909b6f389d6a01->enter($__internal_aff1c766fde5553a4a6f5eba75c3b290790c9c4b59e013ad26909b6f389d6a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_fcea4059abb880b37f9c9247fb96493e8f3657ba71f02ccde14622a48b30f514 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcea4059abb880b37f9c9247fb96493e8f3657ba71f02ccde14622a48b30f514->enter($__internal_fcea4059abb880b37f9c9247fb96493e8f3657ba71f02ccde14622a48b30f514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 48
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/kmsfroalaeditor/froala_editor_2.5.1/js/froala_editor.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_fcea4059abb880b37f9c9247fb96493e8f3657ba71f02ccde14622a48b30f514->leave($__internal_fcea4059abb880b37f9c9247fb96493e8f3657ba71f02ccde14622a48b30f514_prof);

        
        $__internal_aff1c766fde5553a4a6f5eba75c3b290790c9c4b59e013ad26909b6f389d6a01->leave($__internal_aff1c766fde5553a4a6f5eba75c3b290790c9c4b59e013ad26909b6f389d6a01_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 52,  195 => 51,  191 => 50,  187 => 49,  182 => 48,  173 => 47,  161 => 39,  155 => 36,  151 => 35,  147 => 34,  143 => 33,  140 => 32,  137 => 31,  128 => 28,  125 => 27,  120 => 26,  111 => 23,  108 => 22,  103 => 21,  94 => 20,  82 => 54,  80 => 47,  75 => 44,  73 => 43,  71 => 42,  69 => 20,  59 => 13,  55 => 12,  51 => 11,  47 => 10,  43 => 9,  39 => 8,  35 => 7,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('css/jquery-ui.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('css/jquery-ui.structure.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('css/jquery-ui.theme.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('css/grid.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('bootstrap/css/bootstrap.min.css') }}\"/>
    <link href=\"{{ asset('bundles/kmsfroalaeditor/froala_editor_2.5.1/css/froala_style.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />


</head>
<body>
<div class=\"container\">
    <div class=\"jumbotron\">
        {% block body %}
            {% for flashMessage in app.session.flashbag.get('error') %}
                <div class=\"alert alert-danger\">
                    {{ flashMessage }}
                </div>
            {% endfor %}
            {% for flashMessage in app.session.flashbag.get('notice') %}
                <div class=\"alert alert-info\">
                    {{ flashMessage }}
                </div>
            {% endfor %}
            {% if is_granted(\"ROLE_SUPER_ADMIN\") %}
                <div class=\"btn-group btn-group-justified\">
                <a href=\"{{ path('dam_list') }}\" class=\"btn btn-primary\">Dam List</a>
                <a href=\"{{ path('fish_list') }}\" class=\"btn btn-primary\">Fish List</a>
                <a href=\"{{ path('page_list') }}\" class=\"btn btn-primary\">Page List</a>
                <a href=\"{{ path('logout') }}\" class=\"btn btn-primary\">LogOut</a>
            </div>
            {% endif %}
            <br/>

        {% endblock %}
        {#{% block content %}#}
        {#{% endblock %}#}
    </div>

</div>
{% block javascripts %}
    <script src=\"{{ asset('js/jquery.js') }}\"></script>
    <script src=\"{{ asset('js/jquery-ui.js') }}\"></script>
    <script src=\"{{ asset('js/main.js') }}\"></script>
    <script src=\"{{ asset('bootstrap/js/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/kmsfroalaeditor/froala_editor_2.5.1/js/froala_editor.min.js') }}\"></script>
{% endblock %}
</body>
</html>
", "@Admin/base.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/src/FishAndPlaces/UI/Bundle/AdminBundle/Resources/views/base.html.twig");
    }
}
