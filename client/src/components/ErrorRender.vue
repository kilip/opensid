<template>
  <div class="text-red-500 w-full" v-if="errors.length">
    <ul>
      <li v-for="item in errors">
        {{ item }}
      </li>
    </ul>
  </div>

</template>
<script>
export default {
  props: {
    errors: {
      type: Array,
      required: true
    }
  }
}
</script>
