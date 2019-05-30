<?php

/* admin/affiliate/list.html.twig */
class __TwigTemplate_8e2f6474fdf8dd17ed59b8874eb5efd9ab858a30426c7d85a3c470ada8677012 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/affiliate/list.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/affiliate/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/affiliate/list.html.twig"));

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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email"), "html", null, true);
        echo "</th>
            <th>";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("URL"), "html", null, true);
        echo "</th>
            <th>";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Active"), "html", null, true);
        echo "</th>
            <th>";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Actions"), "html", null, true);
        echo "</th>
        </tr>
        </thead>

        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["affiliates"]) || array_key_exists("affiliates", $context) ? $context["affiliates"] : (function () { throw new Twig_Error_Runtime('Variable "affiliates" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["affiliate"]) {
            // line 16
            echo "            <tr>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["affiliate"], "email", []), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["affiliate"], "url", []), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 20
            if (twig_get_attribute($this->env, $this->source, $context["affiliate"], "active", [])) {
                // line 21
                echo "                        <span class=\"label label-success\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Yes"), "html", null, true);
                echo "</span>
                    ";
            } else {
                // line 23
                echo "                        <span class=\"label label-danger\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No"), "html", null, true);
                echo "</span>
                    ";
            }
            // line 25
            echo "                </td>
                <td class=\"text-nowrap\">
                    <ul class=\"list-inline\">
                        <li>
                            ";
            // line 29
            if (twig_get_attribute($this->env, $this->source, $context["affiliate"], "active", [])) {
                // line 30
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.affiliate.deactivate", ["id" => twig_get_attribute($this->env, $this->source, $context["affiliate"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-default\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Deactivate"), "html", null, true);
                echo "</a>
                            ";
            } else {
                // line 32
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.affiliate.activate", ["id" => twig_get_attribute($this->env, $this->source, $context["affiliate"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-default\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Activate"), "html", null, true);
                echo "</a>
                            ";
            }
            // line 34
            echo "                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['affiliate'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    <div class=\"navigation text-center\">
        ";
        // line 43
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["affiliates"]) || array_key_exists("affiliates", $context) ? $context["affiliates"] : (function () { throw new Twig_Error_Runtime('Variable "affiliates" does not exist.', 43, $this->source); })()));
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/affiliate/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 43,  142 => 39,  132 => 34,  124 => 32,  116 => 30,  114 => 29,  108 => 25,  102 => 23,  96 => 21,  94 => 20,  89 => 18,  85 => 17,  82 => 16,  78 => 15,  70 => 10,  66 => 9,  62 => 8,  58 => 7,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin/base.html.twig' %}

{% block body %}
    <table class=\"table\">
        <thead>
        <tr class=\"active\">
            <th>{{ 'Email'|trans }}</th>
            <th>{{ 'URL'|trans }}</th>
            <th>{{ 'Active'|trans }}</th>
            <th>{{ 'Actions'|trans }}</th>
        </tr>
        </thead>

        <tbody>
        {% for affiliate in affiliates %}
            <tr>
                <td>{{ affiliate.email }}</td>
                <td>{{ affiliate.url }}</td>
                <td>
                    {% if affiliate.active %}
                        <span class=\"label label-success\">{{ 'Yes'|trans }}</span>
                    {% else %}
                        <span class=\"label label-danger\">{{ 'No'|trans }}</span>
                    {% endif %}
                </td>
                <td class=\"text-nowrap\">
                    <ul class=\"list-inline\">
                        <li>
                            {% if affiliate.active %}
                                <a href=\"{{ path('admin.affiliate.deactivate', {id: affiliate.id}) }}\" class=\"btn btn-default\">{{ 'Deactivate'|trans }}</a>
                            {% else %}
                                <a href=\"{{ path('admin.affiliate.activate', {id: affiliate.id}) }}\" class=\"btn btn-default\">{{ 'Activate'|trans }}</a>
                            {% endif %}
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <div class=\"navigation text-center\">
        {{ knp_pagination_render(affiliates) }}
    </div>
{% endblock %}
", "admin/affiliate/list.html.twig", "/application/templates/admin/affiliate/list.html.twig");
    }
}
