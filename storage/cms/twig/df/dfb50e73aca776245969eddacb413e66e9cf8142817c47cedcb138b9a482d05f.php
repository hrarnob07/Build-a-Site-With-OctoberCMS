<?php

/* C:\xampp\htdocs\cms/themes/responsiv-clean/partials/site/footer.htm */
class __TwigTemplate_85f12ed84c0f230ed24fbd77b61ab5cbf32f82811147d593a363b9cd4917da40 extends Twig_Template
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
        echo "<div class=\"footer-inner\">
    <p class=\"muted credit\">
        &copy; 2013 - ";
        // line 3
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "
        &mdash; Powered by <a href=\"#\">October CMS(HR Arnob)</a>
        using <a href=\"https://github.com/responsiv/clean-theme\">clean theam</a>.
    </p>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\cms/themes/responsiv-clean/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"footer-inner\">
    <p class=\"muted credit\">
        &copy; 2013 - {{ \"now\"|date(\"Y\") }}
        &mdash; Powered by <a href=\"#\">October CMS(HR Arnob)</a>
        using <a href=\"https://github.com/responsiv/clean-theme\">clean theam</a>.
    </p>
</div>", "C:\\xampp\\htdocs\\cms/themes/responsiv-clean/partials/site/footer.htm", "");
    }
}
