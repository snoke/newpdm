<template>
  <div style="height:100%;">
    <Banner />
    <Navbar /><div class="jumbotron  shadow"  style="" >
      <div id="body_container">
    <router-view></router-view></div></div>
    <ContactTeaser  class="footer"  style="; "/>
  </div> 
</template>

<script>
import Navbar from './Navbar.vue';
import Card from './Card.vue';
import ContactTeaser from './ContactTeaser.vue';
export default {
  name: "App",
  components: {
     Navbar,
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
  methods: {
    fetchData () {
    }
  }
};
</script>