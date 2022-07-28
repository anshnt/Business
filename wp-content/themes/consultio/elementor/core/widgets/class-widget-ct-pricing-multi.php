<?php

class CT_CtPricingMulti_Widget extends Case_Theme_Core_Widget_Base{
    protected $name = 'ct_pricing_multi';
    protected $title = 'Case Pricing Multi';
    protected $icon = 'eicon-settings';
    protected $categories = array( 'case-theme-core' );
    protected $params = '{"sections":[{"name":"layout_section","label":"Layout","tab":"layout","controls":[{"name":"layout","label":"Templates","type":"layoutcontrol","default":"1","options":{"1":{"label":"Layout 1","image":"https:\/\/bluzzen.godrejpropertypanvel.info\/wp-content\/themes\/consultio\/elementor\/templates\/widgets\/ct_pricing_multi\/layout-image\/layout1.jpg"},"2":{"label":"Layout 2","image":"https:\/\/bluzzen.godrejpropertypanvel.info\/wp-content\/themes\/consultio\/elementor\/templates\/widgets\/ct_pricing_multi\/layout-image\/layout2.jpg"},"3":{"label":"Layout 3","image":"https:\/\/bluzzen.godrejpropertypanvel.info\/wp-content\/themes\/consultio\/elementor\/templates\/widgets\/ct_pricing_multi\/layout-image\/layout3.jpg"}}}]},{"name":"section_list_monthly","label":"Pricing Monthly","tab":"content","controls":[{"name":"tab_title_monthly","label":"Tab Title","type":"text"},{"name":"col_monthly","label":"Column","type":"select","options":{"1":"1","2":"2","3":"3","4":"4","5":"5"},"default":"4"},{"name":"pricing_note","label":"Note","type":"text","condition":{"layout":["3"]}},{"name":"ct_animate","label":"Case Animate","type":"select","options":{"":"None","wow bounce":"bounce","wow flash":"flash","wow pulse":"pulse","wow rubberBand":"rubberBand","wow shake":"shake","wow swing":"swing","wow tada":"tada","wow wobble":"wobble","wow bounceIn":"bounceIn","wow bounceInDown":"bounceInDown","wow bounceInLeft":"bounceInLeft","wow bounceInRight":"bounceInRight","wow bounceInUp":"bounceInUp","wow bounceOut":"bounceOut","wow bounceOutDown":"bounceOutDown","wow bounceOutLeft":"bounceOutLeft","wow bounceOutRight":"bounceOutRight","wow bounceOutUp":"bounceOutUp","wow fadeIn":"fadeIn","wow fadeInDown":"fadeInDown","wow fadeInDownBig":"fadeInDownBig","wow fadeInLeft":"fadeInLeft","wow fadeInLeftBig":"fadeInLeftBig","wow fadeInRight":"fadeInRight","wow fadeInRightBig":"fadeInRightBig","wow fadeInUp":"fadeInUp","wow fadeInUpBig":"fadeInUpBig","wow fadeOut":"fadeOut","wow fadeOutDown":"fadeOutDown","wow fadeOutDownBig":"fadeOutDownBig","wow fadeOutLeft":"fadeOutLeft","wow fadeOutLeftBig":"fadeOutLeftBig","wow fadeOutRight":"fadeOutRight","wow fadeOutRightBig":"fadeOutRightBig","wow fadeOutUp":"fadeOutUp","wow fadeOutUpBig":"fadeOutUpBig","wow flip":"flip","wow flipInX":"flipInX","wow flipInY":"flipInY","wow flipOutX":"flipOutX","wow flipOutY":"flipOutY","wow lightSpeedIn":"lightSpeedIn","wow lightSpeedOut":"lightSpeedOut","wow rotateIn":"rotateIn","wow rotateInDownLeft":"rotateInDownLeft","wow rotateInDownRight":"rotateInDownRight","wow rotateInUpLeft":"rotateInUpLeft","wow rotateInUpRight":"rotateInUpRight","wow rotateOut":"rotateOut","wow rotateOutDownLeft":"rotateOutDownLeft","wow rotateOutDownRight":"rotateOutDownRight","wow rotateOutUpLeft":"rotateOutUpLeft","wow rotateOutUpRight":"rotateOutUpRight","wow hinge":"hinge","wow rollIn":"rollIn","wow rollOut":"rollOut","wow zoomIn":"zoomIn","wow zoomInDown":"zoomInDown","wow zoomInLeft":"zoomInLeft","wow zoomInRight":"zoomInRight","wow zoomInUp":"zoomInUp","wow zoomOut":"zoomOut","wow zoomOutDown":"zoomOutDown","wow zoomOutLeft":"zoomOutLeft","wow zoomOutRight":"zoomOutRight","wow zoomOutUp":"zoomOutUp"},"default":""},{"name":"content_monthly","label":"Content","type":"repeater","default":[],"condition":{"layout":["1","3"]},"controls":[{"name":"featured","label":"Featured","type":"select","options":{"no":"No","yes":"Yes"},"default":"no"},{"name":"title","label":"Title","type":"text","label_block":true},{"name":"desc","label":"Description","type":"textarea"},{"name":"time","label":"Time","type":"text"},{"name":"price","label":"Price","type":"text"},{"name":"feature","label":"Feature","type":"ct_lists_pricing"},{"name":"button_text","label":"Button Text","type":"text","default":""},{"name":"button_link","label":"Button Link","type":"url"}],"title_field":"{{{ title }}}"},{"name":"content_monthly2","label":"Content","type":"repeater","default":[],"condition":{"layout":"2"},"controls":[{"name":"ct_icon","label":"Icon","type":"icons","fa4compatibility":"icon","default":{"value":"fas fa-star","library":"fa-solid"}},{"name":"title","label":"Title","type":"text","label_block":true},{"name":"time","label":"Time","type":"text"},{"name":"price","label":"Price","type":"text"},{"name":"feature","label":"Feature","type":"ct_lists_pricing"},{"name":"button_text","label":"Button Text","type":"text","default":""},{"name":"button_link","label":"Button Link","type":"url"}],"title_field":"{{{ title }}}"}]},{"name":"section_list_year","label":"Pricing Year","tab":"content","controls":[{"name":"tab_title_year","label":"Tab Title","type":"text"},{"name":"col_year","label":"Column","type":"select","options":{"1":"1","2":"2","3":"3","4":"4","5":"5"},"default":"4"},{"name":"content_year","label":"Content","type":"repeater","default":[],"condition":{"layout":["1","3"]},"controls":[{"name":"featured","label":"Featured","type":"select","options":{"no":"No","yes":"Yes"},"default":"no"},{"name":"title","label":"Title","type":"text","label_block":true},{"name":"desc","label":"Description","type":"textarea"},{"name":"time","label":"Time","type":"text"},{"name":"price","label":"Price","type":"text"},{"name":"feature","label":"Feature","type":"ct_lists_pricing"},{"name":"button_text","label":"Button Text","type":"text","default":""},{"name":"button_link","label":"Button Link","type":"url"}],"title_field":"{{{ title }}}"},{"name":"content_year2","label":"Content","type":"repeater","default":[],"condition":{"layout":"2"},"controls":[{"name":"ct_icon","label":"Icon","type":"icons","fa4compatibility":"icon","default":{"value":"fas fa-star","library":"fa-solid"}},{"name":"title","label":"Title","type":"text","label_block":true},{"name":"time","label":"Time","type":"text"},{"name":"price","label":"Price","type":"text"},{"name":"feature","label":"Feature","type":"ct_lists_pricing"},{"name":"button_text","label":"Button Text","type":"text","default":""},{"name":"button_link","label":"Button Link","type":"url"}],"title_field":"{{{ title }}}"}]}]}';
    protected $styles = array(  );
    protected $scripts = array(  );
}