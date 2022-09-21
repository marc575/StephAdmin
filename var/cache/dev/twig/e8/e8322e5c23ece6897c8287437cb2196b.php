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

/* coupon/new_coupon.html.twig */
class __TwigTemplate_992a367239ac81bce0f55ca8053e0f06 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "security/login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coupon/new_coupon.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coupon/new_coupon.html.twig"));

        $this->parent = $this->loadTemplate("security/login.html.twig", "coupon/new_coupon.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h6 class=\"font-weight-light\">Ajouter un nouveau coupon !</h6>
    <form class=\"pt-3\" method=\"post\" id=\"formGood\" enctype=\"multipart/form-data\">
        <div class=\"form-group\">
            <label for=\"exampleInputUsername1\">Auteur</label>
            <input type=\"text\" required class=\"form-control\" name=\"auteur\" id=\"auteur\" placeholder=\"Auteur...\">
        </div>
        <div class=\"form-group\">
            <label for=\"exampleInputEmail1\">Bookmaker</label>
            <input type=\"text\" class=\"form-control\" required name=\"bookmaker\" id=\"bookmaker\" placeholder=\"1xBet...\">
        </div>
        <div class=\"form-group\">
            <label for=\"exampleInputPassword1\">Code du coupon</label>
            <input type=\"text\" class=\"form-control\" id=\"code\" name=\"code\" placeholder=\"Code du coupon...\">
        </div>
        <div class=\"form-group\">
            <label for=\"exampleInputConfirmPassword1\">Message</label>
            <textarea class=\"form-control\" id=\"message\" name=\"message\" rows=\"4\" placeholder=\"Petit message...\"></textarea>
        </div>

        <div class=\"form-group mb-4\">
            <label class=\"floating-label\" for=\"images\">Image</label>
            <input type=\"file\" multiple name=\"images[]\" class=\"single-input\" id=\"images\">
        </div>
        <div class=\"section-top-border\" id=\"galleryContainer\" style=\"display: none;\">
            <h3>Images</h3>
            <div class=\"row gallery-item\" id=\"gallery\">
            </div>
        </div>

        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
        <button type=\"submit\" class=\"btn btn-primary mr-2\" id=\"btnGood\">Enregistrer</button>
        <br>
        <div class=\"mb-2\">
            <button type=\"button\" class=\"btn btn-block btn-facebook auth-form-btn\">
                <a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\" style=\"color:white;\"><small> Tableau de bord</small></a>
            </button>
        </div>
    </form>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 46
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/js/sweetalert.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$('#photos').on('change', function (e) {
            var files = \$(this)[0].files;
            \$('#galleryContainer').show();
            \$('#gallery').html(\"\");
            for (var i=0; i<files.length; i++) {
                \$('#gallery').append(
                    \"                             <div class=\\\"col-md-4\\\">\\n\" +
                    \"                                    <a href=\\\"assets/img/elements/g1.jpg\\\" class=\\\"img-pop-up\\\">\\n\" +
                    \"                                        <div class=\\\"single-gallery-image\\\" style=\\\"background: url(\" + URL.createObjectURL(files[i]) + \");\\\"></div>\" +
                    \"                                    </a>\\n\" +
                    \"                                </div>\"
                );
            }
        });

        \$('#formGood').on('submit', function (e) {
            e.preventDefault();
            var url = \$(\"#formGood\").attr('action');
            var data = new FormData(\$(this)[0]);
            \$.ajax({
                url: url,
                data: data,
                type: 'post',
                processData: false,
                contentType: false,
                beforeSend: function () {
                    \$(\"#messageContacts\").html(\"\");
                    \$(\"#btnGood\").text(\"Patientez ...\");
                    \$('#btnGood').prop({disabled: true});
                },
                complete: function () {
                    \$('#btnGood').prop({disabled: false});
                },
                success: function (data) {
                    window.scrollTo(0,0);
                    if(data.status === 1){
                        swal({
                            title: data.mes,
                            type: \"success\"
                        });
                        \$(\"#message\").html(\"<div class='alert alert-success'>\" + data.mes + \"</div>\");
                        \$(\"#btnGood\").text(\"Succès\").css({background: \"green\"});
                        setTimeout(function () {
                            window.location.assign(data.url);
                        }, 2000);
                    }else{
                        \$(\"#message\").html(\"<div class='alert alert-danger'>\" + data.mes + \"</div>\");
                        \$(\"#btnGood\").text(\"Reéssayer\");
                    }
                },
                error: function () {
                    \$(\"#btnGood\").text(\"Reéssayer\");
                }
            })
        });
    </script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "coupon/new_coupon.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 46,  123 => 45,  108 => 39,  100 => 34,  69 => 5,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'security/login.html.twig' %}


{% block body %}
    <h6 class=\"font-weight-light\">Ajouter un nouveau coupon !</h6>
    <form class=\"pt-3\" method=\"post\" id=\"formGood\" enctype=\"multipart/form-data\">
        <div class=\"form-group\">
            <label for=\"exampleInputUsername1\">Auteur</label>
            <input type=\"text\" required class=\"form-control\" name=\"auteur\" id=\"auteur\" placeholder=\"Auteur...\">
        </div>
        <div class=\"form-group\">
            <label for=\"exampleInputEmail1\">Bookmaker</label>
            <input type=\"text\" class=\"form-control\" required name=\"bookmaker\" id=\"bookmaker\" placeholder=\"1xBet...\">
        </div>
        <div class=\"form-group\">
            <label for=\"exampleInputPassword1\">Code du coupon</label>
            <input type=\"text\" class=\"form-control\" id=\"code\" name=\"code\" placeholder=\"Code du coupon...\">
        </div>
        <div class=\"form-group\">
            <label for=\"exampleInputConfirmPassword1\">Message</label>
            <textarea class=\"form-control\" id=\"message\" name=\"message\" rows=\"4\" placeholder=\"Petit message...\"></textarea>
        </div>

        <div class=\"form-group mb-4\">
            <label class=\"floating-label\" for=\"images\">Image</label>
            <input type=\"file\" multiple name=\"images[]\" class=\"single-input\" id=\"images\">
        </div>
        <div class=\"section-top-border\" id=\"galleryContainer\" style=\"display: none;\">
            <h3>Images</h3>
            <div class=\"row gallery-item\" id=\"gallery\">
            </div>
        </div>

        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
        <button type=\"submit\" class=\"btn btn-primary mr-2\" id=\"btnGood\">Enregistrer</button>
        <br>
        <div class=\"mb-2\">
            <button type=\"button\" class=\"btn btn-block btn-facebook auth-form-btn\">
                <a href=\"{{ path('index') }}\" style=\"color:white;\"><small> Tableau de bord</small></a>
            </button>
        </div>
    </form>
{% endblock %}

{% block javascripts %}
    <script src=\"{{ asset('./assets/js/sweetalert.min.js') }}\"></script>
    <script>
        \$('#photos').on('change', function (e) {
            var files = \$(this)[0].files;
            \$('#galleryContainer').show();
            \$('#gallery').html(\"\");
            for (var i=0; i<files.length; i++) {
                \$('#gallery').append(
                    \"                             <div class=\\\"col-md-4\\\">\\n\" +
                    \"                                    <a href=\\\"assets/img/elements/g1.jpg\\\" class=\\\"img-pop-up\\\">\\n\" +
                    \"                                        <div class=\\\"single-gallery-image\\\" style=\\\"background: url(\" + URL.createObjectURL(files[i]) + \");\\\"></div>\" +
                    \"                                    </a>\\n\" +
                    \"                                </div>\"
                );
            }
        });

        \$('#formGood').on('submit', function (e) {
            e.preventDefault();
            var url = \$(\"#formGood\").attr('action');
            var data = new FormData(\$(this)[0]);
            \$.ajax({
                url: url,
                data: data,
                type: 'post',
                processData: false,
                contentType: false,
                beforeSend: function () {
                    \$(\"#messageContacts\").html(\"\");
                    \$(\"#btnGood\").text(\"Patientez ...\");
                    \$('#btnGood').prop({disabled: true});
                },
                complete: function () {
                    \$('#btnGood').prop({disabled: false});
                },
                success: function (data) {
                    window.scrollTo(0,0);
                    if(data.status === 1){
                        swal({
                            title: data.mes,
                            type: \"success\"
                        });
                        \$(\"#message\").html(\"<div class='alert alert-success'>\" + data.mes + \"</div>\");
                        \$(\"#btnGood\").text(\"Succès\").css({background: \"green\"});
                        setTimeout(function () {
                            window.location.assign(data.url);
                        }, 2000);
                    }else{
                        \$(\"#message\").html(\"<div class='alert alert-danger'>\" + data.mes + \"</div>\");
                        \$(\"#btnGood\").text(\"Reéssayer\");
                    }
                },
                error: function () {
                    \$(\"#btnGood\").text(\"Reéssayer\");
                }
            })
        });
    </script>

{% endblock %}
", "coupon/new_coupon.html.twig", "C:\\laragon\\www\\B5511_main\\templates\\coupon\\new_coupon.html.twig");
    }
}
