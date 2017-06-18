<?php

/* @Admin/add_images.html.twig */
class __TwigTemplate_188effe35bff5726f50f028a29689ab7770bc0e3a880aacfc795414a2a80fe26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'styles' => array($this, 'block_styles'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8cd107a65e5ca8b4322a2947f7d4dca330534202f683af7ed68a066bb5c35d55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cd107a65e5ca8b4322a2947f7d4dca330534202f683af7ed68a066bb5c35d55->enter($__internal_8cd107a65e5ca8b4322a2947f7d4dca330534202f683af7ed68a066bb5c35d55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/add_images.html.twig"));

        $__internal_37b75a0dc2f4a54a06cf7d71c98d25b1689edd841eac65c3c95d97a8bdee5a46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37b75a0dc2f4a54a06cf7d71c98d25b1689edd841eac65c3c95d97a8bdee5a46->enter($__internal_37b75a0dc2f4a54a06cf7d71c98d25b1689edd841eac65c3c95d97a8bdee5a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/add_images.html.twig"));

        // line 1
        echo "<div id=\"maindiv\">

    <div id=\"formdiv\">
        <h2>Multiple Image Upload Form</h2>
        <form enctype=\"multipart/form-data\" action=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dam_images_upload", array("id" => $this->getAttribute(($context["dam"] ?? $this->getContext($context, "dam")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
            First Field is Compulsory. Only JPEG,PNG,JPG Type Image Uploaded. Image Size Should Be Less Than 100KB.
            <hr/>
            <div id=\"filediv\"><input name=\"file[]\" type=\"file\" id=\"file\"/></div><br/>

            <input type=\"button\" id=\"add_more\" class=\"upload\" value=\"Add More Files\"/>
            <input type=\"submit\" value=\"Upload File\" name=\"submit\" id=\"upload\" class=\"upload\"/>
        </form>
        <br/>
        <br/>
    </div>

</div>
";
        // line 18
        $this->displayBlock('javascripts', $context, $blocks);
        // line 69
        $this->displayBlock('styles', $context, $blocks);
        
        $__internal_8cd107a65e5ca8b4322a2947f7d4dca330534202f683af7ed68a066bb5c35d55->leave($__internal_8cd107a65e5ca8b4322a2947f7d4dca330534202f683af7ed68a066bb5c35d55_prof);

        
        $__internal_37b75a0dc2f4a54a06cf7d71c98d25b1689edd841eac65c3c95d97a8bdee5a46->leave($__internal_37b75a0dc2f4a54a06cf7d71c98d25b1689edd841eac65c3c95d97a8bdee5a46_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_54480f024fb431f9b6081d9711a9f0649248a86b519bfb17039ada6d59eea8a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54480f024fb431f9b6081d9711a9f0649248a86b519bfb17039ada6d59eea8a5->enter($__internal_54480f024fb431f9b6081d9711a9f0649248a86b519bfb17039ada6d59eea8a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0c472c7759601bafe786abaf32a603ba2ac478304e43a73cf2c1bdcc759352e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c472c7759601bafe786abaf32a603ba2ac478304e43a73cf2c1bdcc759352e4->enter($__internal_0c472c7759601bafe786abaf32a603ba2ac478304e43a73cf2c1bdcc759352e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
        echo "    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script>
        var abc = 0; //Declaring and defining global increement variable

        \$(document).ready(function() {

//To add new input file field dynamically, on click of \"Add More Files\" button below function will be executed
            \$('#add_more').click(function() {
                \$(this).before(\$(\"<div/>\", {id: 'filediv'}).fadeIn('slow').append(
                    \$(\"<input/>\", {name: 'file[]', type: 'file', id: 'file'}),
                    \$(\"<br/><br/>\")
                ));
            });

//following function will executes on change event of file input to select different file
            \$('body').on('change', '#file', function(){
                if (this.files && this.files[0]) {
                    abc += 1; //increementing global variable by 1

                    var z = abc - 1;
                    var x = \$(this).parent().find('#previewimg' + z).remove();
                    \$(this).before(\"<div id='abcd\"+ abc +\"' class='abcd'><img id='previewimg\" + abc + \"' src=''/></div>\");

                    var reader = new FileReader();
                    reader.onload = imageIsLoaded;
                    reader.readAsDataURL(this.files[0]);

                    \$(this).hide();
                    \$(\"#abcd\"+ abc).append(\$(\"<img/>\", {id: 'img', src: '";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/x.png"), "html", null, true);
        echo "', alt: 'delete'}).click(function() {
                        \$(this).parent().parent().remove();
                    }));
                }
            });

//To preview image
            function imageIsLoaded(e) {
                \$('#previewimg' + abc).attr('src', e.target.result);
            };

            \$('#upload').click(function(e) {
                var name = \$(\":file\").val();
                if (!name)
                {
                    alert(\"First Image Must Be Selected\");
                    e.preventDefault();
                }
            });
        })
        </script>
";
        
        $__internal_0c472c7759601bafe786abaf32a603ba2ac478304e43a73cf2c1bdcc759352e4->leave($__internal_0c472c7759601bafe786abaf32a603ba2ac478304e43a73cf2c1bdcc759352e4_prof);

        
        $__internal_54480f024fb431f9b6081d9711a9f0649248a86b519bfb17039ada6d59eea8a5->leave($__internal_54480f024fb431f9b6081d9711a9f0649248a86b519bfb17039ada6d59eea8a5_prof);

    }

    // line 69
    public function block_styles($context, array $blocks = array())
    {
        $__internal_d104fd201028613b10642e2b08fcddc943a8bfea912c7a460a73cb0d9f62fabd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d104fd201028613b10642e2b08fcddc943a8bfea912c7a460a73cb0d9f62fabd->enter($__internal_d104fd201028613b10642e2b08fcddc943a8bfea912c7a460a73cb0d9f62fabd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        $__internal_2dd91dfc4d67e16bcf24cc24a73e160e567da2ce0dc0e0afa7509473ca228b96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dd91dfc4d67e16bcf24cc24a73e160e567da2ce0dc0e0afa7509473ca228b96->enter($__internal_2dd91dfc4d67e16bcf24cc24a73e160e567da2ce0dc0e0afa7509473ca228b96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        // line 70
        echo "    <style>
        @import url(http://fonts.googleapis.com/css?family=Droid+Sans);
        form{
            background-color:white;
        }
        #maindiv{
            width:960px;
            margin:10px auto;
            padding:10px;
            font-family: 'Droid Sans', sans-serif;
        }
        #formdiv{
            width:500px;
            float:left;
            text-align: center;
        }
        form{
            padding: 40px 20px;
            box-shadow: 0px 0px 10px;
            border-radius: 2px;
        }
        h2{
            margin-left: 30px;
        }
        .upload{
            background-color:#ff0000;
            border:1px solid #ff0000;
            color:#fff;
            border-radius:5px;
            padding:10px;
            text-shadow:1px 1px 0px green;
            box-shadow: 2px 2px 15px rgba(0,0,0, .75);
        }
        .upload:hover{
            cursor:pointer;
            background:#c20b0b;
            border:1px solid #c20b0b;
            box-shadow: 0px 0px 5px rgba(0,0,0, .75);
        }
        #file{
            color:green;
            padding:5px; border:1px dashed #123456;
            background-color: #f9ffe5;
        }
        #upload{
            margin-left: 45px;
        }

        #noerror{
            color:green;
            text-align: left;
        }
        #error{
            color:red;
            text-align: left;
        }
        #img{
            width: 17px;
            border: none;
            height:17px;
            margin-left: -20px;
            margin-bottom: 91px;
        }

        .abcd{
            text-align: center;
        }

        .abcd img{
            height:100px;
            width:100px;
            padding: 5px;
            border: 1px solid rgb(232, 222, 189);
        }
        b{
            color:red;
        }
        #formget{
            float:right;

        }
        </style>
";
        
        $__internal_2dd91dfc4d67e16bcf24cc24a73e160e567da2ce0dc0e0afa7509473ca228b96->leave($__internal_2dd91dfc4d67e16bcf24cc24a73e160e567da2ce0dc0e0afa7509473ca228b96_prof);

        
        $__internal_d104fd201028613b10642e2b08fcddc943a8bfea912c7a460a73cb0d9f62fabd->leave($__internal_d104fd201028613b10642e2b08fcddc943a8bfea912c7a460a73cb0d9f62fabd_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/add_images.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 70,  132 => 69,  100 => 47,  70 => 19,  61 => 18,  51 => 69,  49 => 18,  33 => 5,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"maindiv\">

    <div id=\"formdiv\">
        <h2>Multiple Image Upload Form</h2>
        <form enctype=\"multipart/form-data\" action=\"{{ path('dam_images_upload',  { 'id': dam.id }) }}\" method=\"post\">
            First Field is Compulsory. Only JPEG,PNG,JPG Type Image Uploaded. Image Size Should Be Less Than 100KB.
            <hr/>
            <div id=\"filediv\"><input name=\"file[]\" type=\"file\" id=\"file\"/></div><br/>

            <input type=\"button\" id=\"add_more\" class=\"upload\" value=\"Add More Files\"/>
            <input type=\"submit\" value=\"Upload File\" name=\"submit\" id=\"upload\" class=\"upload\"/>
        </form>
        <br/>
        <br/>
    </div>

</div>
{% block javascripts %}
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script>
        var abc = 0; //Declaring and defining global increement variable

        \$(document).ready(function() {

//To add new input file field dynamically, on click of \"Add More Files\" button below function will be executed
            \$('#add_more').click(function() {
                \$(this).before(\$(\"<div/>\", {id: 'filediv'}).fadeIn('slow').append(
                    \$(\"<input/>\", {name: 'file[]', type: 'file', id: 'file'}),
                    \$(\"<br/><br/>\")
                ));
            });

//following function will executes on change event of file input to select different file
            \$('body').on('change', '#file', function(){
                if (this.files && this.files[0]) {
                    abc += 1; //increementing global variable by 1

                    var z = abc - 1;
                    var x = \$(this).parent().find('#previewimg' + z).remove();
                    \$(this).before(\"<div id='abcd\"+ abc +\"' class='abcd'><img id='previewimg\" + abc + \"' src=''/></div>\");

                    var reader = new FileReader();
                    reader.onload = imageIsLoaded;
                    reader.readAsDataURL(this.files[0]);

                    \$(this).hide();
                    \$(\"#abcd\"+ abc).append(\$(\"<img/>\", {id: 'img', src: '{{ asset('images/x.png') }}', alt: 'delete'}).click(function() {
                        \$(this).parent().parent().remove();
                    }));
                }
            });

//To preview image
            function imageIsLoaded(e) {
                \$('#previewimg' + abc).attr('src', e.target.result);
            };

            \$('#upload').click(function(e) {
                var name = \$(\":file\").val();
                if (!name)
                {
                    alert(\"First Image Must Be Selected\");
                    e.preventDefault();
                }
            });
        })
        </script>
{% endblock %}
{% block styles %}
    <style>
        @import url(http://fonts.googleapis.com/css?family=Droid+Sans);
        form{
            background-color:white;
        }
        #maindiv{
            width:960px;
            margin:10px auto;
            padding:10px;
            font-family: 'Droid Sans', sans-serif;
        }
        #formdiv{
            width:500px;
            float:left;
            text-align: center;
        }
        form{
            padding: 40px 20px;
            box-shadow: 0px 0px 10px;
            border-radius: 2px;
        }
        h2{
            margin-left: 30px;
        }
        .upload{
            background-color:#ff0000;
            border:1px solid #ff0000;
            color:#fff;
            border-radius:5px;
            padding:10px;
            text-shadow:1px 1px 0px green;
            box-shadow: 2px 2px 15px rgba(0,0,0, .75);
        }
        .upload:hover{
            cursor:pointer;
            background:#c20b0b;
            border:1px solid #c20b0b;
            box-shadow: 0px 0px 5px rgba(0,0,0, .75);
        }
        #file{
            color:green;
            padding:5px; border:1px dashed #123456;
            background-color: #f9ffe5;
        }
        #upload{
            margin-left: 45px;
        }

        #noerror{
            color:green;
            text-align: left;
        }
        #error{
            color:red;
            text-align: left;
        }
        #img{
            width: 17px;
            border: none;
            height:17px;
            margin-left: -20px;
            margin-bottom: 91px;
        }

        .abcd{
            text-align: center;
        }

        .abcd img{
            height:100px;
            width:100px;
            padding: 5px;
            border: 1px solid rgb(232, 222, 189);
        }
        b{
            color:red;
        }
        #formget{
            float:right;

        }
        </style>
{% endblock %}
", "@Admin/add_images.html.twig", "/var/www/FishAndPlaces/src/FishAndPlaces/UI/Bundle/AdminBundle/Resources/views/add_images.html.twig");
    }
}
