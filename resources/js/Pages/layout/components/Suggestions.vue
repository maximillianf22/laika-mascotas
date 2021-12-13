<template>
  <a target="_blank">
    <div class="suggestions-bubble-container bg-danger py-3 px-2">
      <span class="suggest">
        <i class="fas fa-comment-alt fa-lg mb-2"></i>
        Sugerencias
      </span>
    </div>
  </a>
</template>

<script>
export default {
  name: "suggestions",
};
</script>

<style computed>
.suggestions-bubble-container {
    border-radius: 5px 0px 0px 5px;
  position: fixed;
  color: #fff;
  right: 0px;
  top: 40%;
  z-index: 100;
  background-color: #603e85;
  cursor: pointer;
}

.suggest {
  transform: rotate(180deg);
  writing-mode: vertical-rl;
}

.fa-comment-alt {
  transform: rotate(180deg);
  writing-mode: vertical-rl;
}
</style>
