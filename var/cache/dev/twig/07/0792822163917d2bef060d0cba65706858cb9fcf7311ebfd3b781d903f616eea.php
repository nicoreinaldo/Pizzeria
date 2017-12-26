<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_8d79c55f328140ddd7570c93b34f5d78e97bc2816749ba598f6029733736d299 extends Twig_Template
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
        $__internal_0d9cbf930df1a1bb6e2c7ab6a4b5c42c3cec8e97d2c2711e474e80a748669b3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d9cbf930df1a1bb6e2c7ab6a4b5c42c3cec8e97d2c2711e474e80a748669b3b->enter($__internal_0d9cbf930df1a1bb6e2c7ab6a4b5c42c3cec8e97d2c2711e474e80a748669b3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_2119809f1fb302515605626783605d52d70846a5e311f37b6605a1676f263c20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2119809f1fb302515605626783605d52d70846a5e311f37b6605a1676f263c20->enter($__internal_2119809f1fb302515605626783605d52d70846a5e311f37b6605a1676f263c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_0d9cbf930df1a1bb6e2c7ab6a4b5c42c3cec8e97d2c2711e474e80a748669b3b->leave($__internal_0d9cbf930df1a1bb6e2c7ab6a4b5c42c3cec8e97d2c2711e474e80a748669b3b_prof);

        
        $__internal_2119809f1fb302515605626783605d52d70846a5e311f37b6605a1676f263c20->leave($__internal_2119809f1fb302515605626783605d52d70846a5e311f37b6605a1676f263c20_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
