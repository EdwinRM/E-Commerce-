/*Cabezal*/
$("#btnCategorias").click(function(){
  //comparacion con la ventana
  if(window.matchMedia("(max-with:767px)").matches){
      $("#btnCategorias").after($("#categorias").slideToggle("fast"));
  }else{
      $("#cabezal").after($("#categorias").slideToggle("fast"));
  }
});
