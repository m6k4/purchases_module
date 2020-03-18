import { Doughnut } from 'vue-chartjs';

export default {
  extends: Doughnut,

  props: {
  },

  data() {
    return {
    };
  },
  mounted() {
    this.renderChart({
      labels: ['Wypłacone', 'Wszystkie'],
      datasets: [
        {
          backgroundColor: [
            'rgba(65, 184, 131, .8)',
            'rgba(228, 102, 81, .8)',
          ],
          borderWidth: 0,
          data: [40, 200],
        },
      ],
    }, { responsive: true });
  },
  methods: {
  },
};
