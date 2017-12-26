<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_d51d7bd2d000387a4f379bfbe98f408cb3698f0c5647124d935918a37b033b98 extends Twig_Template
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
        $__internal_e9b38ae80471b0d3042dc5069449cfd149011fc979d375fbc664655e0252584d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9b38ae80471b0d3042dc5069449cfd149011fc979d375fbc664655e0252584d->enter($__internal_e9b38ae80471b0d3042dc5069449cfd149011fc979d375fbc664655e0252584d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        $__internal_9adad657eafe330f60e8df033ab5805fb11f5b6e4f588af65e62a19156041d0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9adad657eafe330f60e8df033ab5805fb11f5b6e4f588af65e62a19156041d0f->enter($__internal_9adad657eafe330f60e8df033ab5805fb11f5b6e4f588af65e62a19156041d0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_e9b38ae80471b0d3042dc5069449cfd149011fc979d375fbc664655e0252584d->leave($__internal_e9b38ae80471b0d3042dc5069449cfd149011fc979d375fbc664655e0252584d_prof);

        
        $__internal_9adad657eafe330f60e8df033ab5805fb11f5b6e4f588af65e62a19156041d0f->leave($__internal_9adad657eafe330f60e8df033ab5805fb11f5b6e4f588af65e62a19156041d0f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/range_widget.html.php");
    }
}
