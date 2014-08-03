<?php $this->widget('bootstrap.widgets.TbTabs', array(
        'id' => 'employee_details',
        'type' => 'tabs',
        'tabs' => array(
                array('id' => 'personal', 'label' => 'Personal','active' => true, 'content' => 'Loading...'),
                array('id' => 'parent_info', 'label' => 'Parent','disabled' => true),
                array('id' => 'qualification', 'label' => 'Qualification',),
        		array('id' => 'documents', 'label' => 'Documents',),
        		array('id' => 'medical', 'label' => 'Medical',),
        ),
		'onShown' => 'loadContent'
    )
);?>

<script>
function loadContent(e)
{
	var tab_id = e.target.getAttribute("href");
	
	if(tab_id == null) {
		tab_id = "#personal"
	}
	var load_form = '';
	
	switch(tab_id){
	case '#parent_info' : load_form = '/ca-ems/userparent/create'; break;
		case '#qualification' : load_form = 'qualification'; break; 
		case '#documents' : load_form = 'documents'; break;
		case '#medical' : load_form = 'medical'; break;
		default : load_form = 'create';
	}
	
        $.ajax({
            url      : load_form,
            type     : 'POST',
            dataType : 'html',
            cache    : false,
            success  : function(html)
            {
                jQuery(tab_id).html(html);
            },
            error:function(error){
                console.log(error.responseText);
            	jQuery(tab_id).html(error.responseText);  
            }
        });
}
</script>
