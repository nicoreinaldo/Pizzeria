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
        $__internal_51331630fdad078c2cf68ce333302ce5090d20a84c238bb9bdedb12fea65e325 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51331630fdad078c2cf68ce333302ce5090d20a84c238bb9bdedb12fea65e325->enter($__internal_51331630fdad078c2cf68ce333302ce5090d20a84c238bb9bdedb12fea65e325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_7ba38ee7ef616c000d808f502963dd0b42b02637a3bdad328d5822e42faea283 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ba38ee7ef616c000d808f502963dd0b42b02637a3bdad328d5822e42faea283->enter($__internal_7ba38ee7ef616c000d808f502963dd0b42b02637a3bdad328d5822e42faea283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_51331630fdad078c2cf68ce333302ce5090d20a84c238bb9bdedb12fea65e325->leave($__internal_51331630fdad078c2cf68ce333302ce5090d20a84c238bb9bdedb12fea65e325_prof);

        
        $__internal_7ba38ee7ef616c000d808f502963dd0b42b02637a3bdad328d5822e42faea283->leave($__internal_7ba38ee7ef616c000d808f502963dd0b42b02637a3bdad328d5822e42faea283_prof);

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
