<?php

/* job/show.html.twig */
class __TwigTemplate_633807c0f16b553c8ef356e339ff2a3ab15d767d9b74fb4a144fdd4984e8630c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "job/show.html.twig", 1);
        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        if (((isset($context["hasControlAccess"]) || array_key_exists("hasControlAccess", $context)) && (isset($context["hasControlAccess"]) || array_key_exists("hasControlAccess", $context) ? $context["hasControlAccess"] : (function () { throw new Twig_Error_Runtime('Variable "hasControlAccess" does not exist.', 4, $this->source); })()))) {
            // line 5
            echo "        ";
            $this->loadTemplate("job/control_panel.html.twig", "job/show.html.twig", 5)->display(["job" =>             // line 6
(isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new Twig_Error_Runtime('Variable "job" does not exist.', 6, $this->source); })()), "deleteForm" =>             // line 7
(isset($context["deleteForm"]) || array_key_exists("deleteForm", $context) ? $context["deleteForm"] : (function () { throw new Twig_Error_Runtime('Variable "deleteForm" does not exist.', 7, $this->source); })()), "publishForm" =>             // line 8
(isset($context["publishForm"]) || array_key_exists("publishForm", $context) ? $context["publishForm"] : (function () { throw new Twig_Error_Runtime('Variable "publishForm" does not exist.', 8, $this->source); })())]);
            // line 10
            echo "    ";
        }
        // line 11
        echo "
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 12, $this->source); })()), "flashes", [0 => "notice"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 13
            echo "        <div class=\"alert alert-success\" role=\"alert\">
            ";
            // line 14
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
    <h1>";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Job"), "html", null, true);
        echo "</h1>

    <div class=\"media\" style=\"margin-top: 60px;\">
        ";
        // line 21
        if (twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new Twig_Error_Runtime('Variable "job" does not exist.', 21, $this->source); })()), "logo", [])) {
            // line 22
            echo "            <div class=\"media-left\">
                <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new Twig_Error_Runtime('Variable "job" does not exist.', 23, $this->source); })()), "url", []), "html", null, true);
            echo "\" target=\"_blank\">
                    <img class=\"media-object\" style=\"width:100px; height:100px;\" src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((((isset($context["jobs_web_directory"]) || array_key_exists("jobs_web_directory", $context) ? $context["jobs_web_directory"] : (function () { throw new Twig_Error_Runtime('Variable "jobs_web_directory" does not exist.', 24, $this->source); })()) . "/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new Twig_Error_Runtime('Variable "job" does not exist.', 24, $this->source); })()), "logo", []), "filename", []))), "html", null, true);
            echo "\">
                </a>
            </div>
        ";
        }
        // line 28
        echo "
        <div class=\"media-body\">
            <div class=\"row\">
                <div class=\"col-sm-10\">
                    <h3 class=\"media-heading\"><strong>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new Twig_Error_Runtime('Variable "job" does not exist.', 32, $this->source); })()), "company", []), "html", null, true);
        echo "</strong> <i>(";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new Twig_Error_Runtime('Variable "job" does not exist.', 32, $this->source); })()), "location", []), "html", null, true);
        echo ")</i></h3>
                </div>

                <div class=\"col-sm-2\">
                    <i class=\"pull-right\">";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("posted on %date%", ["%date%" => twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new Twig_Error_Runtime('Variable "job" does not exist.', 36, $this->source); })()), "createdat", []), "m/d/Y")]), "html", null, true);
        echo "</i>
                </div>
            </div>

            <p>
                <strong>";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new Twig_Error_Runtime('Variable "job" does not exist.', 41, $this->source); })()), "position", []), "html", null, true);
        echo "</strong>
                <small> - <i>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new Twig_Error_Runtime('Variable "job" does not exist.', 42, $this->source); })()), "type", []), "html", null, true);
        echo "</i></small>
            </p>

            <p>";
        // line 45
        echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new Twig_Error_Runtime('Variable "job" does not exist.', 45, $this->source); })()), "description", []), "html", null, true));
        echo "</p>

            <p style=\"margin-top: 40px;\">
                <strong>";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("How to apply?"), "html", null, true);
        echo "</strong>
            </p>

            <p>";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new Twig_Error_Runtime('Variable "job" does not exist.', 51, $this->source); })()), "howToApply", []), "html", null, true);
        echo "</p>

            <div class=\"row\">
                <div class=\"col-sm-12 text-right\">
                    <a class=\"btn btn-default\" href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("job.list");
        echo "\">
                        <span class=\"glyphicon glyphicon-menu-left\" aria-hidden=\"true\"></span>
                        ";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back to list"), "html", null, true);
        echo "
                    </a>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "job/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 57,  161 => 55,  154 => 51,  148 => 48,  142 => 45,  136 => 42,  132 => 41,  124 => 36,  115 => 32,  109 => 28,  102 => 24,  98 => 23,  95 => 22,  93 => 21,  87 => 18,  84 => 17,  75 => 14,  72 => 13,  68 => 12,  65 => 11,  62 => 10,  60 => 8,  59 => 7,  58 => 6,  56 => 5,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    {% if hasControlAccess is defined and hasControlAccess %}
        {% include 'job/control_panel.html.twig' with {
            'job': job,
            'deleteForm': deleteForm,
            'publishForm': publishForm
        } only %}
    {% endif %}

    {% for message in app.flashes('notice') %}
        <div class=\"alert alert-success\" role=\"alert\">
            {{ message }}
        </div>
    {% endfor %}

    <h1>{{ 'Job'|trans }}</h1>

    <div class=\"media\" style=\"margin-top: 60px;\">
        {% if job.logo %}
            <div class=\"media-left\">
                <a href=\"{{ job.url }}\" target=\"_blank\">
                    <img class=\"media-object\" style=\"width:100px; height:100px;\" src=\"{{ asset(jobs_web_directory ~ '/' ~ job.logo.filename) }}\">
                </a>
            </div>
        {% endif %}

        <div class=\"media-body\">
            <div class=\"row\">
                <div class=\"col-sm-10\">
                    <h3 class=\"media-heading\"><strong>{{ job.company }}</strong> <i>({{ job.location }})</i></h3>
                </div>

                <div class=\"col-sm-2\">
                    <i class=\"pull-right\">{{ 'posted on %date%'|trans({'%date%': job.createdat|date('m/d/Y')}) }}</i>
                </div>
            </div>

            <p>
                <strong>{{ job.position }}</strong>
                <small> - <i>{{ job.type }}</i></small>
            </p>

            <p>{{ job.description|nl2br }}</p>

            <p style=\"margin-top: 40px;\">
                <strong>{{ 'How to apply?'|trans }}</strong>
            </p>

            <p>{{ job.howToApply }}</p>

            <div class=\"row\">
                <div class=\"col-sm-12 text-right\">
                    <a class=\"btn btn-default\" href=\"{{ path('job.list') }}\">
                        <span class=\"glyphicon glyphicon-menu-left\" aria-hidden=\"true\"></span>
                        {{ 'Back to list'|trans }}
                    </a>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "job/show.html.twig", "/application/templates/job/show.html.twig");
    }
}
