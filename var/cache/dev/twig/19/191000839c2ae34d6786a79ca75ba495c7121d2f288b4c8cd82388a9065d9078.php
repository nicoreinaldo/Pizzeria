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
        $__internal_2855d4e0e06a821567380f0b006e58a4fa30783f7b816dc8dfe38145eee4bded = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2855d4e0e06a821567380f0b006e58a4fa30783f7b816dc8dfe38145eee4bded->enter($__internal_2855d4e0e06a821567380f0b006e58a4fa30783f7b816dc8dfe38145eee4bded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_296c30313938327400e502286fa4e8f118e33a7a5b040926c8176ff4079825e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_296c30313938327400e502286fa4e8f118e33a7a5b040926c8176ff4079825e4->enter($__internal_296c30313938327400e502286fa4e8f118e33a7a5b040926c8176ff4079825e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_2855d4e0e06a821567380f0b006e58a4fa30783f7b816dc8dfe38145eee4bded->leave($__internal_2855d4e0e06a821567380f0b006e58a4fa30783f7b816dc8dfe38145eee4bded_prof);

        
        $__internal_296c30313938327400e502286fa4e8f118e33a7a5b040926c8176ff4079825e4->leave($__internal_296c30313938327400e502286fa4e8f118e33a7a5b040926c8176ff4079825e4_prof);

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
