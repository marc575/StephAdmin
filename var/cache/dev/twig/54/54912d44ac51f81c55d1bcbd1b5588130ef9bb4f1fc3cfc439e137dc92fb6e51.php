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
class __TwigTemplate_5fe1526ccd132ae0eeafce923676eeac6fd09f30297c30935b03fab2c1ad52cd extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coupon/new_coupon.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coupon/new_coupon.html.twig"));

        $this->parent = $this->loadTemplate("security/login.html.twig", "coupon/new_coupon.html.twig", 1);
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

        echo " Coupons D555 - Nouveau Coupon ";
        
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
        echo "    <h6 class=\"font-weight-light\">Ajouter un nouveau coupon !</h6>
    <form class=\"pt-3\" method=\"post\" id=\"formGood\" enctype=\"multipart/form-data\">
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
        echo "        <div class=\"form-group\">
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
        // line 40
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
        <button type=\"submit\" class=\"btn btn-primary mr-2\" id=\"btnGood\">Enregistrer</button>
        <br><br><br>
        <div class=\"mb-2\">
            <button type=\"button\" class=\"btn btn-block btn-facebook auth-form-btn\">
                <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\" style=\"color:white;\">Tableau de bord</a>
            </button>
        </div>
    </form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  146 => 45,  138 => 40,  109 => 13,  103 => 11,  100 => 10,  94 => 8,  92 => 7,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'security/login.html.twig' %}

{% block title %} Coupons D555 - Nouveau Coupon {% endblock %}
{% block body %}
    <h6 class=\"font-weight-light\">Ajouter un nouveau coupon !</h6>
    <form class=\"pt-3\" method=\"post\" id=\"formGood\" enctype=\"multipart/form-data\">
        {% if error is not null %}
            <div class=\"alert alert-danger\">{{ error }}</div>
        {% endif %}
        {% if success is not null %}
            <div class=\"alert alert-primary\">{{ success }}</div>
        {% endif %}
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
        <br><br><br>
        <div class=\"mb-2\">
            <button type=\"button\" class=\"btn btn-block btn-facebook auth-form-btn\">
                <a href=\"{{ path('index') }}\" style=\"color:white;\">Tableau de bord</a>
            </button>
        </div>
    </form>
{% endblock %}

", "coupon/new_coupon.html.twig", "C:\\laragon\\www\\D555_main\\templates\\coupon\\new_coupon.html.twig");
    }
}
