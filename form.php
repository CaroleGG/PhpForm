<form  action="thanks.php"  method="post">
        <div>
        <label  for="name">Nom :</label>
        <input  type="text"  id="name"  name="user_name">
        </div>
        <div>
        <label  for="firstname">Prénom :</label>
        <input  type="text"  id="firstname"  name="user_firstname">
        </div>
        <div>
        <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email">
        </div>
        <div>
        <label  for="phoneNumber">Téléphone :</label>
        <input  type="text"  id="phoneNumber"  name="user_phone">
        </div>
        <div>
        <label  for="about">Sujet :</label>
        <select id="about" name="user_about">
        <option >Choose:</option>    
        <option >Item_1</option>
        <option >Item_2</option>
        <option >Item_3</option>
        <option >Item_4</option>
        
        </select>
        </div>
        <div>
        <label  for="message">Message :</label>
        <textarea  id="message"  name="user_message"></textarea>
        </div>
        <div  class="button">
        <button  type="submit">Envoyer votre message</button>
        </div>

