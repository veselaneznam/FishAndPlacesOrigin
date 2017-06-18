<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_32e570743729b6e3b9ce3c6851d593f438144e210006b71a2003e02e1d2eec04 extends Twig_Template
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
        $__internal_a57e9d722e429b1c7a80c7d7d961ad85d63ae6d586a01caba7bd745df492d51c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a57e9d722e429b1c7a80c7d7d961ad85d63ae6d586a01caba7bd745df492d51c->enter($__internal_a57e9d722e429b1c7a80c7d7d961ad85d63ae6d586a01caba7bd745df492d51c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_f4a084c0c9ea6fe8deec8874c893c2582dbeccdf3f5e96e0973309e301c163ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4a084c0c9ea6fe8deec8874c893c2582dbeccdf3f5e96e0973309e301c163ac->enter($__internal_f4a084c0c9ea6fe8deec8874c893c2582dbeccdf3f5e96e0973309e301c163ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_a57e9d722e429b1c7a80c7d7d961ad85d63ae6d586a01caba7bd745df492d51c->leave($__internal_a57e9d722e429b1c7a80c7d7d961ad85d63ae6d586a01caba7bd745df492d51c_prof);

        
        $__internal_f4a084c0c9ea6fe8deec8874c893c2582dbeccdf3f5e96e0973309e301c163ac->leave($__internal_f4a084c0c9ea6fe8deec8874c893c2582dbeccdf3f5e96e0973309e301c163ac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/FishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
