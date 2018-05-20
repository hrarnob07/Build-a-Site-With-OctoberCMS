<?php

/* C:\xampp\htdocs\cms/themes/cms/layouts/default.htm */
class __TwigTemplate_f523e28cfe88ed552db7bb5d043ee5823d5dc88c91f88bd12be95790a675a410 extends Twig_Template
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
        echo "<!DOCTYPE>
<html>
<head>
\t<title> cms ";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo " </title>
\t<link rel=\"stylesheet\" href=\"https://bootswatch.com/4/sandstone/bootstrap.min.css\">
\t<link rel=\"stylesheet\"  href=\"";
        // line 6
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/theme.css");
        echo "\">
\t";
        // line 7
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 8
        echo "</head>


<body>
<div class=\"container\">
\t    <header id=\"layout-header\">
            ";
        // line 14
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 15
        echo "        </header>

       
        <section id=\"layout-content\">
            ";
        // line 19
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 20
        echo "        </section>   
        <footer>
    \t  ";
        // line 22
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 23
        echo "        </footer>
 </div>
    <script src=\"";
        // line 25
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/vendor/jquery.js");
        echo "\"></script>
    <script src=\"";
        // line 26
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/vendor/bootstrap.js");
        echo "\"></script>
    <script src=\"";
        // line 27
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/javascript/app.js");
        echo "\"></script>
    \t
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\cms/themes/cms/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 27,  72 => 26,  68 => 25,  64 => 23,  60 => 22,  56 => 20,  54 => 19,  48 => 15,  44 => 14,  36 => 8,  33 => 7,  29 => 6,  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE>
<html>
<head>
\t<title> cms {{ this.page.title }} </title>
\t<link rel=\"stylesheet\" href=\"https://bootswatch.com/4/sandstone/bootstrap.min.css\">
\t<link rel=\"stylesheet\"  href=\"{{'assets/css/theme.css'|theme}}\">
\t{% styles %}
</head>


<body>
<div class=\"container\">
\t    <header id=\"layout-header\">
            {% partial 'site/header' %}
        </header>

       
        <section id=\"layout-content\">
            {% page %}
        </section>   
        <footer>
    \t  {% partial 'site/footer'%}
        </footer>
 </div>
    <script src=\"{{'assets/vendor/jquery.js'|theme}}\"></script>
    <script src=\"{{'assets/vendor/bootstrap.js'|theme}}\"></script>
    <script src=\"{{'assets/javascript/app.js'|theme}}\"></script>
    \t
</body>

</html>", "C:\\xampp\\htdocs\\cms/themes/cms/layouts/default.htm", "");
    }
}
