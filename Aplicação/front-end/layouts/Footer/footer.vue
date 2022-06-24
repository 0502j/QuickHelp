<template>
  <div>
    <v-footer class="footer">
      <v-row justify="center" no-gutters>
        <v-col cols="10">
          <v-btn
            color="white"
            text
            rounded
            class="my-2"
            href="/sobre-nos"
          >
            <span style="color: white">Sobre Nós</span>
          </v-btn>
          <v-btn
            color="white"
            text
            rounded
            class="my-2"
            href="/faq"
          >
            <span style="color: white">FAQ</span>
          </v-btn>
          <v-btn
            color="white"
            text
            rounded
            class="my-2"
            href="/github.com/Karen-HerOAcEDucK/fatec-projects-interdisciplinary-3-sem"
          >
            <span style="color: white">GitHub</span>
          </v-btn>
          <v-btn
            color="white"
            text
            rounded
            class="my-2"
            href="/contato"
          >
            <span style="color: white">Contate-nos</span>
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
    links: ["Sobre nós", "FAQ", "GitHub", "Contate-nos"],
  }),
};
</script>

<style scoped>
.footer {
  background-color: #283852 !important;
  color: white !important;
  height: 80px !important;
}
</style>