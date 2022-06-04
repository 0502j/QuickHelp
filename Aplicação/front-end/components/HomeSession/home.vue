<template>
  <span id="app">
    <navbar></navbar>
    <div
      class="desk-home"
      v-if="
        this.$vuetify.breakpoint.name !== 'xs' &&
        this.$vuetify.breakpoint.name !== 'sm'
      "
    >
      <home-desk></home-desk>
    </div>

    <div class="mobile-home" v-else></div>
    <footer-site></footer-site>
  </span>
</template>

<script>
import HomeDesk from "@/components/HomeSession/desk.vue";
import navbar from "@/layouts/Navbar/navbar.vue";
import footerSite from "@/layouts/Footer/footer.vue";
export default {
  components: {
    navbar,
    footerSite,
    HomeDesk,
  },
};
</script>

<style scoped>
#app {
  font-family: "Roboto";
  font-style: normal;
}
</style>
