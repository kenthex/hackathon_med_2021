<template>
  <div class="app-main-layout">

    <Navbar />
    <Sidebar />

    <main class="app-content">
      <div class="app-page">
        <router-view />
    </div>
  </main>

<div class="fixed-action-btn">
  <router-link class="btn-floating btn-large blue" to="/categories">
    <i class="large material-icons">add</i>
  </router-link>
</div>
</div>
</template>

<script>
import Navbar from '@/components/app/Navbar'
import Sidebar from '@/components/app/Sidebar'

export default {
  name: 'main-layout',
  data: () => ({
   
  }),
  components: {
    Navbar, Sidebar
  }
}
</script>
