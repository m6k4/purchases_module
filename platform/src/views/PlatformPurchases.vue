<template>
  <div class="PlatformPurchasesView">
    <div class="PlatformPurchasesView__columnLeft">
      <PurchasesList :list="list" />
    </div>
    <div class="PlatformPurchasesView__columnRight">
      <Chart />
    </div>
  </div>
</template>

<script>
import store from '@/store';

import PurchasesList from '@/components/PurchasesList';
import Chart from '@/components/Chart';

export default {
  name: 'PlatformPurchases',

  store,

  components: { PurchasesList, Chart },

  methods: {
  },

  computed: {
    list() {
      return this.$store.getters['purchases/list'];
    },
  },

  created() {
    this.$store.dispatch('purchases/getList');
  },
};
</script>

<style lang="sass" scoped>
  .PlatformPurchasesView
    display: flex
    flex-direction: row
  
    &__columnLeft
      width: 70%
      margin-right: 30px

    &__columnRight
      width: 10%
    
</style>
