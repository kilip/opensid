<template>
  <CSidebar
    position="fixed"
    selfHiding="md"
    :unfoldable="sidebarUnfoldable"
    :visible="sidebarVisible"
    @visible-change="
      (event) =>
        $store.commit({
          type: 'ui/updateSidebarVisible',
          value: event,
        })
    "
  >
    <CSidebarBrand>
      <!--
      <CIcon
        customClassName="sidebar-brand-full"
        :icon="logoNegative"
        :height="35"
      />
      <CIcon
        customClassName="sidebar-brand-narrow"
        icon="sygnet"
        :height="35"
      />
      -->
      <div class="sidebar-brand-full">
        <img src="../assets/brand/opensid_logo.png" height="24"/>
        <span style="padding-left: 4px;">OpenSID</span>
      </div>
      <div class="sidebar-brand-narrow">
        <img src="../assets/brand/opensid_logo.png" height="24" />
      </div>
    </CSidebarBrand>
    <AppSidebarNav />
    <CSidebarToggler
      class="d-none d-lg-flex"
      @click="$store.commit('ui/toggleUnfoldable')"
    />
  </CSidebar>
</template>

<script>
import { computed } from 'vue'
import { useStore } from 'vuex'
import { AppSidebarNav } from './AppSidebarNav'
import { logoNegative } from '../assets/brand/logo-negative'
import { sygnet } from '../assets/brand/sygnet'
export default {
  name: 'AppSidebar',
  components: {
    AppSidebarNav,
  },
  setup() {
    const store = useStore()
    console.log('setup');
    return {
      logoNegative,
      sygnet,
      sidebarUnfoldable: computed(() => store.state.ui.sidebarUnfoldable),
      sidebarVisible: computed(() => store.state.ui.sidebarVisible),
    }
  },
}
</script>
