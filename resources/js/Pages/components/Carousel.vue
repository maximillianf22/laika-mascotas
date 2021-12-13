<template>
  <div class="px-lg-0">
    <carousel :autoplay="2000" :items-to-show="1">
      <slide v-for="slide in images.length" :key="slide">
        <div class="carousel__item w-100">
          <img :src="images[slide - 1]" alt="item del carousel" class="img-fluid carousel-img" />
        </div>
      </slide>
      <template #addons>
        <pagination />
      </template>
    </carousel>
  </div>
</template>

<script>
import "vue3-carousel/dist/carousel.css";
import { Carousel, Slide, Pagination } from "vue3-carousel";

export default {
  name: 'Carousels',
  components: {
    Carousel,
    Slide,
    Pagination,
  },
  data() {
    return {
      images: [
        'https://laikapp.s3.amazonaws.com/dev_images_banners/1638328921Mesa%20de%20trabajo%201%20copia%2098%20%281%29.png',
        'https://laikapp.s3.amazonaws.com/dev_images_banners/1638497638BREED%20PUPPY%20_euk%20%281%29.jpg',
        'https://laikapp.s3.amazonaws.com/dev_images_banners/1638994779banner.jpg',
        'https://laikapp.s3.amazonaws.com/dev_images_banners/1639068147final%201%20%281%29.jpg',
        'https://laikapp.s3.amazonaws.com/dev_images_banners/1637193899campa%C3%B1as%20nuevas%20diferenciales%20Camilo_Mesa%20de%20trabajo%201%20copia%2020%20copy%202.png',
        'https://laikapp.s3.amazonaws.com/dev_images_banners/1635557070banner-1750x200-concurso-equi-felino.jpg',
        'https://laikapp.s3.amazonaws.com/dev_images_banners/1638497060BREED%20PUPPY%20_rc.jpg',
        'https://laikapp.s3.amazonaws.com/dev_images_banners/1638831302PKC-HOME-1750X300%20%281%29.jpg',
      ],
    };
  },
};
</script>
