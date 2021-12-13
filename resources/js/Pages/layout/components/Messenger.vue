<template>
  <a href="tel:+3009108496" target="_blank">
    <div class="messenger-bubble-container">
      <i class="fa fa-sms fa-2x p-2"></i>
    </div>
  </a>
</template>

<script>
export default {
  name: "messenger",
};
</script>

<style computed>
.messenger-bubble-container {
  position: fixed;
  color: #fff;
  right: 23px;
  bottom: 15px;
  z-index: 100;
  object-fit: contain;
  border-radius: 50%;
  padding: 7px;
  background-color: #603e85;
  box-shadow: 1px 1px 7px 1px grey;
  cursor: pointer;
  transition: 0.5s;
}
</style>
