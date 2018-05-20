<?php

/* C:\xampp\htdocs\cms/themes/cms/pages/home.htm */
class __TwigTemplate_eca12703e94f39b3cf6404f625fd91285d4a8b51f68fd18f579a4a0662af66d3 extends Twig_Template
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
        echo "<div class=\"jumbotron\">

\t
\t<a href=\"";
        // line 4
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("about");
        echo "\" class=\"btn btn-default\">Read more</a>
\t
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\cms/themes/cms/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"jumbotron\">

\t
\t<a href=\"{{'about'|page}}\" class=\"btn btn-default\">Read more</a>
\t
</div>", "C:\\xampp\\htdocs\\cms/themes/cms/pages/home.htm", "");
    }
}
