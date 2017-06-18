<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_09776cd5298f2cad7c77ea1f29ae70a18ef57be142ce88c1938670327a378cc5 extends Twig_Template
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
        $__internal_1443e645eb1aee4e07f0c474921837bc30b2d63757a3074d4d94f2a0f7d359f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1443e645eb1aee4e07f0c474921837bc30b2d63757a3074d4d94f2a0f7d359f5->enter($__internal_1443e645eb1aee4e07f0c474921837bc30b2d63757a3074d4d94f2a0f7d359f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_d5722f42287544de7e6ecea7ec5bad1b4d15f0eb4699c28227241f0e858a364f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5722f42287544de7e6ecea7ec5bad1b4d15f0eb4699c28227241f0e858a364f->enter($__internal_d5722f42287544de7e6ecea7ec5bad1b4d15f0eb4699c28227241f0e858a364f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_1443e645eb1aee4e07f0c474921837bc30b2d63757a3074d4d94f2a0f7d359f5->leave($__internal_1443e645eb1aee4e07f0c474921837bc30b2d63757a3074d4d94f2a0f7d359f5_prof);

        
        $__internal_d5722f42287544de7e6ecea7ec5bad1b4d15f0eb4699c28227241f0e858a364f->leave($__internal_d5722f42287544de7e6ecea7ec5bad1b4d15f0eb4699c28227241f0e858a364f_prof);

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
", "@Framework/Form/choice_attributes.html.php", "/var/www/FishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
