@extends('layouts.app')

@section('content')
    <section class="hero container-fliud">

        <img class="img-fluid" id="left-img" src="{{ asset('user/main-img/Main_IMG.png') }}" alt="">

        <div id="TextDiv">
            <h1 class="display-4" id="Main-title"><span> Fruish</span> <br>Live Your Healty life</h1>
            <p id="TextDivP " class="display-9">Où professionalisme s’allie avec passion. Depuis plus de 5 ans maintenant, Où
                professionalisme s’allie avec passion. Depuis plus de 5 ans maintenant, j’exerce mon métier avec Où
                professionalisme s’allie avec passion. Depuis plus de 5 ans maintenant, j’exerce mon métier avec Où
                professionalisme s’allie avec passion. Depuis plus de 5 ans maintenant, j’exerce mon métier avec j’exerce
                mon métier avec la passion qui m’anime : capturer l’essence de chaque instant.</p>
            <button id="orderbtn">order now </button>
        </div>
    </section>
    <section class="container mt-5 ">

        <div class="row pt-3 pb-3">
            <div class="col d-flex flex-wrap justify-content-center">
              <div class="card text-center mb-3 ml-3" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('user/main-img/Main_IMG.png') }}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title text-center">Card title</h5>
                  <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <button href="#" class="btn card-btn">Go somewhere</button>
                </div>
              </div>
              <div class="card text-center mb-3 ml-3" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('user/main-img/Main_IMG.png') }}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title text-center">Card title</h5>
                  <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <button href="#" class="btn card-btn">Go somewhere</button>
                </div>
              </div>
              <div class="card text-center mb-3 ml-3" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('user/main-img/Main_IMG.png') }}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title text-center">Card title</h5>
                  <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <button href="#" class="btn card-btn">Go somewhere</button>
                </div>
              </div>
            </div>
          </div>
          
          
    </section>
    <section class="container-fluid mt-3" id="section3">
        <div class="row justify-content-center " style="padding: 10% 0 ;">

            <div class="col-4 d-flex justify-content-center  flex-column">
                <div class="d-flex justify-content-end  flex-column "> <img class="img-fluid custom-width mx-auto" id=""
                        src="{{ asset('user/main-img/Main_IMG.png') }}" alt="">
                        <h2 class="text-center">title</h2>
                    <p class="text-justify customP ">Ambitioni dedisse scripsisse iudicaretur. Cras mattis iudicium purus sit amet
                        fermentum. Donec sed odio operae, eu vulputate felis rhoncus. Praeterea iter est quasdam res quas ex
                        communi. At nos hinc posthac, sitientis piros Afros. Petierunt uti sibi concilium totius Galliae in
                        diem certam indicere. Cras mattis iudicium purus sit amet fermentum.</p>

                </div>
                <div class=" d-flex justify-content-end flex-column CenterFristCol "> <img class="img-fluid custom-width mx-auto" id=""
                        src="{{ asset('user/main-img/Main_IMG.png') }}" alt="">
                        <h2 class="text-center">title</h2>

                    <p class="text-justify customP ">Ambitioni dedisse scripsisse iudicaretur. Cras mattis iudicium purus sit amet
                        fermentum. Donec sed odio operae, eu vulputate felis rhoncus. Praeterea iter est quasdam res quas ex
                        communi. At nos hinc posthac, sitientis piros Afros. Petierunt uti sibi concilium totius Galliae in
                        diem certam indicere. Cras mattis iudicium purus sit amet fermentum.</p>

                </div>

                <div class=" d-flex justify-content-end flex-column "> 
                    <img class="img-fluid custom-width mx-auto" src="{{ asset('user/main-img/Main_IMG.png') }}" alt="">
                    <h2 class="text-center">title</h2>

                    <p class="text-justify customP">Ambitioni dedisse scripsisse iudicaretur. Cras mattis iudicium purus sit amet
                        fermentum. Donec sed odio operae, eu vulputate felis rhoncus. Praeterea iter est quasdam res quas ex
                        communi. At nos hinc posthac, sitientis piros Afros. Petierunt uti sibi concilium totius Galliae in
                        diem certam indicere. Cras mattis iudicium purus sit amet fermentum.</p>

                </div>

            </div>
            <div class="col-3 d-flex justify-content-center align-items-center  ">
                <img class="img-fluid max-width-100" style="height: fit-content" id="Center-img"
                    src="{{ asset('user/main-img/Fruit-Box.png') }}" alt="">


            </div>
            <div class="col-4 d-flex justify-content-center flex-column ">
                <div class=" d-flex justify-content-end flex-column CenterFristCol "> 
                    <img class="img-fluid custom-width mx-auto" src="{{ asset('user/main-img/Main_IMG.png') }}" alt="">
                    <h2 class="text-center">title</h2>

                    <p class="text-justify customP">Ambitioni dedisse scripsisse iudicaretur. Cras mattis iudicium purus sit amet
                        fermentum. Donec sed odio operae, eu vulputate felis rhoncus. Praeterea iter est quasdam res quas ex
                        communi. At nos hinc posthac, sitientis piros Afros. Petierunt uti sibi concilium totius Galliae in
                        diem certam indicere. Cras mattis iudicium purus sit amet fermentum.</p>

                </div>
                <div class=" d-flex justify-content-end flex-column "> 
                    <img class="img-fluid custom-width mx-auto" src="{{ asset('user/main-img/Main_IMG.png') }}" alt="">
                    <h2 class="text-center">title</h2>

                    <p class="text-justify customP">Ambitioni dedisse scripsisse iudicaretur. Cras mattis iudicium purus sit amet
                        fermentum. Donec sed odio operae, eu vulputate felis rhoncus. Praeterea iter est quasdam res quas ex
                        communi. At nos hinc posthac, sitientis piros Afros. Petierunt uti sibi concilium totius Galliae in
                        diem certam indicere. Cras mattis iudicium purus sit amet fermentum.</p>

                </div>

                <div class=" d-flex justify-content-end flex-column CenterFristCol "> 
                    <img class="img-fluid custom-width mx-auto" src="{{ asset('user/main-img/Main_IMG.png') }}" alt="">
                    <h2 class="text-center">title</h2>

                    <p class="text-justify customP">Ambitioni dedisse scripsisse iudicaretur. Cras mattis iudicium purus sit amet
                        fermentum. Donec sed odio operae, eu vulputate felis rhoncus. Praeterea iter est quasdam res quas ex
                        communi. At nos hinc posthac, sitientis piros Afros. Petierunt uti sibi concilium totius Galliae in
                        diem certam indicere. Cras mattis iudicium purus sit amet fermentum.</p>

                </div>
            </div>



    </section>


    <section class="container">
