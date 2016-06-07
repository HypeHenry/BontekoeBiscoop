<?php

/* BontekoeCinemaBundle:Movie:index.html.twig */
class __TwigTemplate_8d4598ac971693f51ce3ceb4440b95b2b2695c40f20c69cc28449d4dfb28a548 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "BontekoeCinemaBundle:Movie:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e317b173c4b357331c03f90494094ad2aa4e411514dd695674faf49328040915 = $this->env->getExtension("native_profiler");
        $__internal_e317b173c4b357331c03f90494094ad2aa4e411514dd695674faf49328040915->enter($__internal_e317b173c4b357331c03f90494094ad2aa4e411514dd695674faf49328040915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BontekoeCinemaBundle:Movie:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e317b173c4b357331c03f90494094ad2aa4e411514dd695674faf49328040915->leave($__internal_e317b173c4b357331c03f90494094ad2aa4e411514dd695674faf49328040915_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5dec01bd9d4a89792d6522e7eb375fc9ae7020c0c7baae815671be439138c455 = $this->env->getExtension("native_profiler");
        $__internal_5dec01bd9d4a89792d6522e7eb375fc9ae7020c0c7baae815671be439138c455->enter($__internal_5dec01bd9d4a89792d6522e7eb375fc9ae7020c0c7baae815671be439138c455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Movie list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Publicationdate</th>
                <th>Genre</th>
                <th>Runtime</th>
                <th>Productioncompany</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("movie_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            if ($this->getAttribute($context["entity"], "publicationDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "publicationDate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "genre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "runtime", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "productioncompany", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "description", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("movie_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("movie_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("movie_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_5dec01bd9d4a89792d6522e7eb375fc9ae7020c0c7baae815671be439138c455->leave($__internal_5dec01bd9d4a89792d6522e7eb375fc9ae7020c0c7baae815671be439138c455_prof);

    }

    public function getTemplateName()
    {
        return "BontekoeCinemaBundle:Movie:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 46,  118 => 41,  106 => 35,  100 => 32,  93 => 28,  89 => 27,  85 => 26,  81 => 25,  75 => 24,  71 => 23,  65 => 22,  62 => 21,  58 => 20,  40 => 4,  34 => 3,  11 => 1,);
    }
}
