{% autoescape false %}
{% if ( PAGE_TITLE_DISPLAY == "None" ) %}
    {# Dont show any title #}
{% else %}
    <h1 class="reportico-title">{{ CONTENT.title }}</h1>
{% endif %}
{% endautoescape %}
