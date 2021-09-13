<template>
  <div>
    <h1>artikel List</h1>

    <div
      v-if="isLoading"
      class="alert alert-info">Loading...</div>
    <div
      v-if="deletedItem"
      class="alert alert-success">{{ deletedItem['@id'] }} deleted.</div>
    <div
      v-if="error"
      class="alert alert-danger">{{ error }}</div>

    <p>
      <router-link
        :to="{ name: 'ArtikelCreate' }"
        class="btn btn-primary">Create</router-link>
    </p>

    <table class="table table-responsive table-striped table-hover">
      <thead>
        <tr>
          <th>Id</th>
          <th>judul</th>
          <th>isi</th>
          <th>enabled</th>
          <th>kategori</th>
          <th>user</th>
          <th>gambar</th>
          <th>gambar1</th>
          <th>gambar2</th>
          <th>gambar3</th>
          <th>dokumen</th>
          <th>linkDokumen</th>
          <th>bolehKomentar</th>
          <th>slug</th>
          <th>hit</th>
          <th>headline</th>
          <th colspan="2"></th>
        </tr>
      </thead>
      <tbody>
        <tr
          v-for="item in items"
          :key="item['@id']">
          <th scope="row">
            <router-link
              v-if="item"
              :to="{name: 'ArtikelShow', params: { id: item['@id'] }}">
              {{ item['@id'] }}
            </router-link>
          </th>
        <td>
            {{ item['judul'] }}
        </td>
        <td>
            {{ item['isi'] }}
        </td>
        <td>
            {{ item['enabled'] }}
        </td>
        <td>
            {{ item['kategori'] }}
        </td>
        <td>
            {{ item['user'] }}
        </td>
        <td>
            {{ item['gambar'] }}
        </td>
        <td>
            {{ item['gambar1'] }}
        </td>
        <td>
            {{ item['gambar2'] }}
        </td>
        <td>
            {{ item['gambar3'] }}
        </td>
        <td>
            {{ item['dokumen'] }}
        </td>
        <td>
            {{ item['linkDokumen'] }}
        </td>
        <td>
            {{ item['bolehKomentar'] }}
        </td>
        <td>
            {{ item['slug'] }}
        </td>
        <td>
            {{ item['hit'] }}
        </td>
        <td>
            {{ item['headline'] }}
        </td>
          <td>
            <router-link
              :to="{name: 'ArtikelShow', params: { id: item['@id'] }}">
              <span
                class="fa fa-search"
                aria-hidden="true"></span>
              <span class="sr-only">Show</span>
            </router-link>
          </td>
          <td>
            <router-link :to="{name: 'ArtikelUpdate', params: { id: item['@id'] }}">
              <span
                class="fa fa-pencil"
                aria-hidden="true"></span>
              <span class="sr-only">Edit</span>
            </router-link>
          </td>
        </tr>
      </tbody>
    </table>

    <nav aria-label="Page navigation" v-if="view">
      <router-link
        :to="view['hydra:first'] ? view['hydra:first'] : 'ArtikelContactList'"
        :class="{ disabled: !view['hydra:previous'] }"
        class="btn btn-primary">
        <span aria-hidden="true">&lArr;</span> First
      </router-link>
      &nbsp;
      <router-link
        :to="!view['hydra:previous'] || view['hydra:previous'] === view['hydra:first'] ? 'ArtikelList' : view['hydra:previous']"
        :class="{ disabled: !view['hydra:previous'] }"
        class="btn btn-primary">
        <span aria-hidden="true">&larr;</span> Previous
      </router-link>

      <router-link
        :to="view['hydra:next'] ? view['hydra:next'] : '#'"
        :class="{ disabled: !view['hydra:next'] }"
        class="btn btn-primary">
        Next <span aria-hidden="true">&rarr;</span>
      </router-link>

      <router-link
        :to="view['hydra:last'] ? view['hydra:last'] : '#'"
        :class="{ disabled: !view['hydra:next'] }"
        class="btn btn-primary">
        Last <span aria-hidden="true">&rArr;</span>
      </router-link>
    </nav>
  </div>
</template>

<script>
import { mapActions } from 'vuex';
import { mapFields } from 'vuex-map-fields';

export default {
  computed: {
      ...mapFields('artikel/del', {
          deletedItem: 'deleted',
      }),
      ...mapFields('artikel/list', {
          error: 'error',
          items: 'items',
          isLoading: 'isLoading',
          view: 'view',
      }),
  },

  mounted() {
    this.getPage();
  },

  methods: {
    ...mapActions({
      getPage: 'artikel/list/default',
    }),
  },
};
</script>
