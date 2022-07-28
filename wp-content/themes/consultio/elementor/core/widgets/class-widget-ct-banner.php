<?php

class CT_CtBanner_Widget extends Case_Theme_Core_Widget_Base{
    protected $name = 'ct_banner';
    protected $title = 'Case Banner';
    protected $icon = 'eicon-info-box';
    protected $categories = array( 'case-theme-core' );
    protected $params = '{"sections":[{"name":"layout_section","label":"Layout","tab":"layout","controls":[{"name":"layout","label":"Templates","type":"layoutcontrol","default":"1","options":{"1":{"label":"Layout 1","image":"https:\/\/bluzzen.godrejpropertypanvel.info\/wp-content\/themes\/consultio\/elementor\/templates\/widgets\/ct_banner\/layout-image\/layout1.jpg"},"2":{"label":"Layout 2","image":"https:\/\/bluzzen.godrejpropertypanvel.info\/wp-content\/themes\/consultio\/elementor\/templates\/widgets\/ct_banner\/layout-image\/layout2.jpg"},"3":{"label":"Layout 3","image":"https:\/\/bluzzen.godrejpropertypanvel.info\/wp-content\/themes\/consultio\/elementor\/templates\/widgets\/ct_banner\/layout-image\/layout3.jpg"},"4":{"label":"Layout 4","image":"https:\/\/bluzzen.godrejpropertypanvel.info\/wp-content\/themes\/consultio\/elementor\/templates\/widgets\/ct_banner\/layout-image\/layout4.jpg"},"5":{"label":"Layout 5","image":"https:\/\/bluzzen.godrejpropertypanvel.info\/wp-content\/themes\/consultio\/elementor\/templates\/widgets\/ct_banner\/layout-image\/layout5.jpg"}}}]},{"name":"content_section","label":"Banner Box","tab":"content","controls":[{"name":"image","label":"Banner Image","type":"media"},{"name":"thumbnail","label":"Image Size","type":"image-size","control_type":"group","default":"full","condition":{"layout":["1","2","3"]}},{"name":"img_size","label":"Image Size","type":"text","description":"Enter image size (Example: \"thumbnail\", \"medium\", \"large\", \"full\" or other sizes defined by theme). Alternatively enter size in pixels (Example: 200x100 (Width x Height).","condition":{"layout":"4"}},{"name":"title","label":"Title","type":"text"},{"name":"desc","label":"Description","type":"textarea","rows":10,"show_label":false,"condition":{"layout":["2","4"]}},{"name":"icon_image","label":"Icon Image","type":"media","condition":{"layout":"2"}},{"name":"number","label":"Number","type":"text","condition":{"layout":"3"}},{"name":"counter_icon","label":"Counter Icon","type":"icons","fa4compatibility":"icon","condition":{"layout":"3"}},{"name":"counter_number","label":"Counter Number","type":"text","condition":{"layout":"3"}},{"name":"counter_title","label":"Counter Title","type":"text","condition":{"layout":"3"}},{"name":"counter_suffix","label":"Counter Suffix","type":"text","condition":{"layout":"3"}},{"name":"video_link","label":"Video Link","type":"text","condition":{"layout":"5"}},{"name":"video_image","label":"Video Image","type":"media","condition":{"layout":"5"}},{"name":"ct_animate","label":"Case Animate","type":"select","options":{"":"None","wow bounce":"bounce","wow flash":"flash","wow pulse":"pulse","wow rubberBand":"rubberBand","wow shake":"shake","wow swing":"swing","wow tada":"tada","wow wobble":"wobble","wow bounceIn":"bounceIn","wow bounceInDown":"bounceInDown","wow bounceInLeft":"bounceInLeft","wow bounceInRight":"bounceInRight","wow bounceInUp":"bounceInUp","wow bounceOut":"bounceOut","wow bounceOutDown":"bounceOutDown","wow bounceOutLeft":"bounceOutLeft","wow bounceOutRight":"bounceOutRight","wow bounceOutUp":"bounceOutUp","wow fadeIn":"fadeIn","wow fadeInDown":"fadeInDown","wow fadeInDownBig":"fadeInDownBig","wow fadeInLeft":"fadeInLeft","wow fadeInLeftBig":"fadeInLeftBig","wow fadeInRight":"fadeInRight","wow fadeInRightBig":"fadeInRightBig","wow fadeInUp":"fadeInUp","wow fadeInUpBig":"fadeInUpBig","wow fadeOut":"fadeOut","wow fadeOutDown":"fadeOutDown","wow fadeOutDownBig":"fadeOutDownBig","wow fadeOutLeft":"fadeOutLeft","wow fadeOutLeftBig":"fadeOutLeftBig","wow fadeOutRight":"fadeOutRight","wow fadeOutRightBig":"fadeOutRightBig","wow fadeOutUp":"fadeOutUp","wow fadeOutUpBig":"fadeOutUpBig","wow flip":"flip","wow flipInX":"flipInX","wow flipInY":"flipInY","wow flipOutX":"flipOutX","wow flipOutY":"flipOutY","wow lightSpeedIn":"lightSpeedIn","wow lightSpeedOut":"lightSpeedOut","wow rotateIn":"rotateIn","wow rotateInDownLeft":"rotateInDownLeft","wow rotateInDownRight":"rotateInDownRight","wow rotateInUpLeft":"rotateInUpLeft","wow rotateInUpRight":"rotateInUpRight","wow rotateOut":"rotateOut","wow rotateOutDownLeft":"rotateOutDownLeft","wow rotateOutDownRight":"rotateOutDownRight","wow rotateOutUpLeft":"rotateOutUpLeft","wow rotateOutUpRight":"rotateOutUpRight","wow hinge":"hinge","wow rollIn":"rollIn","wow rollOut":"rollOut","wow zoomIn":"zoomIn","wow zoomInDown":"zoomInDown","wow zoomInLeft":"zoomInLeft","wow zoomInRight":"zoomInRight","wow zoomInUp":"zoomInUp","wow zoomOut":"zoomOut","wow zoomOutDown":"zoomOutDown","wow zoomOutLeft":"zoomOutLeft","wow zoomOutRight":"zoomOutRight","wow zoomOutUp":"zoomOutUp"},"default":""},{"name":"ct_animate_delay","label":"Animate Delay","type":"text","default":"0","description":"Enter number. Default 0ms"}]}]}';
    protected $styles = array(  );
    protected $scripts = array( 'jquery-numerator','ct-counter-widget-js' );
}