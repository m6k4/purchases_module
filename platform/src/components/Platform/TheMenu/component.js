import store from '@/store';

export default {
  name: 'TheMenu',
  store,

  data() {
    return {
      activeIndex: '',
    };
  },

  methods: {
    goTo(pathName) {
      this.$router.push(pathName);
    },
  },
};
