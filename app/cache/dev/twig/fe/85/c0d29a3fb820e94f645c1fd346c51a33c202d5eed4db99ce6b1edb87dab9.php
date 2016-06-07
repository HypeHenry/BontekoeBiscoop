<?php

/* BontekoeCinemaBundle:Cinema:show.html.twig */
class __TwigTemplate_fe85c0d29a3fb820e94f645c1fd346c51a33c202d5eed4db99ce6b1edb87dab9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "BontekoeCinemaBundle:Cinema:show.html.twig", 1);
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
        $__internal_9f247f149a28b3211a86ee589ccf2aa57f3d7351585e9193cdd576ce95f7c376 = $this->env->getExtension("native_profiler");
        $__internal_9f247f149a28b3211a86ee589ccf2aa57f3d7351585e9193cdd576ce95f7c376->enter($__internal_9f247f149a28b3211a86ee589ccf2aa57f3d7351585e9193cdd576ce95f7c376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BontekoeCinemaBundle:Cinema:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f247f149a28b3211a86ee589ccf2aa57f3d7351585e9193cdd576ce95f7c376->leave($__internal_9f247f149a28b3211a86ee589ccf2aa57f3d7351585e9193cdd576ce95f7c376_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7efccf3bba63c7d9d518c0083436625693213819c31713db993a2a2396afe0d = $this->env->getExtension("native_profiler");
        $__internal_c7efccf3bba63c7d9d518c0083436625693213819c31713db993a2a2396afe0d->enter($__internal_c7efccf3bba63c7d9d518c0083436625693213819c31713db993a2a2396afe0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Cinema</h1>

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
                <th>Number</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "number", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Rows</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "rows", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Rowsseats</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "rowsSeats", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("cinema");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cinema_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
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
        
        $__internal_c7efccf3bba63c7d9d518c0083436625693213819c31713db993a2a2396afe0d->leave($__internal_c7efccf3bba63c7d9d518c0083436625693213819c31713db993a2a2396afe0d_prof);

    }

    public function getTemplateName()
    {
        return "BontekoeCinemaBundle:Cinema:show.html.twig";
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
