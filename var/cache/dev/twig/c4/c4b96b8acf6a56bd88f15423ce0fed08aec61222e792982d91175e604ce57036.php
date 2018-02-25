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
        $__internal_cf7f716c8e10943090ef0e5017d6bf4a7ecb2a881100a4edfb86adc6a63268fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf7f716c8e10943090ef0e5017d6bf4a7ecb2a881100a4edfb86adc6a63268fd->enter($__internal_cf7f716c8e10943090ef0e5017d6bf4a7ecb2a881100a4edfb86adc6a63268fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base2.html.twig"));

        $__internal_bcdeba08796863d7cbc0758f7124259cc0b1f25a6f809bd891284e0e12b77303 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcdeba08796863d7cbc0758f7124259cc0b1f25a6f809bd891284e0e12b77303->enter($__internal_bcdeba08796863d7cbc0758f7124259cc0b1f25a6f809bd891284e0e12b77303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base2.html.twig"));

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
      <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js\"></script>
    ";
        // line 26
        $this->displayBlock('javascripts', $context, $blocks);
        // line 28
        echo "  </body>
</html>";
        
        $__internal_cf7f716c8e10943090ef0e5017d6bf4a7ecb2a881100a4edfb86adc6a63268fd->leave($__internal_cf7f716c8e10943090ef0e5017d6bf4a7ecb2a881100a4edfb86adc6a63268fd_prof);

        
        $__internal_bcdeba08796863d7cbc0758f7124259cc0b1f25a6f809bd891284e0e12b77303->leave($__internal_bcdeba08796863d7cbc0758f7124259cc0b1f25a6f809bd891284e0e12b77303_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fc4e02304612329d392a5aaffa5189b8ebde9802d34dc0eab0eeee7a2509b26e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc4e02304612329d392a5aaffa5189b8ebde9802d34dc0eab0eeee7a2509b26e->enter($__internal_fc4e02304612329d392a5aaffa5189b8ebde9802d34dc0eab0eeee7a2509b26e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0e355800b4db3e359b8cfb1f580716055c48adfc23a4c4b5705f3fec800c720a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e355800b4db3e359b8cfb1f580716055c48adfc23a4c4b5705f3fec800c720a->enter($__internal_0e355800b4db3e359b8cfb1f580716055c48adfc23a4c4b5705f3fec800c720a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "PizzaNuestra";
        
        $__internal_0e355800b4db3e359b8cfb1f580716055c48adfc23a4c4b5705f3fec800c720a->leave($__internal_0e355800b4db3e359b8cfb1f580716055c48adfc23a4c4b5705f3fec800c720a_prof);

        
        $__internal_fc4e02304612329d392a5aaffa5189b8ebde9802d34dc0eab0eeee7a2509b26e->leave($__internal_fc4e02304612329d392a5aaffa5189b8ebde9802d34dc0eab0eeee7a2509b26e_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_da1bddba11d49e08373d2957998c5f43667d5b16a96482a3d71c744713b59121 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da1bddba11d49e08373d2957998c5f43667d5b16a96482a3d71c744713b59121->enter($__internal_da1bddba11d49e08373d2957998c5f43667d5b16a96482a3d71c744713b59121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_50384d893bbdd2fa46d4ad16f0bb2a6a8cb8be2b80a368492fe01658da2355cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50384d893bbdd2fa46d4ad16f0bb2a6a8cb8be2b80a368492fe01658da2355cd->enter($__internal_50384d893bbdd2fa46d4ad16f0bb2a6a8cb8be2b80a368492fe01658da2355cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "        <link rel=\"shortcut icon\" href=\"asset/images/favicon.ico\">
    ";
        
        $__internal_50384d893bbdd2fa46d4ad16f0bb2a6a8cb8be2b80a368492fe01658da2355cd->leave($__internal_50384d893bbdd2fa46d4ad16f0bb2a6a8cb8be2b80a368492fe01658da2355cd_prof);

        
        $__internal_da1bddba11d49e08373d2957998c5f43667d5b16a96482a3d71c744713b59121->leave($__internal_da1bddba11d49e08373d2957998c5f43667d5b16a96482a3d71c744713b59121_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_39544a379e6cd86658b906b9230fc7456b3a2a4bbc3342722f7c30dc4e2d922b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39544a379e6cd86658b906b9230fc7456b3a2a4bbc3342722f7c30dc4e2d922b->enter($__internal_39544a379e6cd86658b906b9230fc7456b3a2a4bbc3342722f7c30dc4e2d922b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d9cf69903c39a6e05d167586431385a59eb29728ddd5a8c26c8fa5c2945f3793 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9cf69903c39a6e05d167586431385a59eb29728ddd5a8c26c8fa5c2945f3793->enter($__internal_d9cf69903c39a6e05d167586431385a59eb29728ddd5a8c26c8fa5c2945f3793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "
    ";
        
        $__internal_d9cf69903c39a6e05d167586431385a59eb29728ddd5a8c26c8fa5c2945f3793->leave($__internal_d9cf69903c39a6e05d167586431385a59eb29728ddd5a8c26c8fa5c2945f3793_prof);

        
        $__internal_39544a379e6cd86658b906b9230fc7456b3a2a4bbc3342722f7c30dc4e2d922b->leave($__internal_39544a379e6cd86658b906b9230fc7456b3a2a4bbc3342722f7c30dc4e2d922b_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7495fe4805b12ed8d47fd2facf225f53d2d94e879a782b26e4bc1ddb3cdd0702 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7495fe4805b12ed8d47fd2facf225f53d2d94e879a782b26e4bc1ddb3cdd0702->enter($__internal_7495fe4805b12ed8d47fd2facf225f53d2d94e879a782b26e4bc1ddb3cdd0702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_34e29415297994297087ee5e2388be4cca58929739490c0b39c8c77bdd52c8e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34e29415297994297087ee5e2388be4cca58929739490c0b39c8c77bdd52c8e0->enter($__internal_34e29415297994297087ee5e2388be4cca58929739490c0b39c8c77bdd52c8e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 27
        echo "    ";
        
        $__internal_34e29415297994297087ee5e2388be4cca58929739490c0b39c8c77bdd52c8e0->leave($__internal_34e29415297994297087ee5e2388be4cca58929739490c0b39c8c77bdd52c8e0_prof);

        
        $__internal_7495fe4805b12ed8d47fd2facf225f53d2d94e879a782b26e4bc1ddb3cdd0702->leave($__internal_7495fe4805b12ed8d47fd2facf225f53d2d94e879a782b26e4bc1ddb3cdd0702_prof);

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
        return array (  147 => 27,  138 => 26,  127 => 17,  118 => 16,  107 => 12,  98 => 11,  80 => 7,  69 => 28,  67 => 26,  58 => 19,  56 => 16,  52 => 14,  50 => 11,  46 => 10,  42 => 9,  37 => 7,  29 => 1,);
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
      <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js\"></script>
    {% block javascripts %}
    {% endblock %}
  </body>
</html>", "::base2.html.twig", "/home/nico/pizzeria/app/Resources/views/base2.html.twig");
    }
}
