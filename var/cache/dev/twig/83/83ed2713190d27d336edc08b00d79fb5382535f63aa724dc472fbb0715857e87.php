<?php

/* job/list.html.twig */
class __TwigTemplate_046744062c231479a900213a2a31927422e9ef3210857e01d5593ad64e1b8cf4 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "job/list.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/list.html.twig"));

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
        if ((isset($context["historyJobs"]) || array_key_exists("historyJobs", $context) ? $context["historyJobs"] : (function () { throw new Twig_Error_Runtime('Variable "historyJobs" does not exist.', 4, $this->source); })())) {
            // line 5
            echo "        ";
            $this->loadTemplate("job/_job_history.html.twig", "job/list.html.twig", 5)->display(["historyJobs" => (isset($context["historyJobs"]) || array_key_exists("historyJobs", $context) ? $context["historyJobs"] : (function () { throw new Twig_Error_Runtime('Variable "historyJobs" does not exist.', 5, $this->source); })())]);
            // line 6
            echo "    ";
        }
        // line 7
        echo "
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new Twig_Error_Runtime('Variable "categories" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 9
            echo "        <h4>
            <a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category.show", ["slug" => twig_get_attribute($this->env, $this->source, $context["category"], "slug", [])]), "html", null, true);
            echo "\">
                ";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", []), "html", null, true);
            echo "
            </a>
        </h4>

        ";
            // line 15
            $this->loadTemplate("job/table.html.twig", "job/list.html.twig", 15)->display(["jobs" => twig_slice($this->env, twig_get_attribute($this->env, $this->source,             // line 16
$context["category"], "activeJobs", []), 0, (isset($context["max_jobs_on_homepage"]) || array_key_exists("max_jobs_on_homepage", $context) ? $context["max_jobs_on_homepage"] : (function () { throw new Twig_Error_Runtime('Variable "max_jobs_on_homepage" does not exist.', 16, $this->source); })()))]);
            // line 18
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "job/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 18,  84 => 16,  83 => 15,  76 => 11,  72 => 10,  69 => 9,  65 => 8,  62 => 7,  59 => 6,  56 => 5,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    {% if historyJobs %}
        {% include 'job/_job_history.html.twig' with {'historyJobs': historyJobs} only %}
    {% endif %}

    {% for category in categories %}
        <h4>
            <a href=\"{{ path('category.show', {slug: category.slug}) }}\">
                {{ category.name }}
            </a>
        </h4>

        {% include 'job/table.html.twig' with {
            'jobs': category.activeJobs|slice(0, max_jobs_on_homepage)
        } only %}
    {% endfor %}
{% endblock %}
", "job/list.html.twig", "/application/templates/job/list.html.twig");
    }
}
