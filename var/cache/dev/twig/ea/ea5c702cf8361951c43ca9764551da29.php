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

/* security/forget_password.html.twig */
class __TwigTemplate_a667e2e7688f043a6181feba5b3c91b9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/forget_password.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/forget_password.html.twig"));

        $this->parent = $this->loadTemplate("security/login.html.twig", "security/forget_password.html.twig", 1);
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
        echo "    <h6 class=\"font-weight-light\">Reinitialiser votre mot de passe !</h6>
    <form class=\"pt-3\" method=\"post\" id=\"form\">
        <div id=\"message\" class=\"m-2\"></div>
        <div class=\"form-group\">
            <label for=\"exampleInputEmail1\">Adresse Email</label>
            <input type=\"email\" class=\"form-control\" required name=\"email\" id=\"email\" placeholder=\"exemple@gmail.com...\">
        </div>
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
        <button type=\"submit\" class=\"btn btn-primary mr-2\" id=\"btnRegister\">Reinitialiser</button>
        <br>
        <div class=\"mb-2\">
            <button type=\"button\" class=\"btn btn-block btn-facebook auth-form-btn\">
                <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\" style=\"color:white;\"><small>Tableau de bord</small></a>
            </button>
        </div>
    </form>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 24
        echo "    <script>
        \$('#form').on('submit', function (e) {
            e.preventDefault();
            var url = \$(\"#form\").attr('action');
            var data = \$(this).serialize();
            \$.ajax({
                url: url,
                data: data,
                type: 'post',
                beforeSend: function () {
                    \$(\"#message\").html(\"\");
                    \$(\"#btnRegister\").text(\"Patientez ...\").prop({disabled: true});
                },
                complete: function () {
                    \$('#btnRegister').text(\"Connexion\").prop({disabled: false});
                },
                success: function (data) {
                    if(data.status === 1){
                        \$(\"#message\").html(\"<div class='alert alert-success'>\" + data.mes + \"</div>\");
                    }else{
                        \$(\"#message\").html(\"<div class='alert alert-danger'>\" + data.mes + \"</div>\");
                    }
                },
                error: function () {
                    \$(\"#message\").html(\"<div class='alert alert-danger'>Une erreur est survenue, reessayez !</div>\");
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
        return "security/forget_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 24,  101 => 23,  86 => 17,  78 => 12,  69 => 5,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'security/login.html.twig' %}


{% block body %}
    <h6 class=\"font-weight-light\">Reinitialiser votre mot de passe !</h6>
    <form class=\"pt-3\" method=\"post\" id=\"form\">
        <div id=\"message\" class=\"m-2\"></div>
        <div class=\"form-group\">
            <label for=\"exampleInputEmail1\">Adresse Email</label>
            <input type=\"email\" class=\"form-control\" required name=\"email\" id=\"email\" placeholder=\"exemple@gmail.com...\">
        </div>
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
        <button type=\"submit\" class=\"btn btn-primary mr-2\" id=\"btnRegister\">Reinitialiser</button>
        <br>
        <div class=\"mb-2\">
            <button type=\"button\" class=\"btn btn-block btn-facebook auth-form-btn\">
                <a href=\"{{ path('index') }}\" style=\"color:white;\"><small>Tableau de bord</small></a>
            </button>
        </div>
    </form>
{% endblock %}

{% block javascripts %}
    <script>
        \$('#form').on('submit', function (e) {
            e.preventDefault();
            var url = \$(\"#form\").attr('action');
            var data = \$(this).serialize();
            \$.ajax({
                url: url,
                data: data,
                type: 'post',
                beforeSend: function () {
                    \$(\"#message\").html(\"\");
                    \$(\"#btnRegister\").text(\"Patientez ...\").prop({disabled: true});
                },
                complete: function () {
                    \$('#btnRegister').text(\"Connexion\").prop({disabled: false});
                },
                success: function (data) {
                    if(data.status === 1){
                        \$(\"#message\").html(\"<div class='alert alert-success'>\" + data.mes + \"</div>\");
                    }else{
                        \$(\"#message\").html(\"<div class='alert alert-danger'>\" + data.mes + \"</div>\");
                    }
                },
                error: function () {
                    \$(\"#message\").html(\"<div class='alert alert-danger'>Une erreur est survenue, reessayez !</div>\");
                }
            })
        });
    </script>
{% endblock %}", "security/forget_password.html.twig", "C:\\laragon\\www\\B5511_main\\templates\\security\\forget_password.html.twig");
    }
}
