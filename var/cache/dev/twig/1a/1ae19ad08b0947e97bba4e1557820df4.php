<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_1f45452ec86dfbe7dc95dc3ebe2ebbcc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page' => [$this, 'block_page'],
            'body' => [$this, 'block_body'],
            'javaScript' => [$this, 'block_javaScript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>Coupons D555 - Administration</title>
    <!-- plugins:css -->
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendors/mdi/css/materialdesignicons.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendors/base/vendor.bundle.base.css"), "html", null, true);
        echo "\">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendors/datatables.net-bs4/dataTables.bootstrap4.css"), "html", null, true);
        echo "\">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/css/style.css"), "html", null, true);
        echo "\">
    <!-- endinject -->
    <link rel=\"shortcut icon\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/asset/images/logoSetphProno.png"), "html", null, true);
        echo "\" />
</head>
<body>
";
        // line 22
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22)) {
            // line 23
            echo "    <div class=\"container-scroller\">
        <!-- partial:partials/_navbar.html -->
        <nav class=\"navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row\">
            <div class=\"navbar-brand-wrapper d-flex justify-content-center\">
                <div class=\"navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100\">
                    <a class=\"navbar-brand brand-logo\"><img src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/images/logo.svg"), "html", null, true);
            echo "\" alt=\"logo\"/></a>
                    <a class=\"navbar-brand brand-logo-mini\"><img src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/images/logo-mini.svg"), "html", null, true);
            echo "\" alt=\"logo\"/></a>
                    <button class=\"navbar-toggler navbar-toggler align-self-center\" type=\"button\" data-toggle=\"minimize\">
                        <span class=\"mdi mdi-sort-variant\"></span>
                    </button>
                </div>
            </div>
            <div class=\"navbar-menu-wrapper d-flex align-items-center justify-content-end\">
                <ul class=\"navbar-nav mr-lg-4 w-100\">
                    <li class=\"nav-item nav-search d-none d-lg-block w-100\">
                        <div class=\"input-group\">
                            <div class=\"input-group-prepend\">
                <span class=\"input-group-text\" id=\"search\">
                  <i class=\"mdi mdi-magnify\"></i>
                </span>
                            </div>
                            <input type=\"text\" class=\"form-control\" placeholder=\"Besoin d'aide?\" aria-label=\"search\" aria-describedby=\"search\">
                        </div>
                    </li>
                </ul>
                <ul class=\"navbar-nav navbar-nav-right\">
                    <li class=\"nav-item nav-profile dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" id=\"profileDropdown\">
                            <img src=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/asset/images/logoSetphProno.png"), "html", null, true);
            echo "\" alt=\"profile\"/>
                            <span class=\"nav-profile-name\">";
            // line 52
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "name", [], "any", false, false, false, 52)), "html", null, true);
            echo " </span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown\" aria-labelledby=\"profileDropdown\">
                            <a class=\"dropdown-item\" href=\"";
            // line 55
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reset_password");
            echo "\">
                                <i class=\"mdi mdi-settings text-primary\"></i>
                                Modifier le mot de passe
                            </a>
                            <a href=\"";
            // line 59
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\" class=\"dropdown-item\">
                                <i class=\"mdi mdi-logout text-primary\"></i>
                                Deconnexion
                            </a>
                        </div>
                    </li>
                </ul>
                <button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center\" type=\"button\" data-toggle=\"offcanvas\">
                    <span class=\"mdi mdi-menu\"></span>
                </button>
            </div>
        </nav>

        <!-- partial -->
        <div class=\"container-fluid page-body-wrapper\">
            <!-- partial:partials/_sidebar.html -->
            <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
                <ul class=\"nav\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 78
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
            echo "\">
                            <i class=\"mdi mdi-home menu-icon\"></i>
                            <span class=\"menu-title\">Tableau de bord</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#ui-basic\" aria-expanded=\"false\" aria-controls=\"ui-basic\">
                            <i class=\"mdi mdi-basketball menu-icon\"></i>
                            <span class=\"menu-title\">Coupons</span>
                            <i class=\"menu-arrow\"></i>
                        </a>
                        <div class=\"collapse\" id=\"ui-basic\">
                            <ul class=\"nav flex-column sub-menu\">
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
            // line 92
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("coupon");
            echo "\">
                                        <i class=\"mdi mdi-view-list menu-icon\"></i>
                                        <span class=\"menu-title\">Tous</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
            // line 98
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("new_coupon");
            echo "\">
                                        <i class=\"mdi mdi-new-box menu-icon\"></i>
                                        <span class=\"menu-title\">Nouveau</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 107
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("email");
            echo "\">
                            <i class=\"mdi mdi-email menu-icon\"></i>
                            <span class=\"menu-title\">Emails</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#auth\" aria-expanded=\"false\" aria-controls=\"auth\">
                            <i class=\"mdi mdi-account menu-icon\"></i>
                            <span class=\"menu-title\">Administration</span>
                            <i class=\"menu-arrow\"></i>
                        </a>
                        <div class=\"collapse\" id=\"auth\">
                            <ul class=\"nav flex-column sub-menu\"><li class=\"nav-item\"> <a class=\"nav-link\" href=\"";
            // line 119
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\"> <i class=\"mdi mdi-new-box menu-icon\"></i>Nouveau</a></li>
                                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"";
            // line 120
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\"> <i class=\"mdi mdi-logout menu-icon\"></i>Deconnexion</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
            <!-- partial -->
            <div class=\"main-panel\">
                <div class=\"content-wrapper\">
                    <div class=\"row\">
                        <div class=\"col-md-12 grid-margin\">
                            <div class=\"d-flex justify-content-between flex-wrap\">
                                <div class=\"d-flex align-items-end flex-wrap\">
                                    <div class=\"mr-md-3 mr-xl-5\">
                                        <h2>Bienvenue, ";
            // line 134
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 134, $this->source); })()), "user", [], "any", false, false, false, 134), "name", [], "any", false, false, false, 134)), "html", null, true);
            echo " !</h2>
                                    </div>
                                    <div class=\"d-flex\">
                                        <i class=\"mdi mdi-home text-muted hover-cursor\"></i>
                                        <p class=\"text-muted mb-0 hover-cursor\">&nbsp;/&nbsp;Tableau bord&nbsp;/&nbsp;</p>
                                        <p class=\"text-primary mb-0 hover-cursor\">";
            // line 139
            $this->displayBlock('page', $context, $blocks);
            echo "</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-12 grid-margin stretch-card\">
                            <div class=\"card\">
                                <div class=\"card-body dashboard-tabs p-0\">
                                    <ul class=\"nav nav-tabs px-4\" role=\"tablist\">
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link active\" id=\"overview-tab\" data-toggle=\"tab\" href=\"#overview\" role=\"tab\" aria-controls=\"overview\" aria-selected=\"true\">Statistiques</a>
                                        </li>
                                    </ul>
                                    <div class=\"tab-content py-0 px-0\">
                                        <div class=\"tab-pane fade show active\" id=\"overview\" role=\"tabpanel\" aria-labelledby=\"overview-tab\">
                                            <div class=\"d-flex flex-wrap justify-content-xl-between\">
                                                <div class=\"d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item\">
                                                    <i class=\"mdi mdi-calendar-heart icon-lg mr-3 text-primary\"></i>
                                                    <div class=\"d-flex flex-column justify-content-around\">
                                                        <small class=\"mb-1 text-muted\">Date</small>
                                                        <h5 class=\"mb-0 d-inline-block\">Heure</h5>

                                                    </div>
                                                </div>
                                                <div class=\"d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item\">
                                                    <i class=\"mdi mdi-basketball mr-3 icon-lg text-danger\"></i>
                                                    <div class=\"d-flex flex-column justify-content-around\">
                                                        <small class=\"mb-1 text-muted\">Coupons</small>
                                                        <h5 class=\"mr-2 mb-0\">";
            // line 169
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["coupons"]) || array_key_exists("coupons", $context) ? $context["coupons"] : (function () { throw new RuntimeError('Variable "coupons" does not exist.', 169, $this->source); })())), "html", null, true);
            echo " </h5>
                                                    </div>
                                                </div>
                                                <div class=\"d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item\">
                                                    <i class=\"mdi mdi-email mr-3 icon-lg text-warning\"></i>
                                                    <div class=\"d-flex flex-column justify-content-around\">
                                                        <small class=\"mb-1 text-muted\">Emails</small>
                                                        <h5 class=\"mr-2 mb-0\">";
            // line 176
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["emails"]) || array_key_exists("emails", $context) ? $context["emails"] : (function () { throw new RuntimeError('Variable "emails" does not exist.', 176, $this->source); })())), "html", null, true);
            echo " </h5>
                                                    </div>
                                                </div>
                                                <div class=\"d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item\">
                                                    <i class=\"mdi mdi-account mr-3 icon-lg text-danger\"></i>
                                                    <div class=\"d-flex flex-column justify-content-around\">
                                                        <small class=\"mb-1 text-muted\">Administrateurs</small>
                                                        <h5 class=\"mr-2 mb-0\">";
            // line 183
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 183, $this->source); })())), "html", null, true);
            echo " </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
            // line 193
            $this->displayBlock('body', $context, $blocks);
            // line 196
            echo "                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class=\"footer\">
                    <div class=\"d-sm-flex justify-content-center justify-content-sm-between\">
                        <span class=\"text-muted text-center text-sm-left d-block d-sm-inline-block\">Copyright ©  <a href=\"https://wa.me/23756450734\" target=\"_blank\">Marc Analytica</a>. Tous droits reservés.</span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
