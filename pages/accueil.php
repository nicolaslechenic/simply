<?php 
$page="accueil";
include('../layouts/header.php') ?> <main>
    <!-- <div id="modal-phone">
      <p class="text-center font-weight-bold"></p>
    </div> -->
    <!-- Contact us Modal -->

    <section id="bienvenue" class="container text-center">
        <h1 class="mr-4 section-header">Bienvenue Chez Simply Home</h1>
        <div class="row m-3">
            <article class="col-lg-9 col-sm-12 text-justify">
                <p>Pellentesque id sagittis turpis, eget elementum eros. Fusce blandit ex a nulla tempor condimentum.
                    Fusce
                    consectetur et blandit aliquet, egestas id magna. In hac habitasse platea dictumst. </p>
                <p>usce sed tincidunt nibh. Phasellus quis cursus velit. Ut quis aliquam sem. Suspendisse at
                    sollicitudin
                    ligula. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                </p>
            </article>
            <img src="../images/construction_maison_individuelle.jpg" alt="" class="col-3 img-fluid d-none d-md-block">
        </div>
    </section>
    <section class="container nos-maisons">
        <h2>Nos maisons</h2>
        <div class="d-flex justify-content-between flex-wrap">
            <div class="card ">
                <a href="#">
                    <img class="card-img-top" src="../images/calypso_3_chambres.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Calypso</h4>
                        <p class="card-text description">Maison 3 chambres</p>
                        <p class="card-text">107m²</p>
                    </div>
                </a>
            </div>
            <div class="card p-0">
                <a href="#">
                    <img class="card-img-top" src="../images/city_4_chambres.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">City</h4>
                        <p class="card-text description">Maison 2,3 ou 4 chambres</p>
                        <p class="card-text">A partir de 68m²</p>
                    </div>
                </a>
            </div>
            <div class="card  p-0 text-center text-light" id="financement">
                <img class="card-img-top" src="../images/imgfinancerprojet.jpg" alt="Card image">
                <div class="card-img-overlay pt-4">
                    <p class="card-text">Comment financer <br> mon projet ?</p>
                    <a href="#" class="btn btn-link">+ d'infos</a>
                </div>
            </div>
            <div class="card ">
                <a href="#">
                    <img class="card-img-top" src="../images/armenia_3_chambres.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Armenia</h4>
                        <p class="card-text description">Maison 3 chambres+bureau</p>
                        <p class="card-text">104m²</p>
                    </div>
                </a>
            </div>
            <div class="card ">
                <a href="#">
                    <img class="card-img-top" src="../images/bolzano_3_chambres.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Bolzano</h4>
                        <p class="card-text description">Maison 3 chambres</p>
                        <p class="card-text">104m²</p>
                    </div>
                </a>
            </div>
            <div class="card ">
                <a href="#">
                    <img class="card-img-top" src="../images/auze_3_chambres.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Azure</h4>
                        <p class="card-text description">Maison 3 chambres</p>
                        <p class="card-text">96m²</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="d-flex justify-content-around">
            <button type="button" onclick="location.href='nosmaisons.php'"
                class="btn btn-outline-dark pr-4 pl-4 bold">En voir +</button>
        </div>
    </section>
</main> <?php include('../layouts/footer.php') ?>