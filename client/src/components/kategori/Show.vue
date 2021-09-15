<template>
  <div>
    <h1>Show {{ item && item['@id'] }}</h1>

    <div
      v-if="isLoading"
      class="alert alert-info"
      role="status">Loading...</div>
    <div
      v-if="error"
      class="alert alert-danger"
      role="alert">
      <span
        class="fa fa-exclamation-triangle"
        aria-hidden="true">{{ error }}</span>
    </div>
    <div
      v-if="deleteError"
      class="alert alert-danger"
      role="alert">
      <span
        class="fa fa-exclamation-triangle"
        aria-hidden="true">{{ deleteError }}</span>
    </div>
    <div
      v-if="item"
      class="table-responsive">
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th>Field</th>
            <th>Value</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">nama</th>
            <td>{{ item['nama'] }}</td>
          </tr>
          <tr>
            <th scope="row">tipe</th>
            <td>{{ item['tipe'] }}</td>
          </tr>
          <tr>
            <th scope="row">urut</th>
            <td>{{ item['urut'] }}</td>
          </tr>
          <tr>
            <th scope="row">enabled</th>
            <td>{{ item['enabled'] }}</td>
          </tr>
          <tr>
            <th scope="row">parent</th>
            <td>{{ item['parent'] }}</td>
          </tr>
          <tr>
            <th scope="row">slug</th>
            <td>{{ item['slug'] }}</td>
          </tr>
        </tbody>
      </table>
    </div>

    <router-link
      :to="{ name: 'KategoriList' }"
      class="btn btn-primary">
      Back to list
    </router-link>
    <router-link
      v-if="item"
      :to="{ name: 'KategoriUpdate', params: { id: item['@id'] } }"
      class="btn btn-warning">
      Edit
    </router-link>
    <button
      class="btn btn-danger"
      @click="deleteItem(item)">Delete</button>
  </div>
</template>

<script>
import { mapActions } from 'vuex';
import { mapFields } from 'vuex-map-fields';

export default {
  computed: {
    ...mapFields('kategori/del', {
      deleteError: 'error',
    }),
    ...mapFields('kategori/show', {
      error: 'error',
      isLoading: 'isLoading',
      item: 'retrieved',
    }),
  },

  beforeDestroy () {
    this.reset();
  },

  created () {
    this.retrieve(decodeURIComponent(this.$route.params.id));
  },

  methods: {
    ...mapActions({
      del: 'kategori/del/del',
      reset: 'kategori/show/reset',
      retrieve: 'kategori/show/retrieve',
    }),

    deleteItem (item) {
      if (window.confirm('Are you sure you want to delete this item?')) {
        this.del(item).then(() => this.$router.push({ name: 'KategoriList' }));
      }
    },
  },
};
</script>
