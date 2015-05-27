
			
<div class="toes">
	
	<div class="clicktocall">
		<i class="fa fa-mobile"></i><a href="tel:+1800229933">Call</a>
	</div>

</div>

</div>
<!-- END CONTENT -->
</div>
</div>
</div>






<!-- BEGIN FOOTER JS INCLUDES -->
<script type='text/javascript' src='js/leftswipe.js'></script>
<script type='text/javascript' src='js/rightswipe.js'></script>
<script type='text/javascript' src='js/autogrow/jquery.autogrow-textarea.js'></script>
<script type='text/javascript' src='js/placeholder-fix.js'></script>
<script type='text/javascript' src='js/jquery.scrollTo-min.js'></script>
<!-- END FOOTER JS INCLUDES -->
<script>
			$.fn.formToJSON = function() {
				var objectGraph = {};
				var objectGrapha = [];
 
				function add(objectGraph, name, value) {
					if(name.length == 1) {
						//if the array is now one element long, we're done
						objectGraph[name[0]] = value;
					}
					else {
						//else we've still got more than a single element of depth
						if(objectGraph[name[0]] == null) {
							//create the node if it doesn't yet exist
							objectGraph[name[0]] = {};
						}
					//recurse, chopping off the first array element
						
						var boomer = ('[').add( objectGraph[name[0]], name.slice(1), value ).(']');
						return boomer
					}
				};
				//loop through all of the input/textarea elements of the form
				//this.find('input, textarea').each(function() {
				$(this).children('input, textarea').each(function() {
					//ignore the submit button
					if($(this).attr('name') != 'submit') {
						//split the dot notated names into arrays and pass along with the value
						add(objectGraph, $(this).attr('name').split('.'), $(this).val());
						
					}
				});
				return JSON.stringify(objectGraph);
			};
 
			$.ajaxSetup({
				contentType: "application/json",
				Accept: "application/json"
			});
 
			$(document).ready(function(){
				$('#input').click(function() {
					alert($("#form").formToJSON());
					var send = $("#form").formToJSON();
					$.ajax({
						url: "http://qa.reztrip.com/rt/bookings.json?ip_address=1.1.1.1",
						type: "POST",
						data: send,
						error: function(xhr, error) {
							alert('Error!  Status = ' + xhr.status + ' Message = ' + error);
						},
						success: function(data) {
							//have you service return the created object
							var items = [];
							items.push('<table cellpadding="4" cellspacing="4">');
							items.push('<tr><td>ID</td><td>' + data.id + '</td></tr>');
							items.push('<tr><td>Meh Feh</td><td>' + data.meh.feh + '</td></tr>');
							items.push('<tr><td>Meh Peh</td><td>' + data.meh.peh + '</td></tr>');
							//etc
							items.push('</table>');  
							$('#result').html(items.join(''));
						}
					});
					return false; 
				});
			});
		</script>

<script>
  var metas = document.getElementsByTagName('meta');
  var i;
  if (navigator.userAgent.match(/iPhone/i)) {
    for (i=0; i<metas.length; i++) {
      if (metas[i].name == "viewport") {
        metas[i].content = "width=device-width, minimum-scale=1.0, maximum-scale=1.0";
      }
    }
    document.addEventListener("gesturestart", gestureStart, false);
  }
  function gestureStart() {
    for (i=0; i<metas.length; i++) {
      if (metas[i].name == "viewport") {
        metas[i].content = "width=device-width, minimum-scale=0.25, maximum-scale=1.6";
      }
    }
  }
</script>
<script type="text/javascript" src="js/form2js.js"></script>
<script type="text/javascript" src="js/jquery.toObject.js"></script>
<script type="text/javascript" src="js/json2.js"></script>
<script type="text/javascript">
	
			var selector = $('#selector').val(),
			formDataCombine = $('#ttresform').toObject({mode: 'combine'});

			var reservation = JSON.stringify(formDataCombine)
			
				
				$('#input').click(function() {
				
				var send = reservation;
	
				$.ajax ({
					url: 'http://dev3-web.ttaws.com/rt/bookings/altformat.json?ip_address=1.1.1.1',
					dataType: 'json',
					headers: {
					    "Content-Type": "text/plain",
					"Accept": "application/json"
					},
					type: "POST",
					data: send,
					success: function(){
						location.href = "http://www.lurnglier.com/ttmobile/thankyou.php"
					},
					error: function(xhr, status, error) {
					alert(reservation);
					}
					});
					return false;
					});			
								
			
			/*	
				var send = reservation;
				$.ajax({
				    url: 'http://qa.reztrip.com/rt/bookings.json?ip_address=1.1.1.1',
				    type: 'post',
				    data: reservation,
				    headers: {
				        contentType: "application/json",
						Accept: "application/json"
				    },
				    dataType: 'json',
				    success: function(){
    alert('success');
  },
				});*/
			
			
			jQuery(document).ready(function () {
				$("#card_holder_name").val( $(".firstname").val() );
			});
	</script>
	

</body>
</html>