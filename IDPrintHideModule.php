<?php namespace Vanderbilt\IDPrintHideModule;

use ExternalModules\ExternalModules;
class IDPrintHideModule extends \ExternalModules\AbstractExternalModule
{
	function redcap_data_entry_form_top($project_id, $record, $instrument, $event_id, $group_id, $repeat_instance) {
		?>
			<script>
				$(document).ready(function(){
					$('#record_id-tr').addClass('hide_in_print');
					$('#dataEntryTopOptions div div.float-right div:last-child').addClass('hide_in_print');
				});
			</script>
		<?php
	}
}
