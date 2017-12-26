<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_8020539636230066ee4f2cdfdbaafef45c1baea671c770ad4575d9ae6da66ab6 extends Twig_Template
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
        $__internal_d5e96173a7f4e7e635c627756b5c8fc1129fc851ebbd3d6ecaa9400d18964e2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5e96173a7f4e7e635c627756b5c8fc1129fc851ebbd3d6ecaa9400d18964e2e->enter($__internal_d5e96173a7f4e7e635c627756b5c8fc1129fc851ebbd3d6ecaa9400d18964e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_284b11e31db1d7294661c1542202645927ac3dcf93aa9ed7020ecc3269d00701 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_284b11e31db1d7294661c1542202645927ac3dcf93aa9ed7020ecc3269d00701->enter($__internal_284b11e31db1d7294661c1542202645927ac3dcf93aa9ed7020ecc3269d00701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_d5e96173a7f4e7e635c627756b5c8fc1129fc851ebbd3d6ecaa9400d18964e2e->leave($__internal_d5e96173a7f4e7e635c627756b5c8fc1129fc851ebbd3d6ecaa9400d18964e2e_prof);

        
        $__internal_284b11e31db1d7294661c1542202645927ac3dcf93aa9ed7020ecc3269d00701->leave($__internal_284b11e31db1d7294661c1542202645927ac3dcf93aa9ed7020ecc3269d00701_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
