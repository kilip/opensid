<template>
  <div class="leading-normal tracking-normal" id="main-body">
    <div class="flex flex-wrap min-h-screen">

      <Sidebar/>

      <div class="w-full bg-gray-100 pl-0 lg:pl-64" :class="sideBarOpen ? 'overlay' : ''" id="main-content">

        <Navbar />

        <div class="p-6 bg-gray-100 mb-20">
          <router-view />
        </div>

        <Footer class="bottom-0"/>

      </div>
    </div>
  </div>
</template>

<script>
import Sidebar from '../components/dashboard/Sidebar'
import Navbar from '../components/dashboard/Navbar'
import Footer from '../components/dashboard/Footer'
import { mapFields } from "vuex-map-fields";
export default {
  computed: {
    ...mapFields('dashboard',{
      sideBarOpen: 'sideBarOpen'
    })
  },
  components: {
    Sidebar,
    Navbar,
    Footer
  }
}
</script>
