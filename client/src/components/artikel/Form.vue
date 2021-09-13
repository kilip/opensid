<template>
  <form @submit.prevent="handleSubmit(item)">
    <div class="form-group">
      <label
        for="artikel_judul"
        class="form-control-label">judul</label>
        <input
          id="artikel_judul"
          v-model="item.judul"
          :class="['form-control', !isValid('judul') ? 'is-invalid' : 'is-valid']"
          type="text"
          required="required"
          placeholder="">
      <div
        v-if="!isValid('judul')"
        class="invalid-feedback">{{ violations.judul }}</div>
    </div>
    <div class="form-group">
      <label
        for="artikel_isi"
        class="form-control-label">isi</label>
        <input
          id="artikel_isi"
          v-model="item.isi"
          :class="['form-control', !isValid('isi') ? 'is-invalid' : 'is-valid']"
          type="text"
          required="required"
          placeholder="">
      <div
        v-if="!isValid('isi')"
        class="invalid-feedback">{{ violations.isi }}</div>
    </div>
    <div class="form-group">
      <label
        for="artikel_enabled"
        class="form-control-label">enabled</label>
        <input
          id="artikel_enabled"
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
        for="artikel_kategori"
        class="form-control-label">kategori</label>
        <input
          id="artikel_kategori"
          v-model="item.kategori"
          :class="['form-control', !isValid('kategori') ? 'is-invalid' : 'is-valid']"
          type="text"
          placeholder="">
      <div
        v-if="!isValid('kategori')"
        class="invalid-feedback">{{ violations.kategori }}</div>
    </div>
    <div class="form-group">
      <label
        for="artikel_user"
        class="form-control-label">user</label>
        <input
          id="artikel_user"
          v-model="item.user"
          :class="['form-control', !isValid('user') ? 'is-invalid' : 'is-valid']"
          type="text"
          placeholder="">
      <div
        v-if="!isValid('user')"
        class="invalid-feedback">{{ violations.user }}</div>
    </div>
    <div class="form-group">
      <label
        for="artikel_gambar"
        class="form-control-label">gambar</label>
        <input
          id="artikel_gambar"
          v-model="item.gambar"
          :class="['form-control', !isValid('gambar') ? 'is-invalid' : 'is-valid']"
          type="text"
          placeholder="">
      <div
        v-if="!isValid('gambar')"
        class="invalid-feedback">{{ violations.gambar }}</div>
    </div>
    <div class="form-group">
      <label
        for="artikel_gambar1"
        class="form-control-label">gambar1</label>
        <input
          id="artikel_gambar1"
          v-model="item.gambar1"
          :class="['form-control', !isValid('gambar1') ? 'is-invalid' : 'is-valid']"
          type="text"
          placeholder="">
      <div
        v-if="!isValid('gambar1')"
        class="invalid-feedback">{{ violations.gambar1 }}</div>
    </div>
    <div class="form-group">
      <label
        for="artikel_gambar2"
        class="form-control-label">gambar2</label>
        <input
          id="artikel_gambar2"
          v-model="item.gambar2"
          :class="['form-control', !isValid('gambar2') ? 'is-invalid' : 'is-valid']"
          type="text"
          placeholder="">
      <div
        v-if="!isValid('gambar2')"
        class="invalid-feedback">{{ violations.gambar2 }}</div>
    </div>
    <div class="form-group">
      <label
        for="artikel_gambar3"
        class="form-control-label">gambar3</label>
        <input
          id="artikel_gambar3"
          v-model="item.gambar3"
          :class="['form-control', !isValid('gambar3') ? 'is-invalid' : 'is-valid']"
          type="text"
          placeholder="">
      <div
        v-if="!isValid('gambar3')"
        class="invalid-feedback">{{ violations.gambar3 }}</div>
    </div>
    <div class="form-group">
      <label
        for="artikel_dokumen"
        class="form-control-label">dokumen</label>
        <input
          id="artikel_dokumen"
          v-model="item.dokumen"
          :class="['form-control', !isValid('dokumen') ? 'is-invalid' : 'is-valid']"
          type="text"
          placeholder="">
      <div
        v-if="!isValid('dokumen')"
        class="invalid-feedback">{{ violations.dokumen }}</div>
    </div>
    <div class="form-group">
      <label
        for="artikel_linkDokumen"
        class="form-control-label">linkDokumen</label>
        <input
          id="artikel_linkDokumen"
          v-model="item.linkDokumen"
          :class="['form-control', !isValid('linkDokumen') ? 'is-invalid' : 'is-valid']"
          type="text"
          placeholder="">
      <div
        v-if="!isValid('linkDokumen')"
        class="invalid-feedback">{{ violations.linkDokumen }}</div>
    </div>
    <div class="form-group">
      <label
        for="artikel_bolehKomentar"
        class="form-control-label">bolehKomentar</label>
        <input
          id="artikel_bolehKomentar"
          v-model="item.bolehKomentar"
          :class="['form-control', !isValid('bolehKomentar') ? 'is-invalid' : 'is-valid']"
          type="checkbox"
          placeholder="">
      <div
        v-if="!isValid('bolehKomentar')"
        class="invalid-feedback">{{ violations.bolehKomentar }}</div>
    </div>
    <div class="form-group">
      <label
        for="artikel_slug"
        class="form-control-label">slug</label>
        <input
          id="artikel_slug"
          v-model="item.slug"
          :class="['form-control', !isValid('slug') ? 'is-invalid' : 'is-valid']"
          type="text"
          placeholder="">
      <div
        v-if="!isValid('slug')"
        class="invalid-feedback">{{ violations.slug }}</div>
    </div>
    <div class="form-group">
      <label
        for="artikel_hit"
        class="form-control-label">hit</label>
        <input
          id="artikel_hit"
          v-model="item.hit"
          :class="['form-control', !isValid('hit') ? 'is-invalid' : 'is-valid']"
          type="text"
          placeholder="">
      <div
        v-if="!isValid('hit')"
        class="invalid-feedback">{{ violations.hit }}</div>
    </div>
    <div class="form-group">
      <label
        for="artikel_headline"
        class="form-control-label">headline</label>
        <input
          id="artikel_headline"
          v-model="item.headline"
          :class="['form-control', !isValid('headline') ? 'is-invalid' : 'is-valid']"
          type="number"
          placeholder="">
      <div
        v-if="!isValid('headline')"
        class="invalid-feedback">{{ violations.headline }}</div>
    </div>
    <div class="form-group">
      <label
        for="artikel_createdAt"
        class="form-control-label">createdAt</label>
        <input
          id="artikel_createdAt"
          v-model="item.createdAt"
          :class="['form-control', !isValid('createdAt') ? 'is-invalid' : 'is-valid']"
          type="dateTime"
          placeholder="">
      <div
        v-if="!isValid('createdAt')"
        class="invalid-feedback">{{ violations.createdAt }}</div>
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
