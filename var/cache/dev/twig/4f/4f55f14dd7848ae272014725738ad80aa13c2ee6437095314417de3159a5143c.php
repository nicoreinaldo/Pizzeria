<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_d9997e02530486a8c69d6bdaeedda434894c94a81c6d9f15ed7afb2ff70cace5 extends Twig_Template
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
        $__internal_b95b9c3be5cb01aee9bef32bdd8b9df45c09db0922e2f97281fd2974618dca37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b95b9c3be5cb01aee9bef32bdd8b9df45c09db0922e2f97281fd2974618dca37->enter($__internal_b95b9c3be5cb01aee9bef32bdd8b9df45c09db0922e2f97281fd2974618dca37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_91db8652ced6f421a0cb4213591a14d51f71025dd02334b3fbc4774a1cbc0ba1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91db8652ced6f421a0cb4213591a14d51f71025dd02334b3fbc4774a1cbc0ba1->enter($__internal_91db8652ced6f421a0cb4213591a14d51f71025dd02334b3fbc4774a1cbc0ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_b95b9c3be5cb01aee9bef32bdd8b9df45c09db0922e2f97281fd2974618dca37->leave($__internal_b95b9c3be5cb01aee9bef32bdd8b9df45c09db0922e2f97281fd2974618dca37_prof);

        
        $__internal_91db8652ced6f421a0cb4213591a14d51f71025dd02334b3fbc4774a1cbc0ba1->leave($__internal_91db8652ced6f421a0cb4213591a14d51f71025dd02334b3fbc4774a1cbc0ba1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
