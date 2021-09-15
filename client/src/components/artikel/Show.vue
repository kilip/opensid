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
            <th scope="row">judul</th>
            <td>{{ item['judul'] }}</td>
          </tr>
          <tr>
            <th scope="row">isi</th>
            <td>{{ item['isi'] }}</td>
          </tr>
          <tr>
            <th scope="row">enabled</th>
            <td>{{ item['enabled'] }}</td>
          </tr>
          <tr>
            <th scope="row">kategori</th>
            <td>{{ item['kategori'] }}</td>
          </tr>
          <tr>
            <th scope="row">user</th>
            <td>{{ item['user'] }}</td>
          </tr>
          <tr>
            <th scope="row">gambar</th>
            <td>{{ item['gambar'] }}</td>
          </tr>
          <tr>
            <th scope="row">gambar1</th>
            <td>{{ item['gambar1'] }}</td>
          </tr>
          <tr>
            <th scope="row">gambar2</th>
            <td>{{ item['gambar2'] }}</td>
          </tr>
          <tr>
            <th scope="row">gambar3</th>
            <td>{{ item['gambar3'] }}</td>
          </tr>
          <tr>
            <th scope="row">dokumen</th>
            <td>{{ item['dokumen'] }}</td>
          </tr>
          <tr>
            <th scope="row">linkDokumen</th>
            <td>{{ item['linkDokumen'] }}</td>
          </tr>
          <tr>
            <th scope="row">bolehKomentar</th>
            <td>{{ item['bolehKomentar'] }}</td>
          </tr>
          <tr>
            <th scope="row">slug</th>
            <td>{{ item['slug'] }}</td>
          </tr>
          <tr>
            <th scope="row">hit</th>
            <td>{{ item['hit'] }}</td>
          </tr>
          <tr>
            <th scope="row">headline</th>
            <td>{{ item['headline'] }}</td>
          </tr>
        </tbody>
      </table>
    </div>

    <router-link
      :to="{ name: 'ArtikelList' }"
      class="btn btn-primary">
      Back to list
    </router-link>
    <router-link
      v-if="item"
      :to="{ name: 'ArtikelUpdate', params: { id: item['@id'] } }"
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
    ...mapFields('artikel/del', {
      deleteError: 'error',
    }),
    ...mapFields('artikel/show', {
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
      del: 'artikel/del/del',
      reset: 'artikel/show/reset',
      retrieve: 'artikel/show/retrieve',
    }),

    deleteItem (item) {
      if (window.confirm('Are you sure you want to delete this item?')) {
        this.del(item).then(() => this.$router.push({ name: 'ArtikelList' }));
      }
    },
  },
};
</script>
