<?php

/* /home/simplon/fred/PHP/october/install-master/themes/demo/partials/site/footer.htm */
class __TwigTemplate_42d8486e07b2ccedab48c20a1e5da22e0afdededefc199382dc19c52d92d8461 extends Twig_Template
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
        echo "<div id=\"footer\">
    <div class=\"container\">
        <hr />
        <p class=\"muted credit\">&copy; ";
        // line 4
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Caroline Lamorthe &amp; Simplon.co.</p>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/simplon/fred/PHP/october/install-master/themes/demo/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"footer\">
    <div class=\"container\">
        <hr />
        <p class=\"muted credit\">&copy; {{ \"now\"|date(\"Y\") }} Caroline Lamorthe &amp; Simplon.co.</p>
    </div>
</div>", "/home/simplon/fred/PHP/october/install-master/themes/demo/partials/site/footer.htm", "");
    }
}
