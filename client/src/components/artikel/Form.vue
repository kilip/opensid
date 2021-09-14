<template>
  <form @submit.prevent="handleSubmit(item)">
    <div class="form-group">
      <label
        for="artikel_judul"
        class="block">judul</label>
      <input
        id="artikel_judul"
        v-model="item['judul']"
        type="text"
        placeholder="judul artikel">
      <span class="text-red-500" v-if="judulErrors">
        {{ judulErrors.length ? judulErrors:"" }}
      </span>
    </div>
    <div class="form-group">
      <label
        for="artikel_isi"
        class="form-control-label">isi</label>
      <input
        id="artikel_isi"
        v-model="item.isi"
        type="text"
        required="required"
        placeholder="">
      <div
        class="invalid-feedback">{{ violations.isi }}</div>
    </div>
    <div class="form-group">
      <label
        for="artikel_enabled"
        class="form-control-label">enabled</label>
      <input
        id="artikel_enabled"
        v-model="item.enabled"
        type="checkbox"
        placeholder="">
      <div
        class="invalid-feedback">{{ violations.enabled }}</div>
    </div>
    <div class="form-group">
      <label
        for="artikel_bolehKomentar"
        class="form-control-label">bolehKomentar</label>
      <input
        id="artikel_bolehKomentar"
        v-model="item.bolehKomentar"
        type="checkbox"
        placeholder="">
      <div
        class="invalid-feedback">{{ violations.bolehKomentar }}</div>
    </div>
  </form>
</template>

<script>
import has from 'lodash/has';
import { validationMixin } from 'vuelidate';
import { required } from 'vuelidate/lib/validators';

export default {
  name: 'ArtikelForm',
  mixins: [validationMixin],
  components: {
  },
  props: {
    values: {
      type: Object,
      required: true
    },
    errors: {
      type: Object,
      default: () => {}
    },

    initialValues: {
      type: Object,
      default: () => {}
    }
  },
  mounted() {
  },
  data: () => ({
    judul: null,
    isi: null,
    enabled: null,
    bolehKomentar: null,
  }),
  computed: {

    // eslint-disable-next-line
    item() {
      return this.initialValues || this.values;
    },

    judulErrors() {
      const errors = [];

      if (!this.$v.item.judul.$dirty) return errors;

      has(this.violations, 'judul') && errors.push(this.violations.judul);

      !this.$v.item.judul.required && errors.push('Field is required');

      return errors;
    },
    isiErrors() {
      const errors = [];

      if (!this.$v.item.isi.$dirty) return errors;

      has(this.violations, 'isi') && errors.push(this.violations.isi);

      !this.$v.item.isi.required && errors.push('Field is required');

      return errors;
    },
    enabledErrors() {
      const errors = [];

      if (!this.$v.item.enabled.$dirty) return errors;

      has(this.violations, 'enabled') && errors.push(this.violations.enabled);


      return errors;
    },
    violations() {
      console.log(this.errors);
      return this.errors || {};
    }
  },
  methods: {
  },
  validations: {
    item: {
      judul: {
        required,
      },
      isi: {
        required,
      },
      enabled: {
      },
      bolehKomentar: {
      },
    }
  }
};

</script>
