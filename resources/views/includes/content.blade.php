<div class="popup show">
  <div class="popup-content">
 

      <div class="row p-5">
      <img src="{{ asset('images/close.png') }}" class="close" alt="" srcset="">
        <div class="col-5">
        <img src="{{ asset('images/email.png') }}" class="py-3 mx-auto" alt="" srcset="">
          <p> Vous avez un message, une question ou encore vous avez bésoin d'informations relatives à notre établissement, Veuillez nous ecrire à travers ce formulaire ci-contre.</p>
        </div>
        <div class="col-7">
          <form autocomplete="off" action="" method="POST">

          <div class="row">

            <div class="col-12">
              <div class="form-group">
                <input type="text" class="form-control rounded-0"  name="name" id="" placeholder="Votre nom complet ..." required>
                
              </div>
            </div>

            <div class="col-12">
              <input type="email" class="form-control rounded-0" name="email" id="" placeholder="Email adresse" required>
            </div>

            <div class="col-12 mt-2">
              <div class="form-group">
                <textarea id="my-textarea" class="form-control h-50 rounded-0" placeholder="Votre message par ici ..." name="content" rows="10" required></textarea>
              </div>
              <button type="submit" class="button text-white ">Envoyer</button>
            </div>
          </div>
          
          </form>
        </div>
      </div>
    

  </div>
</div>