<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_a76064c2451edecdd15ab0a8fe60283c07e31c41c3c4c9731737f8c8cd2984f1 extends Twig_Template
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
        $__internal_aa99fa31924e7db6075894b063091a6cacddc1d46b783f3631219e053b9b3468 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa99fa31924e7db6075894b063091a6cacddc1d46b783f3631219e053b9b3468->enter($__internal_aa99fa31924e7db6075894b063091a6cacddc1d46b783f3631219e053b9b3468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_3c707e6c4d94f47ccc0dce66e2ed2ebd92de86a1c66af97823b5d2beb9a25341 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c707e6c4d94f47ccc0dce66e2ed2ebd92de86a1c66af97823b5d2beb9a25341->enter($__internal_3c707e6c4d94f47ccc0dce66e2ed2ebd92de86a1c66af97823b5d2beb9a25341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_aa99fa31924e7db6075894b063091a6cacddc1d46b783f3631219e053b9b3468->leave($__internal_aa99fa31924e7db6075894b063091a6cacddc1d46b783f3631219e053b9b3468_prof);

        
        $__internal_3c707e6c4d94f47ccc0dce66e2ed2ebd92de86a1c66af97823b5d2beb9a25341->leave($__internal_3c707e6c4d94f47ccc0dce66e2ed2ebd92de86a1c66af97823b5d2beb9a25341_prof);

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
", "@Framework/Form/password_widget.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
