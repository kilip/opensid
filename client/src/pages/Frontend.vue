<template>
  <div class="w-full">
    <Navigation
      :config="config"
    />
    <router-view></router-view>
  </div>
</template>
<script>
import Navigation from "../components/frontend/Navigation";
import config from "../mixins/config";

export default {
  mixins: [config],
  components: {
    Navigation
  }
}
</script>
