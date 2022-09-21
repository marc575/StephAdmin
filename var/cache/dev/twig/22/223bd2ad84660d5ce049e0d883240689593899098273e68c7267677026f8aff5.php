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

/* coupon/edit_coupon.html.twig */
class __TwigTemplate_7986340e6f58b52965878105f2f2f7eafba755a51a406f01971e48971e516e36 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coupon/edit_coupon.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coupon/edit_coupon.html.twig"));

        $this->parent = $this->loadTemplate("security/login.html.twig", "coupon/edit_coupon.html.twig", 1);
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

        echo " Coupons D555 - Editer un Coupon ";
        
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
        echo "    <h6 class=\"font-weight-light\">Editer un coupon !</h6>
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
            <input type=\"text\" required class=\"form-control\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coupon"]) || array_key_exists("coupon", $context) ? $context["coupon"] : (function () { throw new RuntimeError('Variable "coupon" does not exist.', 15, $this->source); })()), "auteur", [], "any", false, false, false, 15), "html", null, true);
        echo "\" name=\"auteur\" id=\"auteur\" placeholder=\"Auteur...\">
        </div>
        <div class=\"form-group\">
            <label for=\"exampleInputEmail1\">Bookmaker</label>
            <input type=\"text\" class=\"form-control\" required name=\"bookmaker\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coupon"]) || array_key_exists("coupon", $context) ? $context["coupon"] : (function () { throw new RuntimeError('Variable "coupon" does not exist.', 19, $this->source); })()), "bookmaker", [], "any", false, false, false, 19), "html", null, true);
        echo "\" id=\"bookmaker\" placeholder=\"1xBet...\">
        </div>
        <div class=\"form-group\">
            <label for=\"exampleInputPassword1\">Code du coupon</label>
            <input type=\"text\" class=\"form-control\" id=\"code\" name=\"code\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coupon"]) || array_key_exists("coupon", $context) ? $context["coupon"] : (function () { throw new RuntimeError('Variable "coupon" does not exist.', 23, $this->source); })()), "code", [], "any", false, false, false, 23), "html", null, true);
        echo "\" placeholder=\"Code du coupon...\">
        </div>
        <div class=\"form-group\">
            <label for=\"exampleInputConfirmPassword1\">Message</label>
            <textarea class=\"form-control\" id=\"message\" name=\"message\" rows=\"4\" placeholder=\"Petit message...\">";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coupon"]) || array_key_exists("coupon", $context) ? $context["coupon"] : (function () { throw new RuntimeError('Variable "coupon" does not exist.', 27, $this->source); })()), "message", [], "any", false, false, false, 27), "html", null, true);
        echo "</textarea>
        </div>

        <div class=\"form-group mb-4\">
            <label class=\"floating-label\" for=\"images\">Nouvelles images</label>
            <input type=\"file\" multiple name=\"images[]\" class=\"single-input\" id=\"images\">
        </div>
        <div class=\"section-top-border\" id=\"galleryContainer\" style=\"display: none;\">
            <h3>Nouvelles images</h3>
            <div class=\"row gallery-item\" id=\"gallery\">
            </div>
        </div>

        ";
        // line 40
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["coupon"]) || array_key_exists("coupon", $context) ? $context["coupon"] : (function () { throw new RuntimeError('Variable "coupon" does not exist.', 40, $this->source); })()), "couponImage", [], "any", false, false, false, 40))) {
            // line 41
            echo "            <div class=\"section-top-border\">
                <h3>Images Actuelles</h3>
                <div class=\"row gallery-item\">
                    ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["coupon"]) || array_key_exists("coupon", $context) ? $context["coupon"] : (function () { throw new RuntimeError('Variable "coupon" does not exist.', 44, $this->source); })()), "couponImage", [], "any", false, false, false, 44));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 45
                echo "                        <div class=\"col-md-4\">
                            <a href=\"/uploads/images/";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "fileName", [], "any", false, false, false, 46), "html", null, true);
                echo "\" class=\"img-pop-up\">
                                <a href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_image_coupon", ["image" => twig_get_attribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 47), "coupon" => twig_get_attribute($this->env, $this->source, (isset($context["coupon"]) || array_key_exists("coupon", $context) ? $context["coupon"] : (function () { throw new RuntimeError('Variable "coupon" does not exist.', 47, $this->source); })()), "id", [], "any", false, false, false, 47)]), "html", null, true);
                echo "\" class=\"deleteImage text-danger\">Supprimer</a>
                                <div class=\"single-gallery-image\" style=\"background: url(";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "fileName", [], "any", false, false, false, 48), "html", null, true);
                echo ");\"></div>
                            </a>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "                </div>
            </div>
        ";
        }
        // line 55
        echo "
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
        <button type=\"submit\" class=\"btn btn-primary mr-2\" id=\"btnGood\">Mettre à jour</button>
        <br><br><br>
        <div class=\"mb-2\">
            <button type=\"button\" class=\"btn btn-block btn-facebook auth-form-btn\">
                <a href=\"";
        // line 61
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
        return "coupon/edit_coupon.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 61,  190 => 56,  187 => 55,  182 => 52,  172 => 48,  168 => 47,  164 => 46,  161 => 45,  157 => 44,  152 => 41,  150 => 40,  134 => 27,  127 => 23,  120 => 19,  113 => 15,  109 => 13,  103 => 11,  100 => 10,  94 => 8,  92 => 7,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'security/login.html.twig' %}

