<!DOCTYPE html>
<html>
<head>
	<title>jQuery auto-complete, populate related fields</title>
	<script type="text/javascript" src="/jquery/js/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="/jquery/js/jquery-ui-1.8.2.custom.min.js"></script>
	<script type="text/javascript">

		jQuery(document).ready(function(){
			$('.cus_code').autocomplete({
				source:'jQueryAutocompleteRelatedFields.php', 
				minLength:2,
				select:function(evt, ui)
				{
					// when a zipcode is selected, populate related fields in this form
					this.form.cus_name.value = ui.item.cus_name;
					this.form.cus_addr.value = ui.item.cus_addr;
				}
			});
		});

	</script>
	<link rel="stylesheet" href="/jquery/css/smoothness/jquery-ui-1.8.2.custom.css" />
	<style type="text/css"><!--
	
	        /* style the auto-complete response */
	        li.ui-menu-item { font-size:12px !important; }
	
	--></style>
</head>

<body>

<form onsubmit="return false;">
	customer code:
	<input id="cus_code" type="text" class="cus_code" />
	
	name: 
	<input id="cus_name" type="text" disabled />
	
	addr:
	<input id="cus_addr" type="text" disabled />
</form>

</body>
</html>
