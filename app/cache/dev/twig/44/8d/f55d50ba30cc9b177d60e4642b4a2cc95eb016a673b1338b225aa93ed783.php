<?php

/* BontekoeCinemaBundle:Movie:edit.html.twig */
class __TwigTemplate_448df55d50ba30cc9b177d60e4642b4a2cc95eb016a673b1338b225aa93ed783 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "BontekoeCinemaBundle:Movie:edit.html.twig", 1);
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
        $__internal_fe703d9be25b6bad09564c1deba9e02bbd7fe76aefd375c0cdb0bfbc7819b1b0 = $this->env->getExtension("native_profiler");
        $__internal_fe703d9be25b6bad09564c1deba9e02bbd7fe76aefd375c0cdb0bfbc7819b1b0->enter($__internal_fe703d9be25b6bad09564c1deba9e02bbd7fe76aefd375c0cdb0bfbc7819b1b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BontekoeCinemaBundle:Movie:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe703d9be25b6bad09564c1deba9e02bbd7fe76aefd375c0cdb0bfbc7819b1b0->leave($__internal_fe703d9be25b6bad09564c1deba9e02bbd7fe76aefd375c0cdb0bfbc7819b1b0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b7b885ceaa5981f28716f8a1fdfd0bf2a579ff22592400427ddb14602bb6576d = $this->env->getExtension("native_profiler");
        $__internal_b7b885ceaa5981f28716f8a1fdfd0bf2a579ff22592400427ddb14602bb6576d->enter($__internal_b7b885ceaa5981f28716f8a1fdfd0bf2a579ff22592400427ddb14602bb6576d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Movie edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("movie");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_b7b885ceaa5981f28716f8a1fdfd0bf2a579ff22592400427ddb14602bb6576d->leave($__internal_b7b885ceaa5981f28716f8a1fdfd0bf2a579ff22592400427ddb14602bb6576d_prof);

    }

    public function getTemplateName()
    {
        return "BontekoeCinemaBundle:Movie:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
