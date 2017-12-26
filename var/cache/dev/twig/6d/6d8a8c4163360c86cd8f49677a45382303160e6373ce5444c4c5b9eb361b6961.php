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
        $__internal_59eef79cde844a42d8d192082029187d3aa031bd06692781c953efcfe9fee19e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59eef79cde844a42d8d192082029187d3aa031bd06692781c953efcfe9fee19e->enter($__internal_59eef79cde844a42d8d192082029187d3aa031bd06692781c953efcfe9fee19e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_658c7bfedd48adf148c6d8e08d6caf44d8983cb10af4c77e24a47e50b7a3153a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_658c7bfedd48adf148c6d8e08d6caf44d8983cb10af4c77e24a47e50b7a3153a->enter($__internal_658c7bfedd48adf148c6d8e08d6caf44d8983cb10af4c77e24a47e50b7a3153a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 34
        echo "</head>


<body class=\"hold-transition skin-blue layout-top-nav\">

";
        // line 39
        $this->displayBlock('header', $context, $blocks);
        // line 40
        echo "
<div class=\"wrapper\">
    <div class=\"content-wrapper\">
            ";
        // line 43
        $this->displayBlock('body', $context, $blocks);
        // line 44
        echo "    </div>
    ";
        // line 45
        $this->displayBlock('footer', $context, $blocks);
        // line 46
        echo "</div>

";
        // line 48
        $this->displayBlock('javascripts', $context, $blocks);
        // line 80
        echo "</body>
</html>";
        
        $__internal_59eef79cde844a42d8d192082029187d3aa031bd06692781c953efcfe9fee19e->leave($__internal_59eef79cde844a42d8d192082029187d3aa031bd06692781c953efcfe9fee19e_prof);

        
        $__internal_658c7bfedd48adf148c6d8e08d6caf44d8983cb10af4c77e24a47e50b7a3153a->leave($__internal_658c7bfedd48adf148c6d8e08d6caf44d8983cb10af4c77e24a47e50b7a3153a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c6813415035dfdf0428d5707723a38c9d6501e5055f34504fe8c2a8b23d218ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6813415035dfdf0428d5707723a38c9d6501e5055f34504fe8c2a8b23d218ef->enter($__internal_c6813415035dfdf0428d5707723a38c9d6501e5055f34504fe8c2a8b23d218ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_770393cd6a3ce832069f6f5e84a725a1e332b7526060484144619b96e9a99934 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_770393cd6a3ce832069f6f5e84a725a1e332b7526060484144619b96e9a99934->enter($__internal_770393cd6a3ce832069f6f5e84a725a1e332b7526060484144619b96e9a99934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "PizzaNuestra";
        
        $__internal_770393cd6a3ce832069f6f5e84a725a1e332b7526060484144619b96e9a99934->leave($__internal_770393cd6a3ce832069f6f5e84a725a1e332b7526060484144619b96e9a99934_prof);

        
        $__internal_c6813415035dfdf0428d5707723a38c9d6501e5055f34504fe8c2a8b23d218ef->leave($__internal_c6813415035dfdf0428d5707723a38c9d6501e5055f34504fe8c2a8b23d218ef_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_06698e4218f1befa13a3460f2331c4ed3f973c7ecbfa14e772bc2a813b1f802a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06698e4218f1befa13a3460f2331c4ed3f973c7ecbfa14e772bc2a813b1f802a->enter($__internal_06698e4218f1befa13a3460f2331c4ed3f973c7ecbfa14e772bc2a813b1f802a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3c72c1490b2f457376e0b2faa3e4a02a2b04df7e1532ef379caf719c50b3af19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c72c1490b2f457376e0b2faa3e4a02a2b04df7e1532ef379caf719c50b3af19->enter($__internal_3c72c1490b2f457376e0b2faa3e4a02a2b04df7e1532ef379caf719c50b3af19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
    ";
        
        $__internal_3c72c1490b2f457376e0b2faa3e4a02a2b04df7e1532ef379caf719c50b3af19->leave($__internal_3c72c1490b2f457376e0b2faa3e4a02a2b04df7e1532ef379caf719c50b3af19_prof);

        
        $__internal_06698e4218f1befa13a3460f2331c4ed3f973c7ecbfa14e772bc2a813b1f802a->leave($__internal_06698e4218f1befa13a3460f2331c4ed3f973c7ecbfa14e772bc2a813b1f802a_prof);

    }

    // line 39
    public function block_header($context, array $blocks = array())
    {
        $__internal_a50294249b2714aea1c4a6680dc9e35b66a2415771968f4716699bb0aaf18558 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a50294249b2714aea1c4a6680dc9e35b66a2415771968f4716699bb0aaf18558->enter($__internal_a50294249b2714aea1c4a6680dc9e35b66a2415771968f4716699bb0aaf18558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_d16434f4ca94e55d5d02be8cba62f5e057fab2ad36a1a09117ae0043316a9926 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d16434f4ca94e55d5d02be8cba62f5e057fab2ad36a1a09117ae0043316a9926->enter($__internal_d16434f4ca94e55d5d02be8cba62f5e057fab2ad36a1a09117ae0043316a9926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " ";
        $this->loadTemplate("default/header.html.twig", "::base.html.twig", 39)->display($context);
        echo " ";
        
        $__internal_d16434f4ca94e55d5d02be8cba62f5e057fab2ad36a1a09117ae0043316a9926->leave($__internal_d16434f4ca94e55d5d02be8cba62f5e057fab2ad36a1a09117ae0043316a9926_prof);

        
        $__internal_a50294249b2714aea1c4a6680dc9e35b66a2415771968f4716699bb0aaf18558->leave($__internal_a50294249b2714aea1c4a6680dc9e35b66a2415771968f4716699bb0aaf18558_prof);

    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ddc7b13ae046d2e3802dcaed7bcab17dd889f8b08d9fb229a2d820bdd9efbbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ddc7b13ae046d2e3802dcaed7bcab17dd889f8b08d9fb229a2d820bdd9efbbb->enter($__internal_3ddc7b13ae046d2e3802dcaed7bcab17dd889f8b08d9fb229a2d820bdd9efbbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dd109683db494c4db10e4ae72283254fde30a7e600beae29bc803bdeff704b5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd109683db494c4db10e4ae72283254fde30a7e600beae29bc803bdeff704b5a->enter($__internal_dd109683db494c4db10e4ae72283254fde30a7e600beae29bc803bdeff704b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        $this->loadTemplate("default/index.html.twig", "::base.html.twig", 43)->display($context);
        echo " ";
        
        $__internal_dd109683db494c4db10e4ae72283254fde30a7e600beae29bc803bdeff704b5a->leave($__internal_dd109683db494c4db10e4ae72283254fde30a7e600beae29bc803bdeff704b5a_prof);

        
        $__internal_3ddc7b13ae046d2e3802dcaed7bcab17dd889f8b08d9fb229a2d820bdd9efbbb->leave($__internal_3ddc7b13ae046d2e3802dcaed7bcab17dd889f8b08d9fb229a2d820bdd9efbbb_prof);

    }

    // line 45
    public function block_footer($context, array $blocks = array())
    {
        $__internal_70b41fcf89a2c0cd01eb91cf8acc105b827e23ef1a0dfc33809efdd43b18fee7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70b41fcf89a2c0cd01eb91cf8acc105b827e23ef1a0dfc33809efdd43b18fee7->enter($__internal_70b41fcf89a2c0cd01eb91cf8acc105b827e23ef1a0dfc33809efdd43b18fee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_af87daee6dc679d029db72158396ba1ea19d2782bc6c11a9e33fa596b3ceb4ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af87daee6dc679d029db72158396ba1ea19d2782bc6c11a9e33fa596b3ceb4ee->enter($__internal_af87daee6dc679d029db72158396ba1ea19d2782bc6c11a9e33fa596b3ceb4ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        echo " ";
        $this->loadTemplate("default/footer.html.twig", "::base.html.twig", 45)->display($context);
        echo " ";
        
        $__internal_af87daee6dc679d029db72158396ba1ea19d2782bc6c11a9e33fa596b3ceb4ee->leave($__internal_af87daee6dc679d029db72158396ba1ea19d2782bc6c11a9e33fa596b3ceb4ee_prof);

        
        $__internal_70b41fcf89a2c0cd01eb91cf8acc105b827e23ef1a0dfc33809efdd43b18fee7->leave($__internal_70b41fcf89a2c0cd01eb91cf8acc105b827e23ef1a0dfc33809efdd43b18fee7_prof);

    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3d6c26def5d0bd0eff7d969d45e1fc64527cce71895900b30a5a92d979628960 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d6c26def5d0bd0eff7d969d45e1fc64527cce71895900b30a5a92d979628960->enter($__internal_3d6c26def5d0bd0eff7d969d45e1fc64527cce71895900b30a5a92d979628960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_cefc5b9e74675af217acabd86749d530b1f2e3233d209aa16ff883484f973a07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cefc5b9e74675af217acabd86749d530b1f2e3233d209aa16ff883484f973a07->enter($__internal_cefc5b9e74675af217acabd86749d530b1f2e3233d209aa16ff883484f973a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 49
        echo "
    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/morris.js/morris.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/jquery-knob/dist/jquery.knob.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/fastclick/lib/fastclick.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/dist/js/adminlte.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/datatables.net/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/dist/js/pages/dashboard.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/dist/js/demo.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 69
        echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/js/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/js/script.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/js/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/js/fancybox/jquery.fancybox.pack.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/js/nivo-lightbox/nivo-lightbox.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/js/owl-carousel/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/js/jquery-easing/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/js/wow/wow.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_cefc5b9e74675af217acabd86749d530b1f2e3233d209aa16ff883484f973a07->leave($__internal_cefc5b9e74675af217acabd86749d530b1f2e3233d209aa16ff883484f973a07_prof);

        
        $__internal_3d6c26def5d0bd0eff7d969d45e1fc64527cce71895900b30a5a92d979628960->leave($__internal_3d6c26def5d0bd0eff7d969d45e1fc64527cce71895900b30a5a92d979628960_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  378 => 78,  374 => 77,  370 => 76,  366 => 75,  362 => 74,  358 => 73,  354 => 72,  350 => 71,  346 => 69,  342 => 67,  338 => 66,  334 => 65,  330 => 64,  326 => 63,  322 => 62,  318 => 61,  314 => 60,  310 => 59,  306 => 58,  302 => 57,  298 => 56,  294 => 55,  290 => 54,  286 => 53,  282 => 52,  278 => 51,  274 => 50,  271 => 49,  262 => 48,  242 => 45,  222 => 43,  202 => 39,  190 => 32,  186 => 31,  181 => 29,  177 => 28,  173 => 27,  169 => 26,  165 => 25,  161 => 24,  157 => 23,  153 => 22,  147 => 20,  145 => 19,  140 => 16,  136 => 15,  132 => 14,  128 => 13,  124 => 12,  120 => 11,  116 => 10,  111 => 9,  108 => 7,  99 => 6,  81 => 5,  70 => 80,  68 => 48,  64 => 46,  62 => 45,  59 => 44,  57 => 43,  52 => 40,  50 => 39,  43 => 34,  41 => 6,  37 => 5,  31 => 1,);
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
