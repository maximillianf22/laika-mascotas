<template>
<nav class="navbar navbar-expand-lg navbar-dark bg-purple static-top py-3 py-lg-1">
  <div class="container d-flex">
    <div class="row w-100 m-0">
      <div class="col-7 col-md-2 col-lg-1 d-flex order-1 p-lg-0">
        <div class=" my-auto">
          <a href="#" class="me-3 d-block d-sm-block d-md-block d-lg-none">
            <i class="fas fa-bars fa-2x me-0 text-white py-2"></i>
          </a>
        </div>
        <a class="navbar-brand py-1" href="#">
        <img src="/images/logo.svg" alt="Logo Laika" class="navbar-logo" />
        </a>
      </div>
      <div class="col-md-5 col-lg-6 order-3 order-md-2 my-auto">
        <form action="">
          <div class="input-group border-0 navbar-search rounded-3">
            <input type="text" class="form-control border-0" placeholder="Encuentra lo mejor para tu mascota" />
            <span class="input-group-text bg-white border-0 text-purple">
            <i class="fas fa-search"></i>
            </span>
          </div>
        </form>
      </div>
      <div class="col-5 col-md-5 order-2 order-md-3 my-auto">
        <div class="d-flex bd-highlight">
          <div class="navbar-country-select flex-fill bd-highlight my-auto text-end text-md-start" >
            <a href="#" class="navbar-link text-decoration-none fw-bolder">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/21/Flag_of_Colombia.svg/1920px-Flag_of_Colombia.svg.png" alt="Bandera de Colombia" class="navbar-country-flag me-1"/>
            <span class="flag-description px-md-1">BOG</span>
            <i class="fas fa-angle-down"></i>
            </a>
          </div>
          <div class="flex-fill bd-highlight text-end my-auto d-flex flex-row bd-highlight justify-content-end">
            <a href="#" class="navbar-link text-decoration-none d-sm-none d-none d-md-block d-lg-block bd-highlight">
              <div class=" navbar-icon-circle my-auto mx-auto justify-content-center text-center pt-2 ">
                <i class="far fa-user fa-lg"></i>
              </div>
              <span class="ms-2">Mi Cuenta</span>
            </a>
            <a href="#" class=" navbar-link text-decoration-none position-relative ms-md-4 ms-2 pe-0 bd-highlight my-auto" >
            <i class="fas fa-shopping-cart fa-lg"></i>
            <span class=" position-absolute top-0 start-120 translate-middle badge rounded-pill navbar-badge-cart p-0 pt-1 " >
              0
            <span class="visually-hidden">Articulos en el carrito</span>
            </span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>
</template>

<script>
export default {
  name: 'Navbar',
};
</script>
