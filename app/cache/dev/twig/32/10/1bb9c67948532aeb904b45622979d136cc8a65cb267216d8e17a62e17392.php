<?php

/* BontekoeCinemaBundle:Showschema:show.html.twig */
class __TwigTemplate_32101bb9c67948532aeb904b45622979d136cc8a65cb267216d8e17a62e17392 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "BontekoeCinemaBundle:Showschema:show.html.twig", 1);
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
        $__internal_cae634af2e0c538de827c45b65ed97208f51ab72d2cb3066e3e66eb18cfff6cb = $this->env->getExtension("native_profiler");
        $__internal_cae634af2e0c538de827c45b65ed97208f51ab72d2cb3066e3e66eb18cfff6cb->enter($__internal_cae634af2e0c538de827c45b65ed97208f51ab72d2cb3066e3e66eb18cfff6cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BontekoeCinemaBundle:Showschema:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cae634af2e0c538de827c45b65ed97208f51ab72d2cb3066e3e66eb18cfff6cb->leave($__internal_cae634af2e0c538de827c45b65ed97208f51ab72d2cb3066e3e66eb18cfff6cb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b547ba7fb766589346069e64bf7b22c05fc25e11bb12b2b85d9cad740c71b66 = $this->env->getExtension("native_profiler");
        $__internal_1b547ba7fb766589346069e64bf7b22c05fc25e11bb12b2b85d9cad740c71b66->enter($__internal_1b547ba7fb766589346069e64bf7b22c05fc25e11bb12b2b85d9cad740c71b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Showschema</h1>

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
                <th>Date</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "datetime", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cinema</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "getCinema", array(), "method"), "getNumber", array(), "method"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Movie</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "getMovie", array(), "method"), "getTitle", array(), "method"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("showschema");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("showschema_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 38
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_1b547ba7fb766589346069e64bf7b22c05fc25e11bb12b2b85d9cad740c71b66->leave($__internal_1b547ba7fb766589346069e64bf7b22c05fc25e11bb12b2b85d9cad740c71b66_prof);

    }

    public function getTemplateName()
    {
        return "BontekoeCinemaBundle:Showschema:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 38,  87 => 34,  79 => 29,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
