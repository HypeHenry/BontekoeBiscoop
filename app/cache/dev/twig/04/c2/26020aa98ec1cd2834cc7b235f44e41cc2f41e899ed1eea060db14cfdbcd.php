<?php

/* ::base.html.twig */
class __TwigTemplate_04c226020aa98ec1cd2834cc7b235f44e41cc2f41e899ed1eea060db14cfdbcd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_79e2174161dcb16e15e293f6df4f41a9d58e542c924cc664627f5fb6487a7af7 = $this->env->getExtension("native_profiler");
        $__internal_79e2174161dcb16e15e293f6df4f41a9d58e542c924cc664627f5fb6487a7af7->enter($__internal_79e2174161dcb16e15e293f6df4f41a9d58e542c924cc664627f5fb6487a7af7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_79e2174161dcb16e15e293f6df4f41a9d58e542c924cc664627f5fb6487a7af7->leave($__internal_79e2174161dcb16e15e293f6df4f41a9d58e542c924cc664627f5fb6487a7af7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4d2316558f91022322b041d3e39b6a7703227d3d697cc1c02a6576fb1f1dd865 = $this->env->getExtension("native_profiler");
        $__internal_4d2316558f91022322b041d3e39b6a7703227d3d697cc1c02a6576fb1f1dd865->enter($__internal_4d2316558f91022322b041d3e39b6a7703227d3d697cc1c02a6576fb1f1dd865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4d2316558f91022322b041d3e39b6a7703227d3d697cc1c02a6576fb1f1dd865->leave($__internal_4d2316558f91022322b041d3e39b6a7703227d3d697cc1c02a6576fb1f1dd865_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c113ba151e303b13d9b344b2eb2cf867d28b94545297f228182278581e46806c = $this->env->getExtension("native_profiler");
        $__internal_c113ba151e303b13d9b344b2eb2cf867d28b94545297f228182278581e46806c->enter($__internal_c113ba151e303b13d9b344b2eb2cf867d28b94545297f228182278581e46806c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c113ba151e303b13d9b344b2eb2cf867d28b94545297f228182278581e46806c->leave($__internal_c113ba151e303b13d9b344b2eb2cf867d28b94545297f228182278581e46806c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1079d96a28f0b70e0af85d137973f35388676efaa1acfc790c65c8c628da1050 = $this->env->getExtension("native_profiler");
        $__internal_1079d96a28f0b70e0af85d137973f35388676efaa1acfc790c65c8c628da1050->enter($__internal_1079d96a28f0b70e0af85d137973f35388676efaa1acfc790c65c8c628da1050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1079d96a28f0b70e0af85d137973f35388676efaa1acfc790c65c8c628da1050->leave($__internal_1079d96a28f0b70e0af85d137973f35388676efaa1acfc790c65c8c628da1050_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0592aa58b4dc285db36a16166e1ab3b9782b118f13f7fd0a44261c6e2d932cec = $this->env->getExtension("native_profiler");
        $__internal_0592aa58b4dc285db36a16166e1ab3b9782b118f13f7fd0a44261c6e2d932cec->enter($__internal_0592aa58b4dc285db36a16166e1ab3b9782b118f13f7fd0a44261c6e2d932cec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0592aa58b4dc285db36a16166e1ab3b9782b118f13f7fd0a44261c6e2d932cec->leave($__internal_0592aa58b4dc285db36a16166e1ab3b9782b118f13f7fd0a44261c6e2d932cec_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
