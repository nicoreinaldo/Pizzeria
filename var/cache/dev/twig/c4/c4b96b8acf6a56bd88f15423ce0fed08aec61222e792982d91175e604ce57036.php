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
        $__internal_90292864157e5fd4ca9f8f7e69d40addc693e9e173b590eb3407a9f63e9392cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90292864157e5fd4ca9f8f7e69d40addc693e9e173b590eb3407a9f63e9392cf->enter($__internal_90292864157e5fd4ca9f8f7e69d40addc693e9e173b590eb3407a9f63e9392cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base2.html.twig"));

        $__internal_64a795c13505bfdd2d713c4bb89d2ed99bc5414ff13853c81fa28048ba7c1959 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64a795c13505bfdd2d713c4bb89d2ed99bc5414ff13853c81fa28048ba7c1959->enter($__internal_64a795c13505bfdd2d713c4bb89d2ed99bc5414ff13853c81fa28048ba7c1959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base2.html.twig"));

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
        
        $__internal_90292864157e5fd4ca9f8f7e69d40addc693e9e173b590eb3407a9f63e9392cf->leave($__internal_90292864157e5fd4ca9f8f7e69d40addc693e9e173b590eb3407a9f63e9392cf_prof);

        
        $__internal_64a795c13505bfdd2d713c4bb89d2ed99bc5414ff13853c81fa28048ba7c1959->leave($__internal_64a795c13505bfdd2d713c4bb89d2ed99bc5414ff13853c81fa28048ba7c1959_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a0e2fc490997113f489bf13f9161835132215d1f6d4f5adbb92390dd0d00079f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0e2fc490997113f489bf13f9161835132215d1f6d4f5adbb92390dd0d00079f->enter($__internal_a0e2fc490997113f489bf13f9161835132215d1f6d4f5adbb92390dd0d00079f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_43efd4e657283fbc46dae929844ca9dcc0e028ae6fb064f9a95e51d4247c550f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43efd4e657283fbc46dae929844ca9dcc0e028ae6fb064f9a95e51d4247c550f->enter($__internal_43efd4e657283fbc46dae929844ca9dcc0e028ae6fb064f9a95e51d4247c550f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "PizzaNuestra";
        
        $__internal_43efd4e657283fbc46dae929844ca9dcc0e028ae6fb064f9a95e51d4247c550f->leave($__internal_43efd4e657283fbc46dae929844ca9dcc0e028ae6fb064f9a95e51d4247c550f_prof);

        
        $__internal_a0e2fc490997113f489bf13f9161835132215d1f6d4f5adbb92390dd0d00079f->leave($__internal_a0e2fc490997113f489bf13f9161835132215d1f6d4f5adbb92390dd0d00079f_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d8fcc5cad5dcc308fca6a526acc423a7ee4e9dbdc8e8929b7f5f3befe221739f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8fcc5cad5dcc308fca6a526acc423a7ee4e9dbdc8e8929b7f5f3befe221739f->enter($__internal_d8fcc5cad5dcc308fca6a526acc423a7ee4e9dbdc8e8929b7f5f3befe221739f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_42eacbaba485b329ccdb566f94bb073fc29c1c6bf6fa0fdae98d7fcd1f1495a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42eacbaba485b329ccdb566f94bb073fc29c1c6bf6fa0fdae98d7fcd1f1495a0->enter($__internal_42eacbaba485b329ccdb566f94bb073fc29c1c6bf6fa0fdae98d7fcd1f1495a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "        <link rel=\"shortcut icon\" href=\"asset/images/favicon.ico\">
    ";
        
        $__internal_42eacbaba485b329ccdb566f94bb073fc29c1c6bf6fa0fdae98d7fcd1f1495a0->leave($__internal_42eacbaba485b329ccdb566f94bb073fc29c1c6bf6fa0fdae98d7fcd1f1495a0_prof);

        
        $__internal_d8fcc5cad5dcc308fca6a526acc423a7ee4e9dbdc8e8929b7f5f3befe221739f->leave($__internal_d8fcc5cad5dcc308fca6a526acc423a7ee4e9dbdc8e8929b7f5f3befe221739f_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd5ff37d6e6c9ec2a7cd54418445ada2a40b623cdfa40f9fbb0a4dad8f66c0d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd5ff37d6e6c9ec2a7cd54418445ada2a40b623cdfa40f9fbb0a4dad8f66c0d9->enter($__internal_cd5ff37d6e6c9ec2a7cd54418445ada2a40b623cdfa40f9fbb0a4dad8f66c0d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cf90c10aff7f60def3ad4599445679de88d790bb99d31dea5e077f97ccac760b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf90c10aff7f60def3ad4599445679de88d790bb99d31dea5e077f97ccac760b->enter($__internal_cf90c10aff7f60def3ad4599445679de88d790bb99d31dea5e077f97ccac760b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "
    ";
        
        $__internal_cf90c10aff7f60def3ad4599445679de88d790bb99d31dea5e077f97ccac760b->leave($__internal_cf90c10aff7f60def3ad4599445679de88d790bb99d31dea5e077f97ccac760b_prof);

        
        $__internal_cd5ff37d6e6c9ec2a7cd54418445ada2a40b623cdfa40f9fbb0a4dad8f66c0d9->leave($__internal_cd5ff37d6e6c9ec2a7cd54418445ada2a40b623cdfa40f9fbb0a4dad8f66c0d9_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9af47538a82ab374cc327f60bd6bbf0a4b3a9eed28c335553fc6472395c11fb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9af47538a82ab374cc327f60bd6bbf0a4b3a9eed28c335553fc6472395c11fb1->enter($__internal_9af47538a82ab374cc327f60bd6bbf0a4b3a9eed28c335553fc6472395c11fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f20c27e4621f22c348f0efb07dc1d73d8c2a22d4db923f3dc5517542a013c6f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f20c27e4621f22c348f0efb07dc1d73d8c2a22d4db923f3dc5517542a013c6f4->enter($__internal_f20c27e4621f22c348f0efb07dc1d73d8c2a22d4db923f3dc5517542a013c6f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 25
        echo "    ";
        
        $__internal_f20c27e4621f22c348f0efb07dc1d73d8c2a22d4db923f3dc5517542a013c6f4->leave($__internal_f20c27e4621f22c348f0efb07dc1d73d8c2a22d4db923f3dc5517542a013c6f4_prof);

        
        $__internal_9af47538a82ab374cc327f60bd6bbf0a4b3a9eed28c335553fc6472395c11fb1->leave($__internal_9af47538a82ab374cc327f60bd6bbf0a4b3a9eed28c335553fc6472395c11fb1_prof);

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
</html>", "::base2.html.twig", "/home/nico/pizzerianostra/app/Resources/views/base2.html.twig");
    }
}