{% block title %} Coupons D555 - Editer un Coupon {% endblock %}
{% block body %}
    <h6 class=\"font-weight-light\">Editer un coupon !</h6>
    <form class=\"pt-3\" method=\"post\" id=\"formGood\" enctype=\"multipart/form-data\">
        {% if error is not null %}
            <div class=\"alert alert-danger\">{{ error }}</div>
        {% endif %}
        {% if success is not null %}
            <div class=\"alert alert-primary\">{{ success }}</div>
        {% endif %}
        <div class=\"form-group\">
            <label for=\"exampleInputUsername1\">Auteur</label>
            <input type=\"text\" required class=\"form-control\" value=\"{{ coupon.auteur }}\" name=\"auteur\" id=\"auteur\" placeholder=\"Auteur...\">
        </div>
        <div class=\"form-group\">
            <label for=\"exampleInputEmail1\">Bookmaker</label>
            <input type=\"text\" class=\"form-control\" required name=\"bookmaker\" value=\"{{ coupon.bookmaker }}\" id=\"bookmaker\" placeholder=\"1xBet...\">
        </div>
        <div class=\"form-group\">
            <label for=\"exampleInputPassword1\">Code du coupon</label>
            <input type=\"text\" class=\"form-control\" id=\"code\" name=\"code\" value=\"{{ coupon.code }}\" placeholder=\"Code du coupon...\">
        </div>
        <div class=\"form-group\">
            <label for=\"exampleInputConfirmPassword1\">Message</label>
            <textarea class=\"form-control\" id=\"message\" name=\"message\" rows=\"4\" placeholder=\"Petit message...\">{{ coupon.message }}</textarea>
        </div>

        <div class=\"form-group mb-4\">
            <label class=\"floating-label\" for=\"images\">Nouvelles images</label>
            <input type=\"file\" multiple name=\"images[]\" class=\"single-input\" id=\"images\">
        </div>
        <div class=\"section-top-border\" id=\"galleryContainer\" style=\"display: none;\">
            <h3>Nouvelles images</h3>
            <div class=\"row gallery-item\" id=\"gallery\">
            </div>
        </div>

        {% if coupon.couponImage is not empty %}
            <div class=\"section-top-border\">
                <h3>Images Actuelles</h3>
                <div class=\"row gallery-item\">
                    {% for image in coupon.couponImage %}
                        <div class=\"col-md-4\">
                            <a href=\"/uploads/images/{{ image.fileName }}\" class=\"img-pop-up\">
                                <a href=\"{{ path(\"delete_image_coupon\", {image: image.id, coupon: coupon.id}) }}\" class=\"deleteImage text-danger\">Supprimer</a>
                                <div class=\"single-gallery-image\" style=\"background: url({{ image.fileName }});\"></div>
                            </a>
                        </div>
                    {% endfor %}
                </div>
            </div>
        {% endif %}

        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
        <button type=\"submit\" class=\"btn btn-primary mr-2\" id=\"btnGood\">Mettre à jour</button>
        <br><br><br>
        <div class=\"mb-2\">
            <button type=\"button\" class=\"btn btn-block btn-facebook auth-form-btn\">
                <a href=\"{{ path('index') }}\" style=\"color:white;\">Tableau de bord</a>
            </button>
        </div>
    </form>
{% endblock %}
", "coupon/edit_coupon.html.twig", "C:\\laragon\\www\\B5511_main\\templates\\coupon\\edit_coupon.html.twig");
    }
}
