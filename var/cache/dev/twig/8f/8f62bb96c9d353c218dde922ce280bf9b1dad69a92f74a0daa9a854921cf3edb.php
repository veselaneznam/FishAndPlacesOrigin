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
        $__internal_0a9473fa75b7d56178b5477cd36e922b27105331ce040266eda4622ca9f44f02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a9473fa75b7d56178b5477cd36e922b27105331ce040266eda4622ca9f44f02->enter($__internal_0a9473fa75b7d56178b5477cd36e922b27105331ce040266eda4622ca9f44f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/base.html.twig"));

        $__internal_20b127ce9a5962246114e93eeb1515206ef632622e5eecf0dc6ac448cea08d30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20b127ce9a5962246114e93eeb1515206ef632622e5eecf0dc6ac448cea08d30->enter($__internal_20b127ce9a5962246114e93eeb1515206ef632622e5eecf0dc6ac448cea08d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/base.html.twig"));

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
        
        $__internal_0a9473fa75b7d56178b5477cd36e922b27105331ce040266eda4622ca9f44f02->leave($__internal_0a9473fa75b7d56178b5477cd36e922b27105331ce040266eda4622ca9f44f02_prof);

        
        $__internal_20b127ce9a5962246114e93eeb1515206ef632622e5eecf0dc6ac448cea08d30->leave($__internal_20b127ce9a5962246114e93eeb1515206ef632622e5eecf0dc6ac448cea08d30_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_a972b31651c04870cf079874784098569524506dd962798cc81f26a52082856d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a972b31651c04870cf079874784098569524506dd962798cc81f26a52082856d->enter($__internal_a972b31651c04870cf079874784098569524506dd962798cc81f26a52082856d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7ef07c86ebfcb0e768e1150f7c255a174e92154533d46dee202723f1e12c2579 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ef07c86ebfcb0e768e1150f7c255a174e92154533d46dee202723f1e12c2579->enter($__internal_7ef07c86ebfcb0e768e1150f7c255a174e92154533d46dee202723f1e12c2579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7ef07c86ebfcb0e768e1150f7c255a174e92154533d46dee202723f1e12c2579->leave($__internal_7ef07c86ebfcb0e768e1150f7c255a174e92154533d46dee202723f1e12c2579_prof);

        
        $__internal_a972b31651c04870cf079874784098569524506dd962798cc81f26a52082856d->leave($__internal_a972b31651c04870cf079874784098569524506dd962798cc81f26a52082856d_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b4e97e396638fb0ccee9918bf5d3b8f430822a2aecf0d9e13f9e041bd7fbc25a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4e97e396638fb0ccee9918bf5d3b8f430822a2aecf0d9e13f9e041bd7fbc25a->enter($__internal_b4e97e396638fb0ccee9918bf5d3b8f430822a2aecf0d9e13f9e041bd7fbc25a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d9d9a84839f53cf46839a0be3427c6255961df786b6f8d9a3fb6ac35e314fdb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9d9a84839f53cf46839a0be3427c6255961df786b6f8d9a3fb6ac35e314fdb9->enter($__internal_d9d9a84839f53cf46839a0be3427c6255961df786b6f8d9a3fb6ac35e314fdb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_d9d9a84839f53cf46839a0be3427c6255961df786b6f8d9a3fb6ac35e314fdb9->leave($__internal_d9d9a84839f53cf46839a0be3427c6255961df786b6f8d9a3fb6ac35e314fdb9_prof);

        
        $__internal_b4e97e396638fb0ccee9918bf5d3b8f430822a2aecf0d9e13f9e041bd7fbc25a->leave($__internal_b4e97e396638fb0ccee9918bf5d3b8f430822a2aecf0d9e13f9e041bd7fbc25a_prof);

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
