<template>
  <form @submit.prevent="handleSubmit(item)">
    <div class="form-group">
      <label
        for="kategori_nama"
        class="form-control-label">nama</label>
        <input
          id="kategori_nama"
          v-model="item.nama"
          :class="['form-control', !isValid('nama') ? 'is-invalid' : 'is-valid']"
          type="text"
          placeholder="">
      <div
        v-if="!isValid('nama')"
        class="invalid-feedback">{{ violations.nama }}</div>
    </div>
    <div class="form-group">
      <label
        for="kategori_tipe"
        class="form-control-label">tipe</label>
        <input
          id="kategori_tipe"
          v-model="item.tipe"
          :class="['form-control', !isValid('tipe') ? 'is-invalid' : 'is-valid']"
          type="number"
          placeholder="">
      <div
        v-if="!isValid('tipe')"
        class="invalid-feedback">{{ violations.tipe }}</div>
    </div>
    <div class="form-group">
      <label
        for="kategori_urut"
        class="form-control-label">urut</label>
        <input
          id="kategori_urut"
          v-model="item.urut"
          :class="['form-control', !isValid('urut') ? 'is-invalid' : 'is-valid']"
          type="number"
          placeholder="">
      <div
        v-if="!isValid('urut')"
        class="invalid-feedback">{{ violations.urut }}</div>
    </div>
    <div class="form-group">
      <label
        for="kategori_enabled"
        class="form-control-label">enabled</label>
        <input
          id="kategori_enabled"
          v-model="item.enabled"
          :class="['form-control', !isValid('enabled') ? 'is-invalid' : 'is-valid']"
          type="checkbox"
          placeholder="">
      <div
        v-if="!isValid('enabled')"
        class="invalid-feedback">{{ violations.enabled }}</div>
    </div>
    <div class="form-group">
      <label
        for="kategori_parent"
        class="form-control-label">parent</label>
        <input
          id="kategori_parent"
          v-model="item.parent"
          :class="['form-control', !isValid('parent') ? 'is-invalid' : 'is-valid']"
          type="number"
          placeholder="">
      <div
        v-if="!isValid('parent')"
        class="invalid-feedback">{{ violations.parent }}</div>
    </div>
    <div class="form-group">
      <label
        for="kategori_slug"
        class="form-control-label">slug</label>
        <input
          id="kategori_slug"
          v-model="item.slug"
          :class="['form-control', !isValid('slug') ? 'is-invalid' : 'is-valid']"
          type="text"
          placeholder="">
      <div
        v-if="!isValid('slug')"
        class="invalid-feedback">{{ violations.slug }}</div>
    </div>

    <button
      type="submit"
      class="btn btn-success">Submit</button>
  </form>
</template>

<script>
  import { find, get, isUndefined } from 'lodash';
  import { mapFields } from 'vuex-map-fields';
  import { mapActions } from 'vuex';

  export default {
  props: {
    handleSubmit: {
      type: Function,
      required: true,
    },

    values: {
      type: Object,
      required: true,
    },

    errors: {
      type: Object,
      default: () => {},
    },

    initialValues: {
      type: Object,
      default: () => {},
    }
  },

  mounted() {
  },

  computed: {

    // eslint-disable-next-line
    item() {
      return this.initialValues || this.values;
    },

    violations() {
      return this.errors || {};
    },
  },

  methods: {
    ...mapActions({
    }),

    isSelected(collection, id) {
      return find(this.item[collection], ['@id', id]) !== undefined;
    },

    isValid(key) {
      return isUndefined(get(this.violations, key));
    },
  },
};
</script>
