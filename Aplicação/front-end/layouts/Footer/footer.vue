<template>
  <div>
    <v-footer class="footer">
      <v-row justify="center" no-gutters>
        <v-col cols="10">
          <v-btn
            v-for="link in links"
            :key="link"
            color="white"
            text
            rounded
            class="my-2"
            :to="link"
          >
            <span style="color: white">{{ link }}</span>
          </v-btn>
        </v-col>
        <v-col cols="2">
          {{ new Date().getFullYear() }} — <strong>QuickHelp</strong>
        </v-col>
      </v-row>
    </v-footer>
  </div>
</template>

<script>
export default {
  methods: {},
  data: () => ({
    links: ["Sobre nós", "Serviços", "GitHub", "Contate-nos"],
  }),
};
</script>

<style scoped>
.footer {
  background-color: #283852 !important;
  color: white !important;
  height: 100px !important;
}
</style>