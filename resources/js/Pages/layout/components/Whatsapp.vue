<template>
  <a href="https://api.whatsapp.com/send?phone=+573009108496" target="_blank">
    <div class="whatsapp-bubble-container">
      <img width="40" src="https://laika.com.co/assets/whatsapp_1.png"/>
    </div>
  </a>
</template>

<script>
export default {
  name: "whatsapp",
};
</script>

<style computed>
.whatsapp-bubble-container {
  position: fixed;
  right: 23px;
  bottom: 85px;
  z-index: 100;
  object-fit: contain;
  border-radius: 50%;
  padding: 7px;
  background-color: #fff;
  box-shadow: 1px 1px 7px 1px grey;
  cursor: pointer;
  transition: 0.5s;
}
</style>
