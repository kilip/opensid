<template>
  <div>
    <Navigation/>
    <router-view></router-view>
  </div>
</template>
<script>
import Navigation from "../components/dashboard/Navigation";
export default {
  components: {Navigation}
}
</script>
