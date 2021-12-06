
@extends('layouts.model')

@section('contenu')

   <span class="border-top border-success" id="containerc1" style="background-color: #fff">
    <br>
    <center><h1>Comment nous pouvons vous aider ? </h1></center>
    <img class="fit-picture" src="/images/helper.png"></center>
    
  </span>
  <span class="border-top border-success" id="containerc2" style="background-color: #ffffff">
    <center><h2>Conseils de spécialistes</h2> </center>
    <br> 
    <p>Découvrez les dernières fonctionnalités et bénéficiez de conseils de Spécialiste via le formulaire ci-dessous.</p>
</br>
  </br>
  </span>

  <span class="border-top border-success" id="containerc3" style="background-color: #dfdfdf">
    <center><h2>Contactez-nous</h2> </center>
    <br> 
    <div class="col-md-5 col-12">
        <!-- Email input -->
        <form>
          <center>
            <div class="input-group mb-2 mr-sm-2" style="width: 50%;">
            <div class="input-group-prepend">
              <div class="input-group-text">🧑🏻‍🦱</div>
            </div>
            <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Prenom">
          </div>
  
          <div class="input-group mb-2 mr-sm-2" style="width: 50%;">
            <div class="input-group-prepend">
              <div class="input-group-text">🧑🏻‍🦱</div>
            </div>
            <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Nom">
          </div>
          <div class="input-group mb-2 mr-sm-2" style="width: 50%;">
            <div class="input-group-prepend">
              <div class="input-group-text">📧</div>
            </div>
            <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Mail">
          </div>
          <div class="input-group mb-2 mr-sm-2" style="width: 50%;">
            <div class="input-group-text">✉️</div>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </div>
          </form>
      </div>
  </br>
  </span>

   

 <footer class="bg-primary text-center text-white">
</footer>

@endsection