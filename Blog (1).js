$(document).ready(function(){

  function loadData(){
      $.ajax({
          url:'select-data.php',
          type:'GET',
          success: function(data){
              $("#content").html(data);

          }

      });
  }

  $("#bto").on("click",function(s){
      s.preventDefault();
      
      var bto = document.getElementById("bto");

      if (bto.innerText==="Show"){
          $("#nombre")[0].setCustomValidity(''); 
          loadData();
          bto.innerText="Hide";
      }

       else if (bto.innerText === "Hide") {
            bto.innerText = "Show";
            $("#content").empty();
            $("#nombre").val('');
            $("#comentario").val('');

        }  
          
  });

 $("#btn").on("click", function(e){
  e.preventDefault();
  var nombre = $("#nombre").val();
  var comentario = $("#comentario").val();

  if (nombre.trim() === "") {
  alert("Debes llenar el campo 'Name'.");
  return; 
  }

  else if (comentario.trim() === "") {
  alert("Debes llenar el campo 'Mensaje'.");
  return; 
  }



  $.ajax({
      url:'insert-data.php',
      type:'POST',
      data:{nombre: nombre, comentario: comentario},
      success:function (data) {
          if(data == 1){
              loadData();
              alert('Comment Submited Successfully.');
              $("#form").trigger("reset");
              bto.innerText="Hide";
          } else{
              alert('Comment can not Submited.');
          }
      }           

  });

 });
});



