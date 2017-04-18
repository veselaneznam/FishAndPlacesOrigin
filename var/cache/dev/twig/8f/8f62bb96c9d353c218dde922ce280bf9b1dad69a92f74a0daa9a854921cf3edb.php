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
        $__internal_131c9c25ccd077f46f7f76b6a099d150bcf82f0d205cef168c11e48f4919e53f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_131c9c25ccd077f46f7f76b6a099d150bcf82f0d205cef168c11e48f4919e53f->enter($__internal_131c9c25ccd077f46f7f76b6a099d150bcf82f0d205cef168c11e48f4919e53f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/base.html.twig"));

        $__internal_71468b57725b0daa0b5b63ab321a511fb644a755ef00f7c96ed149d3f32faec3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71468b57725b0daa0b5b63ab321a511fb644a755ef00f7c96ed149d3f32faec3->enter($__internal_71468b57725b0daa0b5b63ab321a511fb644a755ef00f7c96ed149d3f32faec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/base.html.twig"));

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
        // line 41
        echo "        ";
        // line 42
        echo "        ";
        // line 43
        echo "    </div>

</div>
";
        // line 46
        $this->displayBlock('javascripts', $context, $blocks);
        // line 53
        echo "</body>
</html>
";
        
        $__internal_131c9c25ccd077f46f7f76b6a099d150bcf82f0d205cef168c11e48f4919e53f->leave($__internal_131c9c25ccd077f46f7f76b6a099d150bcf82f0d205cef168c11e48f4919e53f_prof);

        
        $__internal_71468b57725b0daa0b5b63ab321a511fb644a755ef00f7c96ed149d3f32faec3->leave($__internal_71468b57725b0daa0b5b63ab321a511fb644a755ef00f7c96ed149d3f32faec3_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_48b31bbdc374507efc8ddae8da1b3d7f9be0eea069c036916a2e47d7d031cf80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48b31bbdc374507efc8ddae8da1b3d7f9be0eea069c036916a2e47d7d031cf80->enter($__internal_48b31bbdc374507efc8ddae8da1b3d7f9be0eea069c036916a2e47d7d031cf80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1c56515ba12dbbced8bd2a5bbe4b7b28e645959bdc95b908bdf0c8cde8da8e7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c56515ba12dbbced8bd2a5bbe4b7b28e645959bdc95b908bdf0c8cde8da8e7b->enter($__internal_1c56515ba12dbbced8bd2a5bbe4b7b28e645959bdc95b908bdf0c8cde8da8e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\" class=\"btn btn-primary\">LogOut</a>
            </div>
            ";
        }
        // line 38
        echo "            <br/>

        ";
        
        $__internal_1c56515ba12dbbced8bd2a5bbe4b7b28e645959bdc95b908bdf0c8cde8da8e7b->leave($__internal_1c56515ba12dbbced8bd2a5bbe4b7b28e645959bdc95b908bdf0c8cde8da8e7b_prof);

        
        $__internal_48b31bbdc374507efc8ddae8da1b3d7f9be0eea069c036916a2e47d7d031cf80->leave($__internal_48b31bbdc374507efc8ddae8da1b3d7f9be0eea069c036916a2e47d7d031cf80_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_035a36203d9c923b44ec6fd65b6ac7b4ceced956de0cd392c1fe357e976f313f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_035a36203d9c923b44ec6fd65b6ac7b4ceced956de0cd392c1fe357e976f313f->enter($__internal_035a36203d9c923b44ec6fd65b6ac7b4ceced956de0cd392c1fe357e976f313f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_96e95a5dfd37c73c74c5810c1e3a622f01d15db40a5cf379585cea31dbde3425 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96e95a5dfd37c73c74c5810c1e3a622f01d15db40a5cf379585cea31dbde3425->enter($__internal_96e95a5dfd37c73c74c5810c1e3a622f01d15db40a5cf379585cea31dbde3425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 47
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/kmsfroalaeditor/froala_editor_2.5.1/js/froala_editor.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_96e95a5dfd37c73c74c5810c1e3a622f01d15db40a5cf379585cea31dbde3425->leave($__internal_96e95a5dfd37c73c74c5810c1e3a622f01d15db40a5cf379585cea31dbde3425_prof);

        
        $__internal_035a36203d9c923b44ec6fd65b6ac7b4ceced956de0cd392c1fe357e976f313f->leave($__internal_035a36203d9c923b44ec6fd65b6ac7b4ceced956de0cd392c1fe357e976f313f_prof);

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
        return array (  195 => 51,  191 => 50,  187 => 49,  183 => 48,  178 => 47,  169 => 46,  157 => 38,  151 => 35,  147 => 34,  143 => 33,  140 => 32,  137 => 31,  128 => 28,  125 => 27,  120 => 26,  111 => 23,  108 => 22,  103 => 21,  94 => 20,  82 => 53,  80 => 46,  75 => 43,  73 => 42,  71 => 41,  69 => 20,  59 => 13,  55 => 12,  51 => 11,  47 => 10,  43 => 9,  39 => 8,  35 => 7,  27 => 1,);
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
