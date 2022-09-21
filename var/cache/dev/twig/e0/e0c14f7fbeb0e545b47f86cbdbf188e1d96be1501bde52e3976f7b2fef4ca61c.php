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
class __TwigTemplate_a9387c616c797e4f4b5697ca02d9fe9483237b254c7e705f73774b9ea62832a3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'page' => [$this, 'block_page'],
            'body' => [$this, 'block_body'],
            'javaScript' => [$this, 'block_javaScript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"description\" content=\"\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <meta name=\"author\" content=\"Marc Tatchou\">

    <meta name=\"description\" content=\"Code Promotionel D555 ! \">
    <meta property=\"og:site_name\" content=\"SetphSport\">
    <meta property=\"og:image\" itemprop=\"image primaryImageOfPage\" content=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/asset/images/logoSetphProno.png"), "html", null, true);
        echo "\">
    <meta name=\"twitter:title\" property=\"og:title\" itemprop=\"name\" content=\"Setphsport - Nous proposons un code promotionnel unique pour 5 bookmakers\">
    <meta name=\"twitter:description\" property=\"og:description\" itemprop=\"description\" content=\"Notre code promotionnel * D555 * vous fera recevoir une multitude de bonus après inscriptions sur 1xbet, betWinner, LineBet, 1Win, Melbet.\">

    <title>";
        // line 20
        $this->displayBlock('title', $context, $blocks);
        echo "Coupons D555 - Administration</title>
    <!-- plugins:css -->
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendors/mdi/css/materialdesignicons.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendors/base/vendor.bundle.base.css"), "html", null, true);
        echo "\">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendors/datatables.net-bs4/dataTables.bootstrap4.css"), "html", null, true);
        echo "\">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/css/style.css"), "html", null, true);
        echo "\">
    <!-- endinject -->
    <link rel=\"shortcut icon\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/asset/images/logoSetphProno.png"), "html", null, true);
        echo "\" />
</head>
<body>
";
        // line 34
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "user", [], "any", false, false, false, 34)) {
            // line 35
            echo "    <div class=\"container-scroller\">
        <!-- partial:partials/_navbar.html -->
        <nav class=\"navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row\">
            <div class=\"navbar-brand-wrapper d-flex justify-content-center\">
                <div class=\"navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100\">
                    <a class=\"navbar-brand brand-logo\"><img src=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/images/logo.svg"), "html", null, true);
            echo "\" alt=\"logo\"/></a>
                    <a class=\"navbar-brand brand-logo-mini\"><img src=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/images/logo-mini.svg"), "html", null, true);
            echo "\" alt=\"logo\"/></a>
                    <button class=\"navbar-toggler navbar-toggler align-self-center\" type=\"button\" data-toggle=\"minimize\">
                        <span class=\"mdi mdi-sort-variant\"></span>
                    </button>
                </div>
            </div>
            <div class=\"navbar-menu-wrapper d-flex align-items-center justify-content-end\">

                <ul class=\"navbar-nav navbar-nav-right\">
                    <li class=\"nav-item nav-profile dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" id=\"profileDropdown\">
                            <img src=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/asset/images/logoSetphProno.png"), "html", null, true);
            echo "\" alt=\"profile\"/>
                            <span class=\"nav-profile-name\">";
            // line 53
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53), "name", [], "any", false, false, false, 53)), "html", null, true);
            echo " </span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown\" aria-labelledby=\"profileDropdown\">
                            <a class=\"dropdown-item\" href=\"";
            // line 56
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reset_password");
            echo "\">
                                <i class=\"mdi mdi-settings text-primary\"></i>
                                Modifier le mot de passe
                            </a>
                            <a href=\"";
            // line 60
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
            // line 79
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
            // line 93
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("coupon");
            echo "\">
                                        <i class=\"mdi mdi-view-list menu-icon\"></i>
                                        <span class=\"menu-title\">Tous</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
            // line 99
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
            // line 108
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
            // line 120
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\"> <i class=\"mdi mdi-new-box menu-icon\"></i>Nouveau</a></li>
                                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"";
            // line 121
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
            // line 135
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 135, $this->source); })()), "user", [], "any", false, false, false, 135), "name", [], "any", false, false, false, 135)), "html", null, true);
            echo " !</h2>
                                    </div>
                                    <div class=\"d-flex\">
                                        <i class=\"mdi mdi-home text-muted hover-cursor\"></i>
                                        <p class=\"text-muted mb-0 hover-cursor\">&nbsp;/&nbsp;Tableau bord&nbsp;/&nbsp;</p>
                                        <p class=\"text-primary mb-0 hover-cursor\">";
            // line 140
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
                                                <div class=\"d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item\">
                                                    <i class=\"mdi mdi-basketball mr-3 icon-lg text-danger\"></i>
                                                    <div class=\"d-flex flex-column justify-content-around\">
                                                        <small class=\"mb-1 text-muted\">Coupons</small>
                                                        <h5 class=\"mr-2 mb-0\">";
            // line 162
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["coupons"]) || array_key_exists("coupons", $context) ? $context["coupons"] : (function () { throw new RuntimeError('Variable "coupons" does not exist.', 162, $this->source); })())), "html", null, true);
            echo " </h5>
                                                    </div>
                                                </div>
                                                <div class=\"d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item\">
                                                    <i class=\"mdi mdi-email mr-3 icon-lg text-warning\"></i>
                                                    <div class=\"d-flex flex-column justify-content-around\">
                                                        <small class=\"mb-1 text-muted\">Emails</small>
                                                        <h5 class=\"mr-2 mb-0\">";
            // line 169
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["emails"]) || array_key_exists("emails", $context) ? $context["emails"] : (function () { throw new RuntimeError('Variable "emails" does not exist.', 169, $this->source); })())), "html", null, true);
            echo " </h5>
                                                    </div>
                                                </div>
                                                <div class=\"d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item\">
                                                    <i class=\"mdi mdi-account mr-3 icon-lg text-danger\"></i>
                                                    <div class=\"d-flex flex-column justify-content-around\">
                                                        <small class=\"mb-1 text-muted\">Administrateurs</small>
                                                        <h5 class=\"mr-2 mb-0\">";
            // line 176
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 176, $this->source); })())), "html", null, true);
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
            // line 186
            $this->displayBlock('body', $context, $blocks);
            // line 189
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
            // line 205
            echo "    <div class=\"container-scroller\">
        <div class=\"container-fluid page-body-wrapper full-page-wrapper\">
            <div class=\"content-wrapper d-flex align-items-center auth lock-full-bg\">
                <div class=\"row w-100\">
                    <div class=\"col-lg-4 mx-auto\">
                        <div class=\"auth-form-transparent text-left p-5 text-center\">
                            <img src=\"";
            // line 211
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/images/logoSetphProno.png"), "html", null, true);
            echo "\" class=\"lock-profile-img\" alt=\"img\">
                            <form class=\"pt-5\">
                                <div class=\"mt-5\">
                                    <a class=\"btn btn-block btn-success btn-lg font-weight-medium\" href=\"";
            // line 214
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
        // line 227
        $this->displayBlock('javaScript', $context, $blocks);
        // line 228
        echo "
