<template>
  <div class="TheMenu">
    <el-menu :default-active="activeIndex"
             mode="vertical"
    >
      <el-menu-item index="1" @click="goTo('purchases')" class="TheMenu__items-item">Przegląd</el-menu-item>
      <el-menu-item index="2" class="TheMenu__items-item">Raport sprzedaży</el-menu-item>
      <el-menu-item index="3" class="TheMenu__items-item">Udzielone rabaty</el-menu-item>
      <el-menu-item index="4" class="TheMenu__items-item">Dane osobowe</el-menu-item>
      <el-menu-item index="5" class="TheMenu__items-item">Finanse</el-menu-item>
    </el-menu>
  </div>
</template>

<script src="./component.js"></script>
<style src="./style.sass" lang="sass" scoped></style>
