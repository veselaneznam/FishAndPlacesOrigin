<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_59d43ab8119b6ae6e4c5362e8ded129c1a62fe5239e13ee2b99d2403264028bf extends Twig_Template
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
        $__internal_e3aed8d88024b5d61169a92f4907c1bffa6fc4a98a7a811497dad02ff73251f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3aed8d88024b5d61169a92f4907c1bffa6fc4a98a7a811497dad02ff73251f8->enter($__internal_e3aed8d88024b5d61169a92f4907c1bffa6fc4a98a7a811497dad02ff73251f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_01a53757e9798c6be1bde1154c5a8ad9576a5ec92ab726d73e665984bad62e42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01a53757e9798c6be1bde1154c5a8ad9576a5ec92ab726d73e665984bad62e42->enter($__internal_01a53757e9798c6be1bde1154c5a8ad9576a5ec92ab726d73e665984bad62e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_e3aed8d88024b5d61169a92f4907c1bffa6fc4a98a7a811497dad02ff73251f8->leave($__internal_e3aed8d88024b5d61169a92f4907c1bffa6fc4a98a7a811497dad02ff73251f8_prof);

        
        $__internal_01a53757e9798c6be1bde1154c5a8ad9576a5ec92ab726d73e665984bad62e42->leave($__internal_01a53757e9798c6be1bde1154c5a8ad9576a5ec92ab726d73e665984bad62e42_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/var/www/FishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
