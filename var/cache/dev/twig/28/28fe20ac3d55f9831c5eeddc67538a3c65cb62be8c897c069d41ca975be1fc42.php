<?php

/* @Admin/add_images.html.twig */
class __TwigTemplate_620757dcc1f92ee920d0bec731a3a703d24f5c9c92de1b7fc619f4d23f01a84e extends Twig_Template
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
        $__internal_853085cb7052b04a235fd89dc083d83f85c818814f935d67460e6f9e4a233fc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_853085cb7052b04a235fd89dc083d83f85c818814f935d67460e6f9e4a233fc1->enter($__internal_853085cb7052b04a235fd89dc083d83f85c818814f935d67460e6f9e4a233fc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/add_images.html.twig"));

        $__internal_021ff03a6810bec05a4ffdce6877e3eb3bd4ea519a1609e4cf0c092bf82a928b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_021ff03a6810bec05a4ffdce6877e3eb3bd4ea519a1609e4cf0c092bf82a928b->enter($__internal_021ff03a6810bec05a4ffdce6877e3eb3bd4ea519a1609e4cf0c092bf82a928b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/add_images.html.twig"));

        // line 1
        echo "<div id=\"maindiv\">

    <div id=\"formdiv\">
        <h2>Multiple Image Upload Form</h2>
        <form enctype=\"multipart/form-data\" action=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dam_images_upload", array("id" => $this->getAttribute((isset($context["dam"]) ? $context["dam"] : $this->getContext($context, "dam")), "id", array()))), "html", null, true);
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
        
        $__internal_853085cb7052b04a235fd89dc083d83f85c818814f935d67460e6f9e4a233fc1->leave($__internal_853085cb7052b04a235fd89dc083d83f85c818814f935d67460e6f9e4a233fc1_prof);

        
        $__internal_021ff03a6810bec05a4ffdce6877e3eb3bd4ea519a1609e4cf0c092bf82a928b->leave($__internal_021ff03a6810bec05a4ffdce6877e3eb3bd4ea519a1609e4cf0c092bf82a928b_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_879e9d7a672d87cf2d49e860adea30540ae492f9b99f806e7381c09d636b9274 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_879e9d7a672d87cf2d49e860adea30540ae492f9b99f806e7381c09d636b9274->enter($__internal_879e9d7a672d87cf2d49e860adea30540ae492f9b99f806e7381c09d636b9274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9d9b520eb443057838f0df1668b25062690065a0a3b777b71651fde8b809783c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d9b520eb443057838f0df1668b25062690065a0a3b777b71651fde8b809783c->enter($__internal_9d9b520eb443057838f0df1668b25062690065a0a3b777b71651fde8b809783c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_9d9b520eb443057838f0df1668b25062690065a0a3b777b71651fde8b809783c->leave($__internal_9d9b520eb443057838f0df1668b25062690065a0a3b777b71651fde8b809783c_prof);

        
        $__internal_879e9d7a672d87cf2d49e860adea30540ae492f9b99f806e7381c09d636b9274->leave($__internal_879e9d7a672d87cf2d49e860adea30540ae492f9b99f806e7381c09d636b9274_prof);

    }

    // line 69
    public function block_styles($context, array $blocks = array())
    {
        $__internal_9cccb48d74bf181e9ac55ee22ad93f2fa9ea5e545d75ef092c3830cae1fcf8a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cccb48d74bf181e9ac55ee22ad93f2fa9ea5e545d75ef092c3830cae1fcf8a4->enter($__internal_9cccb48d74bf181e9ac55ee22ad93f2fa9ea5e545d75ef092c3830cae1fcf8a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        $__internal_f476ac0dbb2e289c485305ff4a1e5a2f2f613c807d885cf975be43f3bea35500 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f476ac0dbb2e289c485305ff4a1e5a2f2f613c807d885cf975be43f3bea35500->enter($__internal_f476ac0dbb2e289c485305ff4a1e5a2f2f613c807d885cf975be43f3bea35500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

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
        
        $__internal_f476ac0dbb2e289c485305ff4a1e5a2f2f613c807d885cf975be43f3bea35500->leave($__internal_f476ac0dbb2e289c485305ff4a1e5a2f2f613c807d885cf975be43f3bea35500_prof);

        
        $__internal_9cccb48d74bf181e9ac55ee22ad93f2fa9ea5e545d75ef092c3830cae1fcf8a4->leave($__internal_9cccb48d74bf181e9ac55ee22ad93f2fa9ea5e545d75ef092c3830cae1fcf8a4_prof);

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
", "@Admin/add_images.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/src/FishAndPlaces/UI/Bundle/AdminBundle/Resources/views/add_images.html.twig");
    }
}
