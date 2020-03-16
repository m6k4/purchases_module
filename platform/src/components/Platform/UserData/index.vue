<template>
  <div class="UserData">
    <div class="UserData__details">
      <img src="~@/assets/images/avatar.jpg">
      <label class="details__name">
        {{ name }}
      </label>
      <label>
        {{ position }}
      </label>
      <div class="details__buttons">
        <i class="fa fa-cog" style="margin-right:10px" aria-hidden="true" />
        <i class="fa fa-arrow-circle-right" aria-hidden="true" />
      </div>
    </div>
  </div>
</template>

<script src="./component.js"></script>
<style src="./style.sass" lang="sass" scoped></style>
