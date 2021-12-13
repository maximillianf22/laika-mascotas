<template>

  <section id="header" class="mt-main container px-3 px-lg-5">
    <h1 class="visually-hidden">Laika - Productos y Servicios para nuestros peluditos</h1>
    <!--Header-->
    <header class="fixed-top shadow-sm">
      <Topbar />
      <Navbar />
      <Toolbar />
    </header>
    <!--End Header-->
  </section>

  <main>
    <!--Carousel-->
    <section id="nav-pills" class="mt-main container px-3 px-lg-5">
      <NavPills />
    </section>
    <!--End Carousel-->

    <!--Carousel-->
    <section id="carousel" class="mt-main container px-3 px-lg-5">
      <Carousel />
    </section>
    <!--End Carousel-->

    <!--Categories-->
    <section id="categories" class="container px-3 px-lg-5 my-5">
      <Categories />
    </section>
    <!--End Categories-->

    <!--Featured Brands-->
    <section id="featruedBrands" class="container px-3 px-lg-5 my-5">
      <FeaturedBrands />
    </section>
    <!--End Featured Brands-->

    <!--Product List-->
    <section id="products" class="container px-3 px-lg-5 my-5">
      <Products :products="products" />
    </section>

    <!--End Product List-->

    <!--Banner-->
    <section id="banner" class="container px-3 px-lg-5 my-5 my-lg-0">
      <Banner />
    </section>
    <!--End Banner-->

    <!--Layout Components-->
    <section id="layout-components">
      <Messenger />
      <Whatsapp />
      <Suggestions />
    </section>
    <!--End Banner-->
  </main>
  <footer>
    <!--Footer-->
    <Footer />
    <!--End Footer-->
  </footer>
</template>

<script>
import Topbar from "./layout/header/Topbar";
import Navbar from "./layout/header/Navbar";
import Toolbar from "./layout/header/Toolbar";
import NavPills from "./components/NavPills";
import Carousel from "./components/Carousel";
import Categories from "./components/Categories";
import FeaturedBrands from "./components/FeaturedBrands";
import Products from "./components/Products";
import Banner from "./components/Banner";
import Footer from "./layout/footer/Footer";
import Messenger from "./layout/components/Messenger";
import Whatsapp from "./layout/components/Whatsapp";
import Suggestions from "./layout/components/Suggestions";

export default {
  name: 'Home',
  components: {
    Navbar,
    Topbar,
    Toolbar,
    NavPills,
    Carousel,
    Categories,
    FeaturedBrands,
    Products,
    Banner,
    Footer,
    Messenger,
    Whatsapp,
    Suggestions,
  },
  props: ['products'],
};
</script>
