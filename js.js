


function responsive() {
    var x = document.getElementById("myTopnav");
    if (x.className === "container") {
      x.className += " topnav";
    } else {
      x.className = "container";

    }
  }

//   --------------------------------------------------------------------------------------------------------------------

// var btn =  document.getElementById('Modifier');




  var affichage = document.querySelectorAll('.ident');

  function afichage_over(obj, id) {
    affichage[id].className = ' ident frame'

  }

  function afichage_out(obj, id) {
    affichage[id].className += ' afichage'
  }


