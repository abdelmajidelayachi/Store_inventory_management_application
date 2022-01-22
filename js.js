function responsive() {
    var x = document.getElementById("myTopnav");
    if (x.className === "container") {
      x.className += " topnav";
    } else {
      x.className = "container";

    }
  }

//   --------------------------------------------------------------------------------------------------------------------

function Ajouter_prouduit() {
    let form = document.getElementById("sect-01");
    if (form.className === "heiden") {
      form.className = "contoner-produit ";
    }else{
      form.className ="heiden";
    }
  }

  var affichage = document.querySelectorAll('.ident');

  function afichage_over(obj, id) {
    affichage[id].className = ' ident frame'

  }

  function afichage_out(obj, id) {
    affichage[id].className += ' afichage'
  }
  //------------------------------------------------------------------------------------------------------------

