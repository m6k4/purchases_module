<template>
  <div class="PlatformView">
    <div class="container_header">
      <UserData />
      <div class="page_content">
        <Header />
        <router-view />
      </div>
    </div>
    <TheMenu />
  </div>
</template>

<script>
import store from '@/store';
import TheMenu from '@/components/Platform/TheMenu';
import UserData from '@/components/Platform/UserData';
import Header from '@/components/Platform/Header';

export default {
  name: 'Platform',

  components: { TheMenu, UserData, Header },

  store,
};
</script>

<style lang="sass" scoped>
.PlatformView
  padding: 30px

  .container_header
    display: flex
    justify-content: center
    height: 300px

    .page_content
      display: flex
      width: 100%
      flex-direction: column

.logo_img
  border-radius: 4px
  padding: 5px
  width: 150px

</style>
