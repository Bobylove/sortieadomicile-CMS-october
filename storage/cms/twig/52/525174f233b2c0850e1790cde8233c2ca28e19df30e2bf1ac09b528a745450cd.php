<?php

/* /home/simplon/fred/PHP/october/install-master/plugins/vojtasvoboda/reservations/components/reservationform/success.htm */
class __TwigTemplate_072c7915c3822b983c3f54a323661b37b891cb25b908b0c7821d88716a24ac4c extends Twig_Template
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
        echo "<p class=\"alert alert-success\">
    Reservation was successufully sent.
</p>
";
    }

    public function getTemplateName()
    {
        return "/home/simplon/fred/PHP/october/install-master/plugins/vojtasvoboda/reservations/components/reservationform/success.htm";
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
        return new Twig_Source("<p class=\"alert alert-success\">
    Reservation was successufully sent.
</p>
", "/home/simplon/fred/PHP/october/install-master/plugins/vojtasvoboda/reservations/components/reservationform/success.htm", "");
    }
}
