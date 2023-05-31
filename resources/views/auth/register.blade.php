<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="{{ route('student.register') }}">

      <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <div class="mb-3">
          <label for="nomEtudiant" class="form-label">Nom de l'étudiant</label>
          <input name="last_name" type="text" class="form-control" id="nomEtudiant">
        </div>
        <div class="mb-3">
          <label for="nomEtudiant" class="form-label">Prénom de l'étudiant</label>
          <input name="first_name" type="text" class="form-control" id="nomEtudiant">
        </div>
        <div class="mb-3">
          <label for="filiere" class="form-label">Filière</label>
          <select name="sector" class="form-select" id="filiere">
            <option value="">Sélectionnez une filière</option>
            <option value="BI&A">BI&A</option>
            <option value="GD">GD</option>
            <option value="GL">GL</option>
            <option value="IDSIT">IDSIT</option>
            <option value="SSI">SSI</option>
            <option value="SSE">SSE</option>
            <option value="2SCL">2SCL</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="niveau" class="form-label">Niveau</label>
          <select name="level" class="form-select" id="niveau">
            <option value="">Sélectionnez un niveau</option>
            <option value="1A">1A</option>
            <option value="2A">2A</option>
            <option value="3A">3A</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="emailMembres" class="form-label">Email de l'étudiant</label>
          <input name="email" type="email" class="form-control" id="emailEtudiant">
        </div>
        <div class="mb-3">
          <label for="profPassword" class="form-label">Mot de passe</label>
          <div class="input-group">
            <input name="password" value="motdepasse" type="password" class="form-control" id="profPassword">
            <button type="button" class="btn btn-outline-secondary" onclick="togglePasswordVisibility()">
              <i id="passwordVisibilityIcon" class="ti ti-eye text-dark"></i>
            </button>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
      </form>
</body>
</html>