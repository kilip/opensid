<template>
  <div class="flex-row item-start pt-8 items-center content-center w-full">
    <div v-for="item in items" class="bg-white m-8 lg:w-8/12 rounded-lg p-4">
      <span class="text-xl font-semibold text-black">{{ item['judul']}}</span>
      <div>
        <div v-html="wrapIsi(item['isi'])">
        </div>
        <router-link
          :to="{ path: '/artikel?id='+item['@id'] }"
        >
          Lanjut Baca
        </router-link>
      </div>
    </div>
  </div>
</template>
<script>
import { mapActions } from 'vuex';
import { mapFields } from 'vuex-map-fields';

export default {
  computed: {
    ...mapFields('artikel/list', {
      error: 'error',
      items: 'items',
      isLoading: 'isLoading',
      view: 'view',
    }),
  },

  mounted() {
    this.getPage('/api/artikel');
  },
  methods: {
    ...mapActions({
      getPage: 'artikel/list/default',
    }),
    wrapIsi(content){
      const stop = content.length > 300 ? 300:content.length;
      return content.substr(0, stop)+'...';
    }
  },
};
</script>
