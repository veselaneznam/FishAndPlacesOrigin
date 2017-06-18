<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_062200d97444169254365e6357dd50a2d9431c590f87301f0e4e5d65833643f5 extends Twig_Template
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
        $__internal_6e8107c184a60bfa937659cde47bec4ec1ecc6c382e93f2a9d503a2ab246c201 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e8107c184a60bfa937659cde47bec4ec1ecc6c382e93f2a9d503a2ab246c201->enter($__internal_6e8107c184a60bfa937659cde47bec4ec1ecc6c382e93f2a9d503a2ab246c201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_89c07d0f47dbc305f9ec3d7686ef6d06b879830b43974815fbc0637cf0e5112f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89c07d0f47dbc305f9ec3d7686ef6d06b879830b43974815fbc0637cf0e5112f->enter($__internal_89c07d0f47dbc305f9ec3d7686ef6d06b879830b43974815fbc0637cf0e5112f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_6e8107c184a60bfa937659cde47bec4ec1ecc6c382e93f2a9d503a2ab246c201->leave($__internal_6e8107c184a60bfa937659cde47bec4ec1ecc6c382e93f2a9d503a2ab246c201_prof);

        
        $__internal_89c07d0f47dbc305f9ec3d7686ef6d06b879830b43974815fbc0637cf0e5112f->leave($__internal_89c07d0f47dbc305f9ec3d7686ef6d06b879830b43974815fbc0637cf0e5112f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/FishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
