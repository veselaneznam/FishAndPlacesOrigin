<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_0936387e507e8058bfcdf4bb058c68e26eb3e17890b27be3d351c5e172b9ea73 extends Twig_Template
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
        $__internal_ca145c13bc39425ea2f6233997a0f43137205ea43226e6dc9360c9ef18f39702 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca145c13bc39425ea2f6233997a0f43137205ea43226e6dc9360c9ef18f39702->enter($__internal_ca145c13bc39425ea2f6233997a0f43137205ea43226e6dc9360c9ef18f39702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        $__internal_4c061a0b96435b61e6ef8c9c4d92925a26d359b9d37506fad7cecbfc7e5b1b50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c061a0b96435b61e6ef8c9c4d92925a26d359b9d37506fad7cecbfc7e5b1b50->enter($__internal_4c061a0b96435b61e6ef8c9c4d92925a26d359b9d37506fad7cecbfc7e5b1b50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_ca145c13bc39425ea2f6233997a0f43137205ea43226e6dc9360c9ef18f39702->leave($__internal_ca145c13bc39425ea2f6233997a0f43137205ea43226e6dc9360c9ef18f39702_prof);

        
        $__internal_4c061a0b96435b61e6ef8c9c4d92925a26d359b9d37506fad7cecbfc7e5b1b50->leave($__internal_4c061a0b96435b61e6ef8c9c4d92925a26d359b9d37506fad7cecbfc7e5b1b50_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/range_widget.html.php");
    }
}
