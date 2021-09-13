<template>
  <div class="w-full">
    <Navigation/>
    <router-view></router-view>
  </div>
</template>
<script>
import Navigation from "../components/frontend/Navigation";
export default {
  components: {
    Navigation
  }
}
</script>
