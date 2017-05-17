<?php

/* @Shop/base.html.twig */
class __TwigTemplate_3f147fb4cd3bef237685d98ee01a1b212385de8d892f01aa0e4642a617722ed4 extends Twig_Template
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
        $__internal_981122c9d4fd87f46e5085f2c075499cca051c7a3e53d42db69b70112c264e40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_981122c9d4fd87f46e5085f2c075499cca051c7a3e53d42db69b70112c264e40->enter($__internal_981122c9d4fd87f46e5085f2c075499cca051c7a3e53d42db69b70112c264e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Shop/base.html.twig"));

        $__internal_eb6f23dfaccaa85d1c6df492e509199e9ee3e45d258fcc2b038393fb4108f896 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb6f23dfaccaa85d1c6df492e509199e9ee3e45d258fcc2b038393fb4108f896->enter($__internal_eb6f23dfaccaa85d1c6df492e509199e9ee3e45d258fcc2b038393fb4108f896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Shop/base.html.twig"));

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
</head>
<body>
<div class=\"container\">
    <div class=\"jumbotron\">
        ";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "        ";
        // line 41
        echo "        ";
        // line 42
        echo "    </div>

</div>
";
        // line 45
        $this->displayBlock('javascripts', $context, $blocks);
        // line 51
        echo "</body>
</html>
";
        
        $__internal_981122c9d4fd87f46e5085f2c075499cca051c7a3e53d42db69b70112c264e40->leave($__internal_981122c9d4fd87f46e5085f2c075499cca051c7a3e53d42db69b70112c264e40_prof);

        
        $__internal_eb6f23dfaccaa85d1c6df492e509199e9ee3e45d258fcc2b038393fb4108f896->leave($__internal_eb6f23dfaccaa85d1c6df492e509199e9ee3e45d258fcc2b038393fb4108f896_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ec9640b282f0972576a5d0b6c1caadfe5b9cc442d9e8120bf82ec419d2c9f48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ec9640b282f0972576a5d0b6c1caadfe5b9cc442d9e8120bf82ec419d2c9f48->enter($__internal_8ec9640b282f0972576a5d0b6c1caadfe5b9cc442d9e8120bf82ec419d2c9f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_901ea2b844bd6df3d0c1fa573a7a7f33e5d276c56f0b02fcce013adb37580ecf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_901ea2b844bd6df3d0c1fa573a7a7f33e5d276c56f0b02fcce013adb37580ecf->enter($__internal_901ea2b844bd6df3d0c1fa573a7a7f33e5d276c56f0b02fcce013adb37580ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 19
            echo "                <div class=\"alert alert-danger\">
                    ";
            // line 20
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 24
            echo "                <div class=\"alert alert-info\">
                    ";
            // line 25
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "            ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 29
            echo "                <div class=\"btn-group btn-group-justified\">
                <a href=\"";
            // line 30
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\" class=\"btn btn-primary\">Product List</a>
                <a href=\"";
            // line 31
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("attribute_list");
            echo "\" class=\"btn btn-primary\">Attributes List</a>
                <a href=\"";
            // line 32
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("manufacture_list");
            echo "\" class=\"btn btn-primary\">Manufacture List</a>
                <a href=\"";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_list");
            echo "\" class=\"btn btn-primary\">Category List</a>
                <a href=\"";
            // line 34
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\" class=\"btn btn-primary\">LogOut</a>
            </div>
            ";
        }
        // line 37
        echo "            <br/>

        ";
        
        $__internal_901ea2b844bd6df3d0c1fa573a7a7f33e5d276c56f0b02fcce013adb37580ecf->leave($__internal_901ea2b844bd6df3d0c1fa573a7a7f33e5d276c56f0b02fcce013adb37580ecf_prof);

        
        $__internal_8ec9640b282f0972576a5d0b6c1caadfe5b9cc442d9e8120bf82ec419d2c9f48->leave($__internal_8ec9640b282f0972576a5d0b6c1caadfe5b9cc442d9e8120bf82ec419d2c9f48_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fc677728ca3db00f8005e8bb30d63905cd097c7e6ca1649a458761d477e28cf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc677728ca3db00f8005e8bb30d63905cd097c7e6ca1649a458761d477e28cf0->enter($__internal_fc677728ca3db00f8005e8bb30d63905cd097c7e6ca1649a458761d477e28cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_024bc0fedbab193d198f71bd8303478d94e4cf57646f32733a0a660ca1249fc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_024bc0fedbab193d198f71bd8303478d94e4cf57646f32733a0a660ca1249fc0->enter($__internal_024bc0fedbab193d198f71bd8303478d94e4cf57646f32733a0a660ca1249fc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 46
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_024bc0fedbab193d198f71bd8303478d94e4cf57646f32733a0a660ca1249fc0->leave($__internal_024bc0fedbab193d198f71bd8303478d94e4cf57646f32733a0a660ca1249fc0_prof);

        
        $__internal_fc677728ca3db00f8005e8bb30d63905cd097c7e6ca1649a458761d477e28cf0->leave($__internal_fc677728ca3db00f8005e8bb30d63905cd097c7e6ca1649a458761d477e28cf0_prof);

    }

    public function getTemplateName()
    {
        return "@Shop/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 49,  189 => 48,  185 => 47,  180 => 46,  171 => 45,  159 => 37,  153 => 34,  149 => 33,  145 => 32,  141 => 31,  137 => 30,  134 => 29,  131 => 28,  122 => 25,  119 => 24,  114 => 23,  105 => 20,  102 => 19,  97 => 18,  88 => 17,  76 => 51,  74 => 45,  69 => 42,  67 => 41,  65 => 40,  63 => 17,  55 => 12,  51 => 11,  47 => 10,  43 => 9,  39 => 8,  35 => 7,  27 => 1,);
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
                <a href=\"{{ path('homepage') }}\" class=\"btn btn-primary\">Product List</a>
                <a href=\"{{ path('attribute_list') }}\" class=\"btn btn-primary\">Attributes List</a>
                <a href=\"{{ path('manufacture_list') }}\" class=\"btn btn-primary\">Manufacture List</a>
                <a href=\"{{ path('category_list') }}\" class=\"btn btn-primary\">Category List</a>
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
{% endblock %}
</body>
</html>
", "@Shop/base.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/src/FishAndPlaces/UI/Bundle/ShopBundle/Resources/views/base.html.twig");
    }
}