<!-- plugins:js -->
<script src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendors/base/vendor.bundle.base.js"), "html", null, true);
        echo "\"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<script src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendors/chart.js/Chart.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendors/datatables.net/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendors/datatables.net-bs4/dataTables.bootstrap4.js"), "html", null, true);
        echo "\"></script>
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/js/off-canvas.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/js/hoverable-collapse.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/js/template.js"), "html", null, true);
        echo "\"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/js/dashboard.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/js/data-table.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/js/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/js/dataTables.bootstrap4.js"), "html", null, true);
        echo "\"></script>
<!-- End custom js for this page-->
</body>

</html>


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 20
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 140
    public function block_page($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page"));

        echo "Acceuil";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 186
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 187
        echo "
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 227
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javaScript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javaScript"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  488 => 227,  477 => 187,  467 => 186,  448 => 140,  429 => 20,  411 => 246,  407 => 245,  403 => 244,  399 => 243,  393 => 240,  389 => 239,  385 => 238,  379 => 235,  375 => 234,  371 => 233,  365 => 230,  361 => 228,  359 => 227,  343 => 214,  337 => 211,  329 => 205,  311 => 189,  309 => 186,  296 => 176,  286 => 169,  276 => 162,  251 => 140,  243 => 135,  226 => 121,  222 => 120,  207 => 108,  195 => 99,  186 => 93,  169 => 79,  147 => 60,  140 => 56,  134 => 53,  130 => 52,  116 => 41,  112 => 40,  105 => 35,  103 => 34,  97 => 31,  92 => 29,  86 => 26,  80 => 23,  76 => 22,  71 => 20,  64 => 16,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"description\" content=\"\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <meta name=\"author\" content=\"Marc Tatchou\">

    <meta name=\"description\" content=\"Code Promotionel D555 ! \">
    <meta property=\"og:site_name\" content=\"SetphSport\">
    <meta property=\"og:image\" itemprop=\"image primaryImageOfPage\" content=\"{{ asset('/asset/images/logoSetphProno.png') }}\">
    <meta name=\"twitter:title\" property=\"og:title\" itemprop=\"name\" content=\"Setphsport - Nous proposons un code promotionnel unique pour 5 bookmakers\">
    <meta name=\"twitter:description\" property=\"og:description\" itemprop=\"description\" content=\"Notre code promotionnel * D555 * vous fera recevoir une multitude de bonus après inscriptions sur 1xbet, betWinner, LineBet, 1Win, Melbet.\">

    <title>{% block title %} {% endblock %}Coupons D555 - Administration</title>
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
