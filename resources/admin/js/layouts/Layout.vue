<template>
  <div class="min-h-screen flex-col">
    <side-bar></side-bar>
    <main class="app-main relative ml-[210px]">
      <nav-bar></nav-bar>
      <slot></slot>
    </main>
  </div>
</template>
<script>
import LayoutHeader from './components/Header'
import SideBar from './components/SideBar'
import NavBar from './components/NavBar'
export default {
  components: {
    NavBar,
    LayoutHeader,
    SideBar,
  },
}
</script>
<style lang="scss" scoped>
.app-main {
}
</style>
