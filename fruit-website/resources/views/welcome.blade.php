@extends('layouts.app')

@section('content')
<section class="hero container-fliud">

    <img  class="img-fluid" id="left-img" src="{{asset('user/main-img/Main_IMG.png')}}" alt="">

    <div id="TextDiv">
        <h1 class="display-4" id="Main-title"><span> Fruish</span> <br>Live Your Healty life</h1>
        <p id="TextDivP " class="display-9">Où professionalisme s’allie avec passion. Depuis plus de 5 ans maintenant, Où professionalisme s’allie avec passion. Depuis plus de 5 ans maintenant, j’exerce mon métier avec Où professionalisme s’allie avec passion. Depuis plus de 5 ans maintenant, j’exerce mon métier avec Où professionalisme s’allie avec passion. Depuis plus de 5 ans maintenant, j’exerce mon métier avec j’exerce mon métier avec la passion qui m’anime : capturer l’essence de chaque instant.</p>
       <button id="orderbtn">order now </button>
    </div>
</section>
<section class="container mt-5 ">

  <div class="row pt-3 pb-3">
    <div class="col d-flex justify-content-center mb-3">
        <div class="card text-center" style="width: 18rem;">
          <img class="card-img-top" src="..." alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title text-center">Card title</h5>
            <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <button href="#" class="btn card-btn">Go somewhere</button>
          </div>
        </div>
      </div>
      



</div>
</section>
<section class="container-fluid mt-3" id="section3" >
    <div class="row justify-content-center " style="padding: 10% 0 ;">
    
<div class="col-4 d-flex justify-content-center  flex-column">
<div class="d-flex justify-content-end  flex-column">    <img  class="img-fluid w-50 mx-auto" id="" src="{{asset('user/main-img/Main_IMG.png')}}" alt="">
    <p class="text-justify">Ambitioni dedisse scripsisse iudicaretur. Cras mattis iudicium purus sit amet fermentum. Donec sed odio operae, eu vulputate felis rhoncus. Praeterea iter est quasdam res quas ex communi. At nos hinc posthac, sitientis piros Afros. Petierunt uti sibi concilium totius Galliae in diem certam indicere. Cras mattis iudicium purus sit amet fermentum.</p>

</div>
<div class=" d-flex justify-content-end flex-column">    <img  class="img-fluid w-50 mx-auto" id="" src="{{asset('user/main-img/Main_IMG.png')}}" alt="">
    <p class="text-justify">Ambitioni dedisse scripsisse iudicaretur. Cras mattis iudicium purus sit amet fermentum. Donec sed odio operae, eu vulputate felis rhoncus. Praeterea iter est quasdam res quas ex communi. At nos hinc posthac, sitientis piros Afros. Petierunt uti sibi concilium totius Galliae in diem certam indicere. Cras mattis iudicium purus sit amet fermentum.</p>

</div>

<div class=" d-flex justify-content-end flex-column">    <img  class="img-fluid w-50 mx-auto" id="" src="{{asset('user/main-img/Main_IMG.png')}}" alt="">
    <p class="text-justify">Ambitioni dedisse scripsisse iudicaretur. Cras mattis iudicium purus sit amet fermentum. Donec sed odio operae, eu vulputate felis rhoncus. Praeterea iter est quasdam res quas ex communi. At nos hinc posthac, sitientis piros Afros. Petierunt uti sibi concilium totius Galliae in diem certam indicere. Cras mattis iudicium purus sit amet fermentum.</p>

</div>

</div>
<div class="col-3 d-flex justify-content-center align-items-center "> 
    <img  class="img-fluid max-width-100" style="height: fit-content" id="Center-img" src="{{asset('user/main-img/Fruit-Box.png')}}" alt="">


</div>
<div class="col-4 d-flex justify-content-center flex-column">
    <div>
        <img  class="img-fluid w-50 mx-auto" id="" src="{{asset('user/main-img/Main_IMG.png')}}" alt="">

    </div>
    <div>    <img  class="img-fluid w-50 mx-auto" id="" src="{{asset('user/main-img/Main_IMG.png')}}" alt="">
    </div>
    
    <div>    <img  class="img-fluid w-50 mx-auto" id="" src="{{asset('user/main-img/Main_IMG.png')}}" alt="">
    </div>
</div>



</section>
  
@endsection
