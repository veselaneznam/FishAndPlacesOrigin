<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_45382bd85af8cb25fdf25f596ddd652a2e35b03e4f2e8b00a71442c7b360c635 extends Twig_Template
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
        $__internal_773c34111b1bfe353b2726c71f881e8f8aa5bdaf6145f8a390d369b8865f878e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_773c34111b1bfe353b2726c71f881e8f8aa5bdaf6145f8a390d369b8865f878e->enter($__internal_773c34111b1bfe353b2726c71f881e8f8aa5bdaf6145f8a390d369b8865f878e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_efa3928f3a3b5408c5dfa71ddad6977cf9d0dc3b475910dfa08788a0b5877db1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efa3928f3a3b5408c5dfa71ddad6977cf9d0dc3b475910dfa08788a0b5877db1->enter($__internal_efa3928f3a3b5408c5dfa71ddad6977cf9d0dc3b475910dfa08788a0b5877db1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_773c34111b1bfe353b2726c71f881e8f8aa5bdaf6145f8a390d369b8865f878e->leave($__internal_773c34111b1bfe353b2726c71f881e8f8aa5bdaf6145f8a390d369b8865f878e_prof);

        
        $__internal_efa3928f3a3b5408c5dfa71ddad6977cf9d0dc3b475910dfa08788a0b5877db1->leave($__internal_efa3928f3a3b5408c5dfa71ddad6977cf9d0dc3b475910dfa08788a0b5877db1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/FishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
