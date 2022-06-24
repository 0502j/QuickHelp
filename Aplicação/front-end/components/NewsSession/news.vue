<template>
  <span class="app">
    <navbar></navbar>
    <div class="topo-page">
     <v-img height="500px" src="/Noticias.png" alt=""></v-img>
    </div>

    <v-container>
      <div class="search">
        <v-row>
          <v-col cols="12">
            <v-text-field
              class="input-search"
              label="Solo"
              append-icon="mdi-file-find"
              solo
            >
            </v-text-field>
          </v-col>
        </v-row>
      </div>

        <div class="text" style="text-align: center">
          <h3>Notícias Relacionadas aos seus sintomas:</h3>
        </div>
      <div class="cards-news">
        <v-row>
          <v-col cols="4" v-for="itens in news.articles" :key="itens.source">
            <v-card class="mx-auto" style="width: 350px; height: 100%">
              <v-img
                :src=itens.urlToImage
                height="200px"
              ></v-img>

             <v-card-title class="title-card">{{itens.title}}</v-card-title>
              <v-card-subtitle>{{itens.content}}</v-card-subtitle>
              <v-spacer></v-spacer>
            </v-card>
          </v-col>
        </v-row>
      </div>
    </v-container>
  </span>
</template>

<script>
import Navbar from "../../layouts/Navbar/navbar.vue";
import { mapState, mapActions } from "vuex";
export default {
  components: {
    Navbar,
  },
  methods:{
    ...mapActions("News", ["getNews"])
  },
    computed: {
    ...mapState("News", ["news"]),
  },

  created() {
    this.getNews();
  }
};
</script>

<style>
.app {
  font-family: "Roboto";
  font-style: normal;
}
.informacoes {
  text-align: left;
  color: white;
  font-size: 20px;
  padding-top: 150px;
  padding-bottom: 150px;
  padding-right: 50px;
  padding-left: 50px;
}

.search {
  background: #e5e5e5;
  margin: 50px auto !important;
  width: 600px;
  border-radius: 30px;
}

.input-search {
  margin: 0 auto !important;
  width: 400px;
}
.cards-news{
    padding: 100px;
}

.title-card{
  font-size: 16px;
  line-height: 22px;
  white-space: normal;
  padding: 15px;
  margin-bottom: 20px;
}
</style>