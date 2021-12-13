<template>
  <h2 class="fs-4 text-purple fw-bold mb-4 text-sm-center text-md-start">
    Marcas destacadas
  </h2>
  <carousel :autoplay="3000" :settings="settings" :breakpoints="breakpoints" class="shadow-sm mt-2" >
    <slide v-for="slide in 6" :key="slide">
      <div class="carousel__item w-100">
        <img :src="images[slide - 1]" alt="Marca destacada" class="img-brand shadow rounded-circle my-4" />
      </div>
    </slide>
    <template #addons>
      <navigation />
    </template>
  </carousel>
</template>

<script>
import "vue3-carousel/dist/carousel.css";
import { Carousel, Slide, Pagination, Navigation } from "vue3-carousel";

export default {
  name: 'FeaturedBrands',
  components: {
    Carousel,
    Slide,
    Pagination,
    Navigation,
  },
  data() {
    return {
      settings: {
        itemsToShow: 2.5,
        snapAlign: 'center',
      },
      breakpoints: {
        700: {
          itemsToShow: 4.5,
          snapAlign: 'center',
        },
        1024: {
          itemsToShow: 6,
          snapAlign: 'start',
        },
      },
      images: [
        'https://laikapp.s3.amazonaws.com/dev_images_categories/1624564683IMG_0153.png',
        'https://laikapp.s3.amazonaws.com/dev_images_categories/hills_circulo4.png',
        'https://laikapp.s3.amazonaws.com/dev_images_categories/1592410196_SALVAJE_FOOD_SAS__1226X1028.PNG',
        'https://s3.us-east-1.amazonaws.com/laikapp/images_categories/total_max_circulo2.png',
        'https://laikapp.s3.amazonaws.com/dev_images_categories/AGILITY_GOLD_CIRCULO_OK2.png',
        'https://laikapp.s3.amazonaws.com/images_categories/1589395980_ROYAL_CANIN_500X500.png',
      ],
    };
  },
};
</script>
