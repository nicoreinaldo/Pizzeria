<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_6bfdf1da10bfc6da47af2a12b918c6600c3c0ae99d970f8551ebd614328a4013 extends Twig_Template
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
        $__internal_6f7d2d62076e29950307970f5c019f7317f93633e2efb232b1cf6d7429631726 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f7d2d62076e29950307970f5c019f7317f93633e2efb232b1cf6d7429631726->enter($__internal_6f7d2d62076e29950307970f5c019f7317f93633e2efb232b1cf6d7429631726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_fb50f8dbd4a384de676e23576388919cfaafb53a2a9654fd61f88a3f5af3b7e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb50f8dbd4a384de676e23576388919cfaafb53a2a9654fd61f88a3f5af3b7e6->enter($__internal_fb50f8dbd4a384de676e23576388919cfaafb53a2a9654fd61f88a3f5af3b7e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_6f7d2d62076e29950307970f5c019f7317f93633e2efb232b1cf6d7429631726->leave($__internal_6f7d2d62076e29950307970f5c019f7317f93633e2efb232b1cf6d7429631726_prof);

        
        $__internal_fb50f8dbd4a384de676e23576388919cfaafb53a2a9654fd61f88a3f5af3b7e6->leave($__internal_fb50f8dbd4a384de676e23576388919cfaafb53a2a9654fd61f88a3f5af3b7e6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
