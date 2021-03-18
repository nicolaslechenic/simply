<?php 
$page="Contact";
include('../layouts/header.php') ?> <main id="contact-page" class="pad-top">
    <article class="container text-center">
        <h1 class="bold my-5 section-header">Contacter Simply Home</h1>
        <div class="d-flex justify-content-around">
            <p class="text-justify"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum justo orci,
                pharetra vitae quam eu, pharetra fermentum felis. Integer sit amet vehicula velit, eu cursus metus.
                Donec congue, tellus ac efficitur iaculis, libero felis finibus magna, at consectetur libero lorem
                egestas lorem. Aenean lectus nulla, imperdiet eget maximus eu, lacinia et enim. Curabitur metus nisi,
                rhoncus convallis odio sed, pulvinar lacinia ipsum. Nam egestas libero nec dui porttitor porta. Integer
                sit amet maximus mauris, vel luctus tortor. <br> Vestibulum a felis eget leo ultrices placerat sed vitae
                nisi. Ut turpis sapien, bibendum id dolor vel, luctus venenatis massa. Phasellus luctus justo mi, sed
                suscipit tortor aliquam in. Nunc vel congue mauris. Phasellus feugiat facilisis odio. Suspendisse vel
                massa ullamcorper enim scelerisque tempus at eget libero. Maecenas vel luctus ipsum. Donec ac ultrices
                sem. </p>
            <img src="../images/imgcommencerprojet.jpg" class="img-fluid ml-5 d-md-none  d-sm-none d-lg-block"
                alt="start project">
        </div>
    </article>
    <section class="d-flex container">
        <form action="/action_page.php">
            <div class="form-group my-5 ">
                <input type="text" class="form-control border-dark border-top-0 border-left-0 border-right-0 rounded-0"
                    id="nameInput" aria-describedby="nameHelp" placeholder="Nom">
            </div>
            <div class="form-group mb-5">
                <input type="email"
                    class="form-control border-dark  border-top-0 border-left-0 border-right-0 rounded-0"
                    id="emailInput" aria-describedby="emailHelp" placeholder="Email">
            </div>
            <div class="form-group mb-5">
                <input type="tel" class="form-control border-dark  border-top-0 border-left-0 border-right-0 rounded-0"
                    id="telInput" aria-describedby="telHelp" placeholder="Téléphone">
            </div>
            <label class="mb-4" for="idepartments">Département</label>
            <div class="d-flex" id="properties">
                <div class="form-check pl-0 mr-3">
                    <label class="form-check-label mr-3" for="16">16 </label>
                    <input type="checkbox" class="form-check-input ml-1" id="16">
                </div>
                <div class="form-check">
                    <label class="form-check-label mr-3" for="85">85 </label>
                    <input type="checkbox" class="form-check-input ml-1" id="85">
                </div>
            </div>
            <label class="my-4" for="idepartments">Votre projet</label>
            <div class="d-flex" id="properties">
                <div class="form-check pl-0 mr-3">
                    <label class="form-check-label ml-1 mr-3" for="maison">Maison </label>
                    <input type="checkbox" class="form-check-input ml-1" id="maison">
                </div>
                <div class="form-check mr-3">
                    <label class="form-check-label ml-3 mr-3" for="maisonterrain">Maison+Terrain </label>
                    <input type="checkbox" class="form-check-input ml-1" id="maisonterrain">
                </div>
                <div class="form-check">
                    <label class="form-check-label ml-3 mr-3" for="appartement">Appartement</label>
                    <input type="checkbox" class="form-check-input ml-1" id="appartement">
                </div>
            </div>
            <div class="form-group mt-4 ">
                <label for="form-message">Votre Message:</label>
                <textarea class="form-control" rows="3" id="form-message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-2 px-3 border-dark">Envoyer</button>
        </form>
    </section>
</main> <?php include('../layouts/footer.php') ?>