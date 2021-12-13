<template>
<div class="accordion accordion-flush px-4 d-block d-sm-block d-md-block d-lg-none" id="accordionFlush">
  <div class="accordion-item border-0">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed text-purple bg-white text-uppercase fw-bolder shadow-sm my-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        Acerca de Laika
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlush">
      <div class="accordion-body shadow-sm fw-bolder">
          <ul class="list-unstyled mb-1">
            <ListAbout/>
          </ul>
      </div>
    </div>
  </div>
  <div class="accordion-item border-0">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed text-purple bg-white text-uppercase fw-bolder shadow-sm my-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        Links de Interes
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlush">
      <div class="accordion-body shadow-sm fw-bolder">
          <ul class="list-unstyled mb-1">
            <ListLinks/>
          </ul>
      </div>
    </div>
  </div>
  <div class="accordion-item border-0">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed text-purple bg-white text-uppercase fw-bolder shadow-sm my-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        Información
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlush">
      <div class="accordion-body shadow-sm fw-bolder">
          <ul class="list-unstyled mb-1">
            <ListInformation/>
          </ul>
      </div>
    </div>
  </div>
</div>
</template>

<script>
import ListAbout from "./components/ListAbout";
import ListLinks from "./components/ListLinks";
import ListInformation from "./components/ListInformation";

export default {
  name: 'FooterMobile',
  components: {
    ListAbout,
    ListLinks,
    ListInformation,
  },
};
</script>