";
        } else {
            // line 212
            echo "    <div class=\"container-scroller\">
        <div class=\"container-fluid page-body-wrapper full-page-wrapper\">
            <div class=\"content-wrapper d-flex align-items-center auth lock-full-bg\">
                <div class=\"row w-100\">
                    <div class=\"col-lg-4 mx-auto\">
                        <div class=\"auth-form-transparent text-left p-5 text-center\">
                            <img src=\"";
            // line 218
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/images/logoSetphProno.png"), "html", null, true);
            echo "\" class=\"lock-profile-img\" alt=\"img\">
                            <form class=\"pt-5\">
                                <div class=\"mt-5\">
                                    <a class=\"btn btn-block btn-success btn-lg font-weight-medium\" href=\"";
            // line 221
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">Se connecter</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
";
        }
        // line 234
        $this->displayBlock('javaScript', $context, $blocks);
        // line 235
        echo "
<!-- plugins:js -->
<script src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendors/base/vendor.bundle.base.js"), "html", null, true);
        echo "\"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<script src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendors/chart.js/Chart.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendors/datatables.net/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendors/datatables.net-bs4/dataTables.bootstrap4.js"), "html", null, true);
        echo "\"></script>
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/js/off-canvas.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/js/hoverable-collapse.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/js/template.js"), "html", null, true);
        echo "\"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/js/dashboard.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/js/data-table.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/js/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/js/dataTables.bootstrap4.js"), "html", null, true);
        echo "\"></script>
