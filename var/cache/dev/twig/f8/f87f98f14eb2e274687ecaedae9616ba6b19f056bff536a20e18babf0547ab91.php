<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_5d13d56eb6f972064b5c85b863193c5e423e2c3076eff9ce31bae3c8d131b35d extends Twig_Template
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
        $__internal_deb318c58d4a10577bbf95792b26fee5397d33c036751116e2e6ce3b77169d0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_deb318c58d4a10577bbf95792b26fee5397d33c036751116e2e6ce3b77169d0c->enter($__internal_deb318c58d4a10577bbf95792b26fee5397d33c036751116e2e6ce3b77169d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_815ea9d2b0fe750d891622089d1aa4aa6efc2ac7dca3737ac20caab5ade05e44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_815ea9d2b0fe750d891622089d1aa4aa6efc2ac7dca3737ac20caab5ade05e44->enter($__internal_815ea9d2b0fe750d891622089d1aa4aa6efc2ac7dca3737ac20caab5ade05e44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_deb318c58d4a10577bbf95792b26fee5397d33c036751116e2e6ce3b77169d0c->leave($__internal_deb318c58d4a10577bbf95792b26fee5397d33c036751116e2e6ce3b77169d0c_prof);

        
        $__internal_815ea9d2b0fe750d891622089d1aa4aa6efc2ac7dca3737ac20caab5ade05e44->leave($__internal_815ea9d2b0fe750d891622089d1aa4aa6efc2ac7dca3737ac20caab5ade05e44_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
