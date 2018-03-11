<?php

/* base.html.twig */
class __TwigTemplate_58fcb55423d3274a662181a229734752e725144dd63773cc99fa1c7691dad048 extends Twig_Template
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
        $__internal_79e72c0073405b9f719929b265dbdf3c88d3ade10f089e32d807a5b9cad803b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79e72c0073405b9f719929b265dbdf3c88d3ade10f089e32d807a5b9cad803b7->enter($__internal_79e72c0073405b9f719929b265dbdf3c88d3ade10f089e32d807a5b9cad803b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_22b91a2472f527381933cbfc7fc1f9bfc123e4f90222931a3839cd899c4c15f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22b91a2472f527381933cbfc7fc1f9bfc123e4f90222931a3839cd899c4c15f2->enter($__internal_22b91a2472f527381933cbfc7fc1f9bfc123e4f90222931a3839cd899c4c15f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 83
        echo "</body>
</html>";
        
        $__internal_79e72c0073405b9f719929b265dbdf3c88d3ade10f089e32d807a5b9cad803b7->leave($__internal_79e72c0073405b9f719929b265dbdf3c88d3ade10f089e32d807a5b9cad803b7_prof);

        
        $__internal_22b91a2472f527381933cbfc7fc1f9bfc123e4f90222931a3839cd899c4c15f2->leave($__internal_22b91a2472f527381933cbfc7fc1f9bfc123e4f90222931a3839cd899c4c15f2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c93123a848d9e00a232771c8571f8ae50730c718e2a078537f0c2f5aa66d73c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c93123a848d9e00a232771c8571f8ae50730c718e2a078537f0c2f5aa66d73c5->enter($__internal_c93123a848d9e00a232771c8571f8ae50730c718e2a078537f0c2f5aa66d73c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c32eb79b291e51615a51fde6b797208e351385221cde26e976eae45946bb1aa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c32eb79b291e51615a51fde6b797208e351385221cde26e976eae45946bb1aa4->enter($__internal_c32eb79b291e51615a51fde6b797208e351385221cde26e976eae45946bb1aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "PizzaNuestra";
        
        $__internal_c32eb79b291e51615a51fde6b797208e351385221cde26e976eae45946bb1aa4->leave($__internal_c32eb79b291e51615a51fde6b797208e351385221cde26e976eae45946bb1aa4_prof);

        
        $__internal_c93123a848d9e00a232771c8571f8ae50730c718e2a078537f0c2f5aa66d73c5->leave($__internal_c93123a848d9e00a232771c8571f8ae50730c718e2a078537f0c2f5aa66d73c5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9904fdd5e25a459e5dcae24e3bc64e7b01ebac2a5cff8ccdcfa01849c8c72dc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9904fdd5e25a459e5dcae24e3bc64e7b01ebac2a5cff8ccdcfa01849c8c72dc1->enter($__internal_9904fdd5e25a459e5dcae24e3bc64e7b01ebac2a5cff8ccdcfa01849c8c72dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5d9ec5105b7add5bf0a0f572ccf75cb138b7c4a752ec5aa459ec5375181584b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d9ec5105b7add5bf0a0f572ccf75cb138b7c4a752ec5aa459ec5375181584b2->enter($__internal_5d9ec5105b7add5bf0a0f572ccf75cb138b7c4a752ec5aa459ec5375181584b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        ";
        // line 12
        echo " <link rel=\"stylesheet\" href=\"";
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
        echo "        ";
        // line 22
        echo "<link rel=\"stylesheet\" href=\"";
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
        ";
        // line 31
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/css/style.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/css/responsive.css"), "html", null, true);
        echo "\" />
        ";
        // line 34
        echo "<link rel=\"shortcut icon\" href=\"asset/images/favicon.ico\">
    ";
        
        $__internal_5d9ec5105b7add5bf0a0f572ccf75cb138b7c4a752ec5aa459ec5375181584b2->leave($__internal_5d9ec5105b7add5bf0a0f572ccf75cb138b7c4a752ec5aa459ec5375181584b2_prof);

        
        $__internal_9904fdd5e25a459e5dcae24e3bc64e7b01ebac2a5cff8ccdcfa01849c8c72dc1->leave($__internal_9904fdd5e25a459e5dcae24e3bc64e7b01ebac2a5cff8ccdcfa01849c8c72dc1_prof);

    }

    // line 41
    public function block_header($context, array $blocks = array())
    {
        $__internal_2d91bcf1347f25007bb53a95f774782366f77ba2ecc75112f44aa08ce2693e1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d91bcf1347f25007bb53a95f774782366f77ba2ecc75112f44aa08ce2693e1b->enter($__internal_2d91bcf1347f25007bb53a95f774782366f77ba2ecc75112f44aa08ce2693e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_4aa41613fec70319214ac21c3a8b958cf0d3acb277b298cf2e0b5adcc16b8abd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aa41613fec70319214ac21c3a8b958cf0d3acb277b298cf2e0b5adcc16b8abd->enter($__internal_4aa41613fec70319214ac21c3a8b958cf0d3acb277b298cf2e0b5adcc16b8abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " ";
        $this->loadTemplate("default/header.html.twig", "base.html.twig", 41)->display($context);
        echo " ";
        
        $__internal_4aa41613fec70319214ac21c3a8b958cf0d3acb277b298cf2e0b5adcc16b8abd->leave($__internal_4aa41613fec70319214ac21c3a8b958cf0d3acb277b298cf2e0b5adcc16b8abd_prof);

        
        $__internal_2d91bcf1347f25007bb53a95f774782366f77ba2ecc75112f44aa08ce2693e1b->leave($__internal_2d91bcf1347f25007bb53a95f774782366f77ba2ecc75112f44aa08ce2693e1b_prof);

    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        $__internal_56d7b1072da5f1cbb09ff84206444e477730be8a6f409ade92cb5545c19dde8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56d7b1072da5f1cbb09ff84206444e477730be8a6f409ade92cb5545c19dde8d->enter($__internal_56d7b1072da5f1cbb09ff84206444e477730be8a6f409ade92cb5545c19dde8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6fae538abc79827e3151130152fc6584a8cade43c4531488fe205d34f3a7edd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fae538abc79827e3151130152fc6584a8cade43c4531488fe205d34f3a7edd8->enter($__internal_6fae538abc79827e3151130152fc6584a8cade43c4531488fe205d34f3a7edd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        $this->loadTemplate("default/index.html.twig", "base.html.twig", 45)->display($context);
        echo " ";
        
        $__internal_6fae538abc79827e3151130152fc6584a8cade43c4531488fe205d34f3a7edd8->leave($__internal_6fae538abc79827e3151130152fc6584a8cade43c4531488fe205d34f3a7edd8_prof);

        
        $__internal_56d7b1072da5f1cbb09ff84206444e477730be8a6f409ade92cb5545c19dde8d->leave($__internal_56d7b1072da5f1cbb09ff84206444e477730be8a6f409ade92cb5545c19dde8d_prof);

    }

    // line 47
    public function block_footer($context, array $blocks = array())
    {
        $__internal_e70a94b137b68f2b7d57ae193a54a864d5ca729734aafa803ead2f699d1f0174 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e70a94b137b68f2b7d57ae193a54a864d5ca729734aafa803ead2f699d1f0174->enter($__internal_e70a94b137b68f2b7d57ae193a54a864d5ca729734aafa803ead2f699d1f0174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_79b52f997cd1ebb6b742f34f642d6ee2e9c796f0a867c491f6398883a4eaa00a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79b52f997cd1ebb6b742f34f642d6ee2e9c796f0a867c491f6398883a4eaa00a->enter($__internal_79b52f997cd1ebb6b742f34f642d6ee2e9c796f0a867c491f6398883a4eaa00a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        echo " ";
        $this->loadTemplate("default/footer.html.twig", "base.html.twig", 47)->display($context);
        echo " ";
        
        $__internal_79b52f997cd1ebb6b742f34f642d6ee2e9c796f0a867c491f6398883a4eaa00a->leave($__internal_79b52f997cd1ebb6b742f34f642d6ee2e9c796f0a867c491f6398883a4eaa00a_prof);

        
        $__internal_e70a94b137b68f2b7d57ae193a54a864d5ca729734aafa803ead2f699d1f0174->leave($__internal_e70a94b137b68f2b7d57ae193a54a864d5ca729734aafa803ead2f699d1f0174_prof);

    }

    // line 50
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_75c1d6bbe91886922603deb756d768acf1311c415fde3ff2211c5b1ac89e89ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75c1d6bbe91886922603deb756d768acf1311c415fde3ff2211c5b1ac89e89ba->enter($__internal_75c1d6bbe91886922603deb756d768acf1311c415fde3ff2211c5b1ac89e89ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d305fcd18cb4721e577e266e1549415a6f81ffdf713b1bb97806a8253a648485 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d305fcd18cb4721e577e266e1549415a6f81ffdf713b1bb97806a8253a648485->enter($__internal_d305fcd18cb4721e577e266e1549415a6f81ffdf713b1bb97806a8253a648485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        echo "
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/js/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/js/script.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/js/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/js/fancybox/jquery.fancybox.pack.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/js/nivo-lightbox/nivo-lightbox.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/js/owl-carousel/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/js/jquery-easing/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/js/wow/wow.min.js"), "html", null, true);
        echo "\"></script> 
";
        
        $__internal_d305fcd18cb4721e577e266e1549415a6f81ffdf713b1bb97806a8253a648485->leave($__internal_d305fcd18cb4721e577e266e1549415a6f81ffdf713b1bb97806a8253a648485_prof);

        
        $__internal_75c1d6bbe91886922603deb756d768acf1311c415fde3ff2211c5b1ac89e89ba->leave($__internal_75c1d6bbe91886922603deb756d768acf1311c415fde3ff2211c5b1ac89e89ba_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  376 => 81,  372 => 80,  368 => 79,  364 => 78,  360 => 77,  356 => 76,  352 => 75,  348 => 74,  343 => 71,  339 => 69,  335 => 68,  331 => 67,  327 => 66,  323 => 65,  319 => 64,  315 => 63,  311 => 62,  307 => 61,  303 => 60,  299 => 59,  295 => 58,  291 => 57,  287 => 56,  283 => 55,  279 => 54,  275 => 53,  271 => 52,  268 => 51,  259 => 50,  239 => 47,  219 => 45,  199 => 41,  188 => 34,  184 => 32,  179 => 31,  175 => 29,  171 => 28,  167 => 27,  163 => 26,  159 => 25,  155 => 24,  151 => 23,  146 => 22,  144 => 20,  142 => 19,  137 => 16,  133 => 15,  129 => 14,  125 => 13,  120 => 12,  116 => 10,  111 => 9,  108 => 7,  99 => 6,  81 => 5,  70 => 83,  68 => 50,  64 => 48,  62 => 47,  59 => 46,  57 => 45,  52 => 42,  50 => 41,  43 => 36,  41 => 6,  37 => 5,  31 => 1,);
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
        {# <link href=\"{{asset('asset/bower_components/font-awesome/css/font-awesome.min.css')}}\" rel=\"stylesheet\">
        #} <link rel=\"stylesheet\" href=\"{{asset('asset/dist/css/AdminLTE.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{asset('asset/dist/css/skins/_all-skins.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{asset('asset/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{asset('asset/bower_components/morris.js/morris.css') }}\">
        <link rel=\"stylesheet\" href=\"{{asset('asset/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}\">
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic\">
 {#        <link rel=\"stylesheet\" href=\"{{asset('asset/css/styles.css') }}\"> #}
        {# agregado del index #}
        {# <link rel=\"stylesheet\" href=\"{{asset('asset/css/font-awesome/css/font-awesome.min.css') }}\" />
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,700,300italic' rel='stylesheet' type='text/css'>
         #}<link rel=\"stylesheet\" href=\"{{asset('asset/css/bootstrap/bootstrap.min.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{asset('asset/css/animat/animate.min.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{asset('asset/css/fancybox/jquery.fancybox.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{asset('asset/css/nivo-lightbox/nivo-lightbox.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{asset('asset/css/themes/default/default.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{asset('asset/css/owl-carousel/owl.carousel.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{asset('asset/css/owl-carousel/owl.theme.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{asset('asset/css/owl-carousel/owl.transitions.css') }}\">
        {# <link href=\"https://fonts.googleapis.com/css?family=Vollkorn') }}\" rel=\"stylesheet\">
         #}<link rel=\"stylesheet\" href=\"{{asset('asset/css/style.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{asset('asset/css/responsive.css') }}\" />
        {# <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\"/>
         #}<link rel=\"shortcut icon\" href=\"asset/images/favicon.ico\">
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
