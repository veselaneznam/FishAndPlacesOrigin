<?php

/* @Admin/base.html.twig */
class __TwigTemplate_604e78892e99c2a5a83f60a401c186949d7e2c4fc6706f592241764cccbbeecb extends Twig_Template
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
        $__internal_a1c24f9bc380e9cbba61529845c51c8ffc36b1435861712806e2bb04cb0dd907 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1c24f9bc380e9cbba61529845c51c8ffc36b1435861712806e2bb04cb0dd907->enter($__internal_a1c24f9bc380e9cbba61529845c51c8ffc36b1435861712806e2bb04cb0dd907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/base.html.twig"));

        $__internal_37c37dc6282264356e862e96f6a707314f506b23f91e5701d94638cc07669869 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37c37dc6282264356e862e96f6a707314f506b23f91e5701d94638cc07669869->enter($__internal_37c37dc6282264356e862e96f6a707314f506b23f91e5701d94638cc07669869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/base.html.twig"));

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
        
        $__internal_a1c24f9bc380e9cbba61529845c51c8ffc36b1435861712806e2bb04cb0dd907->leave($__internal_a1c24f9bc380e9cbba61529845c51c8ffc36b1435861712806e2bb04cb0dd907_prof);

        
        $__internal_37c37dc6282264356e862e96f6a707314f506b23f91e5701d94638cc07669869->leave($__internal_37c37dc6282264356e862e96f6a707314f506b23f91e5701d94638cc07669869_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_db248eb4dee63a8905f661fd8d7b80b9bcb6f0ea21c36373ca4790ab5f0604d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db248eb4dee63a8905f661fd8d7b80b9bcb6f0ea21c36373ca4790ab5f0604d6->enter($__internal_db248eb4dee63a8905f661fd8d7b80b9bcb6f0ea21c36373ca4790ab5f0604d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2316ccdfbd82aad4c2f8aca1cf8d2e5110fb734bca3e259b769836c8c260c67e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2316ccdfbd82aad4c2f8aca1cf8d2e5110fb734bca3e259b769836c8c260c67e->enter($__internal_2316ccdfbd82aad4c2f8aca1cf8d2e5110fb734bca3e259b769836c8c260c67e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
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
        
        $__internal_2316ccdfbd82aad4c2f8aca1cf8d2e5110fb734bca3e259b769836c8c260c67e->leave($__internal_2316ccdfbd82aad4c2f8aca1cf8d2e5110fb734bca3e259b769836c8c260c67e_prof);

        
        $__internal_db248eb4dee63a8905f661fd8d7b80b9bcb6f0ea21c36373ca4790ab5f0604d6->leave($__internal_db248eb4dee63a8905f661fd8d7b80b9bcb6f0ea21c36373ca4790ab5f0604d6_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_67f68e1ed7059eccee1452c47fcdacc0b92b005b745bfdc5fcbeb009012a9097 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67f68e1ed7059eccee1452c47fcdacc0b92b005b745bfdc5fcbeb009012a9097->enter($__internal_67f68e1ed7059eccee1452c47fcdacc0b92b005b745bfdc5fcbeb009012a9097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6d2e9e7bfe93e90a80d475ed16e71b756854a3178464cec52f7ace07e689cac0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d2e9e7bfe93e90a80d475ed16e71b756854a3178464cec52f7ace07e689cac0->enter($__internal_6d2e9e7bfe93e90a80d475ed16e71b756854a3178464cec52f7ace07e689cac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_6d2e9e7bfe93e90a80d475ed16e71b756854a3178464cec52f7ace07e689cac0->leave($__internal_6d2e9e7bfe93e90a80d475ed16e71b756854a3178464cec52f7ace07e689cac0_prof);

        
        $__internal_67f68e1ed7059eccee1452c47fcdacc0b92b005b745bfdc5fcbeb009012a9097->leave($__internal_67f68e1ed7059eccee1452c47fcdacc0b92b005b745bfdc5fcbeb009012a9097_prof);

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
", "@Admin/base.html.twig", "/var/www/FishAndPlaces/src/FishAndPlaces/UI/Bundle/AdminBundle/Resources/views/base.html.twig");
    }
}
