<?php 
$page="A propos";
include('../layouts/header.php') ?> <main id="apropos" class="pad-top">
    <section class="container pt-4 text-center">
        <h1 class="bold my-4">Simply home: Une équipe d'experts</h1>
        <p class="text-justify mt-3">Forts d’une longue expérience dans le domaine de la construction de maisons
            individuelles, nous nous engageons à déterminer avec vous ce qui vous conviendra le mieux, en étudiant
            rigoureusement les moindres détails de la conception de votre nouveau lieu de vie. </p>
        <p class="text-justify"> Que votre choix se porte sur une maison traditionnelle ou sur une maison contemporaine,
            notre équipe expérimentée, composée de conducteurs de travaux qualifiés, d’un responsable technique, d’un
            responsable qualité et de technico-commerciaux, est là pour vous conseiller et vous accompagner durant
            l’intégralité de vos travaux. Notez que nous disposons d’un bureau d’étude de dessin. </p>
    </section>
    <section class="mt-4 container">
        <article>
            <button type="button" id="nos-engagements" class="btn d-button bold text-left"> <i
                    class="fas fa-angle-right px-2"></i> Nos engagements et garanties </button>
            <div class="dropdown-item-text" style="display: none;" id="dtext">
                <p>Nous mettons tout en œuvre pour vous offrir une maison qui réponde en tous points à vos exigences.
                    Ainsi, nous nous engageons à respecter les délais que nous nous sommes fixés, en ne travaillant
                    qu’avec des matériaux de qualité et adaptés. De plus, nous respectons toutes les normes et les
                    réglementations, notamment les normes RT 2012, ainsi que le Contrat de Construction de Maison
                    Individuelle.</p>
                <p>Nos engagements et garanties</p>
                <div class="d-flex justify-content-left">
                    <ul>
                        <li>Garantie de remboursement d’acompte</li>
                        <li> Garantie de livraison à prix et délai convenus</li>
                        <li>Assurance dommages-ouvrage</li>
                        <li>Garantie de parfait achèvement</li>
                        <li>Garanties biennale et décennale</li>
                        <li>Garantie de bon fonctionnement</li>
                        <li>Paiement des travaux strictement réglementé</li>
                    </ul>
                    <img src="../images/pa-picto-01.png" alt="image" class="img-fluid ml-3">
                </div>
            </div>
        </article>
        <button type="button" class="btn d-button bold text-left"> <i class="fas fa-angle-right px-2"></i> Un rapport
            qualité/prix inégalé </button>
        <button type="button" class="btn d-button bold text-left"> <i class="fas fa-angle-right px-2"></i> Une équipe
            investie et disponible</button>
    </section>
</main> <?php include('../layouts/footer.php') ?>