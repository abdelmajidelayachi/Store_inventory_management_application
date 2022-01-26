


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




  //var affichage = document.querySelectorAll('.ident');

  function affichage_over(id) {
    let affich = document.getElementById(id);
    affich.className = 'ident frame';
   

  }

  function affichage_out(id) {
    let affich= document.getElementById(id);
    affich.className = 'afichage';
  }


