<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_caddf74ccddf3b3a89789e64630bae9aa6b16c98d7b91aa386ce0e3425f44108 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b08966c70bc296f3c7fe5c7972cbab78f8aaff9e49f354615a34dee7d262989 = $this->env->getExtension("native_profiler");
        $__internal_8b08966c70bc296f3c7fe5c7972cbab78f8aaff9e49f354615a34dee7d262989->enter($__internal_8b08966c70bc296f3c7fe5c7972cbab78f8aaff9e49f354615a34dee7d262989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b08966c70bc296f3c7fe5c7972cbab78f8aaff9e49f354615a34dee7d262989->leave($__internal_8b08966c70bc296f3c7fe5c7972cbab78f8aaff9e49f354615a34dee7d262989_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f614d029a70a5be15df1d4c59cec62dd143a221bcbdf0ca888bd144ef44fcc0f = $this->env->getExtension("native_profiler");
        $__internal_f614d029a70a5be15df1d4c59cec62dd143a221bcbdf0ca888bd144ef44fcc0f->enter($__internal_f614d029a70a5be15df1d4c59cec62dd143a221bcbdf0ca888bd144ef44fcc0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 5
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
";
        }
        // line 7
        echo "
<form action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

    <label for=\"username\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />

    <label for=\"password\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
</form>
";
        
        $__internal_f614d029a70a5be15df1d4c59cec62dd143a221bcbdf0ca888bd144ef44fcc0f->leave($__internal_f614d029a70a5be15df1d4c59cec62dd143a221bcbdf0ca888bd144ef44fcc0f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 20,  76 => 18,  69 => 14,  64 => 12,  60 => 11,  55 => 9,  51 => 8,  48 => 7,  42 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
