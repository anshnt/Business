<?php

class CT_CtNewsletter_Widget extends Case_Theme_Core_Widget_Base{
    protected $name = 'ct_newsletter';
    protected $title = 'Case Newsletter';
    protected $icon = 'eicon-envelope';
    protected $categories = array( 'case-theme-core' );
    protected $params = '{"sections":[{"name":"source_section","label":"Color Settings","tab":"style","controls":[{"name":"button_label","label":"Button Text","type":"text","label_block":true},{"name":"email_label","label":"Email Placeholder","type":"text","label_block":true},{"name":"style","label":"Style","type":"select","options":{"style1":"Style 1","style2":"Style 2","style3":"Style 3","style4":"Style 4","style5":"Style 5","style6":"Style 6","style7":"Style 7"},"default":"style1"},{"name":"input_color","label":"Input Color","type":"color","condition":{"style":"style1"},"selectors":{"{{WRAPPER}} .ct-newsletter1.style1 .tnp-field-email .tnp-email":"color: {{VALUE}};"}},{"name":"input_bg_color","label":"Input Background Color","type":"color","condition":{"style":"style1"},"selectors":{"{{WRAPPER}} .ct-newsletter1.style1 .tnp-field-email .tnp-email":"background-color: {{VALUE}};"}},{"name":"button_color1","label":"Button Color 1","type":"color","condition":{"style":["style1","style3"]}},{"name":"button_color2","label":"Button Color 2","type":"color","condition":{"style":["style1","style3"]}},{"name":"color_gradient_type","label":"Gradient Type","type":"select","options":{"horizontal":"Horizontal","vertical":"Vertical"},"default":"horizontal","condition":{"style":["style1","style3"]}},{"name":"sub_title","label":"Sub Title","type":"text","label_block":true,"condition":{"style":["style5"]}},{"name":"title","label":"Title","type":"text","label_block":true,"condition":{"style":["style5","style6","style7"]}},{"name":"desc","label":"Description","type":"textarea","label_block":true,"condition":{"style":["style5","style6","style7"]}},{"name":"image_bg_box","label":"Box Background Image","type":"media","condition":{"style":["style5","style7"]}},{"name":"image_box","label":"Box Image","type":"media","condition":{"style":["style5"]}},{"name":"input_border_radius","label":"Input Radius","type":"dimensions","size_units":["px"],"selectors":{"{{WRAPPER}} .ct-newsletter .tnp-field-email .tnp-email":"border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};"}},{"name":"input_typography","label":"Input Typography","type":"typography","control_type":"group","selector":"{{WRAPPER}} .ct-newsletter .tnp-field-email .tnp-email"},{"name":"btn_border_radius","label":"Border Radius","type":"dimensions","size_units":["px"],"selectors":{"{{WRAPPER}} .ct-newsletter .tnp-field-button .tnp-button":"border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};"}}]}]}';
    protected $styles = array(  );
    protected $scripts = array(  );
}