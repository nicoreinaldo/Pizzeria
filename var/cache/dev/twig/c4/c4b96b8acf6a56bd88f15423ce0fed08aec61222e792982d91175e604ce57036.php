<?php

/* ::base2.html.twig */
class __TwigTemplate_04e3d99a26126844abecaff08fa7c7c0c51ac8d52a8d69a221e8cd3f89cdd3d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2bf507d2c6ec351a725eb2530f8077860522b4d99cf757a8cbf73d59d4bfe305 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bf507d2c6ec351a725eb2530f8077860522b4d99cf757a8cbf73d59d4bfe305->enter($__internal_2bf507d2c6ec351a725eb2530f8077860522b4d99cf757a8cbf73d59d4bfe305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base2.html.twig"));

        $__internal_ecd27a16b6a5db32dd8a673bd0992e0664e77a62e85a0b4a4d76c743ca291e36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecd27a16b6a5db32dd8a673bd0992e0664e77a62e85a0b4a4d76c743ca291e36->enter($__internal_ecd27a16b6a5db32dd8a673bd0992e0664e77a62e85a0b4a4d76c743ca291e36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base2.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pt_BR\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/css/bootstrap/bootstrap.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/css/responsive.css"), "html", null, true);
        echo "\" />
    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "  </head>
  <body>
    ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 19
        echo "
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js\"></script>
    ";
        // line 24
        $this->displayBlock('javascripts', $context, $blocks);
        // line 26
        echo "  </body>
</html>";
        
        $__internal_2bf507d2c6ec351a725eb2530f8077860522b4d99cf757a8cbf73d59d4bfe305->leave($__internal_2bf507d2c6ec351a725eb2530f8077860522b4d99cf757a8cbf73d59d4bfe305_prof);

        
        $__internal_ecd27a16b6a5db32dd8a673bd0992e0664e77a62e85a0b4a4d76c743ca291e36->leave($__internal_ecd27a16b6a5db32dd8a673bd0992e0664e77a62e85a0b4a4d76c743ca291e36_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e54db605b3a13680fcb165ad485de7da7a4cf1f596a88136cedb0f94b3f20d8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e54db605b3a13680fcb165ad485de7da7a4cf1f596a88136cedb0f94b3f20d8e->enter($__internal_e54db605b3a13680fcb165ad485de7da7a4cf1f596a88136cedb0f94b3f20d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_014eb60658364448c1f1498b596f44a325f857db9af73bf344121ec8c66b77f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_014eb60658364448c1f1498b596f44a325f857db9af73bf344121ec8c66b77f0->enter($__internal_014eb60658364448c1f1498b596f44a325f857db9af73bf344121ec8c66b77f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "PizzaNuestra";
        
        $__internal_014eb60658364448c1f1498b596f44a325f857db9af73bf344121ec8c66b77f0->leave($__internal_014eb60658364448c1f1498b596f44a325f857db9af73bf344121ec8c66b77f0_prof);

        
        $__internal_e54db605b3a13680fcb165ad485de7da7a4cf1f596a88136cedb0f94b3f20d8e->leave($__internal_e54db605b3a13680fcb165ad485de7da7a4cf1f596a88136cedb0f94b3f20d8e_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c859f936f9611950269a72b8ecd0d310c7dfce2bcc4c59b900eba25c8af8df1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c859f936f9611950269a72b8ecd0d310c7dfce2bcc4c59b900eba25c8af8df1b->enter($__internal_c859f936f9611950269a72b8ecd0d310c7dfce2bcc4c59b900eba25c8af8df1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_10a6a825c9c69d20828fea78e6eb81695bda5755d21122f20aedcd7645dcab1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10a6a825c9c69d20828fea78e6eb81695bda5755d21122f20aedcd7645dcab1f->enter($__internal_10a6a825c9c69d20828fea78e6eb81695bda5755d21122f20aedcd7645dcab1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "        <link rel=\"shortcut icon\" href=\"asset/images/favicon.ico\">
    ";
        
        $__internal_10a6a825c9c69d20828fea78e6eb81695bda5755d21122f20aedcd7645dcab1f->leave($__internal_10a6a825c9c69d20828fea78e6eb81695bda5755d21122f20aedcd7645dcab1f_prof);

        
        $__internal_c859f936f9611950269a72b8ecd0d310c7dfce2bcc4c59b900eba25c8af8df1b->leave($__internal_c859f936f9611950269a72b8ecd0d310c7dfce2bcc4c59b900eba25c8af8df1b_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_63e7bdf2cdc98ccc53cafcb8b34ee5f070d29eb7c9c7fd0204f58a46e5938181 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63e7bdf2cdc98ccc53cafcb8b34ee5f070d29eb7c9c7fd0204f58a46e5938181->enter($__internal_63e7bdf2cdc98ccc53cafcb8b34ee5f070d29eb7c9c7fd0204f58a46e5938181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3faa8b154f6c948bcec7e7151993afbb133dd452f5a6ff5ec746720b8c456ea8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3faa8b154f6c948bcec7e7151993afbb133dd452f5a6ff5ec746720b8c456ea8->enter($__internal_3faa8b154f6c948bcec7e7151993afbb133dd452f5a6ff5ec746720b8c456ea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "
    ";
        
        $__internal_3faa8b154f6c948bcec7e7151993afbb133dd452f5a6ff5ec746720b8c456ea8->leave($__internal_3faa8b154f6c948bcec7e7151993afbb133dd452f5a6ff5ec746720b8c456ea8_prof);

        
        $__internal_63e7bdf2cdc98ccc53cafcb8b34ee5f070d29eb7c9c7fd0204f58a46e5938181->leave($__internal_63e7bdf2cdc98ccc53cafcb8b34ee5f070d29eb7c9c7fd0204f58a46e5938181_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c32ef9f7267704dd78f13aeebd0bda736fef6845cd09489ada1ec04d4d74bda6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c32ef9f7267704dd78f13aeebd0bda736fef6845cd09489ada1ec04d4d74bda6->enter($__internal_c32ef9f7267704dd78f13aeebd0bda736fef6845cd09489ada1ec04d4d74bda6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1c23cdea1762269c05159cc3ec0eaa25f6a456718ea8b8f9ba4e3a043e651503 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c23cdea1762269c05159cc3ec0eaa25f6a456718ea8b8f9ba4e3a043e651503->enter($__internal_1c23cdea1762269c05159cc3ec0eaa25f6a456718ea8b8f9ba4e3a043e651503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 25
        echo "    ";
        
        $__internal_1c23cdea1762269c05159cc3ec0eaa25f6a456718ea8b8f9ba4e3a043e651503->leave($__internal_1c23cdea1762269c05159cc3ec0eaa25f6a456718ea8b8f9ba4e3a043e651503_prof);

        
        $__internal_c32ef9f7267704dd78f13aeebd0bda736fef6845cd09489ada1ec04d4d74bda6->leave($__internal_c32ef9f7267704dd78f13aeebd0bda736fef6845cd09489ada1ec04d4d74bda6_prof);

    }

    public function getTemplateName()
    {
        return "::base2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 25,  136 => 24,  125 => 17,  116 => 16,  105 => 12,  96 => 11,  78 => 7,  67 => 26,  65 => 24,  58 => 19,  56 => 16,  52 => 14,  50 => 11,  46 => 10,  42 => 9,  37 => 7,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"pt_BR\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>{% block title %}PizzaNuestra{% endblock %}</title>

    <link rel=\"stylesheet\" href=\"{{asset('asset/css/bootstrap/bootstrap.min.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{asset('asset/css/responsive.css') }}\" />
    {% block stylesheets %}
        <link rel=\"shortcut icon\" href=\"asset/images/favicon.ico\">
    {% endblock %}
  </head>
  <body>
    {% block body %}

    {% endblock %}

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js\"></script>
    {% block javascripts %}
    {% endblock %}
  </body>
</html>", "::base2.html.twig", "/home/manuel/symfony/Pizzeria/app/Resources/views/base2.html.twig");
    }
}
