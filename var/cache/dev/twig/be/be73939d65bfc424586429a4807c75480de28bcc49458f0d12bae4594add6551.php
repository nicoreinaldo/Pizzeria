<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_b19e001c1f869eb108a59fbe4576733ab876581284427a92ed847b4e1e61ea71 extends Twig_Template
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
        $__internal_f53f1fb27df2e4c72c8d8f21fa96ab89cddd3d7fb1dca33c864e5cf6d121eaab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f53f1fb27df2e4c72c8d8f21fa96ab89cddd3d7fb1dca33c864e5cf6d121eaab->enter($__internal_f53f1fb27df2e4c72c8d8f21fa96ab89cddd3d7fb1dca33c864e5cf6d121eaab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_1326530d1fd3a24482f5baa605027c721a8d1d880fc1660a7c2ff2943f72134f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1326530d1fd3a24482f5baa605027c721a8d1d880fc1660a7c2ff2943f72134f->enter($__internal_1326530d1fd3a24482f5baa605027c721a8d1d880fc1660a7c2ff2943f72134f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_f53f1fb27df2e4c72c8d8f21fa96ab89cddd3d7fb1dca33c864e5cf6d121eaab->leave($__internal_f53f1fb27df2e4c72c8d8f21fa96ab89cddd3d7fb1dca33c864e5cf6d121eaab_prof);

        
        $__internal_1326530d1fd3a24482f5baa605027c721a8d1d880fc1660a7c2ff2943f72134f->leave($__internal_1326530d1fd3a24482f5baa605027c721a8d1d880fc1660a7c2ff2943f72134f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
