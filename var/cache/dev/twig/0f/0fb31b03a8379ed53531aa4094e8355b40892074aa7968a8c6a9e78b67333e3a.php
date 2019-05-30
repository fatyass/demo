<?php

/* admin/job/list.html.twig */
class __TwigTemplate_19b0fbac05e31bf8615f4b5ef8db6cabd08bd8d0ea77fbd8c5377911c5090dc0 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/job/list.html.twig", 1);
        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/job/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/job/list.html.twig"));

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
        echo "    <table class=\"table\">
        <thead>
        <tr class=\"active\">
            <th>";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Company"), "html", null, true);
        echo "</th>
            <th>";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Position"), "html", null, true);
        echo "</th>
            <th>";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Location"), "html", null, true);
        echo "</th>
            <th>";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email"), "html", null, true);
        echo "</th>
            <th>";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("URL"), "html", null, true);
        echo "</th>
            <th>";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Activated"), "html", null, true);
        echo "</th>
            <th>";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Actions"), "html", null, true);
        echo "</th>
        </tr>
        </thead>

        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jobs"]) || array_key_exists("jobs", $context) ? $context["jobs"] : (function () { throw new Twig_Error_Runtime('Variable "jobs" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 19
            echo "            <tr>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "company", []), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "position", []), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "location", []), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "email", []), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "url", []), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 26
            if (twig_get_attribute($this->env, $this->source, $context["job"], "activated", [])) {
                // line 27
                echo "                        <span class=\"glyphicon glyphicon-ok\" aria-hidden=\"true\"></span>
                    ";
            } else {
                // line 29
                echo "                        <span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span>
                    ";
            }
            // line 31
            echo "                </td>
                <td class=\"text-nowrap\">
                    <ul class=\"list-inline\">
                        <li>
                            <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.job.edit", ["id" => twig_get_attribute($this->env, $this->source, $context["job"], "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-default\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit"), "html", null, true);
            echo "</a>
                        </li>

                        <li>
                            <form method=\"post\" action=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.job.delete", ["id" => twig_get_attribute($this->env, $this->source, $context["job"], "id", [])]), "html", null, true);
            echo "\" onsubmit=\"return confirm('";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Are you sure you want to delete this item?"), "html", null, true);
            echo "');\">
                                <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["job"], "id", []))), "html", null, true);
            echo "\">
                                <button class=\"btn btn-danger\">";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete"), "html", null, true);
            echo "</button>
                            </form>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        </tbody>
    </table>

    <div class=\"navigation text-center\">
        ";
        // line 53
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["jobs"]) || array_key_exists("jobs", $context) ? $context["jobs"] : (function () { throw new Twig_Error_Runtime('Variable "jobs" does not exist.', 53, $this->source); })()));
        echo "
    </div>

    <a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.job.create");
        echo "\" class=\"btn btn-success\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create new"), "html", null, true);
        echo "</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/job/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 56,  173 => 53,  167 => 49,  154 => 42,  150 => 41,  143 => 39,  134 => 35,  128 => 31,  124 => 29,  120 => 27,  118 => 26,  113 => 24,  109 => 23,  105 => 22,  101 => 21,  97 => 20,  94 => 19,  90 => 18,  82 => 13,  78 => 12,  74 => 11,  70 => 10,  66 => 9,  62 => 8,  58 => 7,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin/base.html.twig' %}

{% block body %}
    <table class=\"table\">
        <thead>
        <tr class=\"active\">
            <th>{{ 'Company'|trans }}</th>
            <th>{{ 'Position'|trans }}</th>
            <th>{{ 'Location'|trans }}</th>
            <th>{{ 'Email'|trans }}</th>
            <th>{{ 'URL'|trans }}</th>
            <th>{{ 'Activated'|trans }}</th>
            <th>{{ 'Actions'|trans }}</th>
        </tr>
        </thead>

        <tbody>
        {% for job in jobs %}
            <tr>
                <td>{{ job.company }}</td>
                <td>{{ job.position }}</td>
                <td>{{ job.location }}</td>
                <td>{{ job.email }}</td>
                <td>{{ job.url }}</td>
                <td>
                    {% if job.activated %}
                        <span class=\"glyphicon glyphicon-ok\" aria-hidden=\"true\"></span>
                    {% else %}
                        <span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span>
                    {% endif %}
                </td>
                <td class=\"text-nowrap\">
                    <ul class=\"list-inline\">
                        <li>
                            <a href=\"{{ path('admin.job.edit', {id: job.id}) }}\" class=\"btn btn-default\">{{ 'Edit'|trans }}</a>
                        </li>

                        <li>
                            <form method=\"post\" action=\"{{ path('admin.job.delete', {id: job.id}) }}\" onsubmit=\"return confirm('{{ 'Are you sure you want to delete this item?'|trans }}');\">
                                <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ job.id) }}\">
                                <button class=\"btn btn-danger\">{{ 'Delete'|trans }}</button>
                            </form>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <div class=\"navigation text-center\">
        {{ knp_pagination_render(jobs) }}
    </div>

    <a href=\"{{ path('admin.job.create') }}\" class=\"btn btn-success\">{{ 'Create new'|trans }}</a>
{% endblock %}
", "admin/job/list.html.twig", "/application/templates/admin/job/list.html.twig");
    }
}
