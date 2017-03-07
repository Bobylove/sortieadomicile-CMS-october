<?php

/* /home/simplon/fred/PHP/october/install-master/themes/demo/pages/addevents.htm */
class __TwigTemplate_56bb6a3d8e18dfb674e85e2b0f8bc7f9dde882053268f286607eee14255a4bdb extends Twig_Template
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
        echo "<div class=\"col-md-offset-4\">
  
\t<div class=\"container\">

\t<h2 class=\"col-md-offset-2\">Créer evenement!</h2>

\t<form method=\"post\" class=\"well col-md-6\">

\t<div class=\"form-group\">
\t\t<label class=\"control-label\" for=\"nom\">Evenement:</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"event\" name=\"event\" required=\"required\">\t
\t</div>
\t\t
\t<div class=\"form-group\">
\t\t<label class=\"control-label\" for=\"datecreate\">Date création event:</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"dateCreate\" name=\"dateCreate\" required=\"required\">\t
\t</div>
\t
\t<div class=\"form-group\">
\t\t<label class=\"control-label\" for=\"nom\">Date début event:</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"dateDebut\" name=\"dateDebut\" required=\"required\">\t
\t</div>
\t
\t<div class=\"form-group\">
\t\t<label class=\"control-label\" for=\"nom\">Horaires:</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"horaire\" name=\"horaire\" required=\"required\">\t
\t</div>
\t
\t<div class=\"form-group\">
\t\t<label class=\"control-label\" for=\"nom\">Themes:</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"themes\" name=\"themes\" required=\"required\">\t
\t</div>
\t
\t<div class=\"form-group\">
\t\t<label class=\"control-label\" for=\"nom\">Description:</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"description\" name=\"description\" required=\"required\">\t
\t</div>
\t
\t<div class=\"form-group\">
\t\t<label class=\"control-label\" for=\"nom\">Type:</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"type\" name=\"type\" required=\"required\">\t
\t</div>
\t
\t<div class=\"form-group\">
\t\t<label class=\"control-label\" for=\"nom\">Ville:</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"ville\" name=\"ville\" required=\"required\">\t
\t</div>
\t
    <div class=\"form-group\">
\t\t<label class=\"control-label\" for=\"nom\">Adresse:</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"adresse\" name=\"adresse\" required=\"required\">\t
\t</div>
\t
\t<div class=\"form-group\">
\t\t<label class=\"control-label\" for=\"nom\">Code postale:</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"codePostale\" name=\"codePostale\" required=\"required\">\t
\t</div>
\t
\t<div class=\"form-group\">
\t\t<label class=\"control-label\" for=\"nom\">prix:</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"prix\" name=\"prix\" required=\"required\">\t
\t</div>
\t
\t<div class=\"form-group\">
\t\t<label class=\"control-label\" for=\"nom\">Option transport:</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"transport\" name=\"transport\" required=\"required\">\t
\t</div>
\t
\t<div class=\"form-group\">
\t\t<label class=\"control-label\" for=\"nom\">Info prix:</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"infoPrix\" name=\"infoPrix\" required=\"required\">\t
\t</div>
\t
\t
\t
\t
\t
\t
    <button type=\"button\" class=\"btn btn-primary\">Primary</button>

\t\t
\t</form>
\t</div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/simplon/fred/PHP/october/install-master/themes/demo/pages/addevents.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"col-md-offset-4\">
  
\t<div class=\"container\">

\t<h2 class=\"col-md-offset-2\">Créer evenement!</h2>

\t<form method=\"post\" class=\"well col-md-6\">

\t<div class=\"form-group\">
\t\t<label class=\"control-label\" for=\"nom\">Evenement:</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"event\" name=\"event\" required=\"required\">\t
\t</div>
\t\t
\t<div class=\"form-group\">
\t\t<label class=\"control-label\" for=\"datecreate\">Date création event:</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"dateCreate\" name=\"dateCreate\" required=\"required\">\t
\t</div>
\t
\t<div class=\"form-group\">
\t\t<label class=\"control-label\" for=\"nom\">Date début event:</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"dateDebut\" name=\"dateDebut\" required=\"required\">\t
\t</div>
\t
\t<div class=\"form-group\">
\t\t<label class=\"control-label\" for=\"nom\">Horaires:</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"horaire\" name=\"horaire\" required=\"required\">\t
\t</div>
\t
\t<div class=\"form-group\">
\t\t<label class=\"control-label\" for=\"nom\">Themes:</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"themes\" name=\"themes\" required=\"required\">\t
\t</div>
\t
\t<div class=\"form-group\">
\t\t<label class=\"control-label\" for=\"nom\">Description:</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"description\" name=\"description\" required=\"required\">\t
\t</div>
\t
\t<div class=\"form-group\">
\t\t<label class=\"control-label\" for=\"nom\">Type:</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"type\" name=\"type\" required=\"required\">\t
\t</div>
\t
\t<div class=\"form-group\">
\t\t<label class=\"control-label\" for=\"nom\">Ville:</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"ville\" name=\"ville\" required=\"required\">\t
\t</div>
\t
    <div class=\"form-group\">
\t\t<label class=\"control-label\" for=\"nom\">Adresse:</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"adresse\" name=\"adresse\" required=\"required\">\t
\t</div>
\t
\t<div class=\"form-group\">
\t\t<label class=\"control-label\" for=\"nom\">Code postale:</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"codePostale\" name=\"codePostale\" required=\"required\">\t
\t</div>
\t
\t<div class=\"form-group\">
\t\t<label class=\"control-label\" for=\"nom\">prix:</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"prix\" name=\"prix\" required=\"required\">\t
\t</div>
\t
\t<div class=\"form-group\">
\t\t<label class=\"control-label\" for=\"nom\">Option transport:</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"transport\" name=\"transport\" required=\"required\">\t
\t</div>
\t
\t<div class=\"form-group\">
\t\t<label class=\"control-label\" for=\"nom\">Info prix:</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"infoPrix\" name=\"infoPrix\" required=\"required\">\t
\t</div>
\t
\t
\t
\t
\t
\t
    <button type=\"button\" class=\"btn btn-primary\">Primary</button>

\t\t
\t</form>
\t</div>
</div>
</div>", "/home/simplon/fred/PHP/october/install-master/themes/demo/pages/addevents.htm", "");
    }
}
