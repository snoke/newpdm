<template>
  <div style="height:100%;">
    <Banner />
    <Navbar />
    <div class="jumbotron  shadow">
      <div id="body_container">
        <transition name="fade" mode="out-in" >
          <router-view/>
        </transition>
      </div>
    </div>
    <ContactTeaser  class="footer" />
  </div> 
</template>

<script>
import Navbar from './Navbar.vue';
import Banner from './Banner.vue';
import Card from './Card.vue';
import ContactTeaser from './ContactTeaser.vue';
export default {
  name: "App",
  components: {
     Navbar,
     Banner,
     Card,
     ContactTeaser
  },
  data () { 
    return {
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