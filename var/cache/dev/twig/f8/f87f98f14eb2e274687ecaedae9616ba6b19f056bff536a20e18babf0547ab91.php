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
        $__internal_3b6ca9e6beb96e1779ab43c95edcc4811ae84bcc187eb7f7ea4b2e0ffacc2910 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b6ca9e6beb96e1779ab43c95edcc4811ae84bcc187eb7f7ea4b2e0ffacc2910->enter($__internal_3b6ca9e6beb96e1779ab43c95edcc4811ae84bcc187eb7f7ea4b2e0ffacc2910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_f93f3841f56a4aa1edfe3c3996fe39c78d20c1cfa04e6357bcb03f9c60765c00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f93f3841f56a4aa1edfe3c3996fe39c78d20c1cfa04e6357bcb03f9c60765c00->enter($__internal_f93f3841f56a4aa1edfe3c3996fe39c78d20c1cfa04e6357bcb03f9c60765c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_3b6ca9e6beb96e1779ab43c95edcc4811ae84bcc187eb7f7ea4b2e0ffacc2910->leave($__internal_3b6ca9e6beb96e1779ab43c95edcc4811ae84bcc187eb7f7ea4b2e0ffacc2910_prof);

        
        $__internal_f93f3841f56a4aa1edfe3c3996fe39c78d20c1cfa04e6357bcb03f9c60765c00->leave($__internal_f93f3841f56a4aa1edfe3c3996fe39c78d20c1cfa04e6357bcb03f9c60765c00_prof);

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
