//Formulário Registo - Verificação de campos/impedir submissão se campos não estiverem completos

// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
    'use strict'
  
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')
  
    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }
  
          form.classList.add('was-validated')
        }, false)
      })
  })()

// SideBar

(function () {
  'use strict'
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  tooltipTriggerList.forEach(function (tooltipTriggerEl) {
    new bootstrap.Tooltip(tooltipTriggerEl)
  })
})()

// aceitar cookies pop-up modal


var myModal = new bootstrap.Modal(document.getElementById('myModal'), {})
myModal.toggle()


// p5.js logo

//identificar browser

function fnBrowserDetect(){                            
  let userAgent = navigator.userAgent;          
  let browserName;                    
  if(userAgent.match(/chrome|chromium|crios/i)){              
    browserName = "chrome";            
  }else if(userAgent.match(/firefox|fxios/i)){              
    browserName = "firefox";            
  }  else if(userAgent.match(/safari/i)){
    browserName = "safari";            
  }else if(userAgent.match(/opr\//i)){              
    browserName = "opera";            
  } else if(userAgent.match(/edg/i)){              
    browserName = "edge";            
  }else{              
    browserName="No browser detection";            
  }                     
  document.querySelector("h1").innerText="You are using "+ browserName +" browser";         
  return browserName;
}

function redirect(){
  if(fnBrowserDetect() != "firefox"){
    window.location.replace("https://www.google.com");
  } else {
    window.location.href = "../index.php";
  }
}

// registo (definir o preenchimento dos campos)

$(document).ready(function(){
  $('#data-nascimento').mask('11/11/1111');
  $('#telefone').mask('000-000-000');
 })


//Galeria Modal

// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementByClassName("myImg");
var modalImg = document.getElementById("img02");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}