<template>
  <div style="height:100%;" id="top">
    <Banner />
    <Navbar />
    <div class="jumbotron  shadow main_jumbotron" id="main_jumbotron" style=" background-position: bottom;background-image: url('/room-designer.png') ;width:100%;height:auto;margin-bottom:0px;">
      <div class="row">
        <div class=" col d-flex justify-content-center pt-2">
        <h1 class="fw-bold text-primary fst-italic text-shadow-lg">PDM</h1>
        </div>
      </div>
      <div class="row">
        <div class=" col d-flex justify-content-center pt-2 fst-italic ">
          <p> Ihr&nbsp;</p>
          <p id="typewriter"></p><nobr><vue-typer :text=this.text ></vue-typer></nobr>
          <p>&nbsp;Partner</p>
          
        </div>
      </div>
      <div class="row">
        <div class=" col d-flex justify-content-center pt-2 ">
          &nbsp;
        </div>
      </div>
      <div id="body_container">
        <transition name="fade" mode="out-in" >
          <router-view/>
        </transition>
      </div>
    <Footer  class="footer" />
    </div>
  </div> 
</template>

<script>
var VueTyper = window.VueTyper.VueTyper
var VueTyper = require('vue-typer').VueTyper
import Navbar from './Navbar.vue';
import Banner from './Banner.vue';
import Card from './Card.vue';
import Footer from './Footer.vue';
export default {
  name: "App",
  components: {
     Navbar,
     Banner,
     Card,
     Footer,
     VueTyper
  },
  data () { 
    return {
      text: [
        'kompetenter','erfahrener','preiswerter','zuverlässiger','schneller','unkomplizierter','freundlicher'
      ]
    }
  },
  created () {
    // fetch the data when the view is created and the data is
    // already being observed
    this.fetchData()
  },
    computed: {
      currentRouteName() {
          return this.$route.name;
      }
  },

    methods: {
      scrollToElement() {
          // Use el.scrollIntoView() to instantly scroll to the element
                document.getElementById('Kontakt').scrollIntoView({
        behavior: "smooth"
      });
    },
    showBanner() {
      if (this.$route.name=='PDM') {
        return true;
      }
      return false;
    },
    fetchData () {
    }
  }
};
</script>