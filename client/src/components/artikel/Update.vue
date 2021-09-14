<template>
  <div>
    <t-card
      :header="retrieved && retrieved['judul']"
    >
      <ArtikelForm
        :values="item"
        :handle-submit="onSendForm"
        :errors="violations"
        :v-if="item"
        ref="updateForm"
      />
      <template v-slot:footer>
        <div class="flex">
          <router-link
            class="bg-green-400 text-center text-white align-baseline py-4 px-4 rounded-lg mr-2"
            :to="{ name: 'ArtikelList'}">
            Kembali
          </router-link>
          <t-button type="button" @click="onSendForm">
            Simpan
          </t-button>
        </div>
      </template>
    </t-card>
  </div>
</template>

<script>
import {mapActions, mapGetters} from 'vuex';
import { mapFields } from 'vuex-map-fields';
import ArtikelForm from './Form.vue';
import update from "../../mixins/update";

export default {
  mixins: [update],
  components: {
    ArtikelForm,
  },
  computed: {
    ...mapFields('artikel',{
      deleteLoading: 'isLoading',
      isLoading: 'isLoading',
      error: 'error',
      updated: 'updated',
      violations: 'violations'
    }),
    ...mapGetters('artikel', ['find'])
  },
  methods: {
    ...mapActions('artikel', {
      createReset: 'resetCreate',
      deleteItem: 'del',
      delReset: 'resetDelete',
      retrieve: 'load',
      update: 'update',
      updateReset: 'resetUpdate'
    }),
    doUpdate(){

    }
  }
};
</script>
