<template>
    <div class="arrows">
        <div class="row d-flex justify-content-center ">
            <div class="col-md d-flex justify-content-center"></div>
           <!-- <router-link v-if="backButton" class="text-primary link" to="/"><i style="float:left;" :class='"mt-2 fas fa-arrow-left  text-primary"'></i></router-link></div>-->
            <div class="col-md d-flex justify-content-center"><a class="text-primary link" @click="scrollToElement"><i class="fas fa-arrow-up"></i></a></div>
            <div class="col-md d-flex justify-content-center"></div>
           <!-- <div class="col-md d-flex justify-content-center"><a class="text-primary link" @click="historyForward"><i class="fas fa-arrow-right"></i></a></div>-->
      </div>
    </div>
</template>
<script>
export default {
  name: "Arrows",
  components: {
  },
    computed: {
        backButton() {
            // Use el.scrollIntoView() to instantly scroll to the element
            return (this.$router.currentRoute.path!='/');
        }
    },

    updated: {
        backButton() {
            // Use el.scrollIntoView() to instantly scroll to the element
            return (this.$router.currentRoute.path!='/');
        }
  },
  created () {
  },
    methods: {
        historyBack() {
            // Use el.scrollIntoView() to instantly scroll to the element
             this.$router.back();
        },
        historyForward() {
            // Use el.scrollIntoView() to instantly scroll to the element
             window.history.forward();
        },
        scrollToElement() {
            // Use el.scrollIntoView() to instantly scroll to the element
            document.getElementById('top').scrollIntoView({
                behavior: "smooth"
            });
        }
    },
};
</script>