<template>
  <h2 class="fs-4 text-purple fw-bold mb-4 text-sm-center text-md-start">Categorías</h2>
  <div class="text-center d-grid gap-2 d-sm-block">
    <div v-for="category in categories" :key="category.name" class="btn btn-link btn-lg fw-bold text-decoration-none shadow-sm border mx-1 text-dark px-0 px-sm-5 text-nowrap my-1 my-sm-2">
      <img :src="category.img" class="icon-category" :alt="'categoria'+' '+category.name">
      {{category.name}}
    </div>
  </div>
</template>

<script>
export default {

  name: 'Categories',
  data() {
    return {
      categories: [
          {name: 'Alimento', img: 'https://laikapp.s3.amazonaws.com/dev_images_categories/1613595491Categoria_pet_owner.png'},
          {name: 'Snaks', img: 'https://laikapp.s3.amazonaws.com/images_categories/ICONS_COTEGORY_SNACKS.png'},
          {name: 'Farmapet', img: 'https://laikapp.s3.amazonaws.com/dev_images_categories/1614033964Categoria_farmacia.png'},
          {name: 'Cuidado e Higiene', img: 'https://laikapp.s3.amazonaws.com/dev_images_categories/1613668386Categoria_higiene_2.png'},
          {name: 'Juguetes', img: 'https://laikapp.s3.amazonaws.com/dev_images_categories/1612554392Juguetes.png'},
          {name: 'Accesorios', img: 'https://laikapp.s3.amazonaws.com/images_categories/categoria_accesorios+(1).png'},
          {name: 'PetLovers', img: 'https://laikapp.s3.amazonaws.com/dev_images_categories/1613595491Categoria_pet_owner.png'},
      ],
    };
  },
};
</script>
