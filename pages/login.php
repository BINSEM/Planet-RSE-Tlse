<?php
include ('parts/header.php');
?>

<div class="ui grid centered stackable login">
<div class="ui center aligned basic segment">
<h3>Se connecter</h3>
  <div class="column">
    <div class="ui form">
      <div class="field">
        <label>Votre Email</label>
        <div class="ui left icon input">
          <input type="text" placeholder="email@email.com">
          <i class="user icon"></i>
        </div>
      </div>
      <div class="field">
        <label>Mot de Passe</label>
        <div class="ui left icon input">
          <input type="mot de passe">
          <i class="lock icon"></i>
        </div>
      </div>
      <div class="ui blue submit button">Se Connecter</div>
    </div>
  <div class="ui horizontal divider">
    Ou
  </div>
  <div class="column">
  <h3>S'enregistrer</h3>
    <div class="ui form">
      <div class="field">
        <label>Prénom</label>
        <div class="ui left icon input">
          <input type="text" placeholder="prenom">
          <i class="user icon"></i>
        </div>
      </div>
      <div class="field">
        <label>Nom</label>
        <div class="ui left icon input">
          <input type="text" placeholder="nom">
          <i class="user icon"></i>
        </div>
      </div>
      <div class="field">
        <label>Votre Email</label>
        <div class="ui left icon input">
          <input type="text" placeholder="email@email.com">
          <i class="user icon"></i>
        </div>
      </div>
      <div class="ui blue submit button">S'inscrire</div>
    </div>
</div>
</div>

<?php
include ('parts/footer.php');
?>