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

/* post/index.html.twig */
class __TwigTemplate_50e5a24dd0573c3652e86450a4fa5e3ae681c4428edaf89ff1e98fb9f97fd627 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "post/index.html.twig", 1);
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

        echo "Home Page";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <style>
        .posts{
            border-radius: 10px;
            box-shadow: 0 10px 16px rgba(0, 0, 0, .25);
            margin-bottom: 40;
            margin-top: 40px;
            padding: 40px;
        }
        img{
            border-radius: 10px;
        }
    </style>

    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 20
            echo "        <div class=\"alert alert-success mt-5 text-center\">
            ";
            // line 21
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 26
            echo "        <section class=\"posts\">
            <article>
                <h2>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 28), "html", null, true);
            echo "</h2>
                <div class=\"metadat\">
                    ";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "createdAt", [], "any", false, false, false, 30), "Y-m-d"), "html", null, true);
            echo " at ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "createdAt", [], "any", false, false, false, 30), "H:i"), "html", null, true);
            echo " by
                    ";
            // line 31
            if (twig_get_attribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 31)) {
                // line 32
                echo "                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 32), "firstName", [], "any", false, false, false, 32), "html", null, true);
                echo "
                    ";
            } else {
                // line 34
                echo "                        user
                    ";
            }
            // line 36
            echo "                    <span class=\"badge bg-success\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "category", [], "any", false, false, false, 36), "title", [], "any", false, false, false, 36), "html", null, true);
            echo "</span>
                    ";
            // line 37
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "comments", [], "any", false, false, false, 37)), "html", null, true);
            echo " ";
            echo (((0 >= twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "comments", [], "any", false, false, false, 37)), 1))) ? ("comment") : ("comments"));
            echo "
                </div>
                <div class=\"content\">
                    ";
            // line 40
            if (twig_get_attribute($this->env, $this->source, $context["post"], "imageName", [], "any", false, false, false, 40)) {
                // line 41
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["post"], "imageFile"), "html", null, true);
                echo "\" width=\"300\" height=\"200\" alt=\"\" class=\"mt-3 mb-3\">
                    ";
            } else {
                // line 43
                echo "                        <img src=\"https://picsum.photos/seed/picsum/300/200\" alt=\"\" class=\"mt-3 mb-3\">
                    ";
            }
            // line 45
            echo "                    <p>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "content", [], "any", false, false, false, 45), "html", null, true);
            echo "</p>
                    <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_show", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\">Read more</a>
                </div>
            </article>
        </section>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "    <div class=\"navigation mt-5\">
        ";
        // line 52
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 52, $this->source); })()));
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "post/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 52,  194 => 51,  183 => 46,  178 => 45,  174 => 43,  168 => 41,  166 => 40,  158 => 37,  153 => 36,  149 => 34,  143 => 32,  141 => 31,  135 => 30,  130 => 28,  126 => 26,  122 => 25,  119 => 24,  110 => 21,  107 => 20,  103 => 19,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Home Page{% endblock %}

{% block body %}
    <style>
        .posts{
            border-radius: 10px;
            box-shadow: 0 10px 16px rgba(0, 0, 0, .25);
            margin-bottom: 40;
            margin-top: 40px;
            padding: 40px;
        }
        img{
            border-radius: 10px;
        }
    </style>

    {% for message in app.flashes('success') %}
        <div class=\"alert alert-success mt-5 text-center\">
            {{ message }}
        </div>
    {% endfor %}

    {% for post in posts %}
        <section class=\"posts\">
            <article>
                <h2>{{ post.title }}</h2>
                <div class=\"metadat\">
                    {{ post.createdAt | date('Y-m-d')}} at {{ post.createdAt | date('H:i') }} by
                    {% if post.author %}
                        {{ post.author.firstName }}
                    {% else %}
                        user
                    {% endif %}
                    <span class=\"badge bg-success\">{{ post.category.title }}</span>
                    {{ post.comments | length  }} {{ (post.comments | length <= 1) ? 'comment' : 'comments' }}
                </div>
                <div class=\"content\">
                    {% if post.imageName %}
                        <img src=\"{{ vich_uploader_asset(post, 'imageFile') }}\" width=\"300\" height=\"200\" alt=\"\" class=\"mt-3 mb-3\">
                    {% else %}
                        <img src=\"https://picsum.photos/seed/picsum/300/200\" alt=\"\" class=\"mt-3 mb-3\">
                    {% endif %}
                    <p>{{ post.content }}</p>
                    <a href=\"{{ path('post_show', {'id' : post.id}) }}\">Read more</a>
                </div>
            </article>
        </section>
    {% endfor %}
    <div class=\"navigation mt-5\">
        {{ knp_pagination_render(posts) }}
    </div>
{% endblock %}
", "post/index.html.twig", "/home/jenkins/Documents/blog-symfony/templates/post/index.html.twig");
    }
}
