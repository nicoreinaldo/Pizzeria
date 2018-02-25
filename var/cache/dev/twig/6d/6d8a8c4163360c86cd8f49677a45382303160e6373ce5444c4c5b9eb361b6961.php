<?php

/* base.html.twig */
class __TwigTemplate_ef6a598e82a5011af52d5b328f0cd2f8830bea5f4c88506ad9e23671aec9697a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_635a7c29b85c867f8a068e319b645e3f7180719779a509e1d759bb7cd721ef58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_635a7c29b85c867f8a068e319b645e3f7180719779a509e1d759bb7cd721ef58->enter($__internal_635a7c29b85c867f8a068e319b645e3f7180719779a509e1d759bb7cd721ef58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_d99b34174088a3ea734a2e8f30bb91f2be92bb3170131fa7e2c2894882c4a68c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d99b34174088a3ea734a2e8f30bb91f2be92bb3170131fa7e2c2894882c4a68c->enter($__internal_d99b34174088a3ea734a2e8f30bb91f2be92bb3170131fa7e2c2894882c4a68c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 36
        echo "</head>


<body class=\"hold-transition skin-blue layout-top-nav\">

";
        // line 41
        $this->displayBlock('header', $context, $blocks);
        // line 42
        echo "
<div class=\"wrapper\">
    <div class=\"content-wrapper\">
            ";
        // line 45
        $this->displayBlock('body', $context, $blocks);
        // line 46
        echo "    </div>
    ";
        // line 47
        $this->displayBlock('footer', $context, $blocks);
        // line 48
        echo "</div>

";
        // line 50
        $this->displayBlock('javascripts', $context, $blocks);
        // line 82
        echo "</body>
</html>";
        
        $__internal_635a7c29b85c867f8a068e319b645e3f7180719779a509e1d759bb7cd721ef58->leave($__internal_635a7c29b85c867f8a068e319b645e3f7180719779a509e1d759bb7cd721ef58_prof);

        
        $__internal_d99b34174088a3ea734a2e8f30bb91f2be92bb3170131fa7e2c2894882c4a68c->leave($__internal_d99b34174088a3ea734a2e8f30bb91f2be92bb3170131fa7e2c2894882c4a68c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1e13d3f36ef9c432c21bad991bbfad555c90bf458254ecbb96d6bfb832aba830 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e13d3f36ef9c432c21bad991bbfad555c90bf458254ecbb96d6bfb832aba830->enter($__internal_1e13d3f36ef9c432c21bad991bbfad555c90bf458254ecbb96d6bfb832aba830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_62d554e47ea4db9842f50bc53b624cbb152bc19bb86cb923b18d3993579526a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62d554e47ea4db9842f50bc53b624cbb152bc19bb86cb923b18d3993579526a5->enter($__internal_62d554e47ea4db9842f50bc53b624cbb152bc19bb86cb923b18d3993579526a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "PizzaNuestra";
        
        $__internal_62d554e47ea4db9842f50bc53b624cbb152bc19bb86cb923b18d3993579526a5->leave($__internal_62d554e47ea4db9842f50bc53b624cbb152bc19bb86cb923b18d3993579526a5_prof);

        
        $__internal_1e13d3f36ef9c432c21bad991bbfad555c90bf458254ecbb96d6bfb832aba830->leave($__internal_1e13d3f36ef9c432c21bad991bbfad555c90bf458254ecbb96d6bfb832aba830_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9f5c1d8a58c594dd00bd5dade0b3c3cc95a9b9f4ef37226bef0b7ec1f569be37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f5c1d8a58c594dd00bd5dade0b3c3cc95a9b9f4ef37226bef0b7ec1f569be37->enter($__internal_9f5c1d8a58c594dd00bd5dade0b3c3cc95a9b9f4ef37226bef0b7ec1f569be37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_76f7f4c2fbf34b7acd449b7be9bcbace32988a28f516d74531833a26dbf9fb97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76f7f4c2fbf34b7acd449b7be9bcbace32988a28f516d74531833a26dbf9fb97->enter($__internal_76f7f4c2fbf34b7acd449b7be9bcbace32988a28f516d74531833a26dbf9fb97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"shortcut icon\" href=\"/asset/favicon.ico\">
        ";
        // line 9
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/Ionicons/css/ionicons.min.css"), "html", null, true);
        echo "\">
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/dist/css/skins/_all-skins.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/morris.js/morris.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic\">
 ";
        // line 19
        echo "        ";
        // line 20
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/css/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" />
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,700,300italic' rel='stylesheet' type='text/css'>
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/css/bootstrap/bootstrap.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/css/animat/animate.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/css/fancybox/jquery.fancybox.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/css/nivo-lightbox/nivo-lightbox.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/css/themes/default/default.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/css/owl-carousel/owl.carousel.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/css/owl-carousel/owl.theme.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/css/owl-carousel/owl.transitions.css"), "html", null, true);
        echo "\">
        <link href=\"https://fonts.googleapis.com/css?family=Vollkorn') }}\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/css/style.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/css/responsive.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\"/>
        <link rel=\"shortcut icon\" href=\"asset/images/favicon.ico\">
    ";
        
        $__internal_76f7f4c2fbf34b7acd449b7be9bcbace32988a28f516d74531833a26dbf9fb97->leave($__internal_76f7f4c2fbf34b7acd449b7be9bcbace32988a28f516d74531833a26dbf9fb97_prof);

        
        $__internal_9f5c1d8a58c594dd00bd5dade0b3c3cc95a9b9f4ef37226bef0b7ec1f569be37->leave($__internal_9f5c1d8a58c594dd00bd5dade0b3c3cc95a9b9f4ef37226bef0b7ec1f569be37_prof);

    }

    // line 41
    public function block_header($context, array $blocks = array())
    {
        $__internal_1cf44aad462b1e5e906e7d12866a01997100692dde3ff3f5062e29c0b5ab4260 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cf44aad462b1e5e906e7d12866a01997100692dde3ff3f5062e29c0b5ab4260->enter($__internal_1cf44aad462b1e5e906e7d12866a01997100692dde3ff3f5062e29c0b5ab4260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_cc0422f43b9d4376789e52250fc37b2466e3864c7e883fd8525aaa9cf43ea0b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc0422f43b9d4376789e52250fc37b2466e3864c7e883fd8525aaa9cf43ea0b0->enter($__internal_cc0422f43b9d4376789e52250fc37b2466e3864c7e883fd8525aaa9cf43ea0b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " ";
        $this->loadTemplate("default/header.html.twig", "base.html.twig", 41)->display($context);
        echo " ";
        
        $__internal_cc0422f43b9d4376789e52250fc37b2466e3864c7e883fd8525aaa9cf43ea0b0->leave($__internal_cc0422f43b9d4376789e52250fc37b2466e3864c7e883fd8525aaa9cf43ea0b0_prof);

        
        $__internal_1cf44aad462b1e5e906e7d12866a01997100692dde3ff3f5062e29c0b5ab4260->leave($__internal_1cf44aad462b1e5e906e7d12866a01997100692dde3ff3f5062e29c0b5ab4260_prof);

    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        $__internal_17d006627074390f64e6b5e92ce0acb7e9438da70dee18fbb29e10e0c3c1c869 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17d006627074390f64e6b5e92ce0acb7e9438da70dee18fbb29e10e0c3c1c869->enter($__internal_17d006627074390f64e6b5e92ce0acb7e9438da70dee18fbb29e10e0c3c1c869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ff7868019c195539cb0edc0bc766195bc95005eed3d984914ea1c196fece9043 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff7868019c195539cb0edc0bc766195bc95005eed3d984914ea1c196fece9043->enter($__internal_ff7868019c195539cb0edc0bc766195bc95005eed3d984914ea1c196fece9043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        $this->loadTemplate("default/index.html.twig", "base.html.twig", 45)->display($context);
        echo " ";
        
        $__internal_ff7868019c195539cb0edc0bc766195bc95005eed3d984914ea1c196fece9043->leave($__internal_ff7868019c195539cb0edc0bc766195bc95005eed3d984914ea1c196fece9043_prof);

        
        $__internal_17d006627074390f64e6b5e92ce0acb7e9438da70dee18fbb29e10e0c3c1c869->leave($__internal_17d006627074390f64e6b5e92ce0acb7e9438da70dee18fbb29e10e0c3c1c869_prof);

    }

    // line 47
    public function block_footer($context, array $blocks = array())
    {
        $__internal_07afe8b7755197c253f1ee4dfa0d59c6d846146f09aec577b25faa10c18d6fca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07afe8b7755197c253f1ee4dfa0d59c6d846146f09aec577b25faa10c18d6fca->enter($__internal_07afe8b7755197c253f1ee4dfa0d59c6d846146f09aec577b25faa10c18d6fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_b26df33e2b483d9281059775bd97ee9ab93f62462bbe5da2a4da5cffa2c60798 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b26df33e2b483d9281059775bd97ee9ab93f62462bbe5da2a4da5cffa2c60798->enter($__internal_b26df33e2b483d9281059775bd97ee9ab93f62462bbe5da2a4da5cffa2c60798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        echo " ";
        $this->loadTemplate("default/footer.html.twig", "base.html.twig", 47)->display($context);
        echo " ";
        
        $__internal_b26df33e2b483d9281059775bd97ee9ab93f62462bbe5da2a4da5cffa2c60798->leave($__internal_b26df33e2b483d9281059775bd97ee9ab93f62462bbe5da2a4da5cffa2c60798_prof);

        
        $__internal_07afe8b7755197c253f1ee4dfa0d59c6d846146f09aec577b25faa10c18d6fca->leave($__internal_07afe8b7755197c253f1ee4dfa0d59c6d846146f09aec577b25faa10c18d6fca_prof);

    }

    // line 50
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_16ad1dd1138c74fe3e58f94fa570569f92975ebb9baefa28bea455e6bc6d4423 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16ad1dd1138c74fe3e58f94fa570569f92975ebb9baefa28bea455e6bc6d4423->enter($__internal_16ad1dd1138c74fe3e58f94fa570569f92975ebb9baefa28bea455e6bc6d4423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_035145976cbfdaf6a92f026b77a6014e17c5e15dc236d29e69deeddca9a32e3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_035145976cbfdaf6a92f026b77a6014e17c5e15dc236d29e69deeddca9a32e3d->enter($__internal_035145976cbfdaf6a92f026b77a6014e17c5e15dc236d29e69deeddca9a32e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 51
        echo "
    <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/morris.js/morris.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/jquery-knob/dist/jquery.knob.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/fastclick/lib/fastclick.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/dist/js/adminlte.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/datatables.net/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/dist/js/pages/dashboard.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/dist/js/demo.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 71
        echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/js/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/js/script.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/js/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/js/fancybox/jquery.fancybox.pack.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/js/nivo-lightbox/nivo-lightbox.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/js/owl-carousel/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/js/jquery-easing/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/js/wow/wow.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_035145976cbfdaf6a92f026b77a6014e17c5e15dc236d29e69deeddca9a32e3d->leave($__internal_035145976cbfdaf6a92f026b77a6014e17c5e15dc236d29e69deeddca9a32e3d_prof);

        
        $__internal_16ad1dd1138c74fe3e58f94fa570569f92975ebb9baefa28bea455e6bc6d4423->leave($__internal_16ad1dd1138c74fe3e58f94fa570569f92975ebb9baefa28bea455e6bc6d4423_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  380 => 80,  376 => 79,  372 => 78,  368 => 77,  364 => 76,  360 => 75,  356 => 74,  352 => 73,  348 => 71,  344 => 69,  340 => 68,  336 => 67,  332 => 66,  328 => 65,  324 => 64,  320 => 63,  316 => 62,  312 => 61,  308 => 60,  304 => 59,  300 => 58,  296 => 57,  292 => 56,  288 => 55,  284 => 54,  280 => 53,  276 => 52,  273 => 51,  264 => 50,  244 => 47,  224 => 45,  204 => 41,  190 => 32,  186 => 31,  181 => 29,  177 => 28,  173 => 27,  169 => 26,  165 => 25,  161 => 24,  157 => 23,  153 => 22,  147 => 20,  145 => 19,  140 => 16,  136 => 15,  132 => 14,  128 => 13,  124 => 12,  120 => 11,  116 => 10,  111 => 9,  108 => 7,  99 => 6,  81 => 5,  70 => 82,  68 => 50,  64 => 48,  62 => 47,  59 => 46,  57 => 45,  52 => 42,  50 => 41,  43 => 36,  41 => 6,  37 => 5,  31 => 1,);
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
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>{% block title %}PizzaNuestra{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"shortcut icon\" href=\"/asset/favicon.ico\">
        {# <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" /> #}
        <link rel=\"stylesheet\" href=\"{{asset('asset/bower_components/bootstrap/dist/css/bootstrap.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{asset('asset/bower_components/Ionicons/css/ionicons.min.css') }}\">
        <link href=\"{{asset('asset/bower_components/font-awesome/css/font-awesome.min.css')}}\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"{{asset('asset/dist/css/AdminLTE.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{asset('asset/dist/css/skins/_all-skins.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{asset('asset/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{asset('asset/bower_components/morris.js/morris.css') }}\">
        <link rel=\"stylesheet\" href=\"{{asset('asset/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}\">
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic\">
 {#        <link rel=\"stylesheet\" href=\"{{asset('asset/css/styles.css') }}\"> #}
        {# agregado del index #}
        <link rel=\"stylesheet\" href=\"{{asset('asset/css/font-awesome/css/font-awesome.min.css') }}\" />
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,700,300italic' rel='stylesheet' type='text/css'>
        <link rel=\"stylesheet\" href=\"{{asset('asset/css/bootstrap/bootstrap.min.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{asset('asset/css/animat/animate.min.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{asset('asset/css/fancybox/jquery.fancybox.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{asset('asset/css/nivo-lightbox/nivo-lightbox.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{asset('asset/css/themes/default/default.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{asset('asset/css/owl-carousel/owl.carousel.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{asset('asset/css/owl-carousel/owl.theme.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{asset('asset/css/owl-carousel/owl.transitions.css') }}\">
        <link href=\"https://fonts.googleapis.com/css?family=Vollkorn') }}\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"{{asset('asset/css/style.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{asset('asset/css/responsive.css') }}\" />
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\"/>
        <link rel=\"shortcut icon\" href=\"asset/images/favicon.ico\">
    {% endblock %}
</head>


<body class=\"hold-transition skin-blue layout-top-nav\">

{% block header %} {% include 'default/header.html.twig' %} {% endblock %}

<div class=\"wrapper\">
    <div class=\"content-wrapper\">
            {% block body %} {% include 'default/index.html.twig' %} {% endblock %}
    </div>
    {% block footer %} {% include 'default/footer.html.twig' %} {% endblock %}
</div>

{% block javascripts %}

    <script src=\"{{asset('asset/bower_components/jquery/dist/jquery.min.js')}}\"></script>
    <script src=\"{{asset('asset/bower_components/jquery-ui/jquery-ui.min.js')}}\"></script>
    <script src=\"{{asset('asset/bower_components/bootstrap/dist/js/bootstrap.min.js')}}\"></script>
    <script src=\"{{asset('asset/bower_components/raphael/raphael.min.js')}}\"></script>
    <script src=\"{{asset('asset/bower_components/morris.js/morris.min.js')}}\"></script>
    <script src=\"{{asset('asset/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}\"></script>
    <script src=\"{{asset('asset/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}\"></script>
    <script src=\"{{asset('asset/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}\"></script>
    <script src=\"{{asset('asset/bower_components/jquery-knob/dist/jquery.knob.min.js')}}\"></script>
    <script src=\"{{asset('asset/bower_components/moment/min/moment.min.js')}}\"></script>
    <script src=\"{{asset('asset/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}\"></script>
    <script src=\"{{asset('asset/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}\"></script>
    <script src=\"{{asset('asset/bower_components/fastclick/lib/fastclick.js')}}\"></script>
    <script src=\"{{asset('asset/dist/js/adminlte.min.js')}}\"></script>
    <script src=\"{{ asset('asset/bower_components/datatables.net/js/jquery.dataTables.min.js') }}\"></script>
    <script src=\"{{ asset('asset/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}\"></script>
    <script src=\"{{asset('asset/dist/js/pages/dashboard.js')}}\"></script>
    <script src=\"{{asset('asset/dist/js/demo.js')}}\"></script>
    {# agregado del index #}
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    <script src=\"{{asset('asset/js/jquery/jquery.js')}}\"></script>
    <script src=\"{{asset('asset/js/script.js')}}\"></script>
    <script src=\"{{asset('asset/js/bootstrap/bootstrap.min.js')}}\"></script>
    <script src=\"{{asset('asset/js/fancybox/jquery.fancybox.pack.js')}}\"></script>
    <script src=\"{{asset('asset/js/nivo-lightbox/nivo-lightbox.min.js')}}\"></script>
    <script src=\"{{asset('asset/js/owl-carousel/owl.carousel.min.js')}}\"></script>
    <script src=\"{{asset('asset/js/jquery-easing/jquery.easing.1.3.js')}}\"></script>
    <script src=\"{{asset('asset/js/wow/wow.min.js')}}\"></script>
{% endblock %}
</body>
</html>", "base.html.twig", "/home/nico/pizzeria/app/Resources/views/base.html.twig");
    }
}
