<template>
  <span>
    <v-row class="banner">
      <v-col>
        <v-img src="/banner-home.jpg"></v-img>
      </v-col>
    </v-row>

    <div style="background-color: #f1f1f1">
      <v-container>
        <v-row
          align-content="center"
          style="max-width: 600px; margin: 10px auto"
        >
          <v-col align="center" cols="4">
            <v-icon style="font-size: 60px" large color="green darken-2">
              mdi-hospital
            </v-icon>
          </v-col>

          <v-col align="center" cols="4">
            <v-icon
              style="font-size: 60px"
              large
              color="green darken-2"
              size="100px"
            >
              mdi-timer
            </v-icon>
          </v-col>

          <v-col align="center" cols="4">
            <v-icon
              style="font-size: 60px"
              large
              color="green darken-2"
              size="100px"
            >
              mdi-hospital
            </v-icon>
          </v-col>
        </v-row>
        <br />
        <v-row>
          <v-col cols="6">
            <v-card class="card"> </v-card>
          </v-col>

          <v-col cols="6">
            <div class="txt-card">
              <span
                >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem
                ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum
                dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor
                sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit
                amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet,
                consectetur adipiscing elit.
              </span>
            </div>
          </v-col>
        </v-row>
      </v-container>
    </div>
    <div style="background-color: #fcfcfc">
      <v-container>
        <div style="padding: 50px">
          <v-row>
            <v-col cols="12" style="text-align: center">
              <span style="font-size: 22px"
                >Repositório dos criadores e idealizadores deste projeto:</span
              >
            </v-col>
          </v-row>

          <v-row>
            <v-col cols="3">
              <a
                class="txt-title-git"
                href="https://github.com/Karen-HerOAcEDucK"
                target="_blank"
              >
                <v-card class="card-git">
                  <v-img
                    src="/git-hub.png"
                    style="width: 150px; margin: 0 auto"
                  ></v-img
                  ><br />
                  <span class="name-git"> Karen Letícia</span>
                </v-card>
              </a>
            </v-col>
            <v-col cols="3">
              <a
                class="txt-title-git"
                href="https://github.com/JonatasTCoelho"
                target="_blank"
              >
                <v-card class="card-git">
                  <v-img
                    src="/git-hub.png"
                    style="width: 150px; margin: 0 auto"
                  ></v-img>
                  <br />
                  <span class="name-git">Jônatas Tonin Coelho</span>
                </v-card>
              </a>
            </v-col>
            <v-col cols="3">
              <a
                class="txt-title-git"
                href="https://github.com/0502j"
                target="_blank"
              >
                <v-card class="card-git">
                  <v-img
                    src="/git-hub.png"
                    style="width: 150px; margin: 0 auto"
                  ></v-img
                  ><br />
                  <span class="name-git">Jamile de Souza</span>
                </v-card>
              </a>
            </v-col>
            <v-col cols="3">
              <a
                class="txt-title-git"
                href="https://github.com/CarolinyFranca"
                target="_blank"
              >
                <v-card class="card-git">
                  <v-img
                    src="/git-hub.png"
                    style="width: 150px; margin: 0 auto"
                  ></v-img
                  ><br />
                  <span class="name-git" >Caroliny França</span>
                </v-card>
              </a>
            </v-col>
          </v-row>
        </div>
      </v-container>
    </div>
     <footer-site></footer-site>
  </span>
</template>

<script>
export default {

}
</script>

<style scoped>
.card {
  height: 500px;
  width: 450px;
  background-color: #77b6fb;
  border-top-left-radius: 50px;
  border-bottom-right-radius: 50px;
  transform: matrix(-1, 0, 0, 1, 0, 0);
}
.card:hover {
  background-color: #b3d5fa;
  transition: 0.5s;
}
.txt-card {
  height: 500px;
  margin-top: 20%;
}
.txt-card span {
  font-size: 22px;
}
.card-git {
  height: 300px;
  background-color: #77b6fb;
  border-radius: 30px;
  padding: 50px !important;
  text-align: center !important;
}
.card-git:hover {
  background-color: #b3d5fa;
  border-radius: 50px;
  transition: 0.5s;
}
.txt-title-git {
  font-size: 18px;
  text-decoration: none !important;
  width: 100% !important;
}
.name-git{

}

@media screen and (max-width: 1263px) {
    .card-git {
  width: 400px !important;
}
.txt-title-git {
  word-wrap: break-word !important; 
}
}
</style>