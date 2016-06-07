<?php

/* BontekoeCinemaBundle:Movie:show.html.twig */
class __TwigTemplate_f6b83d7f848f90c5598e61878209f9806b1cb119013c94d151f5f2773f0aaa84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "BontekoeCinemaBundle:Movie:show.html.twig", 1);
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
        $__internal_562955363f3160d1f62a5d683bb8f28c42c848c36a6b526fb7589ed665bf92d8 = $this->env->getExtension("native_profiler");
        $__internal_562955363f3160d1f62a5d683bb8f28c42c848c36a6b526fb7589ed665bf92d8->enter($__internal_562955363f3160d1f62a5d683bb8f28c42c848c36a6b526fb7589ed665bf92d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BontekoeCinemaBundle:Movie:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_562955363f3160d1f62a5d683bb8f28c42c848c36a6b526fb7589ed665bf92d8->leave($__internal_562955363f3160d1f62a5d683bb8f28c42c848c36a6b526fb7589ed665bf92d8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_435951785922326f387d077656499bd83318d98d3a9634a9785959ad35a9eb1a = $this->env->getExtension("native_profiler");
        $__internal_435951785922326f387d077656499bd83318d98d3a9634a9785959ad35a9eb1a->enter($__internal_435951785922326f387d077656499bd83318d98d3a9634a9785959ad35a9eb1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Movie</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Publicationdate</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "publicationDate", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Genre</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "genre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Runtime</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "runtime", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Productioncompany</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "productioncompany", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>


    <h2>Shows</h2>

    <table>
        ";
        // line 43
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "getShowschema", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["showschema"]) {
            // line 44
            echo "            <tr>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["showschema"], "getDatetime", array(), "method"), "format", array(0 => "j F Y H:i"), "method"), "html", null, true);
            echo "</td>
                <td> <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reservation_new", array("showschema_id" => $this->getAttribute($context["showschema"], "id", array()))), "html", null, true);
            echo "\">Order</a> </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['showschema'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "    </table>
        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("movie");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("movie_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 61
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_435951785922326f387d077656499bd83318d98d3a9634a9785959ad35a9eb1a->leave($__internal_435951785922326f387d077656499bd83318d98d3a9634a9785959ad35a9eb1a_prof);

    }

    public function getTemplateName()
    {
        return "BontekoeCinemaBundle:Movie:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 61,  135 => 57,  127 => 52,  122 => 49,  113 => 46,  109 => 45,  106 => 44,  102 => 43,  90 => 34,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
