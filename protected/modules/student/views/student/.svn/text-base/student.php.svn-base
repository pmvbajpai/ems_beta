<?php $this->widget('bootstrap.widgets.TbTabs', array(
        'id' => 'student_details',
        'type' => 'tabs',
        'tabs' => array(
                array('id' => 'student', 'label' => 'Student','active' => true, 'content' => 'Loading...'),
                array('id' => 'parent_info', 'label' => 'Parent Info'),
                array('id' => 'medical_info', 'label' => 'Medical Info',),
        		array('id' => 'fee_rules', 'label' => 'Fee Rules',),
        		array('id' => 'documents', 'label' => 'Documents',),
        ),
		'onShown' => 'loadContent'
    )
);?>

<script>
function loadContent(e)
{
	var tab_id = e.target.getAttribute("href");
	
	if(tab_id == null) {
		tab_id = "#student"
	}
	
	var load_form = '';
	
	switch(tab_id){
		case '#parent_info' : load_form = '../../userparent/create'; break;
		case '#medical_info' : load_form = '../../medicalinfo/create'; break; 
		case '#fee_rules' : load_form = 'fee rules'; break;
		case '#documents' : load_form = '../../userdocument/create'; break;
		default : load_form = 'create';
	}
	
	$.ajax({
		url      : load_form,
        type     : 'POST',
		dataType : 'html',
        cache    : false,
        success  : function(html) {
        	jQuery(tab_id).html(html);
        },
        error:function(error){
            jQuery(tab_id).html(error.responseText);  
		}
    });
}
</script>