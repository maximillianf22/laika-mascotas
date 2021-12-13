<template>
<div class="d-block d-sm-block d-md-none d-lg-none">
  <ul class="nav nav-pills justify-content-center">
    <li class="nav-item mx-2">
      <a class="btn border py-1 fs-6 btn-purple btn-lg active" aria-current="page" href="#">
        Perro
        <img src="https://laika.com.co/assets/home/dog_mc.svg" alt="Icono perro" class="navbar-icon-img my-auto"/>
      </a>
    </li>
    <li class="nav-item mx-2">
      <a class="btn border py-1 fs-6 btn-lg active text-purple" href="#">
        Gato
        <img src="https://laika.com.co/assets/home/cat_mc_s.svg" alt="Icono gato" class="navbar-icon-img my-auto"/>
      </a>
    </li>
  </ul>
  <div class="text-center display-block mt-3 mb-4" aria-current="page" href="#">
    <span class="fw-bold fs-4 text-purple text-uppercase">Laika </span>
    <span class="fw-bold fs-4 text-gold">Member </span> <br>
    <button class="btn btn-gold py-1 px-5 rounded-3 text-uppercase ms-2 fw-bold">
      Adquierela YA
    </button>
  </div>
</div>
</template>

<script>
export default {
  name: "NavPills",
};
</script>
