<template>
  <div class="w-full p-8">
    <div class="content-start bg-white p-4 shadow-xl rounded-lg" v-if="item">
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
import {mapActions, mapGetters} from "vuex";
import show from '../../mixins/show';

export default {
  servicePrefix: 'artikelService',
  mixins: [show],
  data(){
    return {
      id: this.$route.query.id
    }
  },
  created() {
    this.retrieve(decodeURIComponent(this.$route.query.id));
  },
  computed: {
    ...mapGetters('artikel',{
      find: 'find'
    }),
    item() {
      return this.find(decodeURIComponent(this.$route.query.id));
    }
  },
  methods: {
    ...mapActions('artikel', {
      retrieve: 'load',
      reset: 'resetShow',
    })
  }
}
</script>
