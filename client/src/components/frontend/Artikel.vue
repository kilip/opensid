<template>
  <div class="w-full p-8">
    <div class="content-start bg-white p-4" v-if="item">
      <div class="flex-row mb-8">
        <span class="block text-lg font-bold">{{ item['judul']}}</span>
        <span class="block text-sm">Oleh: {{ item['user']['nama']}}, {{ item['createdAt']}}</span>
      </div>
      <div class="flex-row" v-html="item['isi']"></div>
    </div>
  </div>
</template>

<script>
import {mapFields} from "vuex-map-fields";
import {mapActions} from "vuex";

export default {
  computed: {
    ...mapFields('artikel/show', {
      error: 'error',
      isLoading: 'isLoading',
      item: 'retrieved',
    }),
  },
  mounted() {
    const uri = this.$route.query.id;
    this.retrieve(decodeURIComponent(uri));
  },

  methods: {
    ...mapActions({
      retrieve: 'artikel/show/retrieve',
    }),
  },
}
</script>
