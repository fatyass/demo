<?php

/* job/table.html.twig */
class __TwigTemplate_25f45c2bf31ea139ed8856fd6a644436d08cf8a918c659abe7ae02c33d810556 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/table.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/table.html.twig"));

        // line 1
        echo "<table class=\"table text-center\">
    <thead>
    <tr>
        <th class=\"active text-center\">";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("City"), "html", null, true);
        echo "</th>
        <th class=\"active text-center\">";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Position"), "html", null, true);
        echo "</th>
        <th class=\"active text-center\">";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Company"), "html", null, true);
        echo "</th>
    </tr>
    </thead>

    <tbody>
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jobs"]) || array_key_exists("jobs", $context) ? $context["jobs"] : (function () { throw new Twig_Error_Runtime('Variable "jobs" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 12
            echo "        <tr>
            <td>";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "location", []), "html", null, true);
            echo "</td>
            <td>
                <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("job.show", ["id" => twig_get_attribute($this->env, $this->source, $context["job"], "id", [])]), "html", null, true);
            echo "\">
                    ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "position", []), "html", null, true);
            echo "
                </a>
            </td>
            <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "company", []), "html", null, true);
            echo "</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    </tbody>
</table>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "job/table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 22,  72 => 19,  66 => 16,  62 => 15,  57 => 13,  54 => 12,  50 => 11,  42 => 6,  38 => 5,  34 => 4,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table class=\"table text-center\">
    <thead>
    <tr>
        <th class=\"active text-center\">{{ 'City'|trans }}</th>
        <th class=\"active text-center\">{{ 'Position'|trans }}</th>
        <th class=\"active text-center\">{{ 'Company'|trans }}</th>
    </tr>
    </thead>

    <tbody>
    {% for job in jobs %}
        <tr>
            <td>{{ job.location }}</td>
            <td>
                <a href=\"{{ path('job.show', {id: job.id}) }}\">
                    {{ job.position }}
                </a>
            </td>
            <td>{{ job.company }}</td>
        </tr>
    {% endfor %}
    </tbody>
</table>
", "job/table.html.twig", "/application/templates/job/table.html.twig");
    }
}
