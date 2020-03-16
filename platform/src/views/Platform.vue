<template>
  <div class="PlatformView">
    <div class="PlatformView__leftColumn">
        <UserData />
         <TheMenu /> 
    </div>
    <div class="PlatformView__rightColumn">
        <div class="PlatformView__rightColumn-top">
            <Header />
        <router-view />
        </div>
        <div class="PlatformView__rightColumn-bottom">
          <Finance />
        </div>
        <div class="PlatformView__footer">
        <label style="margin-right: 10px;color:#9095B7"> Porzebujesz pomocy? </label> 
        <a href="mailto:tech@homeden.pl" style="color:#F15922;margin-right: 10px"> tech@homeden.pl </a>
        </div>
    </div>
  </div>
</template>

<script>
import store from '@/store';
import TheMenu from '@/components/Platform/TheMenu';
import UserData from '@/components/Platform/UserData';
import Header from '@/components/Platform/Header';
import Finance from '@/components/Finance';

export default {
  name: 'Platform',

  components: { TheMenu, UserData, Header, Finance },

  store,
};
</script>

<style lang="sass" scoped>
.PlatformView
  padding: 30px
  display: flex
  flex-direction: row
  height: 100vh
  width: 100%
  position: relative

  &__leftColumn
    width: 20%

  &__rightColumn
    width: 80%

    .PlatformView__rightColumn-top
      height: 80%

    .PlatformView__rightColumn-bottom
      height: 13%

    .page_content
      display: flex
      width: 100%
      flex-direction: column

  &__footer
    display: flex
    flex-direction: row
    justify-content: flex-end
    margin: 5px
    font-size: 10px

.logo_img
  border-radius: 4px
  padding: 5px
  width: 150px

</style>
