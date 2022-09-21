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
class __TwigTemplate_77e53b418fbf6257963b23205e871c789b9185454f579bfcffbc8572bad2a333 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/forget_password.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/forget_password.html.twig"));

        $this->parent = $this->loadTemplate("security/login.html.twig", "security/forget_password.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Coupon D555 - Réinitialiser votre mot de passe ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h6 class=\"font-weight-light\">Reinitialiser votre mot de passe !</h6>
    <form class=\"pt-3\" method=\"post\" id=\"form\">
        ";
        // line 7
        if ( !(null === (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 7, $this->source); })()))) {
            // line 8
            echo "            <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 8, $this->source); })()), "html", null, true);
            echo "</div>
        ";
        }
        // line 10
        echo "        ";
        if ( !(null === (isset($context["success"]) || array_key_exists("success", $context) ? $context["success"] : (function () { throw new RuntimeError('Variable "success" does not exist.', 10, $this->source); })()))) {
            // line 11
            echo "            <div class=\"alert alert-primary\">";
            echo twig_escape_filter($this->env, (isset($context["success"]) || array_key_exists("success", $context) ? $context["success"] : (function () { throw new RuntimeError('Variable "success" does not exist.', 11, $this->source); })()), "html", null, true);
            echo "</div>
        ";
        }
        // line 13
        echo "        <div id=\"message\" class=\"m-2\"></div>
        <div class=\"form-group\">
            <label for=\"exampleInputEmail1\">Adresse Email</label>
            <input type=\"email\" class=\"form-control\" required name=\"email\" id=\"email\" placeholder=\"exemple@gmail.com...\">
        </div>
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
        <button type=\"submit\" class=\"btn btn-primary mr-2\" id=\"btnRegister\">Reinitialiser</button>
        <br><br><br>
        <div class=\"mb-2\">
            <button type=\"button\" class=\"btn btn-block btn-facebook auth-form-btn\">
                <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" style=\"color:white;\">Se connecter</a>
            </button>
        </div>
    </form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 29
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 30
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  150 => 30,  140 => 29,  125 => 23,  117 => 18,  110 => 13,  104 => 11,  101 => 10,  95 => 8,  93 => 7,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'security/login.html.twig' %}

{% block title %}Coupon D555 - Réinitialiser votre mot de passe {% endblock %}
{% block body %}
    <h6 class=\"font-weight-light\">Reinitialiser votre mot de passe !</h6>
    <form class=\"pt-3\" method=\"post\" id=\"form\">
        {% if error is not null %}
            <div class=\"alert alert-danger\">{{ error }}</div>
        {% endif %}
        {% if success is not null %}
            <div class=\"alert alert-primary\">{{ success }}</div>
        {% endif %}
        <div id=\"message\" class=\"m-2\"></div>
        <div class=\"form-group\">
            <label for=\"exampleInputEmail1\">Adresse Email</label>
            <input type=\"email\" class=\"form-control\" required name=\"email\" id=\"email\" placeholder=\"exemple@gmail.com...\">
        </div>
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
        <button type=\"submit\" class=\"btn btn-primary mr-2\" id=\"btnRegister\">Reinitialiser</button>
        <br><br><br>
        <div class=\"mb-2\">
            <button type=\"button\" class=\"btn btn-block btn-facebook auth-form-btn\">
                <a href=\"{{ path('login') }}\" style=\"color:white;\">Se connecter</a>
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
{% endblock %}", "security/forget_password.html.twig", "C:\\laragon\\www\\D555_main\\templates\\security\\forget_password.html.twig");
    }
}
