<template>
  <div class="bg-black d-none d-sm-none d-md-none d-lg-block topbar">
    <div class="container mx-auto py-1 d-flex bd-highlight px-0">
      <div class="flex-fill bd-highlight">
        <span class="text-sm text-white border-end px-2">
          <i class="fas fa-shield-alt"></i>
          Compras seguras online
        </span>
        <span class="text-sm text-white border-end px-2">
          <i class="fas fa-hand-holding-usd"></i>
          Pago Contraentrega
        </span>
        <span class="text-sm text-white border-end px-2">
          <i class="fas fa-truck"></i>
          Entregas el mismo dia
        </span>
      </div>
      <div class="flex-fill bd-highlight text-end">
        <span class="text-sm text-white border-end px-3">
          Llámanos
          <a href="tel:+3009108496" class="navbar-link text-decoration-none" target="_blank">
            <i class="fas fa-phone-square fa-lg px-2 lh-2"></i>
            3009108496
          </a>
        </span>
        <span class="text-sm text-white ms-3">
          Escribenos
          <a href="https://youtube.com" aria-label="Youtube" rel="noreferrer" class="navbar-link" target="_blank">
            <i class="fab fa-youtube-square fa-lg px-2 lh-2"></i>
          </a>
          <a href="https://instagram.com" aria-label="Instagram" rel="noreferrer" class="navbar-link" target="_blank">
            <i class="fab fa-instagram-square fa-lg px-2 lh-2"></i>
          </a>
          <a href="https://facebook.com" aria-label="Facebook" rel="noreferrer" class="navbar-link" target="_blank">
            <i class="fab fa-facebook-square fa-lg px-2 lh-2"></i>
          </a>
        </span>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Topbar',
};
</script>
