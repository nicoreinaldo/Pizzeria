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
        $__internal_59d3a53ce7a044c63a36f64d7eacecc750c005cbe0b42ee90d32c581b5b3419f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59d3a53ce7a044c63a36f64d7eacecc750c005cbe0b42ee90d32c581b5b3419f->enter($__internal_59d3a53ce7a044c63a36f64d7eacecc750c005cbe0b42ee90d32c581b5b3419f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base2.html.twig"));

        $__internal_97194a5186014cd3286cdbfba55f86c41162a9c575d383183175049d50d32160 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97194a5186014cd3286cdbfba55f86c41162a9c575d383183175049d50d32160->enter($__internal_97194a5186014cd3286cdbfba55f86c41162a9c575d383183175049d50d32160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base2.html.twig"));

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
        // line 13
        echo "  </head>
  <body>
    ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js\"></script>
    ";
        // line 23
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
        echo "  </body>
</html>";
        
        $__internal_59d3a53ce7a044c63a36f64d7eacecc750c005cbe0b42ee90d32c581b5b3419f->leave($__internal_59d3a53ce7a044c63a36f64d7eacecc750c005cbe0b42ee90d32c581b5b3419f_prof);

        
        $__internal_97194a5186014cd3286cdbfba55f86c41162a9c575d383183175049d50d32160->leave($__internal_97194a5186014cd3286cdbfba55f86c41162a9c575d383183175049d50d32160_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_84a36957b2a17e19067f73fddec8017a63f00146117b822483e8c53390fb6a1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84a36957b2a17e19067f73fddec8017a63f00146117b822483e8c53390fb6a1c->enter($__internal_84a36957b2a17e19067f73fddec8017a63f00146117b822483e8c53390fb6a1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ae8ac429ec5cfd298209a90ff99c984da7e72523d1835de0555dbcacb0af5eb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae8ac429ec5cfd298209a90ff99c984da7e72523d1835de0555dbcacb0af5eb0->enter($__internal_ae8ac429ec5cfd298209a90ff99c984da7e72523d1835de0555dbcacb0af5eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "PizzaNuestra";
        
        $__internal_ae8ac429ec5cfd298209a90ff99c984da7e72523d1835de0555dbcacb0af5eb0->leave($__internal_ae8ac429ec5cfd298209a90ff99c984da7e72523d1835de0555dbcacb0af5eb0_prof);

        
        $__internal_84a36957b2a17e19067f73fddec8017a63f00146117b822483e8c53390fb6a1c->leave($__internal_84a36957b2a17e19067f73fddec8017a63f00146117b822483e8c53390fb6a1c_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f6d6bcbad1c4d3f76816719872f95d34f7c13cc43eb9bab27e2d173f7eaf1107 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6d6bcbad1c4d3f76816719872f95d34f7c13cc43eb9bab27e2d173f7eaf1107->enter($__internal_f6d6bcbad1c4d3f76816719872f95d34f7c13cc43eb9bab27e2d173f7eaf1107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_89cce745ffb7421dd8c44511b0e2988603138fa8af69ad7bb75314741ae0a64a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89cce745ffb7421dd8c44511b0e2988603138fa8af69ad7bb75314741ae0a64a->enter($__internal_89cce745ffb7421dd8c44511b0e2988603138fa8af69ad7bb75314741ae0a64a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "    ";
        
        $__internal_89cce745ffb7421dd8c44511b0e2988603138fa8af69ad7bb75314741ae0a64a->leave($__internal_89cce745ffb7421dd8c44511b0e2988603138fa8af69ad7bb75314741ae0a64a_prof);

        
        $__internal_f6d6bcbad1c4d3f76816719872f95d34f7c13cc43eb9bab27e2d173f7eaf1107->leave($__internal_f6d6bcbad1c4d3f76816719872f95d34f7c13cc43eb9bab27e2d173f7eaf1107_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_c6f3588de9e7204015d45fc491c8a57a44f22ed19ef965267a5fd254ba782885 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6f3588de9e7204015d45fc491c8a57a44f22ed19ef965267a5fd254ba782885->enter($__internal_c6f3588de9e7204015d45fc491c8a57a44f22ed19ef965267a5fd254ba782885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f8029fc3c34ed64c45b16d839e6a313ca2fb84c7f56f13b373b1a137e7b265e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8029fc3c34ed64c45b16d839e6a313ca2fb84c7f56f13b373b1a137e7b265e4->enter($__internal_f8029fc3c34ed64c45b16d839e6a313ca2fb84c7f56f13b373b1a137e7b265e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "
    ";
        
        $__internal_f8029fc3c34ed64c45b16d839e6a313ca2fb84c7f56f13b373b1a137e7b265e4->leave($__internal_f8029fc3c34ed64c45b16d839e6a313ca2fb84c7f56f13b373b1a137e7b265e4_prof);

        
        $__internal_c6f3588de9e7204015d45fc491c8a57a44f22ed19ef965267a5fd254ba782885->leave($__internal_c6f3588de9e7204015d45fc491c8a57a44f22ed19ef965267a5fd254ba782885_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_49259189bb37fa6c9201714e5d6686d2523516f0d6e306bb5cdbeec9fd7858d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49259189bb37fa6c9201714e5d6686d2523516f0d6e306bb5cdbeec9fd7858d1->enter($__internal_49259189bb37fa6c9201714e5d6686d2523516f0d6e306bb5cdbeec9fd7858d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_eb9c3636c0eca975408d487e7386a7cb04f52044f422a2a0da22a8d0b0b556e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb9c3636c0eca975408d487e7386a7cb04f52044f422a2a0da22a8d0b0b556e1->enter($__internal_eb9c3636c0eca975408d487e7386a7cb04f52044f422a2a0da22a8d0b0b556e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 24
        echo "    ";
        
        $__internal_eb9c3636c0eca975408d487e7386a7cb04f52044f422a2a0da22a8d0b0b556e1->leave($__internal_eb9c3636c0eca975408d487e7386a7cb04f52044f422a2a0da22a8d0b0b556e1_prof);

        
        $__internal_49259189bb37fa6c9201714e5d6686d2523516f0d6e306bb5cdbeec9fd7858d1->leave($__internal_49259189bb37fa6c9201714e5d6686d2523516f0d6e306bb5cdbeec9fd7858d1_prof);

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
        return array (  144 => 24,  135 => 23,  124 => 16,  115 => 15,  105 => 12,  96 => 11,  78 => 7,  67 => 25,  65 => 23,  58 => 18,  56 => 15,  52 => 13,  50 => 11,  46 => 10,  42 => 9,  37 => 7,  29 => 1,);
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
</html>", "::base2.html.twig", "/home/nico/pizzerianostra/app/Resources/views/base2.html.twig");
    }
}
