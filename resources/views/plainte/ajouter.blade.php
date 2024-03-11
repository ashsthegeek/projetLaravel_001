@extends('layout.admin')

@section('page-content')

        <!-- @if (session()->has('success'))
            <div class="alert alert-success">{{ session()->get('success') }}</div>  
        @endif -->

        <div class="formbold-form-wrapper mt-5 mb-5">
        <ul>
            @foreach ($errors->all() as $error)
            <li class="alert alert-succes"> {{ $error }} </li>
            @endforeach
        </ul>
      
      <form method="POST" action="/ajouter/traitement" enctype="multipart/form-data">

        @csrf

        <div class="formbold-form-title">
          <h2 class="centre">AJOUTER UNE PLAINTE</h2>
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
              required
            />
          </div>
        </div>

        <!-- GENRE ET TELEPHONE -->
        <div class="formbold-input-flex">

            <div>
                <label class="formbold-form-label">GENRE</label>
                <select class="formbold-form-input" name="genre_plaignant" id="" required>
                <option value=""></option>
                <option value="male">Homme</option>
                <option value="female">Femme</option>
                </select>
            </div>

            <div>
              <label for="tel_plaignant" class="formbold-form-label"> TELEPHONE </label>
              <input
                type="tel"
                name="tel_plaignant"
                id=""
                class="formbold-form-input"
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
                required
              />
            </div>
            <div>
              <label for="nom_entreprise" class="formbold-form-label"> RAISON SOCIAL </label>
              <input
                type="text"
                name="nom_entreprise"
                id=""
                class="formbold-form-input"
                required
              />
            </div>
            </div>

        <!-- FONCTION DANS L'ENTREPRISE -->
        <div class="formbold-input">
            <div>
              <label for="objet_plainte" class="formbold-form-label">
                FONCTION DANS L'ENTREPRISE
              </label>
              <input
                type="text"
                name="fonction"
                id="firstname"
                class="formbold-form-input"
                required
              />
            </div>
        </div>
        
        <!-- DATE DEPOT & DATE CONVOCATION -->
        <div class="formbold-input-flex">
            <div>
                <label for="date_depot" class="formbold-form-label"> DATE DEPOT </label>
                <input 
                type="date" 
                name="date_depot" 
                id="" 
                class="formbold-form-input"
                required
                />
            </div>

            <div>
                <label for="date_convocation" class="formbold-form-label"> DATE CONVOCATION </label>
                <input 
                type="date" 
                name="date_convocation"
                id="dob" 
                class="formbold-form-input"
                required
                />
            </div>
            
          </div>
        
        <!-- DATE SEANCE -->
        <div class="formbold-input">
            <div>
                <label for="date_seance" class="formbold-form-label"> DATE SEANCE </label>
                <input 
                type="date" 
                name="date_seance" 
                id="" 
                class="formbold-form-input"
                required
                />
            </div>
        </div>

        <!-- PJ DE LA CONVOCATION -->
        <div class="formbold-input-flex">
            <div>
                <label for="pj_plainte" class="formbold-form-label"> PJ DE LA PLAINTE </label>
                <input 
                type="file" 
                name="pj_plainte" 
                id="" 
                class="formbold-form-input"
                required
                />
            </div>
        </div>

        <button  type="submit" class="formbold-btn centre">ENREGISTRER</button>
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
    font-size: 16px;
    line-height: 24px;
    display: block;
    margin-bottom: 10px;
  }

  .formbold-checkbox-label {
    display: flex;
    cursor: pointer;
    user-select: none;
    font-size: 16px;
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
    background-color: #343a40;
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
