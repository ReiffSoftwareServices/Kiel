<h1>

</h1>
<svg class="dashboard-view-element" height="{{dashboard_data.svgHeight}}" width="{{dashboard_data.svgWidth}}">
    <g>
        <line x1="0" x2="{{dashboard_data.svgWidth}}" y1="10" y2="10" stroke="{{dashboard_data.svgColorLine}}"></line>
    </g>
    <g>
        {% for element in dashboard_data.axe %}
            <line x1="{{element.x2}}" x2="{{element.x2}}" y1="{{element.y1}}" y2="{{element.y2}}" stroke="{{dashboard_data.svgColorLine}}"></line>
        {% endfor %}
    </g>
    <g>
        {% for element in dashboard_data.dataTransformed %}
            <rect x="{{element.x}}" y="{{element.x}}" width="{{element.width}}"  height="{{element.height}}" fill="{{element.color}}" ></rect>
        {% endfor %}
    </g>
</svg>



