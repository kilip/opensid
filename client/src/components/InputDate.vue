<template>
  <div>

  </div>
</template>

<script>
import { formatDateTime } from '../utils/dates';

export default {
  props: {
    label: {
      type: String,
      required: false,
      default: () => ''
    },
    value: String
  },
  created() {
    this.date = this.value || this.date;
  },
  data: () => ({
    date: new Date().toISOString().substr(0, 10),
    showMenu: false
  }),
  methods: {
    formatDateTime,
    handleInput() {
      this.showMenu = false;
      this.$emit('input', this.date);
    }
  }
};
</script>
