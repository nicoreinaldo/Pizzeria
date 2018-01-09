<?php

/* ::base.html.twig */
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
        $__internal_012aec121d2c99e3d46821970481303bb124c6c20b7902753e2ca2283861497b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_012aec121d2c99e3d46821970481303bb124c6c20b7902753e2ca2283861497b->enter($__internal_012aec121d2c99e3d46821970481303bb124c6c20b7902753e2ca2283861497b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_c8bf06613a6d409f3851dcc2ba3dabb9b88461d0e8740bfe4ba0bac788e79466 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8bf06613a6d409f3851dcc2ba3dabb9b88461d0e8740bfe4ba0bac788e79466->enter($__internal_c8bf06613a6d409f3851dcc2ba3dabb9b88461d0e8740bfe4ba0bac788e79466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 35
        echo "</head>


<body class=\"hold-transition skin-blue layout-top-nav\">

";
        // line 40
        $this->displayBlock('header', $context, $blocks);
        // line 41
        echo "
<div class=\"wrapper\">
    <div class=\"content-wrapper\">
            ";
        // line 44
        $this->displayBlock('body', $context, $blocks);
        // line 45
        echo "    </div>
    ";
        // line 46
        $this->displayBlock('footer', $context, $blocks);
        // line 47
        echo "</div>

";
        // line 49
        $this->displayBlock('javascripts', $context, $blocks);
        // line 81
        echo "</body>
</html>";
        
        $__internal_012aec121d2c99e3d46821970481303bb124c6c20b7902753e2ca2283861497b->leave($__internal_012aec121d2c99e3d46821970481303bb124c6c20b7902753e2ca2283861497b_prof);

        
        $__internal_c8bf06613a6d409f3851dcc2ba3dabb9b88461d0e8740bfe4ba0bac788e79466->leave($__internal_c8bf06613a6d409f3851dcc2ba3dabb9b88461d0e8740bfe4ba0bac788e79466_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f2ca85e53e20ccb9f288fb124069ff5e462b27a81fdafa2b4e164b6208aad29d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2ca85e53e20ccb9f288fb124069ff5e462b27a81fdafa2b4e164b6208aad29d->enter($__internal_f2ca85e53e20ccb9f288fb124069ff5e462b27a81fdafa2b4e164b6208aad29d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e1256f358bcad24e605cd7206914f08e615b045f9e7ebee1127abb86a07ab827 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1256f358bcad24e605cd7206914f08e615b045f9e7ebee1127abb86a07ab827->enter($__internal_e1256f358bcad24e605cd7206914f08e615b045f9e7ebee1127abb86a07ab827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "PizzaNuestra";
        
        $__internal_e1256f358bcad24e605cd7206914f08e615b045f9e7ebee1127abb86a07ab827->leave($__internal_e1256f358bcad24e605cd7206914f08e615b045f9e7ebee1127abb86a07ab827_prof);

        
        $__internal_f2ca85e53e20ccb9f288fb124069ff5e462b27a81fdafa2b4e164b6208aad29d->leave($__internal_f2ca85e53e20ccb9f288fb124069ff5e462b27a81fdafa2b4e164b6208aad29d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_532fd4d1fe674824b293219b027fbdb06da3a09a308f78d2745e72fed8cd84b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_532fd4d1fe674824b293219b027fbdb06da3a09a308f78d2745e72fed8cd84b4->enter($__internal_532fd4d1fe674824b293219b027fbdb06da3a09a308f78d2745e72fed8cd84b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f3050faee3f32141e15f4285fdfaf28d6d60f25ba7529b0576710f5e4e719b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f3050faee3f32141e15f4285fdfaf28d6d60f25ba7529b0576710f5e4e719b1->enter($__internal_6f3050faee3f32141e15f4285fdfaf28d6d60f25ba7529b0576710f5e4e719b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
    ";
        
        $__internal_6f3050faee3f32141e15f4285fdfaf28d6d60f25ba7529b0576710f5e4e719b1->leave($__internal_6f3050faee3f32141e15f4285fdfaf28d6d60f25ba7529b0576710f5e4e719b1_prof);

        
        $__internal_532fd4d1fe674824b293219b027fbdb06da3a09a308f78d2745e72fed8cd84b4->leave($__internal_532fd4d1fe674824b293219b027fbdb06da3a09a308f78d2745e72fed8cd84b4_prof);

    }

    // line 40
    public function block_header($context, array $blocks = array())
    {
        $__internal_238fff3022c3cd4b0cb708fb6ab9caf0e425a66a0cb69676a4cb1b6934110916 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_238fff3022c3cd4b0cb708fb6ab9caf0e425a66a0cb69676a4cb1b6934110916->enter($__internal_238fff3022c3cd4b0cb708fb6ab9caf0e425a66a0cb69676a4cb1b6934110916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_6934b78a9f03b6cbe476d5a7a18bd1a214afc339a2e8338d01b1e765ac5cf651 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6934b78a9f03b6cbe476d5a7a18bd1a214afc339a2e8338d01b1e765ac5cf651->enter($__internal_6934b78a9f03b6cbe476d5a7a18bd1a214afc339a2e8338d01b1e765ac5cf651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " ";
        $this->loadTemplate("default/header.html.twig", "::base.html.twig", 40)->display($context);
        echo " ";
        
        $__internal_6934b78a9f03b6cbe476d5a7a18bd1a214afc339a2e8338d01b1e765ac5cf651->leave($__internal_6934b78a9f03b6cbe476d5a7a18bd1a214afc339a2e8338d01b1e765ac5cf651_prof);

        
        $__internal_238fff3022c3cd4b0cb708fb6ab9caf0e425a66a0cb69676a4cb1b6934110916->leave($__internal_238fff3022c3cd4b0cb708fb6ab9caf0e425a66a0cb69676a4cb1b6934110916_prof);

    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
        $__internal_29e68147ad46074d5fd99e5c0a0a9e9fdbcecedd77a3b2e78d0ba908aa9a9168 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29e68147ad46074d5fd99e5c0a0a9e9fdbcecedd77a3b2e78d0ba908aa9a9168->enter($__internal_29e68147ad46074d5fd99e5c0a0a9e9fdbcecedd77a3b2e78d0ba908aa9a9168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4de3fc3d5e811752fcb4712ae6b3b2fb9051ded684aa79cef2afaf033111b387 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4de3fc3d5e811752fcb4712ae6b3b2fb9051ded684aa79cef2afaf033111b387->enter($__internal_4de3fc3d5e811752fcb4712ae6b3b2fb9051ded684aa79cef2afaf033111b387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        $this->loadTemplate("default/index.html.twig", "::base.html.twig", 44)->display($context);
        echo " ";
        
        $__internal_4de3fc3d5e811752fcb4712ae6b3b2fb9051ded684aa79cef2afaf033111b387->leave($__internal_4de3fc3d5e811752fcb4712ae6b3b2fb9051ded684aa79cef2afaf033111b387_prof);

        
        $__internal_29e68147ad46074d5fd99e5c0a0a9e9fdbcecedd77a3b2e78d0ba908aa9a9168->leave($__internal_29e68147ad46074d5fd99e5c0a0a9e9fdbcecedd77a3b2e78d0ba908aa9a9168_prof);

    }

    // line 46
    public function block_footer($context, array $blocks = array())
    {
        $__internal_481c7136671a4c7c401c66669bf1cd6f460109aa0440a50f3080333ac98f00f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_481c7136671a4c7c401c66669bf1cd6f460109aa0440a50f3080333ac98f00f3->enter($__internal_481c7136671a4c7c401c66669bf1cd6f460109aa0440a50f3080333ac98f00f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_ad5511c12fbb1a8cb33cb962dd97caf9c106ca72dee49a40b294c5a93c00474f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad5511c12fbb1a8cb33cb962dd97caf9c106ca72dee49a40b294c5a93c00474f->enter($__internal_ad5511c12fbb1a8cb33cb962dd97caf9c106ca72dee49a40b294c5a93c00474f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        echo " ";
        $this->loadTemplate("default/footer.html.twig", "::base.html.twig", 46)->display($context);
        echo " ";
        
        $__internal_ad5511c12fbb1a8cb33cb962dd97caf9c106ca72dee49a40b294c5a93c00474f->leave($__internal_ad5511c12fbb1a8cb33cb962dd97caf9c106ca72dee49a40b294c5a93c00474f_prof);

        
        $__internal_481c7136671a4c7c401c66669bf1cd6f460109aa0440a50f3080333ac98f00f3->leave($__internal_481c7136671a4c7c401c66669bf1cd6f460109aa0440a50f3080333ac98f00f3_prof);

    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b4209fd69e0059fffd14bb50d6717955324414ee8cb83525d6366adaba8dd7a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4209fd69e0059fffd14bb50d6717955324414ee8cb83525d6366adaba8dd7a0->enter($__internal_b4209fd69e0059fffd14bb50d6717955324414ee8cb83525d6366adaba8dd7a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_19102cdac8719841d1a36b74db22e8d0654302273ecc1a2a51de7755814c9a07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19102cdac8719841d1a36b74db22e8d0654302273ecc1a2a51de7755814c9a07->enter($__internal_19102cdac8719841d1a36b74db22e8d0654302273ecc1a2a51de7755814c9a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 50
        echo "
    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/morris.js/morris.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/jquery-knob/dist/jquery.knob.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/fastclick/lib/fastclick.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/dist/js/adminlte.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/datatables.net/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/dist/js/pages/dashboard.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/dist/js/demo.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 70
        echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/js/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/js/script.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/js/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/js/fancybox/jquery.fancybox.pack.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/js/nivo-lightbox/nivo-lightbox.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/js/owl-carousel/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/js/jquery-easing/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/js/wow/wow.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_19102cdac8719841d1a36b74db22e8d0654302273ecc1a2a51de7755814c9a07->leave($__internal_19102cdac8719841d1a36b74db22e8d0654302273ecc1a2a51de7755814c9a07_prof);

        
        $__internal_b4209fd69e0059fffd14bb50d6717955324414ee8cb83525d6366adaba8dd7a0->leave($__internal_b4209fd69e0059fffd14bb50d6717955324414ee8cb83525d6366adaba8dd7a0_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  379 => 79,  375 => 78,  371 => 77,  367 => 76,  363 => 75,  359 => 74,  355 => 73,  351 => 72,  347 => 70,  343 => 68,  339 => 67,  335 => 66,  331 => 65,  327 => 64,  323 => 63,  319 => 62,  315 => 61,  311 => 60,  307 => 59,  303 => 58,  299 => 57,  295 => 56,  291 => 55,  287 => 54,  283 => 53,  279 => 52,  275 => 51,  272 => 50,  263 => 49,  243 => 46,  223 => 44,  203 => 40,  190 => 32,  186 => 31,  181 => 29,  177 => 28,  173 => 27,  169 => 26,  165 => 25,  161 => 24,  157 => 23,  153 => 22,  147 => 20,  145 => 19,  140 => 16,  136 => 15,  132 => 14,  128 => 13,  124 => 12,  120 => 11,  116 => 10,  111 => 9,  108 => 7,  99 => 6,  81 => 5,  70 => 81,  68 => 49,  64 => 47,  62 => 46,  59 => 45,  57 => 44,  52 => 41,  50 => 40,  43 => 35,  41 => 6,  37 => 5,  31 => 1,);
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
</html>", "::base.html.twig", "/home/nico/pizzerianostra/app/Resources/views/base.html.twig");
    }
}
