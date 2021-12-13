<template>
  <h2 class="fs-4 text-purple fw-bold mb-4 text-sm-center text-md-start">
    Un universo lleno de ofertas
  </h2>
  <carousel :autoplay="4000" :settings="settings" :breakpoints="breakpoints" :items-to-show="4">
    <slide v-for="product in productsArr" :key="product.nombre">
        <div class="carousel__item card-product mx-3 text-start">
          <article class="card p-0 position-relative">
            <span class="position-absolute sticker-discount translate-middle mt-3">
              <img width="70" src="https://laika.com.co/assets/star.svg" class="position-absolute"  alt="descuento"/>
              <div class="fs-5 position-relative fw-bold text-white sticker-discount-text">
                {{product.discount}}%
              </div>
            </span>
            <img :src="product.img" class="card-product-img mx-auto" :alt="'Imagen del producto'+' '+product.name"/>
            <div class="card-body text-left">
              <h3 class="card-title card-title-product fs-5">{{product.name}}</h3>
              <div class="product-rating text-sm">
                <i class="fa fa-star me-1 text-gold"></i>
                <i class="fa fa-star me-1 text-gold"></i>
                <i class="fa fa-star me-1 text-gold"></i>
                <i class="fa fa-star me-1 text-gold"></i>
                <i class="fa fa-star me-1 text-gold"></i>
              </div>
              <div class="card-price border-bottom d-flex justify-content-start">
                <p class="fs-5 fw-bold pe-2 bd-highlight mb-0">${{product.price}}</p>
                <span class="price-before px-2 bd-highlight">
                <span class="ml-2 text-xs text-muted lh-0 my-auto">
                <span class="d-block mt-2">Antes</span>
                <strike class="fw-bolder">${{product.priceBefore}}</strike>
                </span>
                </span>
              </div>
              <div class="card-price d-flex justify-content-start mb-3">
                <p class="fs-5 fw-bold pe-2 bd-highlight mb-0 text-danger mt-1">
                  ${{product.priceMember}}
                </p>
                <span class="price-before px-2 bd-highlight">
                <span class="ml-2 text-muted lh-0 my-auto">
                <span class="fw-bold text-sm text-purple text-uppercase">Laika</span>
                <span class="fw-bold text-sm text-gold ms-1">Member </span>
                <button class="btn btn-gold py-0 text-uppercase fw-bold btn-member-sm px-3 rounded-3">
                Adquierela YA
                </button>
                </span>
                </span>
              </div>
              <div class="mt-3">
                <input type="checkbox" class="btn-check" name="options-outlined" :id="product.name" autocomplete="off" checked/>
                <label class="btn btn-lg btn-outline-purple text-uppercase text-xs fw-bolder px-2 mx-1" :for="product.name">
                    {{product.reference}}
                </label>
              </div>
            </div>
            <div class="card-footer d-grid gap-2 p-0">
              <button class="btn btn-lg btn-purple rounded-0 fw-bolder py-3 fs-6">
              <i class="fas fa-shopping-cart"></i>
              Añadir al carrito
              </button>
            </div>
          </article>
        </div>
    </slide>
    <template #addons>
      <pagination />
    </template>
  </carousel>
</template>

<script>
import "vue3-carousel/dist/carousel.css";
import { Carousel, Slide} from "vue3-carousel";

export default {
  name: 'Products',
  components: {
    Carousel,
    Slide,
  },
  props: ['products'],
  data: function () {
    return {
        settings: {
        itemsToShow: 1,
        snapAlign: 'center',
      },
      breakpoints: {
        700: {
          itemsToShow: 2.5,
          snapAlign: 'center',
        },
        1024: {
          itemsToShow: 3.5,
          snapAlign: 'start',
        },
        1366: {
          itemsToShow: 4,
          snapAlign: 'start',
        },
      },
      productsArr: this.products,
    };
  },
};
</script>
