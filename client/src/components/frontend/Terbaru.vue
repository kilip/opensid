<template>
  <div class="flex-row item-start pt-8 items-center content-center w-full">
    <div v-for="item in items" class="bg-white m-8 lg:w-8/12 rounded-lg p-4 shadow-lg">
      <span class="text-xl font-semibold text-black">{{ item['judul']}}</span>
      <div class="flex-col">
        <div v-html="wrapIsi(item['isi'])">
        </div>
        <router-link
          :to="{ path: '/artikel?id='+item['@id'] }"
          class="bg-green-700 text-white text-sm p-1 rounded"
        >
          Lanjut Baca
        </router-link>
      </div>
    </div>
    <div class="flex">
      <button
        class="small bg-blue-500 text-white shadow-sm text-sm p-1 rounded-l ml-2"
      >
        Sebelumnya
      </button>
      <button
        class="small bg-blue-500 text-white shadow-sm text-sm p-1 rounded-r ml-2"
        v-on:click="pageNav"
      >
        Lanjutkan
      </button>
    </div>
  </div>
</template>
<script>
import {mapActions, mapGetters} from 'vuex';
import { mapFields } from 'vuex-map-fields';

export default {
  servicePrefix: 'artikelService',
  computed: {
    ...mapGetters('artikel',{
      items: 'list'
    }),
    ...mapFields('artikel', {
      error: 'error',
      isLoading: 'isLoading',
      resetList: 'resetList',
      totalItems: 'totalItems',
      view: 'view',
    }),
  },

  mounted() {
    // const uri = this.$route.query.page || '/api/artikel?order[createdAt]=DESC';
    this.fetchAll();
  },
  data(){
    return {
      options: {
        page: 1,
        itemsPerPage: 5,
        sortBy: [],
        sortDesc: [],
      },
      filters: {}
    }
  },
  methods: {
    ...mapActions('artikel',{
      fetchAll: 'fetchAll',
    }),
    wrapIsi(content){
      const stop = content.length > 300 ? 300:content.length;
      return content.substr(0, stop)+'...';
    },
    pageNav(){
      this.resetList = true;
      this.options.page +=1;
      this.fetchAll(this.options);
    }
  },
};
</script>