<div class="row" >
    <div class="col">
<h2 class="div-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit</h2>
<p class="div-paragraph">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste similique esse sapiente ullam repellendus soluta odit, quae veniam culpa magnam aliquam cumque architecto dolorem magni debitis libero incidunt inventore sunt?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non provident sapiente deserunt reprehenderit quidem culpa unde cum laudantium blanditiis. Amet sit ratione saepe alias in rem asperiores reiciendis. Sequi, eum.lor Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias accusantium quam perspiciatis? Eius velit eos mollitia laboriosam aut tempore aliquid perspiciatis facere ad, hic expedita culpa ducimus atque vitae totam!</p>

        </div>
<div class="col">
    <img  src="{{ asset('user/main-img/Group-44.png') }}" alt="Image 3" class="img-fluid customDivimage">
    <img src="{{ asset('user/main-img/Group-43.png') }}" alt="Image 3" class="img-fluid ">
    <img src="{{ asset('user/main-img/Group-25.png') }}" alt="Image 3" class="img-fluid customDivimage">


</div>
</div>
    </section>

    <section class="container-fluid mt-3" id="Section-5">
        <div class="row" id="seciotn-5-row">
            <div class="col p-div">
        <h2 class="div-title ">Lorem ipsum dolor sit amet, consectetur adipisicing elit</h2>
        <h4 class="div-secount-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit</h4>

        <p class="div-paragraph">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste similique esse sapiente ullam repellendus soluta odit, quae veniam culpa magnam aliquam cumque architecto dolorem magni debitis libero incidunt inventore sunt?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non provident sapiente deserunt reprehenderit quidem culpa unde cum laudantium blanditiis. Amet sit ratione saepe alias in rem asperiores reiciendis. Sequi, eum.lor Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias accusantium quam perspiciatis? Eius velit eos mollitia laboriosam aut tempore aliquid perspiciatis facere ad, hic expedita culpa ducimus atque vitae totam!</p>
        <button id="explore-btn">Explore</button>

                </div>
                <div class="col p-div d-inline-flex">
                      <div class="col">
                        <img src="{{ asset('user/main-img/Group-53.png') }}" alt="Image 1" id="KidsImg" class="img-fluid">
                      <h5 class="custome-desctiption-img text-center">Kids</h5>
                      </div>
                      <div class="col">
                        <img src="{{ asset('user/main-img/Group-52.png') }}" alt="Image 2" class="img-fluid">
                        <h5 class="custome-desctiption-img text-center">Mother</h5>

                      </div>
                      <div class="col">
                        <img src="{{ asset('user/main-img/Group-51.png') }}" alt="Image 3" class="img-fluid">
                        <h5 class="custome-desctiption-img text-center">Athlitics</h5>

                      </div>
                 
                  </div>
                  
        </div>

    </section>


@endsection
