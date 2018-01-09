<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_474fdf81342910e2c16597ec0560804ec9a40d5a76152337d4630aa7e47a6aca extends Twig_Template
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
        $__internal_9dae8f301a2b98753d15d424b8622ef71ced76e39ac0570186243784beaa2731 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dae8f301a2b98753d15d424b8622ef71ced76e39ac0570186243784beaa2731->enter($__internal_9dae8f301a2b98753d15d424b8622ef71ced76e39ac0570186243784beaa2731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_0351fa5ce057b0253b817920c925e00af173df6091b47754e279a3db22d21674 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0351fa5ce057b0253b817920c925e00af173df6091b47754e279a3db22d21674->enter($__internal_0351fa5ce057b0253b817920c925e00af173df6091b47754e279a3db22d21674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_9dae8f301a2b98753d15d424b8622ef71ced76e39ac0570186243784beaa2731->leave($__internal_9dae8f301a2b98753d15d424b8622ef71ced76e39ac0570186243784beaa2731_prof);

        
        $__internal_0351fa5ce057b0253b817920c925e00af173df6091b47754e279a3db22d21674->leave($__internal_0351fa5ce057b0253b817920c925e00af173df6091b47754e279a3db22d21674_prof);

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
", "@Framework/Form/hidden_row.html.php", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
