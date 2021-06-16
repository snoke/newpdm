<template>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md d-flex justify-content-center">
                <ContactForm />
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md d-flex justify-content-center" >
                <div class=" pt-3 w-50" style="border-bottom:1px solid #CCC;">
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md d-flex justify-content-center">
                <div class="card-body text-center justify-content-center text-primary">
                    <i style=";" class="fas fa-user"></i> Max Mustermann
                    <p class="row text-center justify-content-center text-dark" style="font-size:0.8rem;">PDM GmbH<br />
                    Pdmstraße 123<br />
                    12345 Pdmstadt</p>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md d-flex justify-content-center">
                <span class="card-body text-center pt-0"><i style=";" class="fas fa-balance-scale"></i><router-link  to="/Impressum"> Impressum</router-link>
                    <p class="row card-text text-center"></p>
                </span>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md d-flex justify-content-center" >
                <div class=" pt-1 w-50" style="border-bottom:1px solid #CCC;">
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md d-flex justify-content-center">
                <div class="card-body text-center" ><i style=";" class="fas fa-copyright"></i> code & design
                    <p class="row card-text text-center"  style="font-size:0.8rem;"><a href="https://www.stefan-sander.online" target="_blank">stefan-sander</a></p>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import ContactForm from './ContactForm.vue';
  export default {
  name: "ContactTeaser",
  components: {
      ContactForm
  }
  };
</script>
