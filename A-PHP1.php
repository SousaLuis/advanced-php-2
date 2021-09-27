
<form  action="thanks.php"  method="POST">

    <div>

      <label  for="Prenoms">Prenoms :</label>

      <input  type="text"  id="Prenoms"  name="user_Prenoms">

    <div>

      <label  for="nom">Nom :</label>

      <input  type="text"  id="nom"  name="user_name">

    </div>

    <div>

      <label  for="courriel">Courriel :</label>

        <input  type="email"  id="courriel"  name="user_email">

    </div>

    <div>

      <label  for="phone_number">telephone:</label>

      <input  type="tel"   id= "phone_number"  name="telephone"></input>

    </div>

    <div>
    <label for="sujet">Sujet:</label>

    <select name="sujet" id="sujet">
    <option value="sujet">Thématique 1</option>
    <option value="sujet">Thématique 2</option>
    <option value="sujet">Thématique 3</option>
    <option value="sujet">Thématique 4</option>
    </select>
    </div>

    <div>

      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message"></textarea>

    </div>

    <div  class="button">

      <button type="submit">Envoyer votre message</button>

    </div>
  </form>
