<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_99fd8290be2b8b3cca7fcbf414f904ecb33afd415a4476db16d6a0d5e000d772 extends Twig_Template
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
        $__internal_b16c325a667bacbb1adb5d7cc82e2e00f6eefd468bc68aa207395de1b083182d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b16c325a667bacbb1adb5d7cc82e2e00f6eefd468bc68aa207395de1b083182d->enter($__internal_b16c325a667bacbb1adb5d7cc82e2e00f6eefd468bc68aa207395de1b083182d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_891e5fd01bddea43ad65cb9a2808f2b4b86f87d1f47f038b59b5321ca9274d0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_891e5fd01bddea43ad65cb9a2808f2b4b86f87d1f47f038b59b5321ca9274d0a->enter($__internal_891e5fd01bddea43ad65cb9a2808f2b4b86f87d1f47f038b59b5321ca9274d0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_b16c325a667bacbb1adb5d7cc82e2e00f6eefd468bc68aa207395de1b083182d->leave($__internal_b16c325a667bacbb1adb5d7cc82e2e00f6eefd468bc68aa207395de1b083182d_prof);

        
        $__internal_891e5fd01bddea43ad65cb9a2808f2b4b86f87d1f47f038b59b5321ca9274d0a->leave($__internal_891e5fd01bddea43ad65cb9a2808f2b4b86f87d1f47f038b59b5321ca9274d0a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/FishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
