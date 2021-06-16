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
            </div>
            <div class="col-md d-flex justify-content-center">
                <span class="card-body text-center"><i style=";" class="fas fa-balance-scale"></i><router-link  to="/Impressum"> Impressum</router-link>
                    <p class="row card-text text-center"></p>
                </span>
            </div>
            <div class="col-md d-flex justify-content-center">
                <div class="card-body text-center justify-content-center text-primary">
                    <i style=";" class="fas fa-user text-dark"></i> PDM GmbH
                    <p class="row text-center justify-content-center text-dark" style="font-size:0.9rem;">Max Mustermann<br />
                    Pdmstraße 123<br />
                    12345 Pdmstadt</p>
                </div>
            </div>
            <div class="col-md d-flex justify-content-center">
                <div class="card-body text-center" ><i style=";" class="fas fa-copyright"></i> code & design
                    <p class="row card-text text-center"  style="font-size:0.9rem;"><a href="https://www.stefan-sander.online" target="_blank">Stefan Sander</a></p>
                </div>
            </div>
            <div class="col-md d-flex justify-content-center">
            </div>
        </div>
    </div>
</template>
<script>
import ContactForm from './ContactForm.vue';
  export default {
  name: "Footer",
  components: {
      ContactForm
  }
  };
</script>
