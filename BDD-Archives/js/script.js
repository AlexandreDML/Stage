$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#table tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});


                                // script qui permet de rendre élément(s) invisible

//function visibilite(thingId){
//  var targetElement;
//  var elements;
//  targetElement = document.getElementById(thingId) ;

  // recupere toutes les classes "Element"
//  elements = document.getElementsByClassName("Element")

  // parcoure tous ces elements et les cache
//  for (var i = 0; i < elements.length; i++) {
//      elements[i].style.display = "none" ;
  //}

  //affiche uniquement l element selectionné
//  if (targetElement.style.display == "none") {
//          targetElement.style.display = "" ;
//  }
//}


                            // script qui permet via balise radio de disable/enable un champ textarea et input (possible de changer)

//function toggleBilling() {
//var billingItems = document.querySelectorAll('#choix textarea[type="text"]');
//for (var i = 0; i < billingItems.length; i++) {
//billingItems[i].disabled = !billingItems[i].disabled;
//}
//}
//function toggleBilling2() {
//var billingItems = document.querySelectorAll('#choix input[type="text"]');
//for (var i = 0; i < billingItems.length; i++) {
//billingItems[i].disabled = !billingItems[i].disabled;
//}
//}
