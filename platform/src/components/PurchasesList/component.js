import store from '@/store';

export default {
  name: 'PurchasesList',
  store,

  props: {
    loading: false,
    list: {
      type: Array,
      default: [],
    },
  },
  computed: {
    filteredList() {
      if (this.filterValue !== '') {
        return this.$store.getters['purchases/list']
          .filter(item => item.price === this.filterValue);
      }
      return this.$store.getters['purchases/list'];
    },
  },
  data() {
    return {
      filterValue: '',
    };
  },

  methods: {
  },
};
