<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_463923d28957fc29c94a2cae8e9b7e580359c2ef0c5b2e606c2e54a2f3644996 extends Twig_Template
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
        $__internal_b0fb999a8646b4a092b7335d17c3392c26a3e44257c678cfcb4fe97517bc79de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0fb999a8646b4a092b7335d17c3392c26a3e44257c678cfcb4fe97517bc79de->enter($__internal_b0fb999a8646b4a092b7335d17c3392c26a3e44257c678cfcb4fe97517bc79de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_ad3245bfdd6602f416955a2367e310230adf2036b0afe144b16043e8f0899d4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad3245bfdd6602f416955a2367e310230adf2036b0afe144b16043e8f0899d4c->enter($__internal_ad3245bfdd6602f416955a2367e310230adf2036b0afe144b16043e8f0899d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_b0fb999a8646b4a092b7335d17c3392c26a3e44257c678cfcb4fe97517bc79de->leave($__internal_b0fb999a8646b4a092b7335d17c3392c26a3e44257c678cfcb4fe97517bc79de_prof);

        
        $__internal_ad3245bfdd6602f416955a2367e310230adf2036b0afe144b16043e8f0899d4c->leave($__internal_ad3245bfdd6602f416955a2367e310230adf2036b0afe144b16043e8f0899d4c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
