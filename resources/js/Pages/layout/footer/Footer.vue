<template>
<div class="row m-auto justify-content-center my-4 container px-0 px-xxl-5">
    <div class="col-lg-12 col-xl-3 mt-lg-5 px-0 pe-lg-5 text-center">
      <span>
        <img class="ml-2 text-right img-fluid" src="https://laika.com.co/assets/LAIKA.png" alt="Logo Laika Footer"/>
        <p class="m-0 mt-2 text-purple">Síguenos en:</p>
        <div class="m-0">
          <span class="filter-contrast-1">
            <a class="me-2" href="https://www.youtube.com/watch?v=gchln4oix68" aria-label="Youtube">
                <i class="fab fa-youtube-square fa-2x text-purple"></i>
            </a>
          </span>
          <span class="filter-contrast-1">
            <a class="me-2" href="https://www.instagram.com/laikamascotas/?hl=es-la" aria-label="Instagram">
                <i class="fab fa-instagram-square fa-2x text-purple"></i>
            </a>
          </span>
          <span class="filter-contrast-1">
            <a class="me-2" href="https://es-la.facebook.com/LaikaUniverso/" aria-label="Facebook">
                <i class="fab fa-facebook-square fa-2x text-purple"></i>
            </a>
          </span>
        </div>
      </span>
    </div>
    <div class="col-lg-3 col-xl-2 mt-2 mt-lg-5 d-none d-lg-none d-xl-block">
      <ul class="list-unstyled">
        <li class="text-uppercase text-purple fw-bold mb-2">Acerca de Laika</li>
        <ListAbout/>
      </ul>
    </div>
    <div class="col-lg-3 col-xl-2 mt-2 mt-lg-5 d-none d-lg-none d-xl-block">
      <ul class="list-unstyled">
        <li class="text-uppercase text-purple fw-bold mb-2">Links de Interes</li>
        <ListLinks/>
      </ul>
    </div>
    <FooterMobile />
    <div class="row col-lg-12 col-xl-5 mt-2 mt-lg-5">
      <div class="col-lg-12 col-xl-6 d-none d-lg-none d-xl-block">
        <ul class="list-unstyled mb-1">
          <li class="text-uppercase text-purple fw-bold mb-2">Información</li>
          <ListInformation/>
        </ul>
      </div>
      <div class="col-lg-12 col-xl-6 pe-lg-0">
        <ul class="list-unstyled">
          <li class="text-uppercase text-purple fw-bold mb-2 d-lg-none d-xl-block">Suscríbete</li>
          <li class="text-purple mb-2">
            <p class="mb-1 text-sm"> Recibe noticias y promociones al instante.</p>
            <form action="form-group mt-0 " id="home_subs">
              <div class="input-group">
                <div class="input-group border border-purple mb-2 rounded-3">
                  <input type="text" class="form-control border-0" placeholder="Correo Electronico">
                  <button class="btn btn-link" type="button" id="submit-button" aria-label="suscribirme">
                    <i class="fa fa-chevron-right bg-purple py-1 px-2 text-white rounded-3"></i>
                  </button>
                </div>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="flexCheckDefault">
                <label class="form-check-label text-sm fst-italic" for="flexCheckDefault">
                   He leído y acepto las
                   <a href="https://laika.com.co/privacy_policies/bog" class="text-nowrap text-purple">
                      políticas de privacidad.
                   </a>
                </label>
              </div>
            </form>
          </li>
        </ul>
      </div>
    </div>
</div>
<div class="bg-light py-5">
  <div class="container px-0 px-xxl-5">
    <div class="row text-center m-0 px-0 px-xxl-5">
      <div class="col-12 col-sm-12 col-md-4 row text-center m-0 p-0">
        <div class="col-4 my-auto">
          <img src="https://laika.com.co/assets/laika_vetcare/Mercado_pago.png" alt="pagos con mercado pago" class="img-fluid img-app-download">
        </div>
        <div class="col-4 my-auto">
          <img src="https://laika.com.co/assets/laika_vetcare/MASTER.png" alt="pagos con master card" class="img-fluid img-app-download">
        </div>
        <div class="col-4 my-auto">
          <img src="https://laika.com.co/assets/laika_vetcare/VISA.png" alt="pagos con visa" class="img-fluid img-app-download">
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 row text-center m-0 p-0">
        <div class="col-6 my-auto">
          <img src="https://laika.com.co/assets/laika_vetcare/AMERICAN.png" alt="pagos con american express" class="img-fluid img-app-download">
        </div>
        <div class="col-6 my-auto">
          <a href="https://itunes.apple.com/co/app/laika/id1325285117?mt=8" rel="noreferrer" target="_blank" class="me-1 px-0">
          <img class="img-app-download" src="https://laika.com.co/assets/APP.png" alt="descarga la aplicacion en appstore">
          </a>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 row text-center m-0 p-0">
        <div class="col-6 my-auto">
          <a href="https://play.google.com/store/apps/details?id=com.kubo.laika" rel="noreferrer" target="_blank" class="me-1 px-0">
          <img class="img-app-download" src="https://laika.com.co/assets/GOOGLEP.png" alt="descarga la aplicacion en playstore">
          </a>
        </div>
        <div class="col-6 my-auto">
          <a href="https://appgallery5.huawei.com/#/app/C101252007" rel="noreferrer" target="_blank" class="me-1 px-0">
          <img class="img-app-download" src="https://laika.com.co/assets/huaweiGallery.png" alt="descarga la aplicacion en huaweistore">
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
</template>

<script>
import FooterMobile from "./FooterMobile";
import ListAbout from "./components/ListAbout";
import ListLinks from "./components/ListLinks";
import ListInformation from "./components/ListInformation";

export default {
  name: 'Footer',
  components: {
    FooterMobile,
    ListAbout,
    ListLinks,
    ListInformation,
  },
};
</script>

