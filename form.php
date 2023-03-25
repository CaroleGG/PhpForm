





<!-- Formulaires -->
<form class="border rounded p-3 m-5 bg-light" action="thanks.php"  method="POST">

        <p><span class="error">* required field</span></p>
                <div>
                <label  for="name" class="form-label" required>Nom :</label>
                <input  type="text"  id="name"  name="lastname">
                <span class="error">* </span>
                </div>
                <div>

                <label  for="firstname" class="form-label" required>Prénom :</label>
                <input  type="text"  id="firstname"  name="firstname">
                <span class="error">* </span>
                </div>

                <div>
                <label  for="courriel" class="form-label" required >Courriel :</label>
                <input  type="email"  id="courriel"  name="email">
                <span class="error">* </span>
                </div>

                <div>
                <label  for="phoneNumber" class="form-label" required>Téléphone :</label>
                <input  type="text"  id="phoneNumber"  name="phone">
                <span class="error">* </span>
                </div>

                <div>
                <label  for="about" required>Sujet :</label>
                <span class="error">* </span>
                <select id="about" name="about">
                <option ></option>
                <option >PHP</option>
                <option >Javascript</option>
                <option >Python</option>
                <option >Java</option>
        
                </select>
                </div>
                <div>
                <label  for="message" required>Message :</label>
                <span class="error">* </span>
                <textarea  id="message"  name="message"></textarea>
                </div>

                <div  class="button" class="text-center">
                <button  type="submit">Envoyer votre message</button>
                </div>
</form>