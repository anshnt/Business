<?php

class CT_CtServiceExternal_Widget extends Case_Theme_Core_Widget_Base{
    protected $name = 'ct_service_external';
    protected $title = 'Case Services External Slider';
    protected $icon = 'eicon-cogs';
    protected $categories = array( 'case-theme-core' );
    protected $params = '{"sections":[{"name":"layout_section","label":"Layout","tab":"layout","controls":[{"name":"layout","label":"Templates","type":"layoutcontrol","default":"1","options":{"1":{"label":"Layout 1","image":"wp-content\/themes\/consultio\/elementor\/templates\/widgets\/ct_service_external\/layout-image\/layout1.jpg"}}}]},{"name":"content_list","label":"Items","tab":"content","controls":[{"name":"service","label":"Add Item","type":"repeater","controls":[{"name":"image","label":"Featured","type":"media"},{"name":"icon_type","label":"Icon Type","type":"select","options":{"icon":"Icon","image":"Image"},"default":"icon"},{"name":"selected_icon","label":"Icon","type":"icons","fa4compatibility":"icon","condition":{"icon_type":"icon"}},{"name":"icon_image","label":"Icon Image","type":"media","description":"Select image icon.","condition":{"icon_type":"image"}},{"name":"title","label":"Title","type":"text","label_block":true},{"name":"description","label":"Description","type":"textarea","rows":10},{"name":"btn_text","label":"Button Text","type":"text"},{"name":"btn_link","label":"Button Link","type":"url"}],"title_field":"{{{ title }}}"}]},{"name":"section_style_title","label":"Title","tab":"style","controls":[{"name":"title_color","label":"Color","type":"color","selectors":{"{{WRAPPER}} .ct-service-external .item--title":"color: {{VALUE}};"}},{"name":"title_typography","type":"typography","control_type":"group","selector":"{{WRAPPER}} .ct-service-external .item--title"}]},{"name":"section_style_description","label":"Description","tab":"style","controls":[{"name":"description_color","label":"Color","type":"color","selectors":{"{{WRAPPER}} .ct-service-external .item--description":"color: {{VALUE}};"}},{"name":"description_typography","type":"typography","control_type":"group","selector":"{{WRAPPER}} .ct-service-external .item--description"}]},{"name":"section_style_button","label":"Button","tab":"style","condition":{"layout":"1"},"controls":[{"name":"btn_color","label":"Text Color","type":"color","selectors":{"{{WRAPPER}} .ct-service-external .item--readmore .btn":"color: {{VALUE}} !important;"}},{"name":"btn_bg_color","label":"Background Color","type":"color","selectors":{"{{WRAPPER}} .ct-service-external .item--readmore .btn":"background-color: {{VALUE}} !important;"}}]},{"name":"section_style_icon","label":"Icon","tab":"style","condition":{"layout":"1"},"controls":[{"name":"icon_color","label":"Color","type":"color","selectors":{"{{WRAPPER}} .ct-service-external .item--icon i":"color: {{VALUE}};"}},{"name":"icon_box_color","label":"Box Color","type":"color","selectors":{"{{WRAPPER}} .ct-service-external .item--icon":"background-color: {{VALUE}};"}}]},{"name":"section_style_box","label":"Box","tab":"style","condition":{"layout":"1"},"controls":[{"name":"box_overlay_color","label":"Overlay Color","type":"color","selectors":{"{{WRAPPER}} .ct-service-external .item--overlay":"background-color: {{VALUE}};"}},{"name":"box_overlay_img","label":"Overlay Image","type":"media"}]},{"name":"section_carousel_settings","label":"Carousel Settings","tab":"settings","controls":[{"name":"img_size","label":"Image Size","type":"text","description":"Enter image size (Example: \"thumbnail\", \"medium\", \"large\", \"full\" or other sizes defined by theme). Alternatively enter size in pixels (Default: 370x300 (Width x Height))."},{"name":"ct_animate","label":"Case Animate","type":"select","options":{"":"None","wow bounce":"bounce","wow flash":"flash","wow pulse":"pulse","wow rubberBand":"rubberBand","wow shake":"shake","wow swing":"swing","wow tada":"tada","wow wobble":"wobble","wow bounceIn":"bounceIn","wow bounceInDown":"bounceInDown","wow bounceInLeft":"bounceInLeft","wow bounceInRight":"bounceInRight","wow bounceInUp":"bounceInUp","wow bounceOut":"bounceOut","wow bounceOutDown":"bounceOutDown","wow bounceOutLeft":"bounceOutLeft","wow bounceOutRight":"bounceOutRight","wow bounceOutUp":"bounceOutUp","wow fadeIn":"fadeIn","wow fadeInDown":"fadeInDown","wow fadeInDownBig":"fadeInDownBig","wow fadeInLeft":"fadeInLeft","wow fadeInLeftBig":"fadeInLeftBig","wow fadeInRight":"fadeInRight","wow fadeInRightBig":"fadeInRightBig","wow fadeInUp":"fadeInUp","wow fadeInUpBig":"fadeInUpBig","wow fadeOut":"fadeOut","wow fadeOutDown":"fadeOutDown","wow fadeOutDownBig":"fadeOutDownBig","wow fadeOutLeft":"fadeOutLeft","wow fadeOutLeftBig":"fadeOutLeftBig","wow fadeOutRight":"fadeOutRight","wow fadeOutRightBig":"fadeOutRightBig","wow fadeOutUp":"fadeOutUp","wow fadeOutUpBig":"fadeOutUpBig","wow flip":"flip","wow flipInX":"flipInX","wow flipInY":"flipInY","wow flipOutX":"flipOutX","wow flipOutY":"flipOutY","wow lightSpeedIn":"lightSpeedIn","wow lightSpeedOut":"lightSpeedOut","wow rotateIn":"rotateIn","wow rotateInDownLeft":"rotateInDownLeft","wow rotateInDownRight":"rotateInDownRight","wow rotateInUpLeft":"rotateInUpLeft","wow rotateInUpRight":"rotateInUpRight","wow rotateOut":"rotateOut","wow rotateOutDownLeft":"rotateOutDownLeft","wow rotateOutDownRight":"rotateOutDownRight","wow rotateOutUpLeft":"rotateOutUpLeft","wow rotateOutUpRight":"rotateOutUpRight","wow hinge":"hinge","wow rollIn":"rollIn","wow rollOut":"rollOut","wow zoomIn":"zoomIn","wow zoomInDown":"zoomInDown","wow zoomInLeft":"zoomInLeft","wow zoomInRight":"zoomInRight","wow zoomInUp":"zoomInUp","wow zoomOut":"zoomOut","wow zoomOutDown":"zoomOutDown","wow zoomOutLeft":"zoomOutLeft","wow zoomOutRight":"zoomOutRight","wow zoomOutUp":"zoomOutUp"},"default":""},{"name":"col_xs","label":"Columns XS Devices","type":"select","default":"1","options":{"1":"1","2":"2","3":"3","4":"4","6":"6"}},{"name":"col_sm","label":"Columns SM Devices","type":"select","default":"2","options":{"1":"1","2":"2","3":"3","4":"4","6":"6"}},{"name":"col_md","label":"Columns MD Devices","type":"select","default":"3","options":{"1":"1","2":"2","3":"3","4":"4","6":"6"}},{"name":"col_lg","label":"Columns LG Devices","type":"select","default":"3","options":{"1":"1","2":"2","3":"3","4":"4","6":"6"}},{"name":"col_xl","label":"Columns XL Devices","type":"select","default":"3","options":{"1":"1","2":"2","3":"3","4":"4","6":"6"}},{"name":"slides_to_scroll","label":"Slides to scroll","type":"select","default":"1","options":{"1":"1","2":"2","3":"3","4":"4","6":"6"}},{"name":"arrows","label":"Show Arrows","type":"switcher"},{"name":"dots","label":"Show Dots","type":"switcher"},{"name":"pause_on_hover","label":"Pause on Hover","type":"switcher"},{"name":"autoplay","label":"Autoplay","type":"switcher"},{"name":"autoplay_speed","label":"Autoplay Speed","type":"number","default":5000,"condition":{"autoplay":"true"}},{"name":"infinite","label":"Infinite Loop","type":"switcher"},{"name":"speed","label":"Animation Speed","type":"number","default":500}]}]}';
    protected $styles = array(  );
    protected $scripts = array( 'jquery-slick','ct-post-carousel-widget-js' );
}