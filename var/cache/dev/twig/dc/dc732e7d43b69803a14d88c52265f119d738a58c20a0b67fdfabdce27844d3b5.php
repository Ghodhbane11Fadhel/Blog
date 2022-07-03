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

/* post/show.html.twig */
class __TwigTemplate_2759b0133652af4e1a2c036595b4a8ea3b35eb6f9677c37e92021af7315697f9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/show.html.twig"));

        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 2, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "post/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Post Show";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <style>
        .post{
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
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 21
            echo "        <div class=\"alert alert-success mt-5 text-center\">
            ";
            // line 22
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
    <section class=\"post\">
        <article>
            <h2>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 28, $this->source); })()), "title", [], "any", false, false, false, 28), "html", null, true);
        echo "</h2>
            <div class=\"metadat\">
                ";
        // line 30
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 30, $this->source); })()), "createdAt", [], "any", false, false, false, 30), "Y-m-d"), "html", null, true);
        echo " at ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 30, $this->source); })()), "createdAt", [], "any", false, false, false, 30), "H:i"), "html", null, true);
        echo " by John
                <span class=\"badge bg-success\">";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 31, $this->source); })()), "category", [], "any", false, false, false, 31), "title", [], "any", false, false, false, 31), "html", null, true);
        echo "</span>
                ";
        // line 32
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 32, $this->source); })()), "comments", [], "any", false, false, false, 32)), "html", null, true);
        echo " ";
        echo (((0 >= twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 32, $this->source); })()), "comments", [], "any", false, false, false, 32)), 1))) ? ("comment") : ("comments"));
        echo "
            </div>
            <div class=\"content\">
                ";
        // line 35
        if (twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 35, $this->source); })()), "imageName", [], "any", false, false, false, 35)) {
            // line 36
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 36, $this->source); })()), "imageFile"), "html", null, true);
            echo "\" width=\"300\" height=\"200\" alt=\"\" class=\"mt-3 mb-3\">
                ";
        } else {
            // line 38
            echo "                    <img src=\"https://picsum.photos/seed/picsum/300/200\" alt=\"\" class=\"mt-3 mb-3\">
                ";
        }
        // line 40
        echo "                <p>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 40, $this->source); })()), "content", [], "any", false, false, false, 40), "html", null, true);
        echo "</p>
                ";
        // line 41
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41), twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 41, $this->source); })()), "author", [], "any", false, false, false, 41)))) {
            // line 42
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 42, $this->source); })()), "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\">Edit the post</a>
                ";
        }
        // line 44
        echo "            </div>
        </article>
    </section>

    <h2 class=\"mt-5\">";
        // line 48
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 48, $this->source); })()), "comments", [], "any", false, false, false, 48)), "html", null, true);
        echo " ";
        echo (((0 >= twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 48, $this->source); })()), "comments", [], "any", false, false, false, 48)), 1))) ? ("comment") : ("comments"));
        echo "</h2>
    <section class=\"mt-5\">
        ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 50, $this->source); })()), "comments", [], "any", false, false, false, 50));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 51
            echo "            <div class=\"card-header\">
                ";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 52), "html", null, true);
            echo " <small> ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 52), "Y-m-d"), "html", null, true);
            echo " at ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 52), "H:i"), "html", null, true);
            echo "</small>
            </div>
            <div class=\"card-body\">
                <p>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 55), "html", null, true);
            echo "</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "    </section>

    <hr>

   ";
        // line 62
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "user", [], "any", false, false, false, 62)) {
            // line 63
            echo "       <h2>Add Comment</h2>
       ";
            // line 64
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 64, $this->source); })()), 'form_start');
            echo "
       ";
            // line 65
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 65, $this->source); })()), 'widget');
            echo "
       <button class=\"btn btn-success mt-5\">Add a comment</button>
       ";
            // line 67
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 67, $this->source); })()), 'form_end');
            echo "
    ";
        }
        // line 69
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "post/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 69,  234 => 67,  229 => 65,  225 => 64,  222 => 63,  220 => 62,  214 => 58,  205 => 55,  195 => 52,  192 => 51,  188 => 50,  181 => 48,  175 => 44,  169 => 42,  167 => 41,  162 => 40,  158 => 38,  152 => 36,  150 => 35,  142 => 32,  138 => 31,  132 => 30,  127 => 28,  122 => 25,  113 => 22,  110 => 21,  106 => 20,  91 => 7,  81 => 6,  62 => 4,  51 => 1,  49 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% form_theme commentForm 'bootstrap_4_layout.html.twig' %}

{% block title %}Post Show{% endblock %}

{% block body %}
    <style>
        .post{
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

    <section class=\"post\">
        <article>
            <h2>{{ post.title }}</h2>
            <div class=\"metadat\">
                {{ post.createdAt | date('Y-m-d')}} at {{ post.createdAt | date('H:i') }} by John
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
                {% if app.user == post.author %}
                    <a href=\"{{ path('post_edit', {'id': post.id}) }}\">Edit the post</a>
                {% endif %}
            </div>
        </article>
    </section>

    <h2 class=\"mt-5\">{{ post.comments | length  }} {{ (post.comments | length <= 1) ? 'comment' : 'comments' }}</h2>
    <section class=\"mt-5\">
        {% for comment in post.comments %}
            <div class=\"card-header\">
                {{ comment.author}} <small> {{ comment.createdAt | date('Y-m-d')}} at {{ comment.createdAt | date('H:i') }}</small>
            </div>
            <div class=\"card-body\">
                <p>{{ comment.content }}</p>
            </div>
        {% endfor %}
    </section>

    <hr>

   {% if app.user %}
       <h2>Add Comment</h2>
       {{ form_start(commentForm) }}
       {{ form_widget(commentForm) }}
       <button class=\"btn btn-success mt-5\">Add a comment</button>
       {{ form_end(commentForm) }}
    {% endif %}

{% endblock %}

", "post/show.html.twig", "/home/jenkins/Documents/blog-symfony/templates/post/show.html.twig");
    }
}
