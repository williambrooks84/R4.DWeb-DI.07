<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* lego.html.twig */
class __TwigTemplate_740acd7e79c1a238eafc74adf1255d01 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lego.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "lego.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "LEGO Store";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "  <div class=\"header\">
    <nav>
        <a href=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\">All</a> <!-- Lien pour afficher tous les legos -->
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["collections"]) || array_key_exists("collections", $context) ? $context["collections"] : (function () { throw new RuntimeError('Variable "collections" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["collection"]) {
            // line 10
            yield "            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("filter_by_collection", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["collection"], "id", [], "any", false, false, false, 10)]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collection"], "name", [], "any", false, false, false, 10), "html", null, true);
            yield "</a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['collection'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        yield "    </nav>
  </div>  
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["legos"]) || array_key_exists("legos", $context) ? $context["legos"] : (function () { throw new RuntimeError('Variable "legos" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["lego"]) {
            // line 15
            yield "        <div class=\"lego_card\">
            <div class=\"info_section\">
                <div class=\"lego_header\">
                    <img class=\"locandina\" src=\"/images/";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lego"], "boxImage", [], "any", false, false, false, 18), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lego"], "name", [], "any", false, false, false, 18), "html", null, true);
            yield "\"/>
                    <h1>";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lego"], "name", [], "any", false, false, false, 19), "html", null, true);
            yield "</h1>
                    <h4>Collection: ";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["lego"], "collection", [], "any", false, false, false, 20), "name", [], "any", false, false, false, 20), "html", null, true);
            yield "</h4>
                    <span class=\"pieces\">Pièces: ";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lego"], "pieces", [], "any", false, false, false, 21), "html", null, true);
            yield "</span>
                    <p class=\"price\">";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lego"], "price", [], "any", false, false, false, 22), "html", null, true);
            yield "€</p><br>
                    <a href=\"index.php?buy=";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lego"], "id", [], "any", false, false, false, 23), "html", null, true);
            yield "\"><button>Buy</button></a>
                </div>
                <div class=\"lego_desc\">
                    <p class=\"text\">";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lego"], "description", [], "any", false, false, false, 26), "html", null, true);
            yield "</p>
                </div>
                <div class=\"lego_social\">
                    <ul>
                        <li><i class=\"material-icons\">share</i></li>
                        <li><i class=\"material-icons\">favorite</i></li>
                        <li><i class=\"material-icons\">chat_bubble</i></li>
                    </ul>
                </div>
            </div>
            <div class=\"blur_back\">
                <img src=\"/images/";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lego"], "legoImage", [], "any", false, false, false, 37), "html", null, true);
            yield "\" alt=\"background lego card\">
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['lego'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "lego.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  163 => 37,  149 => 26,  143 => 23,  139 => 22,  135 => 21,  131 => 20,  127 => 19,  121 => 18,  116 => 15,  112 => 14,  108 => 12,  97 => 10,  93 => 9,  89 => 8,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}LEGO Store{% endblock %}

{% block body %}
  <div class=\"header\">
    <nav>
        <a href=\"{{ path('home') }}\">All</a> <!-- Lien pour afficher tous les legos -->
        {% for collection in collections %}
            <a href=\"{{ path('filter_by_collection', { id: collection.id }) }}\">{{ collection.name }}</a>
        {% endfor %}
    </nav>
  </div>  
    {% for lego in legos %}
        <div class=\"lego_card\">
            <div class=\"info_section\">
                <div class=\"lego_header\">
                    <img class=\"locandina\" src=\"/images/{{ lego.boxImage }}\" alt=\"{{ lego.name }}\"/>
                    <h1>{{ lego.name }}</h1>
                    <h4>Collection: {{ lego.collection.name }}</h4>
                    <span class=\"pieces\">Pièces: {{ lego.pieces }}</span>
                    <p class=\"price\">{{ lego.price }}€</p><br>
                    <a href=\"index.php?buy={{ lego.id }}\"><button>Buy</button></a>
                </div>
                <div class=\"lego_desc\">
                    <p class=\"text\">{{ lego.description }}</p>
                </div>
                <div class=\"lego_social\">
                    <ul>
                        <li><i class=\"material-icons\">share</i></li>
                        <li><i class=\"material-icons\">favorite</i></li>
                        <li><i class=\"material-icons\">chat_bubble</i></li>
                    </ul>
                </div>
            </div>
            <div class=\"blur_back\">
                <img src=\"/images/{{ lego.legoImage }}\" alt=\"background lego card\">
            </div>
        </div>
    {% endfor %}
{% endblock %}", "lego.html.twig", "/var/www/html/templates/lego.html.twig");
    }
}
