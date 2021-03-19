<?php 
$page="Nos Maisons";
include('../layouts/header.php') ?> <main id="nosMaisons" class="pad-top">
  <article class="container text-center pt-4">
    <h1 class="my-4 section-header">Simply Home : Nos Maisons</h1>
    <p class="text-justify mt-3"> Que votre choix se porte sur une maison traditionnelle ou sur une maison
      contemporaine, notre йquipe expйrimentйe, composйe de conducteurs de travaux qualifiйs, d’un responsable technique
      , d’un responsable qualitй et de technico-commerciaux, est lа pour vous conseiller et vous accompagner durant
      l’integralite de vos travaux. Notez que nous disposons d’un bureau d’etude de dessin. </p>
  </article>
  <section class="my-4 container text-center">
    <h2 class="section-header">Choisissez votre Maison</h2>
    <div class="d-flex select justify-content-around">
      <select class="custom-select bold mx-3 my-3">
        <option selected class="custom-select bold">STYLE</option>
        <option value="1" class="custom-select bold">Contemporain</option>
        <option value="2" class="custom-select bold">Traditionel</option>
      </select>
      <select class="custom-select bold mx-3 my-3">
        <option selected class="custom-select bold">TOITURE</option>
        <option value="1" class="custom-select bold">Ardoise</option>
        <option value="2" class="custom-select bold">Moderne</option>
        <option value="3" class="custom-select bold">Tuiles</option>
      </select>
      <select class="custom-select bold mx-3 my-3">
        <option selected class="custom-select bold">NIVEAU</option>
        <!-- <option value="1" class="custom-select bold">Ardoise</option>
        <option value="2" class="custom-select bold">Moderne</option>
        <option value="3" class="custom-select bold">Tuiles</option> -->
      </select>
      <select class="custom-select bold mr-3 my-3">
        <option selected class="custom-select bold">NB CHAMBRE(S)</option>
        <option value="1" class="custom-select bold">2</option>
        <option value="2" class="custom-select bold">3</option>
        <option value="3" class="custom-select bold">4</option>
        <option value="4" class="custom-select bold">5</option>
      </select>
    </div>
    <div class="d-flex justify-content-between flex-wrap mt-3 nos-maisons" id="house-cards">
      <div class="card">
        <a href="#" class="text-left">
          <img class="card-img-top" src="../images/armenia_3_chambres.jpg" alt="Card image">
          <div class="card-body">
            <h3 class="card-title">ARMENIA</h3><span> - 3 Chambres + Bureau</span>
            <p class="card-title mb-0">104m²</p>
            <p class="card-text description">Maison traditionnelle à étage de 104 m² habitables environ. Belle pièce de
              vie de 40m², 3 chambres dont une salle de bains,mezzanine, bureau, cellier, salle de bains et WC séparés.
            </p>
          </div>
        </a>
      </div>
      <div class="card">
        <a href="#" class="text-left">
          <img class="card-img-top" src="../images/atlas_3_chambres.jpg" alt="Card image">
          <div class="card-body">
            <h3 class="card-title">ATLAS </h3><span> - 3 Chambres</span>
            <p class="card-title mb-0">109m²</p>
            <p class="card-text description">Maison contemporaine à étage de 106m² environ. Au RDC, belle pièce de vie
              de 44m²,cellier. A l'étage, 3 chambres, salle de bains et WC séparés. </p>
          </div>
        </a>
      </div>
      <div class="card">
        <a href="#" class="text-left">
          <img class="card-img-top" src="../images/attis_3_chambres.jpg" alt="Card image">
          <div class="card-body">
            <h3 class="card-title">ATTIS </h3><span> - 3 Chambres</span>
            <p class="card-title mb-0">109m²</p>
            <p class="card-text description">Maison traditionnelle de plain-pied de109m² environ. Grande pièce de vie de
              53m², 3 chambres, cellier, salle de bains et WC. Cette maison bénéficie également d'un grand garage. </p>
          </div>
        </a>
      </div>
      <div class="card">
        <a href="#" class="text-left">
          <img class="card-img-top" src="../images/actuel_2_chambres.jpg" alt="Card image">
          <div class="card-body">
            <h3 class="card-title">ACTUAL </h3><span> - 2 Chambres</span>
            <p class="card-title mb-0">72m²</p>
            <p class="card-text description">Maison contemporaine de plain-pied de 72m² environ. Grande pièce de vie de
              42m², 2 chambres, salle de bains et WC séparés. Cette maison bénéficie également d'un garage et jardin.
            </p>
          </div>
        </a>
      </div>
      <div class="card">
        <a href="#" class="text-left">
          <img class="card-img-top" src="../images/actuel_4_chambres.jpg" alt="Card image">
          <div class="card-body">
            <h3 class="card-title">ACTUAL </h3><span> - 3 Chambres</span>
            <p class="card-title mb-0">87m²</p>
            <p class="card-text description">Maison contemporaine de plain-pied de 87m² environ. Grande pièce de vie de
              46m², 3 chambres, salle de bains et WC séparés. Cette maison bénéficie également d'un garage et jardin</p>
          </div>
        </a>
      </div>
      <div class="card">
        <a href="#" class="text-left">
          <img class="card-img-top" src="../images/actuel_4_chambres.jpg" alt="Card image">
          <div class="card-body">
            <h3 class="card-title">ACTUAL </h3><span> - 4 Chambres</span>
            <p class="card-title mb-0">108m²</p>
            <p class="card-text description">Maison contemporaine de plain-pied de 108m² environ. Grande pièce de vie de
              47m², 4 chambres, salle de bains et WC séparés. Cette maison bénéficie également d'un garage et jardin.
            </p>
          </div>
        </a>
      </div>
      <div class="card">
        <a href="#" class="text-left">
          <img class="card-img-top" src="../images/adonis_4_chambres.jpg" alt="Card image">
          <div class="card-body">
            <h3 class="card-title">ADONIS </h3><span> - '3' Chambres</span>
            <p class="card-title mb-0">125m²</p>
            <p class="card-text description">Maison traditionnelle à étage de 125m² habitables environ. Au RDC, belle
              pièce de vie, 1 grande chambre, une salle de bains, un cellier. A l'étage, une mezzanine, 3 chambres,
              salle de bains et WC.</p>
          </div>
        </a>
      </div>
      <div class="card">
        <a href="#" class="text-left">
          <img class="card-img-top" src="../images/alpha_5_chambres.jpg" alt="Card image">
          <div class="card-body">
            <h3 class="card-title">ALPHA </h3><span> - 5 Chambres</span>
            <p class="card-title mb-0">177m²</p>
            <p class="card-text description">Maison contemporaine de plain-pied de 177 m² habitables environ. Belle
              pièce de vie de 66m², 5 chambres dont une avec dressing et salle de bains, cellier, salle de bains et WC
              séparés. Cette maison bénéficie également d'un garage et jardin.</p>
          </div>
        </a>
      </div>
      <div class="card">
        <a href="#" class="text-left">
          <img class="card-img-top" src="../images/ambroise_4_chambres.jpg" alt="Card image">
          <div class="card-body">
            <h3 class="card-title">AMBROISE </h3><span> - 4 Chambres</span>
            <p class="card-title mb-0">117m²</p>
            <p class="card-text description">Maison contemporaine à étage de 117m² environ. Au RDC, belle pièce de vie
              de 49m², 1 grande chambre avec salle de bains, cellier. A l'étage, 3 chambres, salle de bains et WC
              séparés.</p>
          </div>
        </a>
      </div>
    </div>
    <div class="container d-flex justify-content-center">
      <ul class="pagination">
        <li class="page-item"><a class="page-link" href="#">Préc.</a></li>
        <li class="page-item active"><a class="page-link" href="#">1</a></li>
        <li class="page-item "><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Suiv.</a></li>
      </ul>
    </div>
  </section>
</main> <?php include('../layouts/footer.php') ?>