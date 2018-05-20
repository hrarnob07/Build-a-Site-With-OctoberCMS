<?php

/* C:\xampp\htdocs\cms/themes/cms/pages/blog.htm */
class __TwigTemplate_fe26b738614ab43c7d1f2c64367465428669296ee0d99a8be1540569c56e490c extends Twig_Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("blogPosts"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\cms/themes/cms/pages/blog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%component 'blogPosts' %}", "C:\\xampp\\htdocs\\cms/themes/cms/pages/blog.htm", "");
    }
}
