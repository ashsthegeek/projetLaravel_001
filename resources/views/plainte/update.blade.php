@extends('layout.admin')

@section('page-content')

        <!-- @if (session()->has('success'))
            <div class="alert alert-success">{{ session()->get('success') }}</div>  
        @endif -->

        <div class="formbold-form-wrapper mt-5 mb-5">

      <div style="text-align:right;">
        <a href="{{route('plainte')}}"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAAAY5JREFUaEPtmd1NwzAUhb9OABsAE8AIbAAbwApMAhu0I8AEsAGMABMAE1AdKRZWmkT3BjuOkf3SPji+58/xlbOh8rGpHD+NQGkHmwNrd+AUuAcugeOFwb4Db8AdoP+DYypCAv9aAHgf6BdwBuj3YEwReASuFlZ9rNwTcO0l8LkC9QNmRUguuBz46c1e+o1lqj8FyrRAxoiZ6jcCzYFxBVqETAoYI7QDbo1zwzRT/dybWO3HM3AB7ta9OAGBFvjQQ2U5R3I5oLhslzgIcxBQ3m+cp75ze/xOT0kgzru3bSlOoJ/32YAmHhwUO4UDQ3lvBKx7KIUDqqUIvQBHOaTv1swWoYBZm1gkzkdIVHMOVPsajYWv+iALRPr7opoIxU7E+8JLoHgzFxOptp3+y1t1VQ7MIdIImBSYI63xGVP9VK2EEZNrWiOg6+yczZnHjg9A1/0H419fr4uxvpCUduG7U9/9gUN2icRD1++feDxPMFexkYBqDAfBq4a3P0mAK+0SjUBaPf2rNQf8mqV9onoH9icWUjF4RB4nAAAAAElFTkSuQmCC"/></a>
      </div>

          <div class="container">
            @if (session()->has('success'))
              <div class="alert alert-success">{{ session()->get('success') }}</div>  
            @endif
          </div>

        <ul>
            @foreach ($errors->all() as $error)
            <li class="alert alert-succes"> {{ $error }} </li>
            @endforeach
        </ul>
      
      <form method="POST" action="/update/traitement" enctype="multipart/form-data">

        @csrf

        <div class="formbold-form-title">
          <h2 class="centre">MODIFIER UNE PLAINTE</h2>
          <input type="text" name="id" style="display: none;" value="{{ $plainte->id }}">
        </div>
  
        <!-- PRENOM ET NOM -->
        <div class="formbold-input-flex">
          <div>
            <label for="firstname" class="formbold-form-label">
              PRENOMS
            </label>
            <input
              type="text"
              name="prenom"
              id=""
              class="formbold-form-input"
              value="{{ $plainte->prenom }}"
              required
            />
          </div>
          <div>
            <label for="lastname" class="formbold-form-label"> NOM </label>
            <input
              type="text"
              name="nom"
              id=""
              class="formbold-form-input"
              value="{{ $plainte->nom }}"
              required
            />
          </div>
        </div>

        <!-- GENRE ET TELEPHONE -->
        <div class="formbold-input-flex">

          <div>
              <label for="sexe_plaignant" class="formbold-form-label">SEXE</label>
              <select class="formbold-form-input" name="sexe_plaignant" id="sexe_plaignant" required>
                  <option value="" {{ $plainte->sexe_plaignant == '' ? 'selected' : '' }}></option>
                  <option value="Homme" {{ $plainte->sexe_plaignant == 'Homme' ? 'selected' : '' }}>Homme</option>
                  <option value="Femme" {{ $plainte->sexe_plaignant == 'Femme' ? 'selected' : '' }}>Femme</option>
              </select>
          </div>


          <div>
            <label for="tel_plaignant" class="formbold-form-label"> TELEPHONE </label>
            <input
                type="tel"
                name="tel_plaignant"
                id=""
                class="formbold-form-input"
                value="{{ $plainte->tel_plaignant }}"
                required
            />
            </div>

        </div>

        <!-- OBJET ET RAISON SOCIAL -->
        <div class="formbold-input-flex">
            <div>
              <label for="objet_plainte" class="formbold-form-label">
                OBJET DE LA PLAINTE
              </label>
              <input
                type="text"
                name="objet_plainte"
                id="firstname"
                class="formbold-form-input"
                value="{{ $plainte->objet_plainte }}"
                required
              />
            </div>
            <div>
              <label for="nom_entreprise" class="formbold-form-label"> ENTREPRISE </label>
              <input
                type="text"
                name="nom_entreprise"
                id=""
                class="formbold-form-input"
                value="{{ $plainte->nom_entreprise }}"
                required
              />
            </div>
        </div>

        <!-- FONCTION DANS L'ENTREPRISE -->
        <div class="formbold-input-flex">
            <div>
              <label for="secteur_activite" class="formbold-form-label">
                SECTEUR D'ACTIVITE
              </label>
              <input
                type="text"
                name="secteur_activite"
                id=""
                class="formbold-form-input"
                value="{{ $plainte->secteur_activite }}"
                required
              />
            </div>
            <div>
              <label for="objet_plainte" class="formbold-form-label">
                EMPLOI TENU
              </label>
              <input
                type="text"
                name="fonction"
                id=""
                class="formbold-form-input"
                value="{{ $plainte->fonction }}"
                required
              />
            </div>
        </div>
        
        <!-- DATE DEPOT & DATE CONVOCATION -->
        <div class="formbold-input-flex">

        <div>
                <label class="formbold-form-label">Departement</label>
                <select class="formbold-form-input" name="departement" id="" required>
                <option value="" {{ $plainte->departement == '' ? 'selected' : '' }}></option>
                <option value="Ziguinchor" {{ $plainte->departement == 'Ziguinchor' ? 'selected' : '' }} >Ziguinchor</option>
                <option value="Bignona" {{ $plainte->departement == 'Bignona' ? 'selected' : '' }} >Bignona</option>
                <option value="Oussouye" {{ $plainte->departement == 'Oussouye' ? 'selected' : '' }} >Oussouye</option>
                </select>
        </div>

            <div>
                <label for="date_depot" class="formbold-form-label"> DATE DEPOT </label>
                <input 
                type="date" 
                name="date_depot" 
                id="" 
                class="formbold-form-input"
                value="{{ $plainte->date_depot }}"
                required
                />
            </div>
          </div>
        
        <!-- DATE SEANCE -->
        <div class="formbold-input-flex">

            <div>
                <label for="date_seance" class="formbold-form-label"> DATE SEANCE </label>
                <input 
                type="date" 
                name="date_seance" 
                id="" 
                class="formbold-form-input"
                value="{{ $plainte->date_seance }}"
                required
                />
            </div>

            <div>
                <label for="date_convocation" class="formbold-form-label"> DATE DE REGLEMENT </label>
                <input 
                type="date" 
                name="date_reglement"
                id="dob" 
                class="formbold-form-input"
                value="{{ $plainte->date_reglement }}"
                required
                />
            </div>
        </div>

        <div class="formbold-input">
        <div>
                <label for="pj_plainte" class="formbold-form-label"> PIECE JOINTE DE LA PLAINTE </label>
                <input 
                type="file" 
                name="pj_plainte" 
                id="" 
                accept=".pdf,.doc,.docx,.jpg,.jpeg,.png"
                value="{{ $plainte->pj_plainte }}"
                class="formbold-form-input"
                />
            </div>
        </div>

        <!-- PJ DE LA CONVOCATION -->
        <button  type="submit" class="formbold-btn centre">METTRE A JOUR</button>
      </form>
    </div>
  </div>

