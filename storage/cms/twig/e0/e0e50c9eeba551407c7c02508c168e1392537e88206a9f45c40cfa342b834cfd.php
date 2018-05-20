<?php

/* C:\xampp\htdocs\cms/themes/cms/partials/site/header.htm */
class __TwigTemplate_21042fd8d8100e7a0fd253c4512326af6bdc3bc971093817bba6ce4816d88c57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- Fixed navbar -->
      <nav class=\"navbar navbar-expand-md\">
        <a class=\"navbar-brand\" href=\"#\">";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "site_name", array()), "html", null, true);
        echo "</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
          <ul class=\"nav navbar-nav \">
             <li class=\"";
        // line 9
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "home")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\">Home</a></li>
            <li class=\"";
        // line 10
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "about")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("about");
        echo "\">About</a></li>
            <li class=\"";
        // line 11
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "blog")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("blog");
        echo "\">Blog</a></li>
            <li class=\"";
        // line 12
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "contact")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("contact");
        echo "\">Contact</a></li>
          </ul>

        </div>
      </nav>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\cms/themes/cms/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 12,  48 => 11,  40 => 10,  32 => 9,  23 => 3,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Fixed navbar -->
      <nav class=\"navbar navbar-expand-md\">
        <a class=\"navbar-brand\" href=\"#\">{{this.theme.site_name}}</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
          <ul class=\"nav navbar-nav \">
             <li class=\"{% if this.page.id=='home' %}active{% endif %}\"><a href=\"{{'home'|page}}\">Home</a></li>
            <li class=\"{% if this.page.id=='about' %}active{% endif %}\"><a href=\"{{'about'|page}}\">About</a></li>
            <li class=\"{% if this.page.id=='blog' %}active{% endif %}\"><a href=\"{{'blog'|page}}\">Blog</a></li>
            <li class=\"{% if this.page.id=='contact' %}active{% endif %}\"><a href=\"{{'contact'|page}}\">Contact</a></li>
          </ul>

        </div>
      </nav>", "C:\\xampp\\htdocs\\cms/themes/cms/partials/site/header.htm", "");
    }
}
