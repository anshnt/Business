<?php

class CT_CmsTab_Widget extends Case_Theme_Core_Widget_Base{
    protected $name = 'cms_tab';
    protected $title = 'Tabs Anything';
    protected $icon = 'eicon-tabs';
    protected $categories = array( 'case-theme-core' );
    protected $params = '{"sections":[{"name":"layout_section","label":"Layout","tab":"layout","controls":[{"name":"layout","label":"Templates","type":"layoutcontrol","default":"1","options":{"1":{"label":"Layout 1","image":"http:\/\/localhost\/ctthemes\/consultio\/wp-content\/themes\/consultio\/elementor\/templates\/widgets\/cms_tab\/layout1.png"}}}]},{"name":"section_tabs","label":"Tabs","tab":"content","controls":[{"name":"active_tab","label":"Active Tab","type":"number","default":1,"separator":"after"},{"name":"tabs","label":"Tabs Items","type":"repeater","controls":[{"name":"tab_title","label":"Title &amp; Description","type":"text","default":"Tab Title","placeholder":"Tab Title","label_block":true},{"name":"content_type","label":"Content Type","type":"select","default":"template","options":{"template":"Template","text_editor":"Text Editor"}},{"name":"tab_content_template","label":"Template","type":"select","default":"","options":{"":"Select Template","1182":"Call To Action","1128":"Home 1","1101":"About","1062":"Services v.2","1053":"Heading 2 Columns Inner","971":"Pricing","899":"Service 2 column","801":"Footer 1","730":"Porfolio Details","697":"Portfolio Grid","676":"Heading","588":"Service Details","462":"Services v.1"},"condition":{"content_type":"template"}},{"name":"tab_content","label":"Content","type":"wysiwyg","default":"Tab Content","placeholder":"Tab Content","show_label":false,"condition":{"content_type":"text_editor"}}],"default":[{"tab_title":"Tab #1","tab_content":"Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo."},{"tab_title":"Tab #2","tab_content":"Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo."}],"title_field":"{{{ tab_title }}}"},{"name":"type","label":"Type","type":"select","default":"horizontal","options":{"horizontal":"Horizontal","vertical":"Vertical"},"prefix_class":"ct-tabs-view-","separator":"before"}]},{"name":"section_tabs_style","label":"Tabs","tab":"style","controls":[{"name":"navigation_width","label":"Navigation Width","type":"slider","default":{"unit":"%"},"range":{"%":{"min":10,"max":50}},"selectors":{"{{WRAPPER}} .ct-tabs-title":"width: {{SIZE}}{{UNIT}}"},"condition":{"type":"vertical"}},{"name":"border_width","label":"Border Width","type":"slider","default":{"size":1},"range":{"px":{"min":0,"max":10}},"selectors":{"{{WRAPPER}} .ct-tabs-title, {{WRAPPER}} .ct-tab-content, {{WRAPPER}}.ct-tabs-view-vertical .ct-tab-title":"border-width: {{SIZE}}{{UNIT}};"}},{"name":"border_color","label":"Border Color","type":"color","selectors":{"{{WRAPPER}} .ct-tabs-title, {{WRAPPER}} .ct-tab-content, {{WRAPPER}}.ct-tabs-view-vertical .ct-tab-title":"border-color: {{VALUE}};"}},{"name":"background_color","label":"Background Color","type":"color","selectors":{"{{WRAPPER}} .ct-tab-title.active":"background-color: {{VALUE}};","{{WRAPPER}} .ct-tab-content":"background-color: {{VALUE}};"}}]},{"name":"section_title_style","label":"Title","tab":"style","controls":[{"name":"tab_color","label":"Color","type":"color","selectors":{"{{WRAPPER}} .ct-tab-title":"color: {{VALUE}};"}},{"name":"tab_active_color","label":"Active Color","type":"color","selectors":{"{{WRAPPER}} .ct-tab-title.active":"color: {{VALUE}};"}},{"name":"tab_typography","type":"typography","control_type":"group","selector":"{{WRAPPER}} .ct-tab-title"}]},{"name":"section_content_style","label":"Content","tab":"style","controls":[{"name":"content_color","label":"Color","type":"color","selectors":{"{{WRAPPER}} .ct-tab-content":"color: {{VALUE}};"}},{"name":"content_typography","type":"typography","control_type":"group","selector":"{{WRAPPER}} .ct-tab-content"}]}]}';
    protected $styles = array(  );
    protected $scripts = array( 'ct-tabs-widget-js' );
}