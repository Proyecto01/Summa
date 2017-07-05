$(document).ready(function(){
      $('.programador, .diseniador').hide();
      $('#tipo').change(function(){
      		var tipo = $(this).val();
      		if(tipo == 'programador'){
      			$('.diseniador').hide();
      			$('.programador').show();
      		}else if (tipo == 'diseniador'){
      			$('.programador').hide();
      			$('.diseniador').show();
      		} else {
      			$('.programador, .diseniador').hide();
      		}
      });

      $('.empleado_id').click(function(){
         //   id = $(this).text();alert(id);
         //   href = $(this).attr('href');
           // alert(id);alert(href);
      });

});