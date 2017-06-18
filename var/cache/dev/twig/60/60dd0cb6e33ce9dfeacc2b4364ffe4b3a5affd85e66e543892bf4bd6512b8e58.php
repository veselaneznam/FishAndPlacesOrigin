<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_fe234f557c62b6771712c06bea32b829e7cdb84185cafb88f0dbb45e5f8ccee4 extends Twig_Template
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
        $__internal_df0d0d5543c850fcbdf4eb9daa4f71b25b0c101cd96f439bdebb1390d07b9c94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df0d0d5543c850fcbdf4eb9daa4f71b25b0c101cd96f439bdebb1390d07b9c94->enter($__internal_df0d0d5543c850fcbdf4eb9daa4f71b25b0c101cd96f439bdebb1390d07b9c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_0807de480986bb3e1342d2055bc0b4ea5c2a1191669836eb6dec9e274c984ae1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0807de480986bb3e1342d2055bc0b4ea5c2a1191669836eb6dec9e274c984ae1->enter($__internal_0807de480986bb3e1342d2055bc0b4ea5c2a1191669836eb6dec9e274c984ae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_df0d0d5543c850fcbdf4eb9daa4f71b25b0c101cd96f439bdebb1390d07b9c94->leave($__internal_df0d0d5543c850fcbdf4eb9daa4f71b25b0c101cd96f439bdebb1390d07b9c94_prof);

        
        $__internal_0807de480986bb3e1342d2055bc0b4ea5c2a1191669836eb6dec9e274c984ae1->leave($__internal_0807de480986bb3e1342d2055bc0b4ea5c2a1191669836eb6dec9e274c984ae1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/FishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
