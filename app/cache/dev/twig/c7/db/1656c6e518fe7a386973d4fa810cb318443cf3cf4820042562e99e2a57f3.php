<?php

/* BontekoeCinemaBundle:Showschema:new.html.twig */
class __TwigTemplate_c7db1656c6e518fe7a386973d4fa810cb318443cf3cf4820042562e99e2a57f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "BontekoeCinemaBundle:Showschema:new.html.twig", 1);
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
        $__internal_d7a20a65e3ee572de4fcaec8bcb78741598a11b288a6fae86877918180eb1d6b = $this->env->getExtension("native_profiler");
        $__internal_d7a20a65e3ee572de4fcaec8bcb78741598a11b288a6fae86877918180eb1d6b->enter($__internal_d7a20a65e3ee572de4fcaec8bcb78741598a11b288a6fae86877918180eb1d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BontekoeCinemaBundle:Showschema:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7a20a65e3ee572de4fcaec8bcb78741598a11b288a6fae86877918180eb1d6b->leave($__internal_d7a20a65e3ee572de4fcaec8bcb78741598a11b288a6fae86877918180eb1d6b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_26dbb2f80847da128b2a3cd099b73d478bb96b79026c301e4c175680c78dd6f8 = $this->env->getExtension("native_profiler");
        $__internal_26dbb2f80847da128b2a3cd099b73d478bb96b79026c301e4c175680c78dd6f8->enter($__internal_26dbb2f80847da128b2a3cd099b73d478bb96b79026c301e4c175680c78dd6f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Showschema creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("showschema");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
        
        $__internal_26dbb2f80847da128b2a3cd099b73d478bb96b79026c301e4c175680c78dd6f8->leave($__internal_26dbb2f80847da128b2a3cd099b73d478bb96b79026c301e4c175680c78dd6f8_prof);

    }

    public function getTemplateName()
    {
        return "BontekoeCinemaBundle:Showschema:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