<!-- End custom js for this page-->
</body>

</html>


";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 139
    public function block_page($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page"));

        echo "Acceuil";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 193
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 194
        echo "
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 234
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javaScript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javaScript"));

        echo " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  469 => 234,  458 => 194,  448 => 193,  429 => 139,  411 => 253,  407 => 252,  403 => 251,  399 => 250,  393 => 247,  389 => 246,  385 => 245,  379 => 242,  375 => 241,  371 => 240,  365 => 237,  361 => 235,  359 => 234,  343 => 221,  337 => 218,  329 => 212,  311 => 196,  309 => 193,  296 => 183,  286 => 176,  276 => 169,  243 => 139,  235 => 134,  218 => 120,  214 => 119,  199 => 107,  187 => 98,  178 => 92,  161 => 78,  139 => 59,  132 => 55,  126 => 52,  122 => 51,  97 => 29,  93 => 28,  86 => 23,  84 => 22,  78 => 19,  73 => 17,  67 => 14,  61 => 11,  57 => 10,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>Coupons D555 - Administration</title>
    <!-- plugins:css -->
    <link rel=\"stylesheet\" href=\"{{ asset('asset/vendors/mdi/css/materialdesignicons.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('asset/vendors/base/vendor.bundle.base.css') }}\">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel=\"stylesheet\" href=\"{{ asset('asset/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}\">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel=\"stylesheet\" href=\"{{ asset('asset/css/style.css') }}\">
    <!-- endinject -->
    <link rel=\"shortcut icon\" href=\"{{ asset('/asset/images/logoSetphProno.png') }}\" />
</head>
<body>
{% if(app.user) %}
    <div class=\"container-scroller\">
        <!-- partial:partials/_navbar.html -->
        <nav class=\"navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row\">
            <div class=\"navbar-brand-wrapper d-flex justify-content-center\">
                <div class=\"navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100\">
                    <a class=\"navbar-brand brand-logo\"><img src=\"{{ asset('asset/images/logo.svg') }}\" alt=\"logo\"/></a>
                    <a class=\"navbar-brand brand-logo-mini\"><img src=\"{{ asset('asset/images/logo-mini.svg') }}\" alt=\"logo\"/></a>
                    <button class=\"navbar-toggler navbar-toggler align-self-center\" type=\"button\" data-toggle=\"minimize\">
                        <span class=\"mdi mdi-sort-variant\"></span>
                    </button>
                </div>
            </div>
            <div class=\"navbar-menu-wrapper d-flex align-items-center justify-content-end\">
                <ul class=\"navbar-nav mr-lg-4 w-100\">
                    <li class=\"nav-item nav-search d-none d-lg-block w-100\">
                        <div class=\"input-group\">
                            <div class=\"input-group-prepend\">
                <span class=\"input-group-text\" id=\"search\">
                  <i class=\"mdi mdi-magnify\"></i>
                </span>
                            </div>
                            <input type=\"text\" class=\"form-control\" placeholder=\"Besoin d'aide?\" aria-label=\"search\" aria-describedby=\"search\">
                        </div>
                    </li>
                </ul>
                <ul class=\"navbar-nav navbar-nav-right\">
                    <li class=\"nav-item nav-profile dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" id=\"profileDropdown\">
                            <img src=\"{{ asset('/asset/images/logoSetphProno.png') }}\" alt=\"profile\"/>
                            <span class=\"nav-profile-name\">{{ app.user.name | capitalize }} </span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown\" aria-labelledby=\"profileDropdown\">
                            <a class=\"dropdown-item\" href=\"{{ path('reset_password') }}\">
                                <i class=\"mdi mdi-settings text-primary\"></i>
                                Modifier le mot de passe
                            </a>
                            <a href=\"{{ path('logout') }}\" class=\"dropdown-item\">
                                <i class=\"mdi mdi-logout text-primary\"></i>
                                Deconnexion
                            </a>
                        </div>
                    </li>
                </ul>
                <button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center\" type=\"button\" data-toggle=\"offcanvas\">
                    <span class=\"mdi mdi-menu\"></span>
                </button>
            </div>
        </nav>

        <!-- partial -->
        <div class=\"container-fluid page-body-wrapper\">
            <!-- partial:partials/_sidebar.html -->
            <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
                <ul class=\"nav\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('index') }}\">
                            <i class=\"mdi mdi-home menu-icon\"></i>
                            <span class=\"menu-title\">Tableau de bord</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#ui-basic\" aria-expanded=\"false\" aria-controls=\"ui-basic\">
                            <i class=\"mdi mdi-basketball menu-icon\"></i>
                            <span class=\"menu-title\">Coupons</span>
                            <i class=\"menu-arrow\"></i>
                        </a>
                        <div class=\"collapse\" id=\"ui-basic\">
                            <ul class=\"nav flex-column sub-menu\">
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"{{ path('coupon') }}\">
                                        <i class=\"mdi mdi-view-list menu-icon\"></i>
                                        <span class=\"menu-title\">Tous</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"{{ path('new_coupon') }}\">
                                        <i class=\"mdi mdi-new-box menu-icon\"></i>
                                        <span class=\"menu-title\">Nouveau</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('email') }}\">
                            <i class=\"mdi mdi-email menu-icon\"></i>
                            <span class=\"menu-title\">Emails</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#auth\" aria-expanded=\"false\" aria-controls=\"auth\">
                            <i class=\"mdi mdi-account menu-icon\"></i>
                            <span class=\"menu-title\">Administration</span>
                            <i class=\"menu-arrow\"></i>
                        </a>
                        <div class=\"collapse\" id=\"auth\">
                            <ul class=\"nav flex-column sub-menu\"><li class=\"nav-item\"> <a class=\"nav-link\" href=\"{{ path('register') }}\"> <i class=\"mdi mdi-new-box menu-icon\"></i>Nouveau</a></li>
                                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"{{ path('logout') }}\"> <i class=\"mdi mdi-logout menu-icon\"></i>Deconnexion</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
            <!-- partial -->
            <div class=\"main-panel\">
                <div class=\"content-wrapper\">
                    <div class=\"row\">
                        <div class=\"col-md-12 grid-margin\">
                            <div class=\"d-flex justify-content-between flex-wrap\">
                                <div class=\"d-flex align-items-end flex-wrap\">
                                    <div class=\"mr-md-3 mr-xl-5\">
                                        <h2>Bienvenue, {{ app.user.name | capitalize }} !</h2>
                                    </div>
                                    <div class=\"d-flex\">
                                        <i class=\"mdi mdi-home text-muted hover-cursor\"></i>
                                        <p class=\"text-muted mb-0 hover-cursor\">&nbsp;/&nbsp;Tableau bord&nbsp;/&nbsp;</p>
                                        <p class=\"text-primary mb-0 hover-cursor\">{% block page %}Acceuil{% endblock %}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-12 grid-margin stretch-card\">
                            <div class=\"card\">
                                <div class=\"card-body dashboard-tabs p-0\">
                                    <ul class=\"nav nav-tabs px-4\" role=\"tablist\">
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link active\" id=\"overview-tab\" data-toggle=\"tab\" href=\"#overview\" role=\"tab\" aria-controls=\"overview\" aria-selected=\"true\">Statistiques</a>
                                        </li>
                                    </ul>
                                    <div class=\"tab-content py-0 px-0\">
                                        <div class=\"tab-pane fade show active\" id=\"overview\" role=\"tabpanel\" aria-labelledby=\"overview-tab\">
                                            <div class=\"d-flex flex-wrap justify-content-xl-between\">
                                                <div class=\"d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item\">
                                                    <i class=\"mdi mdi-calendar-heart icon-lg mr-3 text-primary\"></i>
                                                    <div class=\"d-flex flex-column justify-content-around\">
                                                        <small class=\"mb-1 text-muted\">Date</small>
                                                        <h5 class=\"mb-0 d-inline-block\">Heure</h5>

                                                    </div>
                                                </div>
                                                <div class=\"d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item\">
                                                    <i class=\"mdi mdi-basketball mr-3 icon-lg text-danger\"></i>
                                                    <div class=\"d-flex flex-column justify-content-around\">
                                                        <small class=\"mb-1 text-muted\">Coupons</small>
                                                        <h5 class=\"mr-2 mb-0\">{{ coupons | length }} </h5>
                                                    </div>
                                                </div>
                                                <div class=\"d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item\">
                                                    <i class=\"mdi mdi-email mr-3 icon-lg text-warning\"></i>
                                                    <div class=\"d-flex flex-column justify-content-around\">
                                                        <small class=\"mb-1 text-muted\">Emails</small>
                                                        <h5 class=\"mr-2 mb-0\">{{ emails | length }} </h5>
                                                    </div>
                                                </div>
                                                <div class=\"d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item\">
                                                    <i class=\"mdi mdi-account mr-3 icon-lg text-danger\"></i>
                                                    <div class=\"d-flex flex-column justify-content-around\">
                                                        <small class=\"mb-1 text-muted\">Administrateurs</small>
                                                        <h5 class=\"mr-2 mb-0\">{{ users | length }} </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {% block body %}

                    {% endblock %}
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class=\"footer\">
                    <div class=\"d-sm-flex justify-content-center justify-content-sm-between\">
                        <span class=\"text-muted text-center text-sm-left d-block d-sm-inline-block\">Copyright ©  <a href=\"https://wa.me/23756450734\" target=\"_blank\">Marc Analytica</a>. Tous droits reservés.</span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
{% else %}
    <div class=\"container-scroller\">
        <div class=\"container-fluid page-body-wrapper full-page-wrapper\">
            <div class=\"content-wrapper d-flex align-items-center auth lock-full-bg\">
                <div class=\"row w-100\">
                    <div class=\"col-lg-4 mx-auto\">
                        <div class=\"auth-form-transparent text-left p-5 text-center\">
                            <img src=\"{{ asset('asset/images/logoSetphProno.png') }}\" class=\"lock-profile-img\" alt=\"img\">
                            <form class=\"pt-5\">
                                <div class=\"mt-5\">
                                    <a class=\"btn btn-block btn-success btn-lg font-weight-medium\" href=\"{{ path('login') }}\">Se connecter</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
{% endif %}
{% block javaScript %} {% endblock %}

<!-- plugins:js -->
<script src=\"{{ asset('asset/vendors/base/vendor.bundle.base.js') }}\"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<script src=\"{{ asset('asset/vendors/chart.js/Chart.min.js') }}\"></script>
<script src=\"{{ asset('asset/vendors/datatables.net/jquery.dataTables.js') }}\"></script>
<script src=\"{{ asset('asset/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}\"></script>
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src=\"{{ asset('asset/js/off-canvas.js') }}\"></script>
<script src=\"{{ asset('asset/js/hoverable-collapse.js') }}\"></script>
<script src=\"{{ asset('asset/js/template.js') }}\"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src=\"{{ asset('asset/js/dashboard.js') }}\"></script>
<script src=\"{{ asset('asset/js/data-table.js') }}\"></script>
<script src=\"{{ asset('asset/js/jquery.dataTables.js') }}\"></script>
<script src=\"{{ asset('asset/js/dataTables.bootstrap4.js') }}\"></script>
<!-- End custom js for this page-->
</body>

</html>


", "base.html.twig", "C:\\laragon\\www\\B5511_main\\templates\\base.html.twig");
    }
}
