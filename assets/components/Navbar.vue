<template>
    <nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-light shadow">
      <div class="container-fluid">
        <div  @click="scrollToElement" ><router-link class="navbar-brand fw-bold text-primary fst-italic text-shadow-sm" to="/">PDM</router-link></div> 
                <a href="tel:#"  class="nav-link text-secondary" ><i style=";" :class='"fas fa-phone"'></i> 0190-666666</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="row w-100">
            <div class="col">
              <ul class="navbar-nav">
                <li class="nav-item" v-for="e of items">
        <div  @click="scrollToElement" >
                  <router-link  class="nav-link" :to=e.target><i style=";" :class='"fas fa-"+e.icon'></i> {{e.name}}</router-link>
          </div>
                </li>
              </ul>
            </div>
            <div class="col-auto">
              <ul class="navbar-nav">
                 <li class="nav-item divider"></li>

                <li class="nav-item">
                  <a @click="scrollToKontakt" class="nav-link link" ><i style=";" :class='"fas fa-envelope"'></i> Kontakt</a>
                </li>
              </ul>
          </div>
          </div>
        </div>
      </div>
    </nav>
</template>

<script>
  export default {
    name: 'Navbar',
    data() {
      return {
        items: [
         {name:'Umzug',target:'/Umzug',icon:'truck-loading'} ,
         {name:'Transport',target:'/Transport',icon:'shipping-fast'} ,
         {name:'Entsorgung',target:'/Entsorgung',icon:'dumpster'} ,
        ]
      };
    },
    methods: {
      scrollToElement() {
          // Use el.scrollIntoView() to instantly scroll to the element
                document.getElementById('main_jumbotron').scrollIntoView({
        behavior: "smooth"
      });
      },
      scrollToKontakt() {
          // Use el.scrollIntoView() to instantly scroll to the element
                document.getElementById('Kontakt').scrollIntoView({
        behavior: "smooth"
      });
      }
    },
    computed: {
    currentRouteName() {
        return this.$route.name;
    }
}
  };
</script>