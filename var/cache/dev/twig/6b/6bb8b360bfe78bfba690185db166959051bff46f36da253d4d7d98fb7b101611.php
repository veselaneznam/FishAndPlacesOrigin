<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_bbbfb7ac295fb07c254ee03f4d067fe87d4ba0ed70bc8de5547159e14ca0cdef extends Twig_Template
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
        $__internal_33a83b0daf582dc31387803f88c0527366890df63daf4272fe1e93a4cf4eb6e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33a83b0daf582dc31387803f88c0527366890df63daf4272fe1e93a4cf4eb6e9->enter($__internal_33a83b0daf582dc31387803f88c0527366890df63daf4272fe1e93a4cf4eb6e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_c0cb6155b315f5271b161f3a0a1814fcf37180f4c0aa797f6b81b546c9b7e11d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0cb6155b315f5271b161f3a0a1814fcf37180f4c0aa797f6b81b546c9b7e11d->enter($__internal_c0cb6155b315f5271b161f3a0a1814fcf37180f4c0aa797f6b81b546c9b7e11d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_33a83b0daf582dc31387803f88c0527366890df63daf4272fe1e93a4cf4eb6e9->leave($__internal_33a83b0daf582dc31387803f88c0527366890df63daf4272fe1e93a4cf4eb6e9_prof);

        
        $__internal_c0cb6155b315f5271b161f3a0a1814fcf37180f4c0aa797f6b81b546c9b7e11d->leave($__internal_c0cb6155b315f5271b161f3a0a1814fcf37180f4c0aa797f6b81b546c9b7e11d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/FishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
