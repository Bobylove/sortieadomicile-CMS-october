<?php

/* /home/simplon/fred/PHP/october/install-master/themes/demo/partials/site/header.htm */
class __TwigTemplate_aa016854de7bff3f6e48c6014287df472279e9eeee5bb62f7f35f31f707bff9a extends Twig_Template
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
        echo "<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.css\">
<body>
  <h1>Bienvenue sur Sorties A Domicile</h1>
  <div class=\"ui three item menu\">
    <a class=\"item\" href=\"/\">Accueil</a>
    <a class=\"item\" href=\"/apropos\">A propos</a>
    <a class=\"item\" href=\"/contact\">Contact</a>
  </div>
  <br>
  <br>";
    }

    public function getTemplateName()
    {
        return "/home/simplon/fred/PHP/october/install-master/themes/demo/partials/site/header.htm";
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
        return new Twig_Source("<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.css\">
<body>
  <h1>Bienvenue sur Sorties A Domicile</h1>
  <div class=\"ui three item menu\">
    <a class=\"item\" href=\"/\">Accueil</a>
    <a class=\"item\" href=\"/apropos\">A propos</a>
    <a class=\"item\" href=\"/contact\">Contact</a>
  </div>
  <br>
  <br>", "/home/simplon/fred/PHP/october/install-master/themes/demo/partials/site/header.htm", "");
    }
}
