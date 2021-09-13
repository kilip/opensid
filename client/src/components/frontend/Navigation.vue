<template>
  <nav class="w-full py-4 border-t border-b bg-white pt-0 pb-0">
    <div class="w-full flex-grow sm:flex sm:items-center sm:w-auto">
      <strong class="pl-4 justify-start sm:justify-center">Hello World</strong>
      <div class="w-full container mx-auto flex flex-col sm:flex-row items-center sm:justify-end text-sm font-bold uppercase mt-0 px-6 py-2">
        <router-link class="hover:bg-gray-100 rounded py-2 px-4 mx-2" :to="{ name: 'Terbaru' }">Beranda</router-link>
        <router-link class="hover:bg-gray-100 rounded py-2 px-4 mx-2" :to="{ name: 'dashboard' }">Dashboard</router-link>
      </div>
    </div>
  </nav>
</template>
<script>
export default {
  name: 'Navigation',
  data(){
    return {
      open: false
    }
  }
}
</script>
