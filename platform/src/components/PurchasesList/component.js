import store from '@/store';

export default {
  name: 'PurchasesList',
  store,

  props: {
    list: {
      type: Array,
      default: [],
    },
    loading: false,
  },

  data() {
    return {
    };
  },

  methods: {
  },
};
