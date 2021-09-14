<template>
  <div class="bg-white p-4 rounded-lg shadow-xl">
    <h1 class="text-xl font-bold border-b-2 border-gray-200 mb-8">Daftar Artikel</h1>
    <div class="flex flex-row justify-center justify-items-center">
      <table>
        <thead>
          <tr>
            <th/>
            <th>Judul</th>
            <th>Dibaca</th>
            <th>Dibuat Pada</th>
          </tr>
        </thead>
        <tbody>
        <tr v-for="item in items">
          <td>
            <router-link :to="{name: 'ArtikelUpdate', params: {id: item['@id']}}">
              Edit
            </router-link>
          </td>
          <td>{{ item['judul']}}</td>
          <td class="text-center">{{ item['hit']}}</td>
          <td class="text-center">{{ item['createdAt'] | formatDate  }}</td>
        </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<script>
import {mapActions, mapGetters} from 'vuex';
import { mapFields } from 'vuex-map-fields';
import { formatDateTime } from '../../utils/dates';

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
        itemsPerPage: 10,
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
