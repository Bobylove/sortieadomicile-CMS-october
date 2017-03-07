<?php

/* /home/simplon/fred/PHP/october/install-master/themes/demo/pages/home.htm */
class __TwigTemplate_3e520f0e171de8f630a99f3a7341996c958bad3cd4b7a42261b6e91c55b4c837 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["user"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["users"]) {
            // line 2
            echo "<p>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["users"], "prix", array()), "html", null, true);
            echo "</p>
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['users'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/home/simplon/fred/PHP/october/install-master/themes/demo/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for users in user %}
<p>{{users.prix}}</p>
 {% endfor %}", "/home/simplon/fred/PHP/october/install-master/themes/demo/pages/home.htm", "");
    }
}