<style>
    
  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  body {
    font-family: 'Inter', sans-serif;
  }

  .centre{
      text-align: center;
  }
  .formbold-mb-3 {
    margin-bottom: 15px;
  }
  .formbold-relative {
    position: relative;
  }
  .formbold-opacity-0 {
    opacity: 0;
  }
  .formbold-stroke-current {
    stroke: currentColor;
  }
  #supportCheckbox:checked ~ div span {
    opacity: 1;
  }

  .formbold-main-wrapper {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 48px;
  }
  

  .formbold-form-wrapper {
    margin: 0 auto;
    max-width: 872px;
    width: 100%;
    background: white;
    padding: 40px;
    border: solid #343a40;
    border-width: 1px;
    border-radius: 50px;
  }

  .formbold-img {
    margin-bottom: 45px;
  }

  .formbold-form-title {
    margin-bottom: 30px;
    text-align: center;
  }
  .formbold-form-title h2 {
    font-weight: 600;
    font-size: 28px;
    line-height: 34px;
    color: #07074d;
  }
  .formbold-form-title p {
    font-size: 16px;
    line-height: 24px;
    color: #536387;
    margin-top: 12px;
  }

  .formbold-input-flex {
    display: flex;
    gap: 20px;
    margin-bottom: 15px;
  }
  .formbold-input-flex > div {
    width: 50%;
  }
  .formbold-form-input {
  
    width: 100%;
    padding: 13px 22px;
    border-radius: 5px;
    border: 1px solid #dde3ec;
    background: #ffffff;
    font-weight: 500;
    font-size: 16px;
    color: #536387;
    outline: none;
    resize: none;
  }
  .formbold-form-input:focus {
    border-color: #6a64f1;
    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
  }
  .formbold-form-label {
    color: #343a40;
    font-size: 14px;
    line-height: 24px;
    display: block;
    margin-bottom: 10px;
  }

  .formbold-checkbox-label {
    display: flex;
    cursor: pointer;
    user-select: none;
    font-size: 14px;
    line-height: 24px;
    color: #536387;
  }
  .formbold-checkbox-label a {
    margin-left: 5px;
    color: #6a64f1;
  }
  .formbold-input-checkbox {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    white-space: nowrap;
    border-width: 0;
  }
  .formbold-checkbox-inner {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 20px;
    height: 20px;
    margin-right: 16px;
    margin-top: 2px;
    border: 0.7px solid #dde3ec;
    border-radius: 3px;
  }

  .formbold-btn {
    font-size: 16px;
    border-radius: 5px;
    padding: 14px 25px;
    border: none;
    font-weight: 500;
    background-color: teal;
    color: white;
    cursor: pointer;
    margin-top: 25px;
    text-align: center;
  }
  .formbold-btn:hover {
    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
  }
  .formbold-input-radio-wrapper {
  margin-bottom: 25px;
}
.formbold-radio-flex {
  display: flex;
  flex-direction: column;
  gap: 15px;
}
.formbold-radio-label {
  font-size: 14px;
  line-height: 24px;
  color: #07074d;
  position: relative;
  padding-left: 25px;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
.formbold-input-radio {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}
.formbold-radio-checkmark {
  position: absolute;
  top: -1px;
  left: 0;
  height: 18px;
  width: 18px;
  background-color: #ffffff;
  border: 1px solid #dde3ec;
  border-radius: 50%;
}
.formbold-radio-label
  .formbold-input-radio:checked
  ~ .formbold-radio-checkmark {
  background-color: #6a64f1;
}
.formbold-radio-checkmark:after {
  content: '';
  position: absolute;
  display: none;
}

.formbold-radio-label
  .formbold-input-radio:checked
  ~ .formbold-radio-checkmark:after {
  display: block;
}

.formbold-radio-label .formbold-radio-checkmark:after {
  top: 50%;
  left: 50%;
  width: 10px;
  height: 10px;
  border-radius: 50%;
  background: #ffffff;
  transform: translate(-50%, -50%);
}
  .formbold-form-select {
  width: 100%;
  padding: 12px 22px;
  border-radius: 5px;
  border: 1px solid #dde3ec;
  background: #ffffff;
  font-size: 16px;
  color: #536387;
  outline: none;
  resize: none;
}
</style>

@endsection