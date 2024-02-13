window.addEventListener('load', function() {

  if (typeof $('#toaster-contact-form') != 'undefined' && $('#toaster-contact-form').is(":visible")) { 
    alert('Votre message a bien été envoyé. Nous vous recontacterons dès que possible.');
  }

})

$(document).ready(function(){
/*   $("#form-rdv").click(function(){
    $("p").hide();
  }); */
  //alert("ready");
});

function scrollToContactForm() {
  $([document.documentElement, document.body]).animate({
    scrollTop: $("#div-form-rdv").offset().top
  }, 1500);
}

function renderErrorFormContact(HTMlNode, message) {
  //console.log(HTMlNode);

  makeVisible($('#confirmMailSent'));
  $('#confirmMailSent').style.color = "var(--main-color-red)";
  $('#confirmMailSent').innerHTML = message+"<br/>";


  if (!HTMlNode.innerHTML.includes("error-active")) {
/*         HTMlNode.innerHTML += `
      <div class="errorField error-active">
          <img src="images/project/warning.png" alt="">
          <span>${message}</span>
      </div>
      `;
*/        
      let errorDiv = document.createElement('div');
      errorDiv.classList.add("errorField");
      errorDiv.classList.add("error-active");
      errorDiv.innerHTML = `<img src="images/project/warning.png" alt="">
                              <span>${message}</span>`;
      HTMlNode.appendChild(errorDiv);

      setTimeout(function() {
          let toVanish = $$('.error-active');
          toVanish.forEach(element => {
              element.remove();
          });
          
          hide($('#confirmMailSent'));
          $('#confirmMailSent').style.color = "var(--success)";

      }, 3000);
  }
}

function checkContactFormField(field) {
    
  let error = false;
  let phoneIsInvalid = true;
  let mailIsInvalid = true;
  
  if(field == 'telephone') {
    const regexPhone = /^(0)[1-9](\d{2}){4}$/;
    error = (($('#telephone').val().length > 0 && !regexPhone.test($('#telephone').val())) || $('#telephone').val().trim().length < 1);    
    phoneIsInvalid = error;
  } else if (field == 'email') {
    
    const regexEmail = /^([0-9a-zA-Z].*?@([0-9a-zA-Z].*\.\w{2,4}))$/;
    error = (($('#email').val().length > 0 && !regexEmail.test($('#email').val())) || $('#email').val().trim().length < 1);
    mailIsInvalid = error;
  } else if (field == 'cp') {
    
    error = $('#cp').val().trim().length < 5;

  } else if(!($('#conditions').prop('checked'))){
    error = true;
    console.log("conditions")
  }
  
  else {
    
    error = ($('#'+field).val().trim().length < 2);

  }
  
  //const atLeastPhoneOrMail = !phoneIsInvalid || !mailIsInvalid;

  if(error) {
    $('#error-'+field).show();
  } else {
    $('#error-'+field).hide();
  }
  
  validFormRdv();


}

function validFormRdv(atLeastPhoneOrMail = null) {
  
  /* console.log('Il y a au moins un n° de téléphone ou une adresse mail');
  console.log(atLeastPhoneOrMail); */

  const regexEmail = /^([0-9a-zA-Z].*?@([0-9a-zA-Z].*\.\w{2,4}))$/;
  /* var regexPhone = /^(0|\+33)[1-9](\d{2}){4}$/; */
  const regexPhone = /^(0)[1-9](\d{2}){4}$/;
  
  let formOK = true;

  //console.log($('#civilite').val());

  if($('#civilite').val().length < 2){
    formOK = false;
  }

  if($('#nom').val().length < 2){
    formOK = false;
  }

  if($('#prenom').val().length < 2){
    formOK = false;
  }

  if($('#email').val().length > 0 && !regexEmail.test($('#email').val())){
    formOK = false;
  } 
  
  if($('#telephone').val().length > 0 && !regexPhone.test($('#telephone').val())){
    formOK = false;
  }
  
  if($('#email').val() === '' && $('#telephone').val() === ''){
    formOK = false;
  }

/*   if($('#cp').val().length > 0 && $('#cp').val().length < 5){
    formOK = false;
  }

  if($('#ville').val().length < 2){
    formOK = false;
  }
 */

  if(!($('#conditions').prop('checked'))){
    formOK = false;
  }

  if($('#objectif').val().trim().length < 2){
    formOK = false;
  }

  console.log("formOK : "+formOK);

  if(formOK){

    $('#btn-submit-contact').addClass('btn-active');
    $('#btn-submit-contact').removeClass('btn-inactive');
    $('#btn-submit-contact').prop('disabled', false);
  } else {
    /* $("#form-rdv").submit(function(e){
      e.preventDefault();
    }); */
    //alert("Formulaire incomplet");
    $('#btn-submit-contact').removeClass('btn-active');
    $('#btn-submit-contact').addClass('btn-inactive');
    $('#btn-submit-contact').prop('disabled', true);
  }
  
}

function closeContactFormToaster(){
  $('#toaster-contact-form').hide();
}