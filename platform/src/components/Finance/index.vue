<template>
  <div class="Finance">
    <div class="Finance__column">
      <i class="fa fa-credit-card-alt" style="color:#F15922" aria-hidden="true" />
      <label style="font-weight:bold;font-size:24px">
          Finanse
      </label>
    </div>
    <div class="Finance__column">
      <i class="fa fa-connectdevelop" aria-hidden="true" />
      <label class="Finance__column-name">
          Finanse do wypłaty:
      </label>
      <label class="Finance__column-value">
          {{ value1 }} zł
      </label>
    </div>
     <div class="Finance__column">
       <i class="fa fa-eercast" aria-hidden="true" />
      <label class="Finance__column-name">
          Wykonane zakupy:
      </label>
      <label class="Finance__column-value">
          {{ value2 }} zł
      </label>
    </div>
     <div class="Finance__column">
      <i class="fa fa-money" aria-hidden="true" />
      <label class="Finance__column-name">
          Wypłaciłes łącznie:
      </label>
      <label class="Finance__column-value">
          {{ value3 }} zł
      </label>
    </div>
  </div>
</template>

<script src="./component.js"></script>
<style src="./style.sass" lang="sass" scoped></style>
