<?php 
$page="Nos Maisons";
include('../layouts/header.php') ?>

<main id="nosMaisons" class="pad-top">
  <article class="container text-center pt-4">
    <h1 class="my-4 section-header">Simply Home : Nos Maisons</h1>
    <p class="text-justify mt-3">
      Que votre choix se porte sur une maison traditionnelle ou sur une maison
      contemporaine, notre йquipe expйrimentйe, composйe de conducteurs de
      travaux qualifiйs, d’un responsable technique , d’un responsable qualitй
      et de technico-commerciaux, est lа pour vous conseiller et vous
      accompagner durant l’integralite de vos travaux. Notez que nous disposons
      d’un bureau d’etude de dessin.
    </p>
  </article>
  <section class="my-4 container text-center">
    <h2 class="section-header">Choisissez votre Maison</h2>
    <div class="d-flex select justify-content-around">
      <select class="custom-select bold mr-3">
        <option selected class="custom-select bold">STYLE</option>
        <option value="1" class="custom-select bold">Contemporain</option>
        <option value="2" class="custom-select bold">Traditionel</option>
      </select>
      <select class="custom-select bold mr-3">
        <option selected class="custom-select bold">TOITURE</option>
        <option value="1" class="custom-select bold">Ardoise</option>
        <option value="2" class="custom-select bold">Moderne</option>
        <option value="3" class="custom-select bold">Tuiles</option>
      </select>
      <select class="custom-select bold mr-3">
        <option selected class="custom-select bold">NIVEAU</option>
        <!-- <option value="1" class="custom-select bold">Ardoise</option>
        <option value="2" class="custom-select bold">Moderne</option>
        <option value="3" class="custom-select bold">Tuiles</option> -->
      </select>
      <select class="custom-select bold">
        <option selected class="custom-select bold">NB CHAMBRE(S)</option>
        <option value="1" class="custom-select bold">2</option>
        <option value="2" class="custom-select bold">3</option>
        <option value="3" class="custom-select bold">4</option>
        <option value="4" class="custom-select bold">5</option>
      </select>
    </div>
  </section>
</main>
<?php include('../layouts/footer.php') ?>
