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
        $__internal_6d95e8ccf4a11d27c8a1a2d77c88c512151f5cd4432efae3d48d9d58783ab86c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d95e8ccf4a11d27c8a1a2d77c88c512151f5cd4432efae3d48d9d58783ab86c->enter($__internal_6d95e8ccf4a11d27c8a1a2d77c88c512151f5cd4432efae3d48d9d58783ab86c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/add_images.html.twig"));

        $__internal_5a34325e809513523d09178f5133504cc829bfc8b88af23e8a989dbf68fc6449 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a34325e809513523d09178f5133504cc829bfc8b88af23e8a989dbf68fc6449->enter($__internal_5a34325e809513523d09178f5133504cc829bfc8b88af23e8a989dbf68fc6449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/add_images.html.twig"));

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
        
        $__internal_6d95e8ccf4a11d27c8a1a2d77c88c512151f5cd4432efae3d48d9d58783ab86c->leave($__internal_6d95e8ccf4a11d27c8a1a2d77c88c512151f5cd4432efae3d48d9d58783ab86c_prof);

        
        $__internal_5a34325e809513523d09178f5133504cc829bfc8b88af23e8a989dbf68fc6449->leave($__internal_5a34325e809513523d09178f5133504cc829bfc8b88af23e8a989dbf68fc6449_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_046ae0c97e127007361ec763843eaf9e22cfd4bb3c0927569ab6187fca250c35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_046ae0c97e127007361ec763843eaf9e22cfd4bb3c0927569ab6187fca250c35->enter($__internal_046ae0c97e127007361ec763843eaf9e22cfd4bb3c0927569ab6187fca250c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c5185df29272daa2c073344e24f6bf3cc8baaddc50481be0ee6fcad0bf5ee974 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5185df29272daa2c073344e24f6bf3cc8baaddc50481be0ee6fcad0bf5ee974->enter($__internal_c5185df29272daa2c073344e24f6bf3cc8baaddc50481be0ee6fcad0bf5ee974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_c5185df29272daa2c073344e24f6bf3cc8baaddc50481be0ee6fcad0bf5ee974->leave($__internal_c5185df29272daa2c073344e24f6bf3cc8baaddc50481be0ee6fcad0bf5ee974_prof);

        
        $__internal_046ae0c97e127007361ec763843eaf9e22cfd4bb3c0927569ab6187fca250c35->leave($__internal_046ae0c97e127007361ec763843eaf9e22cfd4bb3c0927569ab6187fca250c35_prof);

    }

    // line 69
    public function block_styles($context, array $blocks = array())
    {
        $__internal_d7f3db74e1e1820f49f221f9bada9880d108927b858e22316973cdec7839228f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7f3db74e1e1820f49f221f9bada9880d108927b858e22316973cdec7839228f->enter($__internal_d7f3db74e1e1820f49f221f9bada9880d108927b858e22316973cdec7839228f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        $__internal_8a6db2ed9fb69f14cd73943e761ef47d5216544fdfab8ffb72cbaf17255ab5b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a6db2ed9fb69f14cd73943e761ef47d5216544fdfab8ffb72cbaf17255ab5b2->enter($__internal_8a6db2ed9fb69f14cd73943e761ef47d5216544fdfab8ffb72cbaf17255ab5b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

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
        
        $__internal_8a6db2ed9fb69f14cd73943e761ef47d5216544fdfab8ffb72cbaf17255ab5b2->leave($__internal_8a6db2ed9fb69f14cd73943e761ef47d5216544fdfab8ffb72cbaf17255ab5b2_prof);

        
        $__internal_d7f3db74e1e1820f49f221f9bada9880d108927b858e22316973cdec7839228f->leave($__internal_d7f3db74e1e1820f49f221f9bada9880d108927b858e22316973cdec7839228f_prof);

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
